<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class DistrictModel extends Model{
    public $table="district";
    public $timestamps=false;
    protected $primaryKey = 'did';
    protected $fillable=[
        'did',
        'id',
        'district',
        '_token',
        
    ];
}
