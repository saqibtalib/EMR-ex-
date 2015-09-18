<?php

class Patient extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
        'name' => 'required',
        'gender' => 'required',
        'age' => 'required',
        'city' => 'required',
        'country' => 'required',
        'address' => 'required',
        //'ward' => 'required'


	];

	// Don't forget to fill this array
	protected $fillable = ['name', 'dob', 'gender', 'age', 'email', 'city', 'country', 'address',
    'phone', 'cnic','ward','bed','room','note','hiddenfield','ward_id'];

//  Relationships
    public function allergies()
    {
        return $this->hasMany('Allergy');
    }

    public function wards()
    {
        return $this->belongsTo('Wards', 'ward_id', 'id');
    }
    public function beds()
    {
        return $this->belongsTo('Beds','bed', 'id');
    }
    public function rooms()
    {
        return $this->belongsTo('Rooms','room', 'id');
    }

    public function drugusages()
    {
        return $this->hasMany('Drugusage');
    }

    public function familyhistories()
    {
        return $this->hasMany('Familyhistory');
    }

    public function previousdiseases()
    {
        return $this->hasMany('Previousdisease');
    }

    public function surgicalhistories()
    {
        return $this->hasMany('Surgicalhistory');
    }

    public function diagonosticprocedures()
    {
        return $this->hasMany('Diagonosticprocedure');
    }

    public function vitalsigns()
    {
        return $this->hasMany('Vitalsign');
    }

    public function labtests()
    {
        return $this->hasMany('Labtest');
    }

    public function appointments()
    {
        return $this->hasMany('Appointment');
    }

    public function prescriptions()
    {
        return $this->hasMany('Prescription');
    }

    public function checkupfees()
    {
        return $this->hasMany('Checkupfee');
    }
    public function bill()
    {
        return $this->hasOne('Bill','patient_id','id');
    }
    public function UpdateHs()
    {
        return $this->hasMany('UpdateHs');
    }
    public function consumptions()
    {
        return $this->hasMany('Consumptions','patient_id','id');
    }
//    public function bed()
//    {
//        return $this->Belongsto('Beds');
//    }
}