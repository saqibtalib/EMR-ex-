<?php

class ConsumptionsController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function listConsac()
    {
        $Consumptions = Consumptions::all();
        return View::make('consumptions.listconsac', compact('Consumptions'));
    }

    public function listCons()
    {

//        return Redirect::back();
//        $id= Input::get('id');
//        $patients = Patient::find($id);
//   $Consumptions = $patients->Consumptions()->get();
     //   $id= $_GET['id'];

//        return Redirect::back();
    $Consumptions = Consumptions::all();
      return \Illuminate\Support\Facades\View::make('consumptions.listcons', compact('Consumptions'));



        }
	public function index()
	{

        $patients = Patient::all();
//        return View::make('consumptions.index',compact('patients'));
//        $id = Input::get('id');
//        $patient = Patient::find($id);
        $Consumptions = $patients->Consumptions()->get();
        return View::make('consumptions.index', compact('Consumptions'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(){
//	{
   $id= $_GET['id'];
    // $patient_id = Input::get('id');
//        echo $id;
        return View::make('consumptions.create',compact('id'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
      //  return  Input::get('patient_id');
        $Consumptions = new Consumptions();
        $Consumptions->patient_id = Input::get('id',false);
        $Consumptions->meal = Input::get('meal');
        $Consumptions->save();
        $Consumptions->medicine = Input::get('medicine');
        $Consumptions->save();
        $Consumptions->bed = Input::get('bed');
        $Consumptions->save();
        $Consumptions->room = Input::get('room');
        $Consumptions->save();
        $Consumptions->operation = Input::get('operation');
        $Consumptions->save();

        $patients = Patient::all();
        return View::make('consumptions.index',compact('patients'));
//        $Consumptions = Consumptions::all();
//        return View::make('consumptions.listcons', compact('Consumptions'));

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


        $Consumptions = Consumptions::find($id);

        return View::make('consumptions.show', compact('Consumptions','id'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
        $id= $_GET['id'];


        $Consumptions = Consumptions::find($id);

        return View::make('consumptions.edit', compact('Consumptions','id'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $Consumptions = Consumptions::find($id);


        $data = \Illuminate\Support\Facades\Input::all();
        $Consumptions->update($data);
        return Redirect::to('listcons');

//       $patients = Patient::all();
//     return View::make('consumptions.index',compact('patients'));

	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
        $id= $_GET['id'];
        $Consumptions = Consumptions::find($id);
        $Consumptions->delete();
        return Redirect::back();
////redirect
//     Session::flash('message','successfully deleted');
//        $Consumptions = Consumptions::all();
//
//        return View::make('consumptions.listcons', compact('Consumptions'));
	}


}
