@extends('accountant.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
Accountant Home
@stop

<!--========================================================
                          CURRENT MENU
=========================================================-->
@section("current_acc_home")
class="current"
@stop

    <!--========================================================
                              CONTENT
    =========================================================-->
@section('content')
    <section id="content">
        
		<div class = "user_logo">
			<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                        Accountant Home
            </div>
		</div>
		<br/>
			<div>
				<div class="menu" style="margin-left: 10%; margin-right: 10%">
					<a class="ferozi" href="app_check_fee">Manage Checkup Fee</a>

					<a class="purple" href="app_checkup_fee_print">Print Checkup Invoice</a>
					<a class="blue" href="app_test_fee">Manage Test Fee</a>
                    <a class="purple" href="vendor">Vendor</a>
                    <a class="blue" href="bill">Bill</a>

					<a class="ferozi" href="balancesheet">Balance Sheet</a>
					<a class="purple" href="dispatch">Medicine Dispatch List</a>
                    <a class="orange" href="consac">Consumptions</a>
				{{--<a class="pink" href="rooms">rooms</a>--}}
				</div>
			</div>

        
@stop
