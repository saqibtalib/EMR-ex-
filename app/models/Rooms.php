<?php


class Rooms extends \Eloquent
{
    protected $table = 'rooms';

    // Add your validation rules here
    public static $rules = [
        // 'title' => 'required'
        'room_type' => '',
        'room_no' => '',
        'room_location' => ''

        //'ward' => 'required'


    ];

// Don't forget to fill this array.
    protected $fillable = ['room_type', 'room_location','room_no'];



}