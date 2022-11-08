<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate_Indigency extends Model
{
    use HasFactory;
    protected $table="certificate_indigencies";
    protected $fillable = [

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
        'amount_paid',
        'or_number',
        'date_paid',
        //content//
        'address',
        'name',
    ];
    public $primaryKey = 'id';

    public $timestamps = false;

}

















