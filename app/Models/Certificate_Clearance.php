<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate_Clearance extends Model
{
    use HasFactory;
    protected $table="certificate_clearances";
    protected $fillable = ['name','purok_address','reason','or_number',"date","punongbarangay"];
    public $primaryKey = 'id';

    public $timestamps = false;

}
