@extends('appointments.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
    Manage Appointments
    @stop

            <!--========================================================
                          CONTENT
                ========================================================-->
@section('content2')
    <section id="content">

        <div class = "user_logo">
            <div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                Manage Appointments
            </div>
        </div>


        <!--========================================================
                                     Data Table
            =========================================================-->
        <center style="margin-top: 7%;">
            @if(Auth::user()->role == 'Administrator' || Auth::user()->role == 'Receptionist')
                <center>{{ link_to_route('opt.create', 'Create OPT schedule', '', ['class' => 'btn_1'])}}</center>
            @endif
            <br>
            <table id="example" style=" border: 1px solid black" class="display" cellspacing="0" width="80%">
                <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>Doctor Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Operation theater Status</th>
                    <th style="width: 25%">Action</th>
                </tr>
                </thead>

                <tbody>

                @foreach($opt as $optp)
                    <tr>
                        <td>{{{ $optp->patient->name }}}</td>
                        <td>{{{ $optp->employee->name }}}</td>
                        <td>{{{ date('j F, Y', strtotime($optp->date)) }}}</td>
                        <td>{{{ $optp->timeslot->slot }}}</td>
                        <td>
                            @if($optp->status == 0)
                                Reserved
                            @elseif($optp->status == 1)
                                Waiting
                            @elseif($optp->status == 2)
                                Operating
                            @elseif($optp->status == 3)
                                Cancelled
                            @endif
                        </td>
                        <td>
                            {{ link_to_route('opt.show', 'View', [$optp->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}

                            @if(Auth::user()->role != 'Doctor')
                                @if($optp->status == 0 || $optp->status == 1 || $optp->status == 2)
                                    {{ link_to_route('opt.edit', 'Edit', [$optp->id], ['class' => 'data_table_btn'])}}
                                @endif
                                    @if($optp->status == 3)
                                        <a class="data_table_btn" href="destroyopt?id={{$optp->id}}">Delete</a>
                                    @endif
                            @endif
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </center>

@stop

