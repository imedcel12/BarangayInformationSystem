<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttendanceModel;

class AttendanceScan extends Controller
{
    public function index(){
        return view('scan.scan');
    }
    public function allRecord(){

        $attendance = AttendanceModel::all();


        return view('scan.attendance_list',compact('attendance'));
    }
}
