@extends('nurse.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
Patient's Health sheets
@stop


<!--========================================================
                          CONTENT
=========================================================-->
@section('content2')
<section id="content">

    <div class = "user_logo">
        <div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
            Patient's Consumptions
        </div>
    </div>


    <!--========================================================
                                 Data Table
        =========================================================-->
    <center style="margin-top: 7%;">
<center></center> </td>
        <table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="70%">
            <thead>
            <tr>
             {{--<th style="width: 20%">Patient ID</th>--}}
                <th style="width: 20%">ID</th>







                <th style="width: 25%">Consumptions</th>
            </tr>
            </thead>

            <tbody >


            @foreach($Consumptions as $Consumptions)
            <tr>
            {{--<td>{{{ $Consumptions->patient_id }}}</td>--}}
                <td>{{{$Consumptions->id }}}</td>


                {{--<td>{{{ $Consumptions->meal }}}</td>--}}
{{--<td>{{{ $Consumptions->medicine }}}</td>--}}


 <td width="40%"> <a class="data_table_btn" href="view_cons?id={{$Consumptions->id}}">View</a>
</td>

            </tr>
            @endforeach

            </tbody>
        </table>
    </center>

</section>
@stop

