<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AddLedgerPostingHeadModel extends Model{
    public $table="ledger_posting_head";
    public $timestamps=false;
    protected $primaryKey = 'ledger_posting_head_id';
    protected $fillable=[
        'ledger_sub_group_id',
        'ledger_group_id',
        'posting_head_name',
        'posting_head_date',
        'status',
        '_token',
        
    ];
}
