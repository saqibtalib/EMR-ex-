@extends('balancesheets.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
    Manage Balancesheets
    @stop


            <!--========================================================
                          CONTENT
=========================================================-->
@section('content2')
    <section id="content">

        <div class = "user_logo">
            <div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                Manage Balancesheets
            </div>
        </div>


        <!--========================================================
                                     Data Table
            =========================================================-->
        <center style="margin-top: 7%;">
            <center>{{ link_to_route('balancesheet.create', 'Create Balancesheet', '', ['class' => 'btn_1'])}}</center>
            <br>
            <table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
                <thead>
                <tr>
                     <th>Balancesheet ID</th>
                    <th>Vendor Name</th>
                     <th>Total Amount</th>
                    <th>Payable Amount</th>
                    <th>Receivable Amount</th>
                    <th style="width: 25%">Manage</th>
                </tr>
                </thead>

                <tbody>


                @foreach($balancesheet as $balancesheet)
                    <tr>
                        <td>{{{ $balancesheet->balancesheet_id }}}</td>
                        {{--<td>{{{ $balancesheet->vendor->name}}}</td>--}}
                        <td>{{{  $balancesheet->vendor['name']}}}</td>
                        <td>{{{ $balancesheet->total_amount }}}</td>
                        <td>{{{ $balancesheet->payable_amount }}}</td>
                        <td>{{{ $balancesheet->receivable_amount }}}</td>
                        <td>
                            {{ link_to_route('balancesheet.show', 'View', [$balancesheet->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}

                            {{ link_to_route('balancesheet.edit', 'Edit', [$balancesheet->id], ['class' => 'data_table_btn'])}}
                             {{--{{ link_to_route('balancesheet.destroy', 'Delete', [$balancesheet->id], ['class' => 'data_table_btn'])}}--}}
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </center>


@stop

