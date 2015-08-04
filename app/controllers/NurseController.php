<?php

class NurseController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
       // $id= $_GET['id'];
//        $id= Input::get('id');
//       $patient = Patient::find($id);
//
//  $UpdateHs = $patient->UpdateHs()->get();

$UpdateHs = UpdateHs::all();
  return View::make('nurse.layouts.nursePmr', compact('UpdateHs'));

//        return View::make('nurse.layouts.nursePmr');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $patient_id = Input::get('id');

        return View::make('nurse.layouts.create', compact('patient_id'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

        $UpdateHs = new UpdateHs();
      //Input::get('sheet');
//        $patients = Patient::find(Input::get('patients'));
//        $UpdateHs->patient_id=$patients->id;
//        $UpdateHs->save();

        $UpdateHs->health_sheet = Input::get('sheet',false);
        $UpdateHs->patient_id = Input::get('patient_id',false);
        $UpdateHs->save();
        $patients = Patient::all();
        return View::make('nurse.layouts.index',compact('patients'));

       // return Redirect::route('nurse.layouts.index');

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{

     $id= $_GET['id'];


        $UpdateHs = UpdateHs::find($id);

        return View::make('nurse.layouts.show', compact('UpdateHs','id'));

//        $sh = UpdateHs::find($id);
//
//        return View::make('nurse.layouts.show',compact('sh'));

	}




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */



	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
        $id= $_GET['id'];


        $UpdateHs = UpdateHs::find($id);

        return View::make('nurse.layouts.edit', compact('UpdateHs','id'));

    }


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

        $UpdateHs = UpdateHs::find($id);


        $data = \Illuminate\Support\Facades\Input::all();
        $UpdateHs->update($data);


    return Redirect::route('nurse.index');

	}


	public function destroy()

	{
        $id= $_GET['id'];
        $UpdateHs = UpdateHs::find($id);
        $UpdateHs->delete();
//redirect
        Session::flash('message','successfully deleted');
        return Redirect::route('nurse.index');
	}


}
