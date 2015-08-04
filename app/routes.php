<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

///////////////////////////////// PUBLIC ROUTES ///////////////////////////////////
Route::get('/', function()
{
    Auth::logout();
	return View::make('index');
});

Route::get('/login', function(){
    Auth::logout();
    return View::make('login');
});

Route::get('/logout', array('before' => 'auth', function(){
    Auth::logout();
    return View::make('login');
}));

Route::get('/about', 'HomeController@showAbout');

Route::get('/services', 'HomeController@showServices');

Route::get('/contacts', 'HomeController@showContacts');

Route::post('validate', 'EmployeesController@validate');

Route::controller('password', 'RemindersController');

Route::get('remind', 'RemindersController@getRemind');

/////////////////////////////////////// PRIVATE ROUTES ////////////////////////////////////////////
Route::group(array('before' => 'auth'), function(){

    ////////////////////// Super User Routes START ///////////////////////
    Route::group(array('before' => 'Super'), function(){
        Route::get('/super_home', 'HomeController@showSuper_home');

        Route::resource('employees', 'EmployeesController');

        Route::get('super_about', function(){
            return View::make('super.about');
        });
        Route::get('super_contacts', function(){
            return View::make('super.contacts');
        });
        Route::get('super_services', function(){
            return View::make('super.services');
        });

        Route::resource('clinics', 'ClinicsController');

    });
    ////////////////////// Admin Routes END ///////////////////////

    ////////////////////// Admin Routes START ///////////////////////
    Route::group(array('before' => 'Administrator'), function(){
        Route::get('/admin_home', 'HomeController@showAdmin_home');

        Route::resource('employees', 'EmployeesController');

        Route::get('admin_about', function(){
            return View::make('admin.about');
        });
        Route::get('admin_contacts', function(){
            return View::make('admin.contacts');
        });
        Route::get('admin_services', function(){
            return View::make('admin.services');
        });

    });
    ////////////////////// Admin Routes END ///////////////////////


    ////////////////// Doctor Routes START ///////////////////
    Route::any('/doctor_home', array('before' => 'Doctor', 'uses' => 'HomeController@showDoctor_home'));

    Route::get('doctor_about', function(){
        return View::make('doctor.about');
    });
    Route::get('doctor_contacts', function(){
        return View::make('doctor.contacts');
    });
    Route::get('doctor_services', function(){
        return View::make('doctor.services');
    });
    ////////////////// Doctor Routes END ///////////////////


    /////////////////// Receptionist Routes START /////////////////
    Route::get('/receptionist_home', array('before' => 'Receptionist', 'uses' => 'HomeController@showReceptionist_home'));

    Route::get('receptionist_about', function(){
        return View::make('receptionist.about');
    });
    Route::get('receptionist_contacts', function(){
        return View::make('receptionist.contacts');
    });
    Route::get('receptionist_services', function(){
        return View::make('receptionist.services');
    });
    /////////////////// Receptionist Routes END ///////////////////


    /////////////////// LabManager Routes START ///////////////////
    Route::get('/labmanager_home', array('before' => 'Lab', 'uses' => 'HomeController@showLabmanager_home'));
    Route::get('lab_about', function(){
        return View::make('lab.about');
    });
    Route::get('lab_contacts', function(){
        return View::make('lab.contacts');
    });
    Route::get('lab_services', function(){
        return View::make('lab.services');
    });
    /////////////////// LabManager Routes END ///////////////////


    ////////////////// Accountant Routes /////////////////
    Route::get('/accountant_home', array('before' => 'Accountant', 'uses' => 'HomeController@showAccountant_home'));
    Route::get('accountant_about', function(){
        return View::make('accountant.about');
    });
    Route::get('accountant_contacts', function(){
        return View::make('accountant.contacts');
    });
    Route::get('accountant_services', function(){
        return View::make('accountant.services');
    });
    /////////////////// Accountant Routes END ///////////////////




    ////////////////// Pharmacy Routes /////////////////
    Route::get('/pharmacy_home', array('before' => 'Pharmacy', 'uses' => 'HomeController@showPharmacy_home'));
    Route::get('pharmacy_about', function(){
        return View::make('pharmacy.about');
    });
    Route::get('pharmacy_contacts', function(){
        return View::make('pharmacy.contacts');
    });
    Route::get('pharmacy_services', function(){
        return View::make('pharmacy.services');
    });
    /////////////////// Pharmacy Routes END ///////////////////


    //****************************** Common Routes *******************************//

    Route::resource('patients', 'PatientsController');

    Route::resource('schedules', 'SchedulesController');

    Route::resource('surgicalhistories', 'SurgicalhistoriesController');

    Route::resource('familyhistories', 'FamilyhistoriesController');

    Route::resource('previousdiseases', 'PreviousdiseasesController');

    Route::resource('allergies', 'AllergiesController');

    Route::resource('drugusages', 'DrugusagesController');

    Route::resource('diagonosticprocedures', 'DiagonosticproceduresController');

    Route::resource('vitalsigns', 'VitalsignsController');

    Route::resource('labtests', 'LabtestsController');

    Route::resource('prescriptions', 'PrescriptionsController');

    Route::resource('medicines', 'MedicinesController');

    Route::resource('vendor','VendorsController@index');
    Route::resource('vendors','VendorsController@create');
    Route::resource('vendorstore','VendorsController@store');
    Route::resource('ven','VendorsController@show');
    Route::resource('vend','VendorsController@edit');
    Route::resource('vd','VendorsController@update');
    Route::resource('balancesheet','BalancesheetsController');


    /*------------------------------------------------------------*/
    Route::resource('rooms','RoomsController');
    Route::resource('rooms','RoomsController@index');
    Route::resource('addrooms','RoomsController@create');

//    Route::get('','RoomsController@store');

////////////////////////////////////////nurse///////////////////////////////////////
    Route::any('/nurse_home', array('before' => 'nurse', 'uses' => 'HomeController@showNurse_home'));
    Route::resource('nurse', 'NurseController@index');
    Route::resource('pHS', 'NurseController@update');
    Route::resource('pConsumption', 'ConsumptionsController@update');
    Route::any('list', 'NurseController@index');
    Route::any('sheetone', 'NurseController@create');
    Route::any('sheet', 'NurseController@store');
    Route::get('view_sheet', 'NurseController@show');
    Route::get('update_sheet', 'HomeController@showUpdate_sheet');
    Route::get('edit_sheet', 'NurseController@edit');
    Route::get('del_sheet', 'NurseController@destroy');
    Route::get('delDoc_sheet', 'ViewPatientController@destroy');
    Route::resource('cons', 'HomeController@cons');
    Route::any('pcons', 'ConsumptionsController@store');
    Route::any('consume', 'HomeController@consume');
    Route::get('view_cons', 'ConsumptionsController@show');
    Route::get('edit_cons', 'ConsumptionsController@edit');
    Route::resource('view_patient', 'HomeController@vwpatient');
    Route::get('del_cons', 'ConsumptionsController@destroy');
    Route::get('list_cons', 'ConsumptionsController@listCons');
///////////////////////////nurse end///////////////////////////////////////////////

    /*------------------------------------------------------------*/
    Route::resource('ipd', 'IPDController');

    Route::resource('opd', 'HomeController@showReceptionist_OPD');
    Route::resource('adminopd', 'HomeController@showAdmin_opd');
    Route::resource('ipd_home', 'HomeController@showReceptionist_IPD');
    Route::resource('ipd_patient', 'IPDController@index');
    Route::resource('adminipdhome', 'HomeController@showAdmin_ipd');
    Route::resource('managebeds', 'AdminIPDController@index');
    Route::resource('addbeds', 'AdminIPDController@create');
    Route::resource('managewards', 'WardsController@index');
    Route::resource('wards', 'WardsController');
    Route::get('destroybed', 'AdminIPDController@destroy');
    Route::get('destroyward', 'WardsController@destroy');
    Route::get('destroyroom', 'RoomsController@destroy');
    Route::resource('rooms', 'RoomsController@index');
    Route::resource('rooms', 'RoomsController');


  //////************************************extension
    function showReceptionist_OPD()
    {

        return View::make('receptionist.rep');
    }
     function showAdmin_opd()
    {

        return View::make('admin.admin_opd');
    }
    function showAdmin_ipd()
    {

        return View::make('admin.admin_ipd');
    }
     function showReceptionist_IPD()
    {

        return View::make('receptionist.receptionist_ipd');
    }
    function showReceptionist_IPD_index()
    {

        return View::make('ipd.ipd_index');
    }
     function showReceptionist_IPD_create()
    {

        return View::make('ipd.ipd_create');
    }
    Route::resource('addrooms', 'RoomsController@create');
  Route::resource('adminipd', 'AdminIPDController');

///////////////////////////////////////////////SSSSSSSSS////////////////////////



    Route::resource('bill','BillsController');
    Route::resource('dispatchlist','DispatchlistsController');
   // Route::resource('balancesheet','BalancesheetsController@create');
    // Medical Record Routes
    Route::get('search_pmr', 'HomeController@showSearchPMR');
    Route::any('view_pmr', 'HomeController@showViewPMR');

    Route::resource('dutydays', 'DutydaysController');
    Route::resource('opd', 'HomeController@showReceptionist_OPD');

    Route::resource('timeslots', 'TimeslotsController');

    Route::resource('appointments', 'AppointmentsController');

    Route::resource('dispatch', 'HomeController@showDispatch');

    Route::get('app_vitals', function(){
        if(Auth::user()->role == 'Administrator' || Auth::user()->role == 'Receptionist'){
            $appointments = Appointment::has('vitalsign', '=', 0)->get();
        }elseif(Auth::user()->role == 'Doctor'){
            $appointments = Appointment::has('vitalsign')->where('employee_id', Auth::id())->get();
        }
        $flag = "vitals";
        return View::make('appointment_based_data.appointments', compact('appointments', 'flag'));
    });

    Route::get('app_prescription', function(){
        $appointments = Appointment::has('prescription', '=', 0)->get();
        $flag = "prescription";
        return View::make('appointment_based_data.appointments', compact('appointments', 'flag'));
    });

    Route::get('app_tests', function(){
        if(Input::get('id') !== null){
            $appointments = Appointment::where('patient_id', Input::get('id'))->get();
        }else{
            $appointments = Appointment::all();
        }
        $flag = "test";
        return View::make('appointment_based_data.appointments', compact('appointments', 'flag'));
    });

    Route::get('app_proc', function(){
        $appointments = Appointment::has('diagonosticprocedure', '=', 0)->get();
        $flag = "proc";
        return View::make('appointment_based_data.appointments', compact('appointments', 'flag'));
    });

    Route::get('app_check_fee', function(){
        if(Auth::user()->role == "Accountant"){
            $appointments = Appointment::all();
        }else{
            $appointments = Appointment::has('checkupfee', '=', 0)->get();
        }
        $flag = "check_fee";
        return View::make('appointment_based_data.appointments', compact('appointments', 'flag'));
    });

       /* Route::get('app_view_vendor', function(){
        if(Auth::user()->role == "Accountant"){
            $vendor = Vendor::all();
       }else{
            $vendor = Vendor::has('vendor')->get();
        }
        $flag = "view_vendor";
        return View::make('vendors.index', compact('vendors', 'flag'));
    });*/

    Route::get('app_test_fee', function(){
       if(Input::get('id') !== null){
            $appointments = Appointment::where('patient_id', Input::get('id'))->get();
        }else{
            $appointments = Appointment::has('labtests')->get();
        }
        $flag = "test_fee";
        return View::make('appointment_based_data.appointments', compact('appointments', 'flag'));
    });

    Route::resource('checkupfees', 'CheckupfeesController');

    Route::resource('testfees', 'TestfeesController');

    // PDF Reports
    Route::any('print_pres', ['uses' => 'HomeController@print_pres']);  // Prescription PDF
    Route::any('print_test', ['uses' => 'HomeController@print_test']);  // Test Report PDF

    // Prints
    Route::get('app_pres_print', function(){
        $appointments = Appointment::has('prescription')->get();
        $flag = "pres_print";
        return View::make('appointment_based_data.appointments', compact('appointments', 'flag'));
    });

    Route::get('pres_print', function(){
        $id = Input::get('id');
        $prescription = Prescription::findOrFail($id);
        $date = date('j F, Y', strtotime($prescription->appointment->date));
        $time = date('H:i:s', strtotime($prescription->appointment->time));
        $doctor_name = $prescription->appointment->employee->name;
        $patient = $prescription->appointment->patient;

        $medicines = [];
        foreach(explode(',', $prescription->medicines) as $id){
            array_push($medicines, Medicine::find($id));
        }

        return View::make('printables.prescription_print',
            compact('prescription', 'date', 'time', 'doctor_name', 'patient', 'medicines'));
    });

    Route::get('app_test_print', function(){
        $appointments = Appointment::has('labtests')->get();
        $flag = "test_print";
        return View::make('appointment_based_data.appointments', compact('appointments', 'flag'));
    });

    Route::get('test_print', function(){
        $id = Input::get('id');
        $test = Labtest::findOrFail($id);
        $patient = $test->appointment->patient;
        $date = date('j F, Y', strtotime($test->appointment->date));
        $time = date('H:i:s', strtotime($test->appointment->time));
        $doctor_name = $test->appointment->employee->name;

        return View::make('printables.test_print',
            compact('test', 'date', 'time', 'doctor_name', 'patient'));
    });

    Route::get('app_checkup_fee_print', function(){
        $appointments = Appointment::has('checkupfee')->get();
        $flag = "checkup_invoice";
        return View::make('appointment_based_data.appointments', compact('appointments', 'flag'));
    });

    Route::get('checkup_invoice_print', function(){
        $id = Input::get('id');
        $fee = Checkupfee::findOrFail($id);
        $patient = $fee->appointment->patient;
        $date = date('j F, Y', strtotime($fee->appointment->date));
        $time = date('H:i:s', strtotime($fee->appointment->time));
        $doctor_name = $fee->appointment->employee->name;

        return View::make('printables.checkup_invoice_print',
            compact('fee', 'date', 'time', 'doctor_name', 'patient'));
    });

    Route::get('app_test_fee_print', function(){
        $appointments = Appointment::has('labtests')->get();
        $flag = "test_invoice";
        return View::make('appointment_based_data.appointments', compact('appointments', 'flag'));
    });

    Route::get('test_invoice_print', function(){
        $id = Input::get('id');
        $appointment = Appointment::findOrFail($id);
        $tests = $appointment->labtests()->where('total_fee', '!=', 0)->get();

        $patient = $appointment->patient;
        $date = date('j F, Y', strtotime($appointment->date));
        $time = date('H:i:s', strtotime($appointment->time));
        $doctor_name = $appointment->employee->name;

        $sum = 0;
        foreach($tests as $test){
            $sum += $test->total_fee;
        }

        return View::make('printables.test_invoice_print',
            compact('sum', 'tests', 'date', 'time', 'doctor_name', 'patient'));
    });

    Route::get('pdf_record', function(){
        $id = Input::get('id');
        $patient = Patient::find($id);
        $appointments = $patient->appointments()->get();
        $flag = "pdf_record";
        return View::make('appointment_based_data.appointments', compact('appointments', 'flag'));
    });

    Route::get('pdf', 'HomeController@pdf_record');

    //    Ajax Requests
    Route::get('getSlots', 'TimeslotsController@getFreeSlots');
//****************************************************************//

});

//Roles
    // 1- Administrator
    // 2- Doctor
    // 3- Accountant
    // 4- Receptionist
    // 5- Lab Manager

// Appointment Statuses Values in DB
//    '0' = 'Reserved'
//    '1' = 'Waiting'
//    '2' = 'Check-in'
//    '3' = 'No Show'
//    '4' = 'Cancelled'
//    '5' = 'Closed'


