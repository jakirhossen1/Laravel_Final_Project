<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AddVoucherModel extends Model{
    public $table="voucher";
    public $timestamps=false;
    protected $primaryKey = 'sl_no';
    protected $fillable=[
        'voucher_no',
        'voucher_date',
        'voucher_description',
        'group_id',
        'sub_group_id',
        'postling_head_id',
        'debit_amount',
        'credit_amount',
        'user_id',
        'entry_date_and_time',
        'company_id',
        'voucher_document',
        'check_no',
        'check_date',
        'voucher_type',
        'prepared_by',
        'checked_by',
        'approved_by',
        'modify_count',
        'voucher_status',
        '_token',
        
    ];
}
