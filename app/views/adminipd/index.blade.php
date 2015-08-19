@extends('adminipd.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
    Manage Wards
@stop


<!--========================================================
                          CONTENT
=========================================================-->
@section('content2')
    <section id="content">

		<div class = "user_logo">
			<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                        Manage Beds
            </div>
		</div>


               <!--========================================================
                                     Data Table
                   =========================================================-->
            <center style="margin-top: 7%;">
           <center>
                   {{ link_to_route('addbeds.create', 'Add beds', '', ['class' => 'btn_1'])}}

           </center>
            		<br>
                <table id="example" style=" border: 1px solid black; " class="display" cellspacing="0" width="95%">
                <thead style="font-weight: bold;">
                    <tr>


                        <th>Ward name</th>
                        <th>Ward type</th>
                        <th>Bed no</th>

                        <th style="width: 25%">Manage</th>
                    </tr>
                </thead>

                <tbody align="center">


                     @foreach($beds as $bed)


                        <tr style=" border: 1px solid black">
                            {{--$w_id=$bed->Ward_id;--}}
                            <td>{{{ $bed->wards->ward_name}}}</td>
                            <td>{{{ $bed->ward_type}}}</td>
                            <td>{{{ $bed->bed_no }}}</td>


                            <td>

                                {{ link_to_route('adminipd.show', 'View', [$bed->id], ['class' => 'data_table_btn', 'style' => 'margin-bottom: 2px'])}}
                                {{ link_to_route('adminipd.edit', 'Edit', [$bed->id], ['class' => 'data_table_btn'])}}
                                <a class="data_table_btn" href="destroybed?id={{$bed->id}}">Delete</a>

                            </td>




                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            </center>


@stop

