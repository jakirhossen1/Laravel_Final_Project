<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class CityModel extends Model{
    public $table="city";
    public $timestamps=false;
    protected $primaryKey = 'cid';
    protected $fillable=[
        'cid',
        'did',
        'id',
        'city_name',
        '_token',
        
    ];
}

