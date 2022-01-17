<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class LoginModel extends Model{
    public $table="user_table";
    public $timestamps=false;
    protected $primaryKey = 'user_id';
    protected $fillable=[
        'user_name',
        'full_name',
        'email',
        'phone',
        'password',
        'picture',
        'account_creation_date',
        'status',
        '_token',
        
    ];
   
}

