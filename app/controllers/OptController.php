<?php

class OptController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$opt = Opt::all();
        return \Illuminate\Support\Facades\View::make('opt.index',compact('opt'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $doctors = Employee::where('role', 'Doctor')->where('status', 'active')->get();
        $patients = Patient::all();
        return View::make('opt.create', compact('doctors', 'patients'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $validator = Validator::make($data = Input::all(), Opt::$rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        $data['time'] = Timeslot::findOrFail($data['timeslot_id'])->slot;
        Opt::create($data);

        return Redirect::route('opt.index');

    }


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $opt = Opt::findOrFail($id);

        return View::make('opt.show', compact('opt'));

    }


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $doctors = Employee::where('role', 'Doctor')->where('status', 'active')->get();
        $patients = Patient::all();
        $opt = Opt::find($id);
        $timeslot = $opt->timeslot->first()->where('dutyday_id', $opt->timeslot->dutyday_id)->lists('slot','id');

        return View::make('opt.edit', compact('timeslot','opt', 'doctors', 'patients'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $opt = Opt::findOrFail($id);

        $validator = Validator::make($data = Input::all(), Opt::$rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        $data['time'] = Timeslot::findOrFail($data['timeslot_id'])->slot;

        if(Input::get('status') == '3' || Input::get('status') == '4' || Input::get('status') == '5'){
            $data['time'] = null;
        }

        $opt->update($data);

        return Redirect::route('opt.index');

    }


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
        echo'lkasdkjf';
        $id = $_GET['id'];
        $opt = Opt::find($id);
        $opt->delete();
        return Redirect::route('opt.index');

    }


}
