

<?php

class Consumptions extends \Eloquent {
    protected $fillable = ['patient_id','meal','medicine','others'];

    public function patient()
    {
        return $this->belongsTo('patient');
    }


}