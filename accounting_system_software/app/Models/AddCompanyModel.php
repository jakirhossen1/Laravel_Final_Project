<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AddCompanyModel extends Model{
    public $table="company";
    public $timestamps=false;
    protected $primaryKey = 'company_id';
    protected $fillable=[
        'company_type',
        'business_type',
        'country',
        'company_name',
        'address',
        'phone',
        'company_registration_no',
        'registration_doc',
        'tin',
        'tin_doc',
        'vat',
        'vat_doc',
        'trade_license',
        'picture',
        '_token',
        
    ];
}
