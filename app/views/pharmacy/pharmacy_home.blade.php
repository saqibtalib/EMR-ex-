@extends('pharmacy.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
Pharmacy Manager Home
@stop

<!--========================================================
                          CURRENT MENU
=========================================================-->
@section("current_lab_home")
class="current"
@stop

<!--========================================================
                          CONTENT
=========================================================-->
@section('content')
    <section id="content">
        
		<div class = "user_logo">
			<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                        Pharmacy Manager Home
            </div>
		</div>
		<br><br>
			<div>
				<div class="menu" style="margin-left: 10%; margin-right: 10%">
				<center>
					{{--<a class="ferozi" href="#">Medicine List</a>--}}
					
					<a class="purple" href="dispatchlist">Medicine Dispatch List</a>
				</center>
				</div>
			</div>
		
        
@stop