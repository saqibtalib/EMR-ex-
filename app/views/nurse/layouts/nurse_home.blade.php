@extends('nurse.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
Nurse Home
@stop

<!--========================================================
                          CURRENT MENU
=========================================================-->
@section("current_nurse_home")
class="current"
@stop

<!--========================================================
                          CONTENT-1
=========================================================-->
@section('content1')
	
    <section id="content">
        
		<div class = "user_logo">
			<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                        Nurse Home
            </div>
		</div>
@stop

<!---------------- Breadcrumbs ------------------>
{{--@section('breadcrumbs')--}}
    {{----}}
    {{--<div class="breadcrumb flat">--}}
      {{--<a href="admin_home" class="active">Home</a>--}}
      {{--<!-- <a href="#">Unused</a>--}}
      {{--<a href="#">Unused</a>--}}
      {{--<a href="#">Unused</a> -->--}}
    {{--</div>--}}
    {{----}}
{{--@stop--}}
<!---------------End of Breadcrumbs -------------->


@section('content2')		
			<div>
				<div class="menu" style="margin-left: 10%; margin-right: 10%">

                    <a class="blue" href="view_patient">Health Sheet</a>
                    <a class="purple" href="dutydays">Doctor Schedules </a>
                     <a class="pink" href="cons">Consumptions </a>
                       <a class="ferozi" href="app_pres_print">View Prescription </a>
<a class="orange" href="search_pmr">View Medical Record</a>

				</div>
			</div>
</section>
@stop