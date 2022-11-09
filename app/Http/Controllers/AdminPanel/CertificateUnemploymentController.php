<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;

//Models

use App\Models\Certificate_Unemployment;
use Illuminate\Http\Request;
use PDF;


class CertificateUnemploymentController extends Controller
{
    public function index()
    {
        if (!session()->has("user")) {
            return redirect("login");
        }

        $certificate_unemployments = Certificate_Unemployment::get();



    return view('pages.AdminPanel.certificate_unemployment', compact('certificate_unemployments'));
    }

    public function store(Request $request){
        $certificate_unemployments = new Certificate_Unemployment();
        $certificate_unemployments->punongbarangay = $request->input('punongbarangay');
        $certificate_unemployments->hon_1 = $request->input('hon_1');
        $certificate_unemployments->hon_2 = $request->input('hon_2');
        $certificate_unemployments->hon_3 = $request->input('hon_3');
        $certificate_unemployments->hon_4 = $request->input('hon_4');
        $certificate_unemployments->hon_5 = $request->input('hon_4');
        $certificate_unemployments->hon_6 = $request->input('hon_6');
        $certificate_unemployments->hon_7 = $request->input('hon_7');
        $certificate_unemployments->sk_chairman = $request->input('sk_chairman');
        $certificate_unemployments->secretary = $request->input('secretary');
        $certificate_unemployments->treasurer = $request->input('treasurer');
        $certificate_unemployments->name = $request->input('name');
        $certificate_unemployments->address = $request->input('address');
        $certificate_unemployments->parent_name = $request->input('parent_name');
        $certificate_unemployments->status = $request->input('status');
        $certificate_unemployments->date = $request->input('date');


        $certificate_unemployments->save();


        return redirect()->back()->with('status', 'New Record Added Successfully!');
    }

    public function destroy($id){
        $certificate_unemployments = Certificate_Unemployment::find($id);
        $certificate_unemployments->delete();
        return redirect()->back()->with('status', 'Record Deleted Successfully!');
   }

   public function edit(Request $request, $id){

    $certificate_unemployments = Certificate_Unemployment::find($id);

    return view('pages.AdminPanel.edit_certificate_unemployments', compact('certificate_unemployments'));
   }

   public function update(Request $request, $id){
    $certificate_unemployments = Certificate_Unemployment::find($id);
    $certificate_unemployments->punongbarangay = $request->input('punongbarangay');
    $certificate_unemployments->hon_1 = $request->input('hon_1');
    $certificate_unemployments->hon_2 = $request->input('hon_2');
    $certificate_unemployments->hon_3 = $request->input('hon_3');
    $certificate_unemployments->hon_4 = $request->input('hon_4');
    $certificate_unemployments->hon_5 = $request->input('hon_4');
    $certificate_unemployments->hon_6 = $request->input('hon_6');
    $certificate_unemployments->hon_7 = $request->input('hon_7');
    $certificate_unemployments->sk_chairman = $request->input('sk_chairman');
    $certificate_unemployments->secretary = $request->input('secretary');
    $certificate_unemployments->treasurer = $request->input('treasurer');
    $certificate_unemployments->name = $request->input('name');
    $certificate_unemployments->address = $request->input('address');
    $certificate_unemployments->parent_name = $request->input('parent_name');
    $certificate_unemployments->status = $request->input('status');
    $certificate_unemployments->date = $request->input('date');
    $certificate_unemployments->update();

    return redirect("certificate_unemployment")->with('status', 'Record Updated Successfully!');

 }

    public function downloadFile($id){
         $certificate_unemployments = Certificate_Unemployment::find($id);
        //  dd($certificate_unemployments);
         $pdf = PDF::loadView('pdf.certificate_unemployments',[
        'certificate_unemployments' => $certificate_unemployments
          ]);
        return $pdf->download("Certificate of Unemployment.pdf");
    }
    

}
