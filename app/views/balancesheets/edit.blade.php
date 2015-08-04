@extends('balancesheets.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
    Edit Balancesheet
    @stop


            <!--========================================================
                          CONTENT
=========================================================-->
@section('content1')
    <section id="content">

        <div class = "user_logo">
            <div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                Edit Balancesheet
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

                    {{ Form::model($balancesheet, ['route' => ['balancesheet.update', $balancesheet->id], 'method' => 'put' ,'style' => 'padding: 40px', 'id' => 'regForm'])}}

                    <table width="621" height="720" border="0">
                        <tr>
                                                   <td width="272" height="55"><label>     Total Amount:</label></td>
                                                   <td width="333">
                                                       {{ Form::input('text', 'total_amount', null,array('id' => 'Tamount')) }}
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td width="272" height="55"><label>      Payable Amount*</label></td>
                                                   <td width="333">
                                                  {{ Form::input('text', 'payable_amount', null,array('id' => 'Pamount')) }}
                                                  </td>
                                               </tr>
                                               <tr>
                                                   <td width="272" height="55"><label>      Receivable Amount*</label></td>
                                                   <td width="333">{{ Form::input('text', 'receivable_amount', null,array('id' => 'Ramount')) }}
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