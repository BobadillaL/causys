<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    public $table = "phone";

    protected $fillable = [
        'brand',
        'model',
        'number',
        'imei',
        'owner',
        'company',
        'state'       
    ];


}
