<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
//Models

use App\Models\Certificate_Clearance;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PDF;


class CertificateClearanceController extends Controller
{
    public function index()
    {
        if (!session()->has("user")) {
            return redirect("login");
        }

        $certificate_clearances = Certificate_Clearance::get();



    return view('pages.AdminPanel.Certificate_clearances', compact('certificate_clearances'));
    }

    public function store(Request $request){
        $certificate_clearances = new Certificate_Clearance();
        $certificate_clearances->name = $request->input('name');
        $certificate_clearances->purok_address = $request->input('purok_address');
        $certificate_clearances->reason = $request->input('reason');
        $certificate_clearances->date = $request->input('date');
        $certificate_clearances->or_number = $request->input('or_number');
        $certificate_clearances->punongbarangay = $request->input('punongbarangay');


        $certificate_clearances->save();


        return redirect()->back()->with('status', 'New Record Added Successfully!');
    }

    public function destroy($id){
        $certificate_clearances = Certificate_Clearance::find($id);
        $certificate_clearances->delete();
        return redirect()->back()->with('status', 'Record Deleted Successfully!');
   }

   public function edit(Request $request, $id){

    $certificate_clearances = Certificate_Clearance::find($id);

    return view('pages.AdminPanel.edit_Certificate_clearances', compact('certificate_clearances'));


   }

   public function update(Request $request, $id){
    $certificate_clearances = Certificate_Clearance::find($id);
    $certificate_clearances->name = $request->input('name');
    $certificate_clearances->purok_address = $request->input('purok_address');
    $certificate_clearances->reason = $request->input('reason');
    $certificate_clearances->date = $request->input('date');
    $certificate_clearances->or_number = $request->input('or_number');
    $certificate_clearances->punongbarangay = $request->input('punongbarangay');




    $certificate_clearances->update();
    return redirect("certificate_clearance")->with('status', 'Record Updated Successfully!');

 }

 public function downloadFile($id){
    $certificate_clearances = Certificate_Clearance::find($id);
    $pdf = PDF::loadView('pdf.certificate_clearance',[
        'certificate_clearances' => $certificate_clearances
    ]);
    return $pdf->download("Clearance Certificate.pdf");
 }

}
