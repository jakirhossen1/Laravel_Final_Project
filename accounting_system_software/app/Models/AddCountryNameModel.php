<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AddCountryNameModel extends Model{
    public $table="country_name";
    public $timestamps=false;
    protected $primaryKey = 'id';
    protected $fillable=[
        'iso',
        'name',
        'nicename',
        'iso3',
        'numcode',
        'phonecode',
        '_token',
        
    ];
}

