<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;

//Models

use App\Models\Certificate_Job_Seeker;
use Illuminate\Http\Request;
use PDF;


class CertificateJobSeekerController extends Controller
{
    public function index()
    {
        if (!session()->has("user")) {
            return redirect("login");
        }

        $certificate_job_seekers = Certificate_Job_Seeker::get();



    return view('pages.AdminPanel.certificate_job_seeker', compact('certificate_job_seekers'));
    }

public function store(Request $request){
    $certificate_job_seekers = new Certificate_Job_Seeker();
    $certificate_job_seekers->punongbarangay = $request->input('punongbarangay');
    $certificate_job_seekers->hon_1 = $request->input('hon_1');
    $certificate_job_seekers->hon_2 = $request->input('hon_2');
    $certificate_job_seekers->hon_3 = $request->input('hon_3');
    $certificate_job_seekers->hon_4 = $request->input('hon_4');
    $certificate_job_seekers->hon_5 = $request->input('hon_4');
    $certificate_job_seekers->hon_6 = $request->input('hon_6');
    $certificate_job_seekers->hon_7 = $request->input('hon_7');
    $certificate_job_seekers->sk_chairman = $request->input('sk_chairman');
    $certificate_job_seekers->secretary = $request->input('secretary');
    $certificate_job_seekers->treasurer = $request->input('treasurer');
    $certificate_job_seekers->full_address = $request->input('full_address');
    $certificate_job_seekers->cert_validity = $request->input('cert_validity');
    $certificate_job_seekers->date = $request->input('date');
    $certificate_job_seekers->witness = $request->input('witness');
    $certificate_job_seekers->receipt_num = $request->input('receipt_num');
    $certificate_job_seekers->amount_paid = $request->input('amount_paid');
    $certificate_job_seekers->name = $request->input('name');
   


    $certificate_job_seekers->save();


    return redirect()->back()->with('status', 'New Record Added Successfully!');
}

public function destroy($id){
    $certificate_job_seekers = Certificate_Job_Seeker::find($id);
    $certificate_job_seekers->delete();
    return redirect()->back()->with('status', 'Record Deleted Successfully!');
 }



 public function edit(Request $request, $id){

    $certificate_job_seekers = Certificate_Job_Seeker::find($id);

    return view('pages.AdminPanel.edit_certificate_job_seekers', compact('certificate_job_seekers'));
   }

   public function update(Request $request, $id){
    $certificate_job_seekers = Certificate_Job_Seeker::find($id);
    $certificate_job_seekers->punongbarangay = $request->input('punongbarangay');
    $certificate_job_seekers->hon_1 = $request->input('hon_1');
    $certificate_job_seekers->hon_2 = $request->input('hon_2');
    $certificate_job_seekers->hon_3 = $request->input('hon_3');
    $certificate_job_seekers->hon_4 = $request->input('hon_4');
    $certificate_job_seekers->hon_5 = $request->input('hon_4');
    $certificate_job_seekers->hon_6 = $request->input('hon_6');
    $certificate_job_seekers->hon_7 = $request->input('hon_7');
    $certificate_job_seekers->sk_chairman = $request->input('sk_chairman');
    $certificate_job_seekers->secretary = $request->input('secretary');
    $certificate_job_seekers->treasurer = $request->input('treasurer');
    $certificate_job_seekers->full_address = $request->input('full_address');
    $certificate_job_seekers->cert_validity = $request->input('cert_validity');
    $certificate_job_seekers->date = $request->input('date');
    $certificate_job_seekers->witness = $request->input('witness');
    $certificate_job_seekers->receipt_num = $request->input('receipt_num');
    $certificate_job_seekers->amount_paid = $request->input('amount_paid');
    $certificate_job_seekers->name = $request->input('name');
    $certificate_job_seekers->update();
    return redirect("certificate_job_seeker")->with('status', 'Record Updated Successfully!');

 }
 public function downloadFile($id){
    $certificate_job_seekers = Certificate_Job_Seeker::find($id);
    $pdf = PDF::loadView('pdf.certificate_job_seeker',[
   'certificate_job_seekers' => $certificate_job_seekers
     ]);
   return $pdf->download("Job Seeker Certification.pdf");
}
}