@extends('adminipd.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
Patient Registration
@stop


<!--========================================================
                          CONTENT
=========================================================-->
@section('content1')
    <section id="content">
        
		<div class = "user_logo">
			<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                       Add beds
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

            {{ Form::open(array('action' => 'AdminIPDController@store', 'style' => 'padding: 40px', 'id' => 'regForm')) }}
                <table width="621" height="720" border="0">




                <!--********************************Extension*******************************-->
                <tr>
                                <td width="272" height="55"><label>Ward name</label> </td>
                                <td width="333">
                                          {{ Form::select('ward', $ward,array('id'=>'ward'))}}
                                </td>
                 </tr>

                    <tr>
                        <td width="272" height="55"><label>Ward type</label> </td>
                        <td width="333">
                            <select id="type" required name="type">
                                <option value="" selected>Select Type</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </td>

                    </tr>
                 <tr>
                                 <td width="272" height="55"><label>Bed no</label> </td>
                                 <td width="333">
                                     {{ Form::input('number', 'bedno', null, array('required' => 'true','id' => 'bedno','pattern'=> "[0-9]",'min'=>'1','step'=>'1')) }}
                                 </td>
                                 </tr>

                    {{--<tr>--}}

                        {{--<td width="333">--}}
                            {{--{{ Form::input('hidden', 'status', null, array('required' => 'true','id' => 'status','value'=>'active')) }}--}}
                        {{--</td>--}}
                    {{--</tr>--}}

              <!--**********************************Extension*********************************-->



                <tr> 
                <td colspan="2"> 
                    <center>
                    <div class="btn-wrap">
                        <a class="btn_3" href="javascript:document.getElementById('regForm').reset();" data-type="reset">Reset</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <input type="submit" value="Add" class="submit" />
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