<?php

class Balancesheet extends \Eloquent {

    /* public static $rules = [
         // 'title' => 'required'
         'name' => 'required',
         'city' => 'required',
         'address' => 'required'
     ];*/

    protected $fillable = ['id', 'total_amount','payable_amount', 'receivable_amount','vendor_id','balancesheet_id','note'];

    public function Vendor(){
        return $this->belongsTo('Vendor');
    }
}