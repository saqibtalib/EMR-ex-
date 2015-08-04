<?php
class RoomsController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()

    {
        $rooms = Rooms::all();
        return \Illuminate\Support\Facades\View::make('rooms.index',compact('rooms'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return \Illuminate\Support\Facades\View::make('rooms.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

        {
            $validator = Validator::make($data = Input::all(), Rooms::$rules);

            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator)->withInput();
            }

            $room = new Rooms();






            $room->room_location = Input::get('roomlocation');
            $room->save();
            $room->room_no = Input::get('roomno');
            $room->save();
            $room->room_type = Input::get('roomtype');
            $room->save();
        }
        return Redirect::route('rooms.index');




    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $room =  Rooms::findOrFail($id);

        return View::make('rooms.show', compact('room'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $room = Rooms::find($id);

        return View::make('rooms.edit', compact('room'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $room = Rooms::findOrFail($id);

        $validator = Validator::make($data = Input::all(), Rooms::$rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $room->update($data);

        return Redirect::route('rooms.index');
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
        $room = Rooms::find($id);
        $room->delete();
        return Redirect::route('rooms.index');
    }


}
