<?php

class BillsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $bill = bill::all();

        return View::make('bills.index',compact('bill'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{  $patient = Patient::get(['name','id'])->lists('name','id');
        return View::make('bills.create',compact('patient'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $bill = new bill();

        $patient = Patient::find(Input::get('patient'));
        $bill->patient_id=$patient->id;
        $bill->save();




        if(Input::has('room')){
            $bill->room_charges = Input::get('room');
            $bill->save();
        }else{
            $bill->room_charges = 'N/A';
            $bill->save();
        }

        if(Input::has('bed')){
            $bill->bed_charges = Input::get('bed');
            $bill->save();
        }else{
            $bill->bed_charges = 'N/A';
            $bill->save();
        }

        $bill->operation_charges = Input::get('operation');
        $bill->save();
        $bill->meal_charges = Input::get('meal');
        $bill->save();
        $bill->medicine_charges = Input::get('medicine');
        $bill->save();
        $bill->total_charges = Input::get('total');
        $bill->save();
        ;

        if(Input::get('note') == ''){
            $bill->note = 'N/A';
        }else {
            $bill->note = Input::get('note');
        }
        $bill->save();

        $bill->bill_id = "B0" . $bill->id;
        $bill->save();

        return Redirect::route('bill.index');

    }



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $bill = bill::findOrFail($id);

        return View::make('bills.show', compact('bill'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $bill = bill::findOrFail($id);

        return View::make('bills.edit', compact('bill'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $bill = Bill::findOrFail($id);

        $data = Input::all();


        $bill->update($data);

        return Redirect::route('bill.index');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
