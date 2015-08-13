@extends('appointments.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
    Appointment Details
    @stop


            <!--========================================================
                          CONTENT
=========================================================-->
@section('content1')
    <section id="content">

        <div class = "user_logo">
            <div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                Appointment Details
            </div>
        </div>
        <br><br><br>
        @stop

        @section('content2')

            <center>
                <div id="regForm" style="border-radius: 10px; border: 4px solid #129894; width: 800px; height: 100%; background-color: #EBEBEB">
                    <table class="row_border" style=" margin: 5%;" width="621" height="720">
                        <tr>
                            <td width="272" height="55"><label>Doctor Name:</label> </td>
                            <td width="333"><label>{{{ $opt->employee->name }}}</label></td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>     Operation Date:</label></td>
                            <td width="333"><label>{{{ date('j F, Y', strtotime($opt->date)) }}}</label></td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>      Operation Time:</label></td>
                            <td width="333"><label>{{{ $opt->timeslot->slot }}}</label> </td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>      Patient Name:</label></td>
                            <td width="333"><label>{{{ $opt->patient->name }}}</label></td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>      Status:</label></td>
                            <td width="333"><label>
                                    @if($opt->status == 0)
                                        Reserved
                                    @elseif($opt->status == 1)
                                        Waiting
                                    @elseif($opt->status == 2)
                                        Check-in
                                    @elseif($opt->status == 3)
                                        No Show
                                    @elseif($opt->status == 4)
                                        Cancelled
                                    @elseif($opt->status == 5)
                                        Closed
                                    @endif

                                </label></td>
                        </tr>

                        <tr>
                            <td width="272"><label>Operation Reason:</label></td>
                            <td width="333"><label><div style="width: 333px; word-wrap: break-word">{{{ $opt->operation_reason }}}</div></label></td>
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