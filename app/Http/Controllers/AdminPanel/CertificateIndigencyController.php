<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;

//Models

use App\Models\Certificate_Indigency;
use Illuminate\Http\Request;
use PDF;


class CertificateIndigencyController extends Controller
{
    public function index()
    {
        if (!session()->has("user")) {
            return redirect("login");
        }

        $certificate_indigencies = Certificate_Indigency::get();



    return view('pages.AdminPanel.certificate_indigency', compact('certificate_indigencies'));
    }


    public function store(Request $request){
        $certificate_indigencies = new Certificate_Indigency();
        $certificate_indigencies->punongbarangay = $request->input('punongbarangay');
        $certificate_indigencies->hon_1 = $request->input('hon_1');
        $certificate_indigencies->hon_2 = $request->input('hon_2');
        $certificate_indigencies->hon_3 = $request->input('hon_3');
        $certificate_indigencies->hon_4 = $request->input('hon_4');
        $certificate_indigencies->hon_5 = $request->input('hon_4');
        $certificate_indigencies->hon_6 = $request->input('hon_6');
        $certificate_indigencies->hon_7 = $request->input('hon_7');
        $certificate_indigencies->sk_chairman = $request->input('sk_chairman');
        $certificate_indigencies->secretary = $request->input('secretary');
        $certificate_indigencies->treasurer = $request->input('treasurer');
        $certificate_indigencies->amount_paid = $request->input('amount_paid');
        $certificate_indigencies->or_number = $request->input('or_number');
        $certificate_indigencies->date_paid = $request->input('date_paid');
        $certificate_indigencies->address = $request->input('address');
        $certificate_indigencies->name = $request->input('name');


        $certificate_indigencies->save();


        return redirect()->back()->with('status', 'New Record Added Successfully!');
    }

    public function destroy($id){
        $certificate_indigencies = Certificate_Indigency::find($id);
        $certificate_indigencies->delete();
        return redirect()->back()->with('status', 'Record Deleted Successfully!');
   }

   public function edit(Request $request, $id){

    $certificate_indigencies = Certificate_Indigency::find($id);

    return view('pages.AdminPanel.edit_certificate_indigencies', compact('certificate_indigencies'));
   }

   public function update(Request $request, $id){
    $certificate_indigencies = Certificate_Indigency::find($id);
    $certificate_indigencies->punongbarangay = $request->input('punongbarangay');
    $certificate_indigencies->hon_1 = $request->input('hon_1');
    $certificate_indigencies->hon_2 = $request->input('hon_2');
    $certificate_indigencies->hon_3 = $request->input('hon_3');
    $certificate_indigencies->hon_4 = $request->input('hon_4');
    $certificate_indigencies->hon_5 = $request->input('hon_4');
    $certificate_indigencies->hon_6 = $request->input('hon_6');
    $certificate_indigencies->hon_7 = $request->input('hon_7');
    $certificate_indigencies->sk_chairman = $request->input('sk_chairman');
    $certificate_indigencies->secretary = $request->input('secretary');
    $certificate_indigencies->treasurer = $request->input('treasurer');
    $certificate_indigencies->amount_paid = $request->input('amount_paid');
    $certificate_indigencies->or_number = $request->input('or_number');
    $certificate_indigencies->date_paid = $request->input('date_paid');
    $certificate_indigencies->address = $request->input('address');
    $certificate_indigencies->name = $request->input('name');
    $certificate_indigencies->update();
    return redirect("certificate_indigency")->with('status', 'Record Updated Successfully!');

 }

    public function downloadFile($id){
         $certificate_residencies = Certificate_Residency::find($id);
        //  dd($certificate_residencies);
         $pdf = PDF::loadView('pdf.certificate_residencies',[
        'certificate_residencies' => $certificate_residencies
          ]);
        return $pdf->download("Certificate of Residency.pdf");
    }
    

}
