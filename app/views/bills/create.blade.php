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

            <!--********************************************************************-->
            <script>
                $("document").ready(function () {
                 //   alert('i am here');
                    $("#patient").on('change', function () {


                        var val = $(this).val();


//            var username = $("input#username").val();
//            var token =  $("input[name=_token]").val();
//            var dataString = 'username='+username+'&token='+token;
                        $.ajax({
                            type: "POST",
                            url: "/billinfo",
                            data: {val: val},
                            dataType:'json',

                            success: function (data) {


                                $(document).find('#date','#bed','#room','#operation','#medicine','#meal').remove('value');

                                    $('#date').val(data[0]);
                                    $('#bed').val(data[1]);
                                    $('#room').val(data[2]);
                                    $('#operation').val(data[3]);
                                    $('#medicine').val(data[4]);
                                    $('#meal').val(data[5]);

                                var someArray = [data[1],data[2],data[3],data[4],data[5]];
                                var total = 0;
                                for (var i = 0; i < someArray.length; i++) {
                                    total += someArray[i] << 0;
                                }
                                $('#total').val(total);
//                                    $('#room').val(data);
//                                $('total').val(plus);
//                                for(var id in data[0]) {
//                                    $('bed#' + id).val( data[0][id] );
//                                }
//



                                //var val = document.createElement('input');
//                                val.textContent(data);
//                                input.append(val);
//                                 input.appendChild(data);
//                                input.append()
//                                $('#bed').find('option').remove();
                                //var input = $('#bed');
                                //input.append(val);
//                                $.each(data, function (prop, obj) {
//                                    var el = document.createElement("input");
//                                    el.textContent = obj;
//                                    el.value = prop;
//                                    input.append(el);
//                                    alert("prop:" + prop + " , value: " + obj);
//
//                                });


                            }
                        });

                    });
                });//end of document ready function
            </script>


            <!--********************************************************************-->


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
                                {{ Form::select('patient', $patient,null, array('id'=>'patient')) }}
                          </td>
                           </tr>
                        <tr>
                            <td width="272" height="55"><label>Addmited Date</label></td>
                            <td width="333">
                                {{ Form::input('text', 'created_at', null,array('id' => 'date')) }}
                            </td>
                        {{--<tr>--}}
                            {{--<td width="272" height="55"><label>Bed no</label></td>--}}
                            {{--<td width="333" id="bed_row">--}}
                                {{--                                     {{ Form::select($bed, [], null, ['required' => 'true', 'id' => 'bed', 'style' => "width: 100%; height: 38px"] ); }}--}}
                                {{--{{ Form::input('date',$patient,null,array( 'id'=>'date'))}}--}}
                            {{--</td>--}}
                        {{--</tr>--}}

                        {{--<tr>--}}
                            {{--<td width="272" height="55"><label> Admitted Time</label></td>--}}
                            {{--<td width="333">--}}
                            {{--<td width="333"><input type="text" id="admit" required="true" value="{{{ Form::getValueAttribute('created_at', null) }}}" name="admit"></td>--}}
{{--                                {{ Form::input('text', 'room', null,array('id' => 'room')) }}--}}
                            {{--</td>--}}
                        {{--</tr>--}}
                            <tr>
                            <td width="272" height="55"><label>     Room charges*</label></td>
                            <td width="333">
                                {{ Form::input('text', 'room', null,array('id' => 'room')) }}
                            </td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>      Bed charges*</label></td>
                            <td width="333">
                                {{ Form::input('text', 'bed', null,array('id' => 'bed')) }}
                                {{--<input type="text" id="bed" required="true" value="{{{ Form::getValueAttribute('bed', null) }}}" name="bed">--}}
                            </td>
                        </tr>
                        <tr>
                            <td width="272" height="55"><label>      Operation charges*</label></td>
                            <td width="333"> {{ Form::input('text', 'operation', null,array('id' => 'operation')) }}</td>
                        </tr>
                         <tr>
                            <td width="272" height="55"><label>      Meal charges*</label></td>
                            <td width="333"> {{ Form::input('text', 'meal', null,array('id' => 'meal')) }}</td>
                            </tr>
                            <tr>
                            <td width="272" height="55"><label>      Medicine charges*</label></td>
                            <td width="333"> {{ Form::input('text', 'medicine', null,array('id' => 'medicine')) }}</td>
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