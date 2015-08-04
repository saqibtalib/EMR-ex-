@extends('dispatch_list.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
     Dispatch List Details
    @stop


            <!--========================================================
                          CONTENT
=========================================================-->
@section('content1')
    <section id="content">

        <div class = "user_logo">
            <div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                Dispatch List Details
            </div>
        </div>
        <br><br><br>
        @stop

        @section('content2')

            <center>
                <div id="regForm" style="border: 4px solid #129894; width: 800px; height: 100%; background-color: #EBEBEB">
                    <table class="row_border" style=" border-radius: 10px; margin: 5%;" width="621" height="720">
                        <tr>
                            <td width="272" height="55"><label>       Medicine Name*</label></td>
                            <td width="333"><label>{{{ $dispatchlist->name }}}</label></td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>      Required Amount*</label></td>
                            <td width="333"><label>{{{  $dispatchlist->req_amount}}}</label></td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>    Total Charges*</label></td>
                            <td width="333"><label>{{{   $dispatchlist->total_amount }}}</label></td>
                        </tr>
                        <tr>
                            <td width="272"><label>Additional Info:</label></td>
                            <td width="333"><label><div style="width: 333px; word-wrap: break-word">{{{ $dispatchlist->note }}}</div></label></td>
                        </tr>

                    </table>
                    <center>
                        <section style="margin-bottom: 10%">
                            <input type="submit" onclick="back()" value="Back" class="submit" />
                        </section>
                    </center>
                </div>
            </center>

            <br><br>


@stop