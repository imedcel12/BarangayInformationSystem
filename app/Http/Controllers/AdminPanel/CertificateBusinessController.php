<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
//Models

use App\Models\Certificate_Business;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PDF;


class CertificateBusinessController extends Controller
{
    public function index()
    {
        if (!session()->has("user")) {
            return redirect("login");
        }

        $certificate_businesses = Certificate_Business::get();



    return view('pages.AdminPanel.Certificate_businesses', compact('certificate_businesses'));
    }

    public function store(Request $request){
        $certificate_businesses = new Certificate_Business();
        $certificate_businesses->name = $request->input('name');
        $certificate_businesses->status = $request->input('status');
        $certificate_businesses->gender = $request->input('gender');
        $certificate_businesses->business_name = $request->input('business_name');
        $certificate_businesses->business_type = $request->input('business_type');
        $certificate_businesses->punongbarangay = $request->input('punongbarangay');
        $certificate_businesses->date = $request->input('date');
        $certificate_businesses->or_number = $request->input('or_number');
        $certificate_businesses->ctc_number = $request->input('ctc_number');
        $certificate_businesses->address = $request->input('address');

        $certificate_businesses->save();


        return redirect()->back()->with('status', 'New Record Added Successfully!');
    }

    public function destroy($id){
        $certificate_businesses = Certificate_Business::find($id);
        $certificate_businesses->delete();
        return redirect()->back()->with('status', 'Record Deleted Successfully!');
   }

   public function edit(Request $request, $id){

    $certificate_businesses = Certificate_Business::find($id);

    return view('pages.AdminPanel.edit_Certificate_businesses', compact('certificate_businesses'));


   }

   public function update(Request $request, $id){
    $certificate_businesses = Certificate_Business::find($id);
    $certificate_businesses->name = $request->input('name');
    $certificate_businesses->status = $request->input('status');
    $certificate_businesses->gender = $request->input('gender');
    $certificate_businesses->business_name = $request->input('business_name');
    $certificate_businesses->business_type = $request->input('business_type');
    $certificate_businesses->punongbarangay = $request->input('punongbarangay');
    $certificate_businesses->date = $request->input('date');
    $certificate_businesses->or_number = $request->input('or_number');
    $certificate_businesses->ctc_number = $request->input('ctc_number');
    $certificate_businesses->address = $request->input('address');



    $certificate_businesses->update();
    return redirect("certificate_business")->with('status', 'Record Updated Successfully!');

 }

 public function downloadFile($id){
    $certificate_businesses = Certificate_Business::find($id);
    $pdf = PDF::loadView('pdf.certificate_business',[
        'certificate_businesses' => $certificate_businesses
    ]);
    return $pdf->download("Business Certificate.pdf");
 }

}
