<?php


class Wards extends \Eloquent
{
    protected $table = 'wards';

    // Add your validation rules here
    public static $rules = [
        // 'title' => 'required'
        'ward_name' => '',
        'ward_type' => ''
        ,
        //'ward' => 'required'


    ];

// Don't forget to fill this array.
    protected $fillable = ['ward_name', 'ward_type'];


    public function beds()
    {
        return $this->hasMany('Beds','ward_id','id');
    }

    public function patient()
    {
        return $this->hasMany('Patient','ward_id','id');
    }
}