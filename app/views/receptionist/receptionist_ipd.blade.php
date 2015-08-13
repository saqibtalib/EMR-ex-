@extends('receptionist.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
Receptionist Home
@stop

<!--========================================================
                          CURRENT MENU
=========================================================-->
@section("current_rec_home")
class="current"
@stop

<!--========================================================
                          CONTENT
=========================================================-->
@section('content')
    <section id="content">

		<div class = "user_logo">
			<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                        Manage IPD
            </div>
            	<div class="menu" style="margin-left: 10%; margin-right: 10%">

            					<a class="green" href="opt_index">OPT schedule</a>
            					<a class="pink" href="dutydays">Allocation of bed</a>
            					<a class="purple" href="search_pmr">Allocation of room</a>
            					<a class="blue" href="ipd_patient">Manage patients</a>

		</div>
		<br>
			<div>
			</div>
		
       
@stop