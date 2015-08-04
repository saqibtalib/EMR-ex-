<?php

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class WardsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
//   echo 'i mm here';
       $wards = Wards::all();
        return View::make('wards.index',compact('wards'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{


        return View :: make('wards.create');


	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
     *
     *
     *
	 */


//    public  function addroom(){
//        echo'ajsklfkasjfhklsajfklsajfklsajfklsajdlf';
//        {
//            $validator = Validator::make($data = Input::all(), Rooms::$rules);
//
//            if ($validator->fails()) {
//                return Redirect::back()->withErrors($validator)->withInput();
//            }
//
//            $room = new Rooms();
//
//
//
//            $room->room_type = Input::get('roomtype');
//            $room->save();
//            $room->room_location = Input::get('roomlocation');
//            $room->save();
//            $room->room_no = Input::get('roomno');
//            $room->save();
//        }
//        return Redirect::route('rooms.index');
//
//
//
//    }
	public function store()
	{
        {
            $validator = Validator::make($data = Input::all(), Wards::$rules);

            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator)->withInput();
            }

            $ward = new Wards();



            $ward->ward_name = Input::get('wardname');
            $ward->save();
            $ward->ward_type = Input::get('wardtype');
            $ward->save();

        }
        return Redirect::route('wards.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $ward = Wards::findOrFail($id);

        return View::make('wards.show', compact('ward'));
    }



	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

        $ward = Wards::find($id);

        return View::make('wards.edit', compact('ward'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $ward = Wards::findOrFail($id);

        $validator = Validator::make($data = Input::all(), Wards::$rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $ward->update($data);

        return Redirect::route('wards.index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
        $id = $_GET['id'];
        $ward = Wards::find($id);
        $ward->delete();
        return Redirect::route('wards.index');
	}


}
