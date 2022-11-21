<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AttendanceModel;
use PDF;

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


    public function downloadFile(){
        $qrcodedb = AttendanceModel::where('time_in', '!=', null)->get();
        $pdf = PDF::loadVIew('pdf.attendance', [
            'qrcodedb' => $qrcodedb
        ]);
        return $pdf->download('Attendance.pdf');
    }
}
