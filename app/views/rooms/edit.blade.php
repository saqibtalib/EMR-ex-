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
                        Edit Room
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

            {{ Form::model($room, ['route' => ['rooms.update', $room->id], 'method' => 'put' ,'style' => 'padding: 40px', 'id' => 'regForm'])}}

                <table width="621" height="720" border="0">


              <!-- *******************************Extension***********************-->

                 <tr>
                                                <td width="272" height="55"><label>Room location</label> </td>
                                                <td width="333">
                                                      {{ Form::input('text', 'room_location', null,\Illuminate\Support\Facades\Form::getValueAttribute('roomlocation', null) ,array('required' => 'true')) }}
                                                </td>
                                                </tr>
                               <tr>
                                              <td width="272" height="55"><label>Room type</label> </td>
                                              <td width="333">
                                                  {{ Form::input('text', 'room_type', null,Form::getValueAttribute('roomtype', null), array('required' => 'true')) }}
                                              </td>
                                              </tr>

                                               <tr>
                                              <td width="272" height="55"><label>Room no</label> </td>
                                              <td width="333">
                                                  {{ Form::input('text', 'room_no', null,Form::getValueAttribute('roomno', null), array('required' => 'true')) }}
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