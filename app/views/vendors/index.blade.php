@extends('vendors.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
    Manage Vendors
    @stop


            <!--========================================================
                          CONTENT
=========================================================-->
@section('content2')
    <section id="content">

        <div class = "user_logo">
            <div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                Manage Vendors
            </div>
        </div>


        <!--========================================================
                                     Data Table
            =========================================================-->
        <center style="margin-top: 7%;">
            <center>{{ link_to_route('vendors.create', 'Register Vendor', '', ['class' => 'btn_1'])}}</center>
            <br>
            <table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
                <thead>
                <tr>
                    <th style="width: 20%">Vendor Name</th>
                    <th>Vendor ID</th>
                     <th>Vendor Type</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th style="width: 25%">Manage</th>
                </tr>
                </thead>

                <tbody>


                @foreach($vendors as $vendor)
                    <tr>
                        <td>{{{ $vendor->name }}}</td>
                        <td>{{{ $vendor->vendor_id }}}</td>
                        <td>{{{ $vendor->vendor_type }}}</td>
                        <td>{{{ $vendor->email }}}</td>
                        <td>{{{ $vendor->mobile }}}</td>
                        <td>
                            {{ link_to_route('ven.show', 'View', [$vendor->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}

                            {{ link_to_route('vend.edit', 'Edit', [$vendor->id], ['class' => 'data_table_btn'])}}

                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </center>


@stop

