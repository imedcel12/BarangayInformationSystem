<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate_Residency extends Model
{
    use HasFactory;
    protected $table = "certificate_residencies";
    protected $fillable = ['residency_status','name','barangay','date','punongbarangay'];
    public $primaryKey = 'id';

    public $timestamps = false;

}
