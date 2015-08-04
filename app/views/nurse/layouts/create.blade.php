@extends('nurse.layouts.master')
<!--========================================================
                          TITLE
=========================================================-->
@section('title')
Health Sheet
@stop

<!--========================================================
                          CURRENT MENU
=========================================================-->
@section("current_healthsheet")
class="current"
@stop

<!--========================================================
                          CONTENT-1
=========================================================-->
@section('content1')

    <section id="content">

		<div class = "user_logo">
			<div class="header_1 wrap_3 color_3" style="color: #fff; padding-top: 20px">
                        Health Sheet
            </div>
		</div>
@stop

<!---------------- Breadcrumbs ------------------>
{{--@section('breadcrumbs')--}}
    {{----}}
    {{--<div class="breadcrumb flat">--}}
      {{--<a href="admin_home" class="active">Home</a>--}}
      {{--<!-- <a href="#">Unused</a>--}}
      {{--<a href="#">Unused</a>--}}
      {{--<a href="#">Unused</a> -->--}}
    {{--</div>--}}
    {{----}}
{{--@stop--}}
<!---------------End of Breadcrumbs -------------->


@section('content2')
 {{ Form::open(array('action' => 'NurseController@store', 'style' => 'padding: 40px', 'id' => 'sheet')) }}
<table style="margin-left: 31%;margin-top: 5%">
<tr><td  style="padding:2%">
<center style="margin-top: 1%;">
 <input type="submit" value="Save" class="btn_1" />


                                 <center>
                                                  <section style="margin-bottom: 10%">
                                                     <input type="submit" onclick="back()" value="Back" class="btn_1" />
                                                  </section>
                                             </center>
			<div>
				<div  value="{{{ Form::getValueAttribute('sheet', null) }}}" class="menu" style="margin-left: 30%; ">
			<tr><td>	{{ Form::textarea('sheet', null, array('rows' => '10','required'=>'true', 'cols' => '50', 'placeholder' => 'Health Sheet', "style" => "font-size: 1.2em; margin-top: 2px; resize: none;") ) }}
</td></tr>
				<!---- <textarea style="color: #000000; background-color:#ffffff " rows="20" cols="75" id="sheet">

					</textarea>---->



				</div>
			</div>
</center>
</td>
</tr>
</table>

			 {{ Form::close() }}

</section>
@stop