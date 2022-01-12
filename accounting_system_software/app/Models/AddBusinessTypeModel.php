<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AddBusinessTypeModel extends Model{
    public $table="business_type";
    public $timestamps=false;
    protected $primaryKey = 'id';
    protected $fillable=[
        'business_type',
        '_token',
        
    ];
}
