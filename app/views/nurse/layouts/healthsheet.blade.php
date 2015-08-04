@extends('nurse.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
Health Sheet
@stop

<!--========================================================
                          CURRENT MENU
=========================================================-->
@section("current_healthsheet")
class="current"
@stop

<!--========================================================
                          CONTENT-1
=========================================================-->
@section('content1')

    <section id="content">

		<div class = "user_logo">
			<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                        Health Sheet
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
<table style="margin-left: 31%;margin-top: 5%">
<tr><td  style="padding:2%">
<center style="margin-top: 1%;">
            <center>{{ link_to_route('patients.create', 'Health Sheet # 01', '', ['class' => 'btn_1'])}}</center> </td>
                     <td style="padding:2%">   <center style="margin-top: 1%;">
                                    <center>{{ link_to_route('patients.create', 'Health Sheet # 01', '', ['class' => 'btn_1'])}}</center></td>
                                <td style="padding:2%">    <center style="margin-top: 1%;">
                                                <center>{{ link_to_route('patients.create', 'Health Sheet # 01', '', ['class' => 'btn_1'])}}</center></td>
		</tr>	</table>
			<div>
				<div class="menu" style="margin-left: 30%; ">




				</div>
			</div>
</section>
@stop