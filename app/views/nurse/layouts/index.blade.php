@extends('nurse.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
Search PMR
@stop


<!--========================================================
                          CONTENT
=========================================================-->
@section('content2')
<section id="content">

    <div class = "user_logo">
        <div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
            Search Patient Medical Record
        </div>
    </div>


    <!--========================================================
                                 Data Table
        =========================================================-->
    <center style="margin-top: 7%;">

        <table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
            <thead>
            <tr>
                <th style="width: 20%">Patient Name</th>
                <th>Patient ID</th>
                <th>Age</th>
                <th>Gender</th>

                <th>Phone</th>
<th></th>





                <th>Health Sheet</th>




            </tr>
            </thead>

            <tbody >


            @foreach($patients as $patient)
            <tr>
                <td>{{{ $patient->name }}}</td>
                <td>{{{ $patient->patient_id }}}</td>
                <td>{{{ $patient->age }}}</td>
                <td>{{{ $patient->gender }}}</td>
                <td>{{{ $patient->phone }}}</td>
                <td>{{{ $patient->healthsheet }}}</td>
 <td>
<a class="data_table_btn" href="sheetone?id={{$patient->id}}">Create</a>
 <a class="data_table_btn" href="list?id={{$patient->id}}">View</a></td>

            </tr>
            @endforeach

            </tbody>
        </table>
    </center>

</section>
@stop

