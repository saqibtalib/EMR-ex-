@extends('dispatch_list.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
    Manage Dispatchlist
    @stop


            <!--========================================================
                          CONTENT
=========================================================-->
@section('content2')
    <section id="content">

        <div class = "user_logo">
            <div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                Manage Dispatchlist
            </div>
        </div>


        <!--========================================================
                                     Data Table
            =========================================================-->
        <center style="margin-top: 7%;">
{{--            <center>{{ link_to_route('dispatchlist.create', 'Create Dispatchlist', '', ['class' => 'btn_1'])}}</center>--}}
            <br>
            <table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="90%">
                <thead>
                <tr>
                    <th>Dispatchlist ID</th>
                    <th>Medicine Name</th>
                    <th>Required Amount</th>
                    <th>Total Charges</th>
                    <th style="width: 25%">Manage</th>
                </tr>
                </thead>

                <tbody>


                @foreach($dispatch as $dispatchlist)
                    <tr>
                        <td>{{{ $dispatchlist->dispatch_list_id }}}</td>
                        <td>{{{ $dispatchlist->name }}}</td>
                        <td>{{{ $dispatchlist->req_amount }}}</td>
                        <td>{{{ $dispatchlist->total_amount }}}</td>
                        <td>

                                {{ link_to_route('dispatchlist.show', 'View', [$dispatchlist->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}



                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </center>


@stop

