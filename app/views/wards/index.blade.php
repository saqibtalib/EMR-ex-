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
                        Manage wards
            </div>
		</div>


               <!--========================================================
                                     Data Table
                   =========================================================-->
            <center style="margin-top: 7%;">
            <center>{{ link_to_route('wards.create', 'Add wards   ', '', ['class' => 'btn_1'])}}</center>
            		<br>
                <table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="95%">
                <thead>
                    <tr>
                        <th style="width: 20%">Ward name</th>
                        <th>Ward type</th>
                        <th style="width: 25%">Manage</th>
                    </tr>
                </thead>

                <tbody>


                    @foreach($wards as $ward)
                        <tr>
                            <td>{{{ $ward->ward_name }}}</td>
                            <td>{{{ $ward->ward_type }}}</td>
                            {{--<td>{s{{ $patient->age }}} - Years</td>--}}
                            {{--<td>{{{ $patient->gender }}}</td>--}}
                            {{--<td>{{{ $patient->phone }}}</td>--}}
                            {{--<td>{{{ $patient->ward }}} </td>--}}
                            {{--<td>{{{ $patient->bed }}}</td>--}}
                            {{--<td>{{{ $patient->room }}}</td>--}}

                            <td>
                                    {{ link_to_route('wards.show', 'View', [$ward->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}

                                    {{ link_to_route('wards.edit', 'Edit', [$ward->id], ['class' => 'data_table_btn'])}}
                                    <a class="data_table_btn" href="destroyward?id={{$ward->id}}">Delete</a>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            </center>


@stop

