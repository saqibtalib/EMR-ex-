<?php

class ConsumptionsController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */


    public function listCons()
    {
//        $id= Input::get('id');
//        $patient = Patient::find($id);
//        $Consumptions = $patient->UpdateHs()->get();


       $Consumptions = Consumptions::all();
        return View::make('consumptions.listcons', compact('Consumptions'));



        }
	public function index()
	{

        $patients = Patient::all();
        return View::make('consumptions.index',compact('patients'));
//        $id = Input::get('id');
//        $patient = Patient::find($id);
//        $Consumptions = $patient->Consumptions()->get();
//        return View::make('consumptions.index', compact('Consumptions'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

      $patient_id = Input::get('id');
        return View::make('consumptions.create',compact('patient_id'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $Consumptions = new Consumptions();
        $Consumptions->patient_id = Input::get('patient_id',false);
        $Consumptions->meal = Input::get('meal');
        $Consumptions->save();
        $Consumptions->medicine = Input::get('medicine');
        $Consumptions->save();
        $Consumptions->others = Input::get('others');
        $Consumptions->save();

        $patients = Patient::all();
        return View::make('consumptions.index',compact('patients'));

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


        $Consumptions = Consumptions::findOrFail($id);

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

        $Consumptions = Consumptions::all();
        return View::make('consumptions.listcons', compact('Consumptions'));

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
////redirect
//     Session::flash('message','successfully deleted');
        $Consumptions = Consumptions::all();
        return View::make('consumptions.listcons', compact('Consumptions'));
	}


}
