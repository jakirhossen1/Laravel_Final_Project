<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class DivisionModel extends Model{
    public $table="division";
    public $timestamps=false;
    protected $primaryKey = 'id';
    protected $fillable=[
        'division_name',
        '_token',
        
    ];
}

