@extends('bills.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
    Bill Details
    @stop


            <!--========================================================
                          CONTENT
=========================================================-->
@section('content1')
    <section id="content">

        <div class = "user_logo">
            <div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
               Bill Details
            </div>
        </div>
        <br><br><br>
        @stop

        @section('content2')

            <center>
                <div id="regForm" style="border: 4px solid #129894; width: 800px; height: 100%; background-color: #EBEBEB">
                    <table class="row_border" style=" border-radius: 10px; margin: 5%;" width="621" height="720">
                        <tr>
                            <td width="272" height="55"><label>       Room charges</label></td>
                            <td width="333"><label>{{{ $bill->room_charges }}}</label></td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>      Bed charges*</label></td>
                            <td width="333"><label>{{{  $bill->bed_charges}}}</label></td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>     Operation charges*</label></td>
                            <td width="333"><label>{{{   $bill->operation_charges }}}</label></td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>      Meal charges*</label></td>
                            <td width="333"><label>{{{   $bill->meal_charges }}}</label></td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>      Medicine charges*</label></td>
                            <td width="333"><label>{{{   $bill->medicine_charges}}}</label></td>
                        </tr>
                        <tr>
                             <td width="272" height="55"><label>       Total charges*</label></td>
                             <td width="333"><label>{{{   $bill->total_charges}}}</label></td>
                        </tr>
                        <tr>
                            <td width="272"><label>Additional Info:</label></td>
                            <td width="333"><label><div style="width: 333px; word-wrap: break-word">{{{ $bill->note }}}</div></label></td>
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