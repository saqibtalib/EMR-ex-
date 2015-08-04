<?php

class UpdateHs extends \Eloquent {

    protected $fillable = ['patient_id','health_sheet'];

    public function patient(){
        return $this->belongsTo('Patient');

    }

}