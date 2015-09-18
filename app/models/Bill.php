<?php

class Bill extends \Eloquent {

    /* public static $rules = [
         // 'title' => 'required'
         'name' => 'required',
         'city' => 'required',
         'address' => 'required'
     ];*/

    protected $fillable = ['id', 'room_charges','bed_charges', 'operation_charges', 'meal_charges','medicine_charges','total_charges','note','patient_id','bill_id'];

    public function patient()
    {
        return $this->belongsTo('Patient','patient_id','id');
    }

}