@extends('ipd.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
    Manage Patients
@stop


<!--========================================================
                          CONTENT
=========================================================-->
@section('content2')
    <section id="content">

		<div class = "user_logo">
			<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                        Manage Patients
            </div>
		</div>


               <!--========================================================
                                     Data Table
                   =========================================================-->
            <center style="margin-top: 7%;">
            <center>{{ link_to_route('ipd.create', 'Register Patient', '', ['class' => 'btn_1'])}}</center>
            		<br>
                <table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="95%">
                <thead>
                    <tr>
                        <th style="width: 20%">Patient Name</th>
                        <th>Patient ID</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Ward</th>
                        <th>Bed no</th>
                        <th>Room no</th>
                        <th style="width: 25%">Manage</th>
                    </tr>
                </thead>

                <tbody>


                    @foreach($patients as $patient)
                        <tr>
                            <td>{{{ $patient->name }}}</td>
                            <td>{{{ $patient->patient_id }}}</td>
                            <td>{{{ $patient->age }}}</td>
                            <td>{{{ $patient->gender }}}</td>
                            <td>{{{ $patient->phone }}}</td>
                            <td>{{{ $patient->wards->ward_name }}} </td>
                            <td>{{{ $patient->beds->bed_no}}}</td>
                            <td>{{{ $patient->rooms->room_no }}}</td>


                            <td>
                            {{ link_to_route('ipd.show', 'View', [$patient->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}

                            {{ link_to_route('ipd.edit', 'Edit', [$patient->id], ['class' => 'data_table_btn'])}}
                                {{--{{ link_to_route('ipd.edit', 'Edit', [$patient->id], ['class' => 'data_table_btn'])}}    --}}
                            {{--{{link_to_route('destroypatient','Remove',[$patient->id],['class'=>'data_table_btn'])}}--}}
                                <a class="data_table_btn" href="patientbill?id={{$patient->id}}">Bill</a>
                                <a class="data_table_btn" href="deletepatient?id={{$patient->id}}">DEL</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            </center>


@stop

