@extends('balancesheets.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
    Balancesheet
    @stop

            <!--========================================================
                          CONTENT
=========================================================-->
@section('content1')
    <section id="content">

        <div class = "user_logo">
            <div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                Create Balancesheet
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

                    {{ Form::open(array('action' => 'balancesheet.store', 'style' => 'padding: 40px', 'id' => 'regForm')) }}
                    <table width="621" height="720" border="0">




                            <tr>
                            <td width="272" height="55"><label>     Total Amount:</label></td>
                            <td width="333">
                                {{ Form::input('text', 'Tamount', null,array('id' => 'Tamount')) }}
                            </td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>      Payable Amount*</label></td>
                            <td width="333"><input type="text" id="Pamount" required="true" value="{{{ Form::getValueAttribute('Pamount', null) }}}" name="Pamount"></td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>      Receivable Amount*</label></td>
                            <td width="333"><input type="text" id="Ramount" required="true" name="Ramount" value="{{{ Form::getValueAttribute('Ramount', null) }}}"></td>
                        </tr>
                         <tr>
                                              <td width="272" height="55"><label>      Vendor Name*</label></td>
                                              <td width="333">
                                               {{--<select id="id" required name="id">--}}
                                                {{--<option value="" selected>Select Vendor ID</option>--}}


                                                {{--</select>--}}
                                                {{--{{ Form::select('vendor', $vendor,array("id"=>'vendor'))}}--}}

                                             {{ Form::select('vendor', $vendor) }}
                                                  </td>
                                                 </tr>
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