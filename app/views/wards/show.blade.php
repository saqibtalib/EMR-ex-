@extends('wards.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
Wards Details
@stop


<!--========================================================
                          CONTENT
=========================================================-->
@section('content1')
    <section id="content">

		<div class = "user_logo">
			<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                       Ward and bed details
            </div>
		</div>
		<br><br><br>
@stop

@section('content2')

	   <center>
            <div id="regForm" style="border: 4px solid #129894; width: 800px; height: 10%; background-color: #EBEBEB">
                <table class="row_border" style=" border-radius: 10px; margin: 5%;" width="621" height="120">

           <!--*************************************Extension**********************************-->
            <tr>
                              <td width="272" height="25px"><label>Ward:</label></td>
                              <td width="333"><label>{{{ $ward->ward_name }}}</label></td>
                            </tr>
                            <tr>
                               <td width="272" height="20px;"><label>Bed no:</label></td>
                               <td width="333"><label>{{{ $ward->ward_type}}}</label></td>
                               </tr>

            <!--*************************************Extension********************************** -->



            </table>
                     <section style="margin-bottom: 10%">
                                         {{ link_to_route('wards.index', 'Back', '', ['class' => 'btn_3']) }}
                                      </section>
            </div>
        </center>

		<br><br>

     
@stop