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
            Patient's Health sheets
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
                <th style="width: 20%">ID</th>


                <th>Health Sheet</th>




                <th style="width: 25%">View</th>
            </tr>
            </thead>

            <tbody >


            @foreach($UpdateHs as $UpdateHs)
            <tr>
                <td>{{{ $UpdateHs->id }}}</td>


                <td>{{{ $UpdateHs->health_sheet }}}</td>



 <td width="40%"> <a class="data_table_btn" href="view_sheet?id={{$UpdateHs->id}}">View</a>
 <a class="data_table_btn" href="edit_sheet?id={{$UpdateHs->id}}">Edit</a>
 <a class="data_table_btn" href="del_sheet?id={{$UpdateHs->id}}">Delete</a></td>

            </tr>
            @endforeach

            </tbody>
        </table>
    </center>

</section>
@stop

