@extends('nurse.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
Health Sheet
@stop


<!--========================================================
                          CONTENT
=========================================================-->
@section('content1')
    <section id="content">

		<div class = "user_logo">
			<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                        Health Sheet
            </div>
		</div>
		<br><br><br>
@stop

@section('content2')

	   <center>
            <div id="regForm" style="border: 4px solid #129894; width: 800px; height: 100%; background-color: #EBEBEB">
                <table class="row_border" style=" border-radius: 10px; margin: 5%;" width="621" height="720">

<tr>

                <td width="500"><label>{{{ $UpdateHs->health_sheet }}}</label></td>
                </tr>
            </table>
            <center>
                  <section style="margin-bottom: 10%">
                     <input type="submit" onclick="back()" value="Back" class="submit" />
                  </section>
             </center>
            </div>
        </center>

		<br><br>

   </section>
@stop