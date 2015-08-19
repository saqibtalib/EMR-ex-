<?php

class Dispatchlist extends \Eloquent {
 protected $table = 'dispatchlists';
    /* public static $rules = [
         // 'title' => 'required'
         'name' => 'required',
         'city' => 'required',
         'address' => 'required'
     ];*/

    protected $fillable = ['id', 'name','req_amount', 'total_amount','note','dispatch_list_id'];


}