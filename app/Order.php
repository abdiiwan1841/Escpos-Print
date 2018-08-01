<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    protected $fillable = [
        'table_num','order','comments'
    ];
    protected $table = 'orders';
//    function bookings(){
//        return $this->hasMany("App\Bookings");
//    }

}
