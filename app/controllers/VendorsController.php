<?php

class VendorsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /vendor
	 *
	 * @return Response
	 */
	public function index()
	{   $vendors = Vendor::all();

        return View::make('vendors.index',compact('vendors'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /vendor/create
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('vendors.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /vendor
	 *
	 * @return Response
	 */
	public function store()
	{
      /* $validator = Validator::make($data = Input::all(), Vendor::$rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }*/

        $vendor = new vendor();
        $vendor->name = Input::get('name');
        $vendor->save();
        $vendor->vendor_type = Input::get('vendortype');
        $vendor->save();
        if(Input::has('email')){
            $vendor->email = Input::get('email');
            $vendor->save();
        }else{
            $vendor->email = 'N/A';
            $vendor->save();
        }
        $vendor->city = Input::get('city');
        $vendor->save();
        $vendor->address = Input::get('address');
        $vendor->save();

        if(Input::has('mobile')){
            $vendor->mobile = Input::get('mobile');
            $vendor->save();
        }else{
            $vendor->mobile = 'N/A';
            $vendor->save();
        }

       /* if(Input::get('mobile') == ''){
            $vendor->mobile = 'N/A';
        }else {
            $vendor->mobile = Input::get('mobile');
        }
        $vendor->save();*/

        if(Input::has('cnic')){
            $vendor->cnic = Input::get('cnic');
            $vendor->save();
        }else{
            $vendor->cnic = 'N/A';
            $vendor->save();
        }

       /* if(Input::get('cnic') == ''){
            $vendor->cnic = 'N/A';
        }else {
            $vendor->cnic = Input::get('cnic');
       $vendor->save();
        }*/


        if(Input::get('note') == ''){
            $vendor->note = 'N/A';
        }else {
            $vendor->note = Input::get('note');
        }
        $vendor->save();

        $vendor->vendor_id = "V0" . $vendor->id;
        $vendor->save();

      /*  if(Input::has('email')){
            $data = ['name' => Input::get('name')];
            Mail::queue('emails.vendor_welcome', $data, function($message)
            {
                $message->to(Input::get('email'), Input::get('name'))->subject('Welcome to EMR!');
            });*/



        return Redirect::route('vendor.index');

	}

	/**
	 * Display the specified resource.
	 * GET /vendor/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $vendor = Vendor::findOrFail($id);

        return View::make('vendors.show', compact('vendor'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /vendor/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $vendor = Vendor::find($id);

        return View::make('vendors.edit', compact('vendor'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /vendor/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $vendor = Vendor::findOrFail($id);

        $data = Input::all();
                  /*$validator = Validator::make($data = Input::all());

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }*/

        $vendor->update($data);

        return Redirect::route('vendor.index');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /vendor/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        Vendor::destroy($id);

        return Redirect::route('vendors.index');
	}

}