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
                        Manage Rooms
            </div>
		</div>


               <!--========================================================
                                     Data Table
                   =========================================================-->
            <center style="margin-top: 7%;">
            <center>{{ link_to_route('addrooms.create', 'Add Rooms   ', '', ['class' => 'btn_1'])}}</center>
            		<br>
                <table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="95%">
                <thead>
                    <tr>
                        <th style="width: 20%">Room location</th>
                        <th>Room type</th>
                        <th>Room no</th>
                        <th style="width: 25%">Manage</th>
                    </tr>
                </thead>

                <tbody>


                    @foreach($rooms as $room)
                        <tr>
                            <td>{{{ $room->room_location }}}</td>
                            <td>{{{ $room->room_type}}} </td>
                            <td>{{{ $room->room_no }}}</td>


                            <td>
                                    {{ link_to_route('rooms.show', 'View', [$room->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}

                                    {{ link_to_route('rooms.edit', 'Edit', [$room->id], ['class' => 'data_table_btn'])}}
                                    <a class="data_table_btn" href="destroyroom?id={{$room->id}}">Delete</a>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            </center>


@stop

