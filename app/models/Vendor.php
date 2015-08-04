<?php

class Vendor extends \Eloquent {

   /* public static $rules = [
        // 'title' => 'required'
        'name' => 'required',
        'city' => 'required',
        'address' => 'required'
    ];*/

    protected $fillable = ['id', 'name','vendor_type', 'email','city','address','mobile','cnic','note'];

    public function Balancesheet(){
        return $this->hasOne('Balancesheet');
    }
}