<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate_Residency extends Model
{
    use HasFactory;
    protected $table = "certificate_residencies";
    protected $fillable = ['residency_status','name','barangay','purok_number','date','punongbarangay',
    'hon_1',
    'hon_2',
    'hon_3',
    'hon_4',
    'hon_5',
    'hon_6',
    'hon_7',
    'sk_chairman',
    'secretary',
    'treasurer',
    'amount_paid',
    'or_number',
    'date_paid',
];
    public $primaryKey = 'id';

    public $timestamps = false;

}
