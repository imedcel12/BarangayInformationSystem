<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate_Job_seeker extends Model
{
    use HasFactory;
    protected $table="certificate_job_seekers";
    protected $fillable = [

        'name',
        'full_address',
        'cert_validity',
        'date',
        'witness',
        'punongbarangay',
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
        'receipt_num',
        'amount_paid',
        'status',
    ];
    public $primaryKey = 'id';

    public $timestamps = false;

}