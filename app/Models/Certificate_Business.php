<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate_Business extends Model
{
    use HasFactory;
    protected $table="certificate_businesses";
    protected $fillable = [
        
            'name',
            'status',
            'gender',
            'business_name',
            'business_type',
            'punongbarangay',
            'date',
            'or_number',
            'ctc_number',
            'address',

    ];
    public $primaryKey = 'id';

    public $timestamps = false;

}
















