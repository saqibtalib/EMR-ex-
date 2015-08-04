@extends('nurse.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
Consumptions of Patients
@stop


<!--========================================================
                          CONTENT
=========================================================-->
@section('content2')
<section id="content">

    <div class = "user_logo">
        <div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
            Consumptions of Patients
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





                <th>Consumptions</th>




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
                {{--<td>{{{ $patient->consumptions }}}</td>--}}
               <td > <a class="data_table_btn" href="consume?id={{$patient->id}}">Enter</a>
               <a class="data_table_btn" href="list_cons?id={{$patient->id}}">View</a>
 {{--<a class="data_table_btn" href="view_cons?id={{$patient->id}}">View</a>--}}
  {{--<a class="data_table_btn" href="edit_cons?id={{$patient->id}}">Edit</a>--}}
 </td>

            </tr>
            @endforeach

            </tbody>
        </table>
    </center>

</section>
@stop

