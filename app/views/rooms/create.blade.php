@extends('wards.layouts.master')
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
                       Add Rooms
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

            {{ Form::open(array('action' => 'RoomsController@store', 'style' => 'padding: 40px', 'id' => 'regForm')) }}
                <table width="621" height="420" border="0">




                <!--********************************Extension*******************************-->

  <tr>
                              <td width="272" height="55"><label>Room type</label> </td>
                              <td width="333">
                              {{ Form::input('text', 'roomtype', null, array('required' => 'true','id' => 'roomtype','pattern'=>'[a-zA-Z| |]*','title'=>'Only Alphabet Allowed')) }}
                              </td>
                      </tr>
                     <tr>
                             <td width="272" height="55"><label>Room Location</label> </td>
                             <td width="333">
                             {{ Form::input('text', 'roomlocation', null, array('required' => 'true','id' => 'roomlocation','pattern'=>'[a-zA-Z| |]*','title'=>'Only Alphabet Allowed')) }}
                             </td>
                     </tr>
                     <tr>
                             <td width="272" height="55"><label>Room No</label> </td>
                             <td width="333">
                             {{ Form::input('number', 'roomno', null, array('required' => 'true','id' => 'roomno','pattern'=> "[0-9]",'min'=>'1','step'=>'1')) }}
                             </td>
                     </tr>


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