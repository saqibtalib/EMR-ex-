@extends('bills.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
    Bill
    @stop

            <!--========================================================
                          CONTENT
=========================================================-->
@section('content1')
    <section id="content">

        <div class = "user_logo">
            <div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                Create Bill
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

                    {{ Form::open(array('action' => 'bill.store', 'style' => 'padding: 40px', 'id' => 'regForm')) }}
                    <table width="621" height="720" border="0">
                          <tr>
                          <td width="272" height="55"><label>      patient Name*</label></td>
                          <td width="333">
                                {{ Form::select('patient', $patient) }}
                          </td>
                           </tr>
                            <tr>
                            <td width="272" height="55"><label>     Room charges*</label></td>
                            <td width="333">
                                {{ Form::input('text', 'room', null,array('id' => 'room')) }}
                            </td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>      Bed charges*</label></td>
                            <td width="333"><input type="text" id="bed" required="true" value="{{{ Form::getValueAttribute('bed', null) }}}" name="bed"></td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>      Operation charges*</label></td>
                            <td width="333"><input type="text" id="operation" required="true" name="operation" value="{{{ Form::getValueAttribute('operation', null) }}}"></td>
                        </tr>
                         <tr>
                            <td width="272" height="55"><label>      Meal charges*</label></td>
                            <td width="333"><input type="text" id="mealt" required="true" name="meal" value="{{{ Form::getValueAttribute('meal', null) }}}"></td>
                            </tr>
                            <tr>
                            <td width="272" height="55"><label>      Medicine charges*</label></td>
                            <td width="333"><input type="text" id="medicine" required="true" name="medicine" value="{{{ Form::getValueAttribute('medicine', null) }}}"></td>
                            </tr>
                             <td width="272" height="55"><label>      Total charges*</label></td>
                              <td width="333"><input type="text" id="total" required="true" name="total" value="{{{ Form::getValueAttribute('total', null) }}}"></td>
                              </tr>
                         {{--<tr>--}}
                                              {{--<td width="272" height="55"><label>      Vendor Name*</label></td>--}}
                                              {{--<td width="333">--}}
                                               {{--<select id="id" required name="id">--}}
                                                {{--<option value="" selected>Select Vendor ID</option>--}}


                                                {{--</select>--}}
                                                {{--{{ Form::select('vendor', $vendor,array("id"=>'vendor'))}}--}}

                                             {{--{{ Form::select('vendor', $vendor) }}--}}
                                                  {{--</td>--}}
                                                 {{--</tr>--}}
                       {{-- <tr>
                         <input name="vandor_id" type="hidden" value="{{ $vendor->id }}">
                         </tr>--}}
                        <tr>
                            <td width="272"><label>Additional Info:</label></td>
                            <td width="333" height="200">{{ Form::textarea('note', null, array('rows' => '7', 'cols' => '20', 'placeholder' => 'note', "style" => "font-size: 1.2em; margin-top: 2px; resize: none;") ) }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <center>
                                    <div class="btn-wrap">
                                        <a class="btn_3" href="javascript:document.getElementById('regForm').reset();" data-type="reset">Reset</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                        <input type="submit" value="Register" class="submit" />
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