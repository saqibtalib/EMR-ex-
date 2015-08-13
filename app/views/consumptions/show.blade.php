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
            <script>

                var meal= document.getElementById('meal');

                var medicine= document.getElementById('medicine');
                var others= document.getElementById('other');
                var total = meal+medicine+others;
//                alert(meal);

            </script>
	   <center>
                <div id="regForm" style="border: 4px solid #129894; width: 800px; height: 100%; background-color: #EBEBEB">
                            <table class="row_border" style=" border-radius: 10px; margin: 5%;" width="621" height="250">



                          <tr>
                            <td width="10" height="10"><label>Meal Charges:</label> </td>
                            <td width="10" id="meal"><label>{{{ $Consumptions->meal }}}</label></td>
                            </tr>
                          <tr>
                            <td width="10" height="10"><label> Medicine Charges:</label></td>
                            <td width="10" id="medicine"><label>{{{ $Consumptions->medicine }}}</label></td>
                            </tr>
                          <tr>
                            <td width="10" height="10"><label> Bed Charges:</label></td>
                            <td width="10" id="other"><label>{{{ $Consumptions->bed }}}</label> </td>
                            </tr>
                                <tr>
                                    <td width="10" height="10"><label>Room Charges:</label> </td>
                                    <td width="10" id="meal"><label>{{{ $Consumptions->room }}}</label></td>
                                </tr>
                                <tr>
                                    <td width="10" height="10"><label>Operation Charges:</label> </td>
                                    <td width="10" id="meal"><label>{{{ $Consumptions->operation }}}</label></td>
                                </tr>
                                {{--<tr>--}}
                                    {{--<td width="10" height="10"><label> Total payment:</label></td>--}}

                                    {{--<td width="10"><label><script> </script></label> </td>--}}
                                {{--</tr>--}}

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