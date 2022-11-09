<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate_Unemployment extends Model
{
    use HasFactory;
    protected $table = "certificate_unemployments";
    protected $fillable = [
        'name',
        'status',
        'address',
        'parent_name',
        'date',
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
    ];
    public $primaryKey = 'id';

    public $timestamps = false;

}
