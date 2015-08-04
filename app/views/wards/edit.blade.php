@extends('adminipd.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
Edit Patient
@stop


<!--========================================================
                          CONTENT
=========================================================-->
@section('content1')
    <section id="content">

		<div class = "user_logo">
			<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                        Edit wards
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

            {{ Form::model($ward, ['route' => ['wards.update', $ward->id], 'method' => 'put' ,'style' => 'padding: 40px', 'id' => 'regForm'])}}

                <table width="621" height="720" border="0">


              <!-- *******************************Extension***********************-->

                 <tr>
                                                <td width="272" height="55"><label>Ward name</label> </td>
                                                <td width="333">
                                                      {{ Form::input('text', 'ward_name', null,Form::getValueAttribute('wardname', null) ,array('required' => 'true')) }}
                                                </td>
                                                </tr>
                               <tr>
                                              <td width="272" height="55"><label>Ward type</label> </td>
                                              <td width="333">
                                                  {{ Form::input('text', 'ward_type', null,Form::getValueAttribute('wardtype', null), array('required' => 'true')) }}
                                              </td>
                                              </tr>

              <!-- *******************************Extension***********************-->


                <tr>
                <td colspan="2">
                    <center>
                    <div class="btn-wrap">

                 <input type="submit" onclick="back()" value="Back" class="submit" />

                        <input type="submit" value="Update" class="submit" />
                    </div>
                </center>
                </td>
                </tr>
            </table>
            {{ Form::close() }}
            </div>
        </center>

		<br><br>

      
@stop