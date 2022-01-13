<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AddLedgerSubGroupModel extends Model{
    public $table="ledger_sub_group";
    public $timestamps=false;
    protected $primaryKey = 'id';
    protected $fillable=[
        'ledger_sub_group_name',
        'ledger_sub_group_date',
        'ledger_sub_group_parent_id',
        '_token',
        
    ];
}