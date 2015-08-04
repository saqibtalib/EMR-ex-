@extends('bills.layouts.master')
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
                Manage Bills
            </div>
        </div>


        <!--========================================================
                                     Data Table
            =========================================================-->
        <center style="margin-top: 7%;">
            <center>{{ link_to_route('bill.create', 'Create Bill', '', ['class' => 'btn_1'])}}</center>
            <br>
            <table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
                <thead>
                <tr>
                     <th>Bill ID</th>
                    <th>Patient Name</th>
                     <th>Total Amount</th>
                    <th style="width: 25%">Manage</th>
                </tr>
                </thead>

                <tbody>


                @foreach($bill as $bill)
                    <tr>
                        <td>{{{ $bill->bill_id }}}</td>
                        {{--<td>{{{ $balancesheet->vendor->name}}}</td>--}}
                        <td>{{{  $bill->patient['name']}}}</td>
                        <td>{{{ $bill->total_charges }}}</td>
                        <td>
                            {{ link_to_route('bill.show', 'View', [$bill->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}

                            {{ link_to_route('bill.edit', 'Edit', [$bill->id], ['class' => 'data_table_btn'])}}

                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </center>


@stop

