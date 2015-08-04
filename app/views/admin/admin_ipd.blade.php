@extends('admin.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
Administrator Home
@stop

<!--========================================================
                          CURRENT MENU
=========================================================-->
@section("current_admin_home")
class="current"
@stop

<!--========================================================
                          CONTENT-1
=========================================================-->
@section('content1')
	
    <section id="content">
        
		<div class = "user_logo">
			<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                        Administrator Home
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
					<a class="orange" href="ipd_patient">Manage patients</a>
					<a class="purple" href="appointments">Doctor schedules</a>
					<a class="blue" href="managebeds">Manage beds</a>
					<a class="ferozi" href="managewards">Manage Wards</a>
					<a class="green" href="rooms">Manage Rooms</a>

				</div>
			</div>

@stop