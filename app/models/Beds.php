<?php

class Beds extends \Eloquent {
    protected $table = 'beds';

    // Add your validation rules here
    public static $rules = [
        // 'title' => 'required'
        'ward_id' => '',
        'bed_no' => '',
                //'ward' => 'required'


    ];

// Don't forget to fill this array
    protected $fillable = ['ward_id', 'bed_no','ward_type','status'];



//  Relationships
  public function wards()
   {
      return $this->belongsTo('Wards', 'ward_id', 'id');
  }
    public function patient()
    {
        return $this->hasOne('Patient','bed','id');
    }

//    public function drugusages()
//    {
//        return $this->hasMany('Drugusage');
//    }
//
//    public function familyhistories()
//    {
//        return $this->hasMany('Familyhistory');
//    }
//
//    public function previousdiseases()
//    {
//        return $this->hasMany('Previousdisease');
//    }
//
//    public function surgicalhistories()
//    {
//        return $this->hasMany('Surgicalhistory');
//    }
//
//    public function diagonosticprocedures()
//    {
//        return $this->hasMany('Diagonosticprocedure');
//    }
//
//    public function vitalsigns()
//    {
//        return $this->hasMany('Vitalsign');
//    }
//
//    public function labtests()
//    {
//        return $this->hasMany('Labtest');
//    }
//
//    public function appointments()
//    {
//        return $this->hasMany('Appointment');
//    }
//
//    public function prescriptions()
//    {
//        return $this->hasMany('Prescription');
//    }
//
//    public function checkupfees()
//    {
//        return $this->hasMany('Checkupfee');
//    }
}