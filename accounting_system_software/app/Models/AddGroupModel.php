<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AddGroupModel extends Model{
    public $table="group_type";
    public $timestamps=false;
    protected $primaryKey = 'id';
    protected $fillable=[
        'group_type_name',
        'debit_credit',
        '_token',
        
    ];
}

