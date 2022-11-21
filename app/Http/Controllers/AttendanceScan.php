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

    public function destroy($id){
        $attendance = AttendanceModel::find($id);
        $attendance->delete();
        return redirect()->back()->with('status', 'Attendance Deleted Successfully!');
    }
}
