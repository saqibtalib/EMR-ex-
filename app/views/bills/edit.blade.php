@extends('bills.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
    Edit Bill
    @stop


            <!--========================================================
                          CONTENT
=========================================================-->
@section('content1')
    <section id="content">

        <div class = "user_logo">
            <div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                Edit Bill
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

                    {{ Form::model($bill, ['route' => ['bill.update', $bill->id], 'method' => 'put' ,'style' => 'padding: 40px', 'id' => 'regForm'])}}

                    <table width="621" height="720" border="0">
                        <tr>
                                                   <td width="272" height="55"><label>      Room charges*</label></td>
                                                   <td width="333">
                                                       {{ Form::input('text', 'room_charges', null,array('id' => 'room')) }}
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td width="272" height="55"><label>      Bed charges*</label></td>
                                                   <td width="333">
                                                  {{ Form::input('text', 'bed_charges', null,array('id' => 'bed')) }}
                                                  </td>
                                               </tr>
                                               <tr>
                                                   <td width="272" height="55"><label>      Operation charges*</label></td>
                                                   <td width="333">{{ Form::input('text', 'operation_charges', null,array('id' => 'operation')) }}
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td width="272" height="55"><label>      Meal charges*</label></td>
                                                   <td width="333">{{ Form::input('text', 'meal_charges', null,array('id' => 'meal')) }}
                                               </td>
                                               </tr>
                                               <tr>
                                                   <td width="272" height="55"><label>      Medicine charges*</label></td>
                                                   <td width="333">{{ Form::input('text', 'medicine_charges', null,array('id' => 'medicine')) }}
                                               </td>
                                               </tr>
                                               <tr>
                                                   <td width="272" height="55"><label>      Total charges*</label></td>
                                                   <td width="333">{{ Form::input('text', 'total_charges', null,array('id' => 'total')) }}
                                               </td>
                                               </tr>
                                               <tr>
                                                   <td width="272"><label>Additional Info:</label></td>
                                                   <td width="333" height="200">{{ Form::textarea('note', null, array('rows' => '7', 'cols' => '20', 'placeholder' => 'note', "style" => "font-size: 1.2em; margin-top: 2px; resize: none;") ) }}</td>
                                               </tr>
                        <tr>
                            <td colspan="2">
                                <center>
                                    <div class="btn-wrap">
                                        <a class="btn_3" href="../" >Back</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
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

</section>
@stop