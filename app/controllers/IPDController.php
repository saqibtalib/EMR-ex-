<?php
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
class IPDController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function destroypatient()
    {
        $id = $_GET['id'];
////        $patient->bed = Input::get('bed');
//        $patient = Patient::find($id);
//        \Illuminate\Support\Facades\DB::update("update beds set status ='active' where id='$patient->bed'");
//        \Illuminate\Support\Facades\DB::update("update rooms set status ='active' where id='$patient->room'");
////        \Illuminate\Support\Facades\DB::table('bills')->where($patient,'id')

//        $patient->delete();
        $bill = bill::findOrFail($id);
//        $bill = Bill::all();
        return View :: make('discharge.discharge_slip',compact('bill'));


    }
    public function patientbill()
    {
        $id = $_GET['id'];
//        $patient = \Illuminate\Support\Facades\DB::table('patients')->where('id',$id)->get(['name']);
        $bill = \Illuminate\Support\Facades\DB::table('bills')->where('patient_id',$id)->get();
        return \Illuminate\Support\Facades\View::make('discharge.discharge_home',compact('bill'));

    }

	public function index()
	{
        $patients = Patient::all();

        return View :: make('ipd.index', compact('patients'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */


    public function bedouts()
    {

        $data = filter_input(INPUT_POST, 'val');
        $bed = DB::table('beds')->where('status','active')->where('ward_id',$data)->lists('bed_no','id');
        echo json_encode($bed);
        return;

    }




	public function create()
	{

        $ward = Wards::lists('ward_name','id');
//       $room = Rooms::lists('room_no','id');
//        $beds = Wards::find(Input::get('ward'));

//       $patient->ward_id = $wards->id;
//        $rom = Rooms::lists('room_no','id');
//        $bed = Beds::lists('bed_no','id');

        $bed = DB::table('beds')->where('status','active')->lists('bed_no','id');
        $room = DB::table('rooms')->where('status','active')->lists('room_no','id');
//        $bed = \Illuminate\Support\Facades\DB::select("select beds where status = 'active' and ward_id ='$beds->ward' ")->;
//        $bed = Beds::lists($roles);
//       $patient = Patient::all();
//       $bedid = $patient->bed->first();
//        if($bedid == $bed['id'] ){
//            echo'kjsahfdkajskfjk';
//            exit();

//        }
        return View :: make('ipd.create', compact('ward',"bed",'room'));



	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
    {

        {
            $validator = Validator::make($data = Input::all(), Patient::$rules);

            if ($validator->fails()) {
                return Redirect::back()->withErrors($validator)->withInput();
            }

            $patient = new Patient();

            $ward = Wards::find(Input::get('ward'));


//            $patient->ward_id = $ward->id;
            $patient->ward_id = $ward->id;
//            $patient->save();

            $patient->name = Input::get('name');
//            $patient->save();
            $patient->dob = Input::get('dob');
//            $patient->save();
            if (Input::has('email')){
                $patient->email = Input::get('email');
//                $patient->save();
            } else {
                $patient->email = 'N/A';
//                $patient->save();
            }
            $patient->gender = Input::get('gender');
//            $patient->save();
            $patient->age = Input::get('age');
//            $patient->save();
            $patient->city = Input::get('city');
//            $patient->save();
            $patient->country = Input::get('country');
//            $patient->save();
            $patient->address = Input::get('address');
//            $patient->save();
//            $patient->ward = Input::get('ward');
//            $patient->save();
            $patient->bed = Input::get('bed');
//            $patient->save();
//            $beds = Beds::find('status');
//            $beds ='active';
//            $beds->save();

//            exit();
//            $patient->$bedid ='active';
//            $bedid->save();
            $patient->status  = 'IPD';

            $patient->room = Input::get('room');
//            $patient->save();

            if (Input::get('phone') == '') {
                $patient->phone = 'N/A';
            } else {
                $patient->phone = Input::get('phone');
            }
//            $patient->save();

            if (Input::get('cnic') == '') {
                $patient->cnic = 'N/A';
            } else {
                $patient->cnic = Input::get('cnic');
            }
//            $patient->save();

            if (Input::get('note') == '') {
                $patient->note = 'N/A';
            } else {
                $patient->note = Input::get('note');
            }
//            $patient->save();

            $patient->patient_id = "P0" . $patient->id;
            $patient->save();
            \Illuminate\Support\Facades\DB::update("update beds set status='inactive' where id='$patient->bed'");
            \Illuminate\Support\Facades\DB::update("update rooms set status='inactive' where id='$patient->room'");
            echo"this is";
//            if(Input::has('email')){
//                $data = ['name' => Input::get('name')];
//                Mail::queue('emails.patient_welcome', $data, function($message)
//                {
//                    $message->to(Input::get('email'), Input::get('name'))->subject('Welcome to EMR!');
//                });
//            }
            // "agya";

//
//
            return Redirect::to('ipd_patient');
        }
    }

        /**
         * Display the specified patient.
         *
         * @param  int  $id
         * @return Response
         */
        public function show($id)
    {
        $patient = Patient::findOrFail($id);

        return View::make('ipd.show', compact('patient'));
    }

        /**
         * Show the form for editing the specified patient.
         *
         * @param  int  $id
         * @return Response
         */
        public function edit($id)
        {

            $patient = Patient::find($id);
            $ward = Wards::lists('ward_name','id');
            //$bed = Beds::lists('bed_no','id');
            $bed = DB::table('beds')->where('status','active')->lists('bed_no','id');
            return View :: make('ipd.edit', compact('patient','ward',"bed"));

      // return View::make('ipd.edit', compact('patient'));
        }

        /**
         * Update the specified patient in storage.
         *
         * @param  int  $id
         * @return Response
         */
        public function update($id)
    {
       $patient = Patient::findOrFail($id);

        $validator = Validator::make($data = Input::all(), Patient::$rules);

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $patient->update($data);

        return Redirect::route('ipd.index');
}
//
//        /**
//         * Remove the specified patient from storage.
//         *
//         * @param  int  $id
//         * @return Response
//         */
//        public function destroy($id)
//    {
//        Patient::destroy($id);
//
//        return Redirect::route('patients.index');
//    }
//
//    }



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */



	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */


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
        $patient = Patient::find($id);
//        echo $id;

        \Illuminate\Support\Facades\DB::update("update beds set status ='active' where id='$patient->bed'");
        \Illuminate\Support\Facades\DB::update("update rooms set status ='active' where id='$patient->room'");
        \Illuminate\Support\Facades\DB::table('bills')->where('patient_id',$id)->delete();
        \Illuminate\Support\Facades\DB::table('consumptions')->where('patient_id',$id)->delete();
//        \Illuminate\Support\Facades\DB::table('bills')->where($patient,'id')
//        $bill->delete();
        $patient->delete();
        return Redirect::route('ipd.index');

	}


}
