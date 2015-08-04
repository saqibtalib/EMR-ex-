<?php

class AdminIPDController extends \BaseController
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $beds = Beds::all();



        return \Illuminate\Support\Facades\View::make('adminipd.index', compact('beds'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $ward = Wards::lists('ward_name', 'id');

        return View:: make('adminipd.create', compact('ward'));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

        {
            $validator = Validator::make($data = Input::all(), Beds::$rules);

            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator)->withInput();
            }

            $bed = new Beds();
            //  $ward = new Wards();
            $ward = Wards::find(Input::get('ward'));
            $bed->ward_id = $ward->id;
            $bed->save();
             $bed->ward_type = \Illuminate\Support\Facades\Input::get('type');
//            $bed->Ward_id = Input::get('ward');
//            $bed->save();
            $bed->bed_no = Input::get('bedno');
            $bed->save();
        }
        return Redirect::route('adminipd.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $bed = Beds::findOrFail($id);

        return View::make('adminipd.show', compact('bed'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $bed = Beds::find($id);

        return View::make('adminipd.edit', compact('bed'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        echo "i m here";
        $bed = Beds::findOrFail($id);

        $validator = Validator::make($data = Input::all(), Beds::$rules);

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $bed->update($data);

        return Redirect::route('adminipd.index');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy()
    {
        $id = $_GET['id'];
        $bed = Beds::find($id);
        $bed->delete();
        return Redirect::route('adminipd.index');
    }


}
