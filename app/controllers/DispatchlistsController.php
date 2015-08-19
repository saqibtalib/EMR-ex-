<?php

class DispatchlistsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function dispatch()
    {
        $dispatch = \Illuminate\Support\Facades\DB::table('dispatchlists')->where('status','active')->get();
//        $dispatch = Dispatchlist::with('status','active');

        return View::make('accountant.dispatch',compact('dispatch'));
    }

    public function sendlist()

    {

        $id = $_GET['id'];
        $dispatchlist = Dispatchlist::find($id);
        \Illuminate\Support\Facades\DB::update("update dispatchlists set status='active' WHERE id='$dispatchlist->id'");

        return Redirect::to('dispatchlist');
    }

	public function index()
	{
        $dispatchlist = Dispatchlist::all();

        return View::make('dispatch_list.index',compact('dispatchlist'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('dispatch_list.create',compact('dispatchlist'));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
    {
        $dispatchlist = new dispatchlist();
        $dispatchlist->name = Input::get('name');
//        $dispatchlist->save();

        $dispatchlist->req_amount = Input::get('req');
//        $dispatchlist->save();
        $dispatchlist->total_amount = Input::get('total');
//        $dispatchlist->save();
       if(Input::get('note') == ''){
            $dispatchlist->note = 'N/A';
        }else {
            $dispatchlist->note = Input::get('note');
        }
//        $dispatchlist->save();
        $dispatchlist->status = 'inactive';
        $dispatchlist->dispatch_list_id = "D0" . $dispatchlist->id;

        $dispatchlist->save();

        return Redirect::route('dispatchlist.index');

    }



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $dispatchlist = Dispatchlist::findOrFail($id);

        return View::make('dispatch_list.show', compact('dispatchlist'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $dispatchlist = Dispatchlist::findOrFail($id);

        return View::make('dispatch_list.edit', compact('dispatchlist'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $dispatchlist = Dispatchlist::findOrFail($id);

        $data = Input::all();


        $dispatchlist->update($data);

        return Redirect::route('dispatchlist.index');
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
//        $patient->bed = Input::get('bed');
        $dispatchlist = Dispatchlist::find($id);
        $dispatchlist->delete();
//        _      \Illuminate\Support\Facades\DB::update("update beds set status ='active' where id='$patient->bed'");
//        $patient->delete();

       return Redirect::route('dispatchlist.index');
	}


}
