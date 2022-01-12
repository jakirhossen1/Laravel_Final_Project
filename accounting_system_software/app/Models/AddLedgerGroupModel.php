<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AddLedgerGroupModel extends Model{
    public $table="ledger_group";
    public $timestamps=false;
    protected $primaryKey = 'ledger_id';
    protected $fillable=[
        'ledger_name',
        'group_id',
        '_token',
        
    ];
}
