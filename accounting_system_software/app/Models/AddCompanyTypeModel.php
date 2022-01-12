<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AddCompanyTypeModel extends Model{
    public $table="company_type";
    public $timestamps=false;
    protected $primaryKey = 'id';
    protected $fillable=[
        'company_type',
        '_token',
        
    ];
}
