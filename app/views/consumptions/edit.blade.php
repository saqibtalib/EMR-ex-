@extends('appointments.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
Edit Consumptions
@stop


<!--========================================================
                          CONTENT
=========================================================-->
@section('content1')
    <section id="content">

		<div class = "user_logo">
			<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                        Edit Consumptions
            </div>
		</div>
		<br><br><br>
@stop


@section('content2')

        @foreach($errors->all("<p class='error'>:message</p>") as $message)
	    {{ $message }}
		@endforeach

		<br/>
	   <center>
            <div style="border: 4px solid #129894; width: 800px; border-radius: 10px; background-color: #EBEBEB">

            {{ Form::model($Consumptions, ['action' => ['pConsumption.update', $Consumptions->id], 'method' => 'put' ,'style' => 'padding: 30px', 'id' => 'regForm', 'margin' => '50px'])}}

           <table width="621" height="350" border="2">


                         <tr>
                             <td width="272" height="55"><label>Meal Charges:   </label> </td>
                             <div  value="{{{ Form::getValueAttribute('meal', null) }}}" class="menu" style="margin-left: 30%; ">
                             <td width="333">{{ Form::textarea('meal', null, array('rows' => '2', 'cols' => '10', 'placeholder' => 'Enter Meal Charges', "style" => "font-size: 1.2em; margin-top: 2px; resize: none; width: 98%") ) }}</td>

                                </td>
                                </div>
                          </tr>
                         <tr>
                                            <td width="272" height="55"><label>Medicine Charges:   </label> </td>
                                            <div  value="{{{ Form::getValueAttribute('medicine', null) }}}" class="menu" style="margin-left: 30%; ">
                                            <td width="333">{{ Form::textarea('medicine', null, array('rows' => '2', 'cols' => '10', 'placeholder' => 'Enter Medicine Charges', "style" => "font-size: 1.2em; margin-top: 2px; resize: none; width: 98%") ) }}</td>

                                                 </td>
                                                 </div>
                                         </tr>

                                         <tr>
                                                            <td width="272" height="200"><label>Other Charges:   </label> </td>
                                                            <div  value="{{{ Form::getValueAttribute('others', null) }}}" class="menu" style="margin-left: 30%; ">
                                                            <td width="333">{{ Form::textarea('others', null, array('rows' => '5', 'cols' => '10', 'placeholder' => 'Other Charges', "style" => "font-size: 1.2em; margin-top: 2px; resize: none; width: 98%") ) }}</td>

                                                              </td>
                                                              </div>
                                                         </tr>
                          <tr>
                          <td colspan="2">
                              <center>
                              <div class="btn-wrap">
                              <input type="submit" onclick="back()" value="Back" class="btn_3" />
                               <input type="submit" value="Update" class="submit" />
                                  <a class="btn_3" href="javascript:document.getElementById('regForm').reset();" data-type="reset">Reset</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


                              </div>
                          </center>
                          </td>
                          </tr>
                      </table>
            {{ Form::close() }}
            </div>
        </center>

		<br><br>

</section>
@stop