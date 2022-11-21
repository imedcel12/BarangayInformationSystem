<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "qrcodedb";
    protected $fillable=['student_id','time_in'];


}
