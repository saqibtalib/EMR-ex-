@extends('vendors.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
    Vendor Details
    @stop


            <!--========================================================
                          CONTENT
=========================================================-->
@section('content1')
    <section id="content">

        <div class = "user_logo">
            <div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                Vendor Details
            </div>
        </div>
        <br><br><br>
        @stop

        @section('content2')

            <center>
                <div id="regForm" style="border: 4px solid #129894; width: 800px; height: 100%; background-color: #EBEBEB">
                    <table class="row_border" style=" border-radius: 10px; margin: 5%;" width="621" height="720">
                        <tr>
                            <td width="272" height="55"><label>Vendor Name:</label> </td>
                            <td width="333"><label>{{{ $vendor->name }}}</label></td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>Vendor ID:</label> </td>
                            <td width="333"><label>{{{ $vendor->vendor_id }}}</label></td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>     Vendor Type:</label></td>
                            <td width="333"><label>{{{ ($vendor->vendor_type)}}}</label></td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>      Email:</label></td>
                            <td width="333"><label>{{{ $vendor->email }}}</label></td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>      City:</label></td>
                            <td width="333"><label>{{{ $vendor->city }}}</label></td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>      Address:</label></td>
                            <td width="333"><label>{{{ $vendor->address }}}</label></td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>      Mobile:</label></td>
                            <td width="333"><label>{{{ $vendor->mobile }}}</label></td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>      CNIC:</label></td>
                            <td width="333"><label>{{{ $vendor->cnic }}}</label></td>
                        </tr>
                        <tr>
                            <td width="272"><label>Additional Info:</label></td>
                            <td width="333"><label><div style="width: 333px; word-wrap: break-word">{{{ $vendor->note }}}</div></label></td>
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