@extends('nurse.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
Consumptions
@stop


<!--========================================================
                          CONTENT
=========================================================-->
@section('content1')
    <section id="content">

		<div class = "user_logo">
			<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                        Consumptions
            </div>
		</div>
		<br><br><br>
@stop

@section('content2')

	   <center>
                <div id="regForm" style="border: 4px solid #129894; width: 800px; height: 100%; background-color: #EBEBEB">
                            <table class="row_border" style=" border-radius: 10px; margin: 5%;" width="621" height="250">




                          <tr>
                            <td width="10" height="10"><label>Meal Charges:</label> </td>
                            <td width="10"><label>{{{ $Consumptions->meal }}}</label></td>
                            </tr>
                          <tr>
                            <td width="10" height="10"><label> Medicine Charges:</label></td>
                            <td width="10"><label>{{{ $Consumptions->medicine }}}</label></td>
                            </tr>
                          <tr>
                            <td width="10" height="10"><label> Other Charges:</label></td>
                            <td width="10"><label>{{{ $Consumptions->others }}}</label> </td>
                            </tr>


                        </table>
                        <center>
                              <section style="margin-bottom: 10%">
                                 <input type="submit" onclick="back()" value="Back" class="btn_3" />
                              </section>
                         </center>
                        </div>
        </center>

		<br><br>

   </section>
@stop