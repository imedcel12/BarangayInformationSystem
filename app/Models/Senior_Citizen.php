<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Senior_Citizen extends Model
{
    use HasFactory;
    protected $table = "senior_citizens";
    protected $fillable = ['status','name','purok','street'];
    public $primaryKey = 'id';

    public $timestamps = false;

}
