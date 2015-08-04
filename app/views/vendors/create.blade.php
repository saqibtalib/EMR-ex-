@extends('vendors.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
    Vendor Registration
    @stop


            <!--========================================================
                          CONTENT
=========================================================-->
@section('content1')
    <section id="content">

        <div class = "user_logo">
            <div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                Vendor Registration
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

                    {{ Form::open(array('action' => 'vendorstore.store', 'style' => 'padding: 40px', 'id' => 'regForm')) }}
                    <table width="621" height="720" border="0">
                        <tr>
                            <td width="272" height="55"><label>   Vendor Name*</label> </td>
                            <td width="333">
                                {{ Form::input('text', 'name', null, array('required' => 'true','id' => 'name')) }}
                            </td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>   Vendor Type:</label> </td>
                            <td width="333">
                                {{ Form::input('text', 'vendortype', null, array('required' => 'true','id' => 'vendortype')) }}
                            </td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>     Email:</label></td>
                            <td width="333">
                                {{ Form::input('email', 'email', null,array('id' => 'email')) }}
                            </td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>      City*</label></td>
                            <td width="333"><input type="text" id="city" required="true" value="{{{ Form::getValueAttribute('city', null) }}}" name="city"></td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>      Address*</label></td>
                            <td width="333"><input type="text" id="address" required="true" name="address" value="{{{ Form::getValueAttribute('address', null) }}}"></td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>      Mobile:</label></td>
                            <td width="333"><input type="text" placeholder="(0092)333-1234567" id="mobile" name="mobile" value="{{{ Form::getValueAttribute('mobile', null) }}}"></td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>      CNIC:</label></td>
                            <td width="333"><input type="text" id="cnic" name="cnic" value="{{{ Form::getValueAttribute('cnic', null) }}}"></td>
                        </tr>
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