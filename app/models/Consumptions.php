

<?php

class Consumptions extends \Eloquent {
    protected $fillable = ['patient_id','meal','medicine','bed','room','operation'];

    public function patient()
    {
       // return $this->belongsTo('patient','patient_id','id');
        return $this->belongsTo('patient');
    }


}