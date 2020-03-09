<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    public $table = "phone";

    protected $fillable = [
        'brand',
        'model',
        'imei',
        'number',
        'owner',
        'company',
        'description',
        'state'       
    ];


}
