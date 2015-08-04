<?php

class DispatchlistsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
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
        $dispatchlist->save();

        $dispatchlist->req_amount = Input::get('req');
        $dispatchlist->save();
        $dispatchlist->total_amount = Input::get('total');
        $dispatchlist->save();
       if(Input::get('note') == ''){
            $dispatchlist->note = 'N/A';
        }else {
            $dispatchlist->note = Input::get('note');
        }
        $dispatchlist->save();

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
	public function destroy($id)
	{
		//
	}


}
