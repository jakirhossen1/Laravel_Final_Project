<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AddCountryModel extends Model{
    public $table="country";
    public $timestamps=false;
    protected $primaryKey = 'id';
    protected $fillable=[
        'city_name',
        'country_name',
        '_token',
        
    ];
}

