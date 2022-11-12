<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;

//Models

use App\Models\Certificate_Unifast;
use Illuminate\Http\Request;
use PDF;


class CertificateUnifastController extends Controller
{
    public function index()
    {
        if (!session()->has("user")) {
            return redirect("login");
        }

        $certificate_unifasts = Certificate_Unifast::get();



    return view('pages.AdminPanel.certificate_unifast', compact('certificate_unifasts'));
    }


    public function store(Request $request){
        $certificate_unifasts = new Certificate_Unifast();
        $certificate_unifasts->punongbarangay = $request->input('punongbarangay');
        $certificate_unifasts->hon_1 = $request->input('hon_1');
        $certificate_unifasts->hon_2 = $request->input('hon_2');
        $certificate_unifasts->hon_3 = $request->input('hon_3');
        $certificate_unifasts->hon_4 = $request->input('hon_4');
        $certificate_unifasts->hon_5 = $request->input('hon_4');
        $certificate_unifasts->hon_6 = $request->input('hon_6');
        $certificate_unifasts->hon_7 = $request->input('hon_7');
        $certificate_unifasts->sk_chairman = $request->input('sk_chairman');
        $certificate_unifasts->secretary = $request->input('secretary');
        $certificate_unifasts->treasurer = $request->input('treasurer');
        $certificate_unifasts->name = $request->input('name');
        $certificate_unifasts->address = $request->input('address');
        $certificate_unifasts->parent_name = $request->input('parent_name');
        $certificate_unifasts->age = $request->input('age');
        $certificate_unifasts->purok_name = $request->input('purok_name');
        $certificate_unifasts->or_number = $request->input('or_number');
        $certificate_unifasts->amount_paid = $request->input('amount_paid');
        $certificate_unifasts->purpose = $request->input('purpose');
        $certificate_unifasts->date = $request->input('date');


        $certificate_unifasts->save();


        return redirect()->back()->with('status', 'New Record Added Successfully!');
    }

    public function edit(Request $request, $id){

        $certificate_unifasts = Certificate_Unifast::find($id);
    
        return view('pages.AdminPanel.edit_certificate_unifasts', compact('certificate_unifasts'));
       }
    
       public function update(Request $request, $id){
        $certificate_unifasts = Certificate_Unifast::find($id);
        $certificate_unifasts->punongbarangay = $request->input('punongbarangay');
        $certificate_unifasts->hon_1 = $request->input('hon_1');
        $certificate_unifasts->hon_2 = $request->input('hon_2');
        $certificate_unifasts->hon_3 = $request->input('hon_3');
        $certificate_unifasts->hon_4 = $request->input('hon_4');
        $certificate_unifasts->hon_5 = $request->input('hon_4');
        $certificate_unifasts->hon_6 = $request->input('hon_6');
        $certificate_unifasts->hon_7 = $request->input('hon_7');
        $certificate_unifasts->sk_chairman = $request->input('sk_chairman');
        $certificate_unifasts->secretary = $request->input('secretary');
        $certificate_unifasts->treasurer = $request->input('treasurer');
        $certificate_unifasts->name = $request->input('name');
        $certificate_unifasts->address = $request->input('address');
        $certificate_unifasts->parent_name = $request->input('parent_name');
        $certificate_unifasts->age = $request->input('age');
        $certificate_unifasts->purok_name = $request->input('purok_name');
        $certificate_unifasts->or_number = $request->input('or_number');
        $certificate_unifasts->amount_paid = $request->input('amount_paid');
        $certificate_unifasts->purpose = $request->input('purpose');
        $certificate_unifasts->date = $request->input('date');

        $certificate_unifasts->update();
        return redirect("certificate_unifast")->with('status', 'Record Updated Successfully!');
    
     }

     public function destroy($id){
        $certificate_unifasts = Certificate_Unifast::find($id);
        $certificate_unifasts->delete();
        return redirect()->back()->with('status', 'Record Deleted Successfully!');
   }

   public function downloadFile($id){
    $certificate_unifasts = Certificate_Unifast::find($id);
   //  dd($certificate_unifasts);
    $pdf = PDF::loadView('pdf.certificate_unifasts',[
   'certificate_unifasts' => $certificate_unifasts
     ]);
   return $pdf->download("Unifast Certification.pdf");
}

  
}