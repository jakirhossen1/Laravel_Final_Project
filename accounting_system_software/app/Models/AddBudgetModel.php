<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class AddBudgetModel extends Model{
    public $table="budget";
    public $timestamps=false;
    protected $primaryKey = 'budget_id';
    protected $fillable=[
        'group_id',
        'sub_group_id',
        'posting_head_id',
        'budget_type',
        'month',
        'amount',
        'user_id',
        'date_time',
        'creation_date',
        '_token',
        
    ];
}
