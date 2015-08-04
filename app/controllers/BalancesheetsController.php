<?php

class BalancesheetsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /balancesheets
	 *
	 * @return Response
	 */
	public function index()
	{
        $balancesheet = Balancesheet::all();
      //  print_r($balancesheet);

        return View::make('balancesheets.index',compact('balancesheet'));
    }

	/**
	 * Show the form for creating a new resource.
	 * GET /balancesheets/create
	 *
	 * @return Response
	 */
	public function create()
	{

        $vendor = Vendor::get(['name','id'])->lists('name','id');
       // $vendor = Vendor::all();

        return View::make('balancesheets.create', compact('vendor'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /balancesheets
	 *
	 * @return Response
	 */
	public function store()
	{
        $balancesheet = new balancesheet();
       /* $balancesheet->name = Input::get('name');
        $balancesheet->save();
        $balancesheet->vendor_type = Input::get('vendortype');
        $balancesheet->save();*/


        $vendor = Vendor::find(Input::get('vendor'));
        $balancesheet->vendor_id=$vendor->id;
        $balancesheet->save();




        $balancesheet->total_amount = Input::get('Tamount');
        $balancesheet->save();
        $balancesheet->payable_amount = Input::get('Pamount');
        $balancesheet->save();
        $balancesheet->receivable_amount = Input::get('Ramount');
        $balancesheet->save();
//         $balancesheet->vendor_id = Input::get('vendor');
//        $balancesheet->save();
        if(Input::get('note') == ''){
            $balancesheet->note = 'N/A';
        }else {
            $balancesheet->note = Input::get('note');
        }
        $balancesheet->save();

        $balancesheet->balancesheet_id = "B0" . $balancesheet->id;
        $balancesheet->save();

        return Redirect::route('balancesheet.index');

    }



	/**
	 * Display the specified resource.
	 * GET /balancesheets/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $balancesheet = Balancesheet::findOrFail($id);

        return View::make('balancesheets.show', compact('balancesheet'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /balancesheets/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $balancesheet = Balancesheet::findOrFail($id);

        return View::make('balancesheets.edit', compact('balancesheet'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /balancesheets/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $balancesheet = Balancesheet::findOrFail($id);

        $data = Input::all();


        $balancesheet->update($data);

        return Redirect::route('balancesheet.index');
    }


	/**
	 * Remove the specified resource from storage.
	 * DELETE /balancesheets/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        Balancesheet::destroy($id);

        return Redirect::route('balancesheet.index');
	}

}