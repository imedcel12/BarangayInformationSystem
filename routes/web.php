<?php

use Illuminate\Support\Facades\Route;

//Admin Panel
//Account Login Admin
use App\Http\Controllers\AdminPanel\Setting\Account\UserController;
use App\Http\Controllers\AttendanceScan;
//Dashboard Module
use App\Http\Controllers\AdminPanel\DashboardController;
use App\Http\Controllers\AdminPanel\Senior_CitizenController;
//Resident Module
use App\Http\Controllers\AdminPanel\ResidentInfoController;
//Indigent Module
use App\Http\Controllers\AdminPanel\CertificateIndigencyController;
//Business Module
use App\Http\Controllers\AdminPanel\CertificateBusinessController;
//Unemployment Module
use App\Http\Controllers\AdminPanel\CertificateUnemploymentController;
//Unifast Module
use App\Http\Controllers\AdminPanel\CertificateUnifastController;
//Job Seeker Module
use App\Http\Controllers\AdminPanel\CertificateJobSeekerController;

use App\Http\Controllers\AdminPanel\BlotterController;
use App\Http\Controllers\AdminPanel\CertificateClearanceController;
//Setttlement Module
use App\Http\Controllers\AdminPanel\Settlement\PersonInvolveController;
use App\Http\Controllers\AdminPanel\Settlement\ScheduleController;
use App\Http\Controllers\AdminPanel\Settlement\UnscheduleController;
use App\Http\Controllers\AdminPanel\Settlement\ScheduleTodayController;
use App\Http\Controllers\AdminPanel\Settlement\SettledCasesController;
//Certificate Module
use App\Http\Controllers\AdminPanel\CertificateController;
use App\Http\Controllers\AdminPanel\CertificateResidencyController;
use App\Http\Controllers\AdminPanel\PrintController;
use Barryvdh\DomPDF\Facade as PDF;
//Setting Module:Account Section
use App\Http\Controllers\AdminPanel\Setting\Account\AccountController;

//Setting Module:Barangay Section
use App\Http\Controllers\AdminPanel\Setting\Barangay\BrgyOfficialController;
use App\Http\Controllers\AdminPanel\Setting\Barangay\BarangayimageController;
//Admin Panel End

//Client Side

//Account Login
use App\Http\Controllers\ClientSide\ResidentAccountController;
//Home Module
use App\Http\Controllers\ClientSide\ClearanceController;
//Schedule
use App\Http\Controllers\ClientSide\ScheduleClientController;
use App\Http\Controllers\ClientSide\HomeController;
//AccountSettings
use App\Http\Controllers\ClientSide\ResidentUserAccountController;

// Blotter
use App\Http\Controllers\ClientSide\BlotterController as ClientBlotterController;

//Client Side End
//Testing Area
use App\Http\Controllers\BooksController;
use App\Http\Controllers\PagesController;

//Redirect
Route::get('/', [UserController::class, 'login']);


//Admin Panel Start

//Dashboard Module
Route::get('/dashboard', [DashboardController::class, 'dashboard']);

//Resident Module
Route::resource('resident', ResidentInfoController::class);
Route::get('resident/person/{resident_id}', [ResidentInfoController::class, 'person']);
Route::get('resident/person/{resident_id}/blotter/', [ResidentInfoController::class, 'blotter']);


// Blotter Module
Route::get('/blotter', [BlotterController::class, 'show']);
Route::resource('blotters', BlotterController::class);
Route::resource('personinvolves', PersonInvolveController::class);

//Settlement Module
Route::get('/schedule', [ScheduleController::class, 'index']);
Route::resource('schedules', ScheduleController::class);
Route::resource('unschedules', UnscheduleController::class);
Route::resource('scheduletoday', ScheduleTodayController::class);
Route::resource('settled', SettledCasesController::class);



//Certificate Module

Route::resource('certificate', CertificateController::class);
Route::get('certificate/table/paid', [CertificateController::class, 'certrequestpaid'])->name('certrequestpaid.index');
Route::get('certificate/table/unpaid', [CertificateController::class, 'index'])->name('certrequestunpaid.index');

Route::post('certificate/table/paid', [CertificateController::class, 'storerequest'])->name('storerequest.post');
Route::delete('certificate/table/paid/{request_id}', [CertificateController::class, 'deleterequest'])->name('deleterequest.delete');
Route::get('certificate/table/type', [CertificateController::class, 'certificate_type'])->name('certificate_type.index');
Route::post('certificate/table/type', [CertificateController::class, 'certtypesubmit'])->name('certtypesubmit.post');
Route::get('certificate/table/type/{cert_id}/edit', [CertificateController::class, 'certtypeedit'])->name('certtypesubmit.edit');
Route::delete('certificate/table/type/{cert_id}', [CertificateController::class, 'certtypedelete'])->name('certtypedelete.delete');
Route::GET('certificate/print/cert', [PrintController::class, 'Print'])->name('Print.post');
//Route::get('certificate/print/cert', [PrintController::class, 'index'])->name('Print.index');

//Route::post('certificate/print/cert', [CertificateController::class, 'storerequest'])->name('storerequest.post');



//Maintenance Moduule
// Barangay Setting Section
Route::resource('setting/maintenance', BrgyOfficialController::class);
Route::get('setting/maintenance/official/table', [BrgyOfficialController::class, 'barangay'])->name('barangay.index');
Route::post('setting/maintenance/official/table', [BrgyOfficialController::class, 'barangayPOST'])->name('barangay.post');
Route::get('setting/maintenance/official/table/{barangay}/edit', [BrgyOfficialController::class, 'barangayedit'])->name('barangay.edit');
Route::delete('setting/maintenance/official/table/{barangay}/', [BrgyOfficialController::class, 'barangaydelete'])->name('barangay.destroy');
Route::post('setting/maintenance/barangay/image', [BarangayimageController::class, 'store'])->name('image.store');

// Account Setting Section
Route::resource('/setting/account', AccountController::class);
Route::post("/setting/account/form",[AccountController::class, 'accountSettingCheck'])->name("accountSettingCheck");

    // Session
    Route::get("/setting/account/session/table", [AccountController::class, 'getSessionTable'])->name("getSessionTable");

    // Resident Manage Account
    Route::get("/setting/account/resident_account/table", [AccountController::class, 'getResidentAccountTable'])->name("ResidentAccountTable");
    Route::patch("/setting/account/resident_account/{id}", [AccountController::class, 'resident_update']);
    Route::delete("/setting/account/resident_account/{id}", [AccountController::class, 'resident_delete']);

    // Admin Login Section
    Route::get("/login", [UserController::class, 'login']);
    Route::get("/profile", [UserController::class, 'profile']);
    Route::post("/login", [UserController::class, 'check']);
    Route::get("/logout", [UserController::class, 'logout']);


    //Senior Cirtizen
    Route::get("/senior_citizen", [Senior_CitizenController::class, 'index']);
    Route::post("/create_senior_citizen", [Senior_CitizenController::class, 'store']);
    Route::get("/delete_senior_citizen/{id}", [Senior_CitizenController::class, 'destroy']);
    Route::get("/edit_senior_citizen/{id}", [Senior_CitizenController::class, 'edit']);
    Route::put("/update_senior_citizen/{id}", [Senior_CitizenController::class, 'update']);

    //Certificate Clearance 1
    Route::get("/certificate_clearance", [CertificateClearanceController::class, 'index']);
    Route::post("/create_certificate_clearances", [CertificateClearanceController::class, 'store']);
    Route::get("/delete_certificate_clearances/{id}", [CertificateClearanceController::class, 'destroy']);
    Route::get("/edit_certificate_clearances/{id}", [CertificateClearanceController::class, 'edit']);
    Route::put("/update_certificate_clearances/{id}", [CertificateClearanceController::class, 'update']);


    //   PDF

    Route::get("/export_certificate_clearances/{id}", [CertificateClearanceController::class, 'downloadFile'])->name('certificate_clearances');
    Route::get("/export_certificate_residencies/{id}", [CertificateResidencyController::class, 'downloadFile'])->name('certificate_residencies');
    Route::get("/export_certificate_indigencies/{id}", [CertificateIndigencyController::class, 'downloadFile'])->name('certificate_indigencies');
    Route::get("/export_certificate_businesses/{id}", [CertificateBusinessController::class, 'downloadFile'])->name('certificate_businesses');
    Route::get("/export_certificate_unemployments/{id}", [CertificateUnemploymentController::class, 'downloadFile'])->name('certificate_unemployments');
    Route::get("/export_certificate_unifasts/{id}", [CertificateUnifastController::class, 'downloadFile'])->name('certificate_unifasts');
    Route::get("/export_certificate_job_seekers/{id}", [CertificateJobSeekerController::class, 'downloadFile'])->name('certificate_job_seekers');

      //Certificate Residency
      Route::get("/certificate_residency", [CertificateResidencyController::class, 'index']);
      Route::post("/create_certificate_residencies", [CertificateResidencyController::class, 'store']);
      Route::get("/delete_certificate_residencies/{id}", [CertificateResidencyController::class, 'destroy']);
      Route::get("/edit_certificate_residencies/{id}", [CertificateResidencyController::class, 'edit']);
      Route::put("/update_certificate_residencies/{id}", [CertificateResidencyController::class, 'update']);


          //Certificate Indigency
    Route::get("/certificate_indigency", [CertificateIndigencyController::class, 'index']);
    Route::post("/create_certificate_indigencies", [CertificateIndigencyController::class, 'store']);
    Route::get("/delete_certificate_indigencies/{id}", [CertificateIndigencyController::class, 'destroy']);
    Route::get("/edit_certificate_indigencies/{id}", [CertificateIndigencyController::class, 'edit']);
    Route::put("/update_certificate_indigencies/{id}", [CertificateIndigencyController::class, 'update']);


    //Certificate Business
    Route::get("/certificate_business", [CertificateBusinessController::class, 'index']);
    Route::post("/create_certificate_businesses", [CertificateBusinessController::class, 'store']);
    Route::get("/delete_certificate_businesses/{id}", [CertificateBusinessController::class, 'destroy']);
    Route::get("/edit_certificate_businesses/{id}", [CertificateBusinessController::class, 'edit']);
    Route::put("/update_certificate_businesses/{id}", [CertificateBusinessController::class, 'update']);


     //Certificate Business
     Route::get("/certificate_unemployment", [CertificateUnemploymentController::class, 'index']);
     Route::post("/create_certificate_unemployments", [CertificateUnemploymentController::class, 'store']);
     Route::get("/delete_certificate_unemployments/{id}", [CertificateUnemploymentController::class, 'destroy']);
     Route::get("/edit_certificate_unemployments/{id}", [CertificateUnemploymentController::class, 'edit']);
     Route::put("/update_certificate_unemployments/{id}", [CertificateUnemploymentController::class, 'update']);


     //Certificate Unifast
     Route::get("/certificate_unifast", [CertificateUnifastController::class, 'index']);
     Route::post("/create_certificate_unifasts", [CertificateUnifastController::class, 'store']);
     Route::get("/delete_certificate_unifasts/{id}", [CertificateUnifastController::class, 'destroy']);
     Route::get("/edit_certificate_unifasts/{id}", [CertificateUnifastController::class, 'edit']);
     Route::put("/update_certificate_unifasts/{id}", [CertificateUnifastController::class, 'update']);

     //Certificate Job-Seeker
     Route::get("/certificate_job_seeker", [CertificateJobSeekerController::class, 'index']);
     Route::post("/create_certificate_job_seekers", [CertificateJobSeekerController::class, 'store']);
     Route::get("/delete_certificate_job_seekers/{id}", [CertificateJobSeekerController::class, 'destroy']);
     Route::get("/edit_certificate_job_seekers/{id}", [CertificateJobSeekerController::class, 'edit']);
     Route::put("/update_certificate_job_seekers/{id}", [CertificateJobSeekerController::class, 'update']);
     //Admin Panel End


// Client Side Start

//Certificate page
Route::get("/barangay/certificate/", [ClearanceController::class, 'index'])->name("certificateclient.index");
Route::post("/barangay/certificate/", [ClearanceController::class, 'store'])->name("certificateclient.store");

//Schedule page
Route::get('/barangay/schedule/', [ScheduleClientController::class, 'index'])->name("scheduleclientindex.get");
Route::get('/barangay/schedule/{schedule}', [ScheduleClientController::class, 'show'])->name("scheduleclientshow.get");
Route::get('/barangay/schedule/print/{schedule_id}', [ScheduleClientController::class, 'printclient'])->name("scheduleclientprint.get");

//Miscellaneous
Route::get('barangay/home', [HomeController::class, 'resident_home']);
Route::get('/barangay/news', [HomeController::class, 'resident_news']);
Route::get('/barangay/info', [HomeController::class, 'resident_info']);

//Account Setting
Route::get('/barangay/accountsetting', [ResidentAccountController::class, 'index']);
Route::get("/barangay/{resident_id}/edit", [ResidentAccountController::class, 'edit']);
Route::post("/barangay/accountsetting/check",[ResidentAccountController::class, 'clientaccountsettingcheck'])->name("client_accountsetting_check");

//Blotter
Route::get("/barangay/blotter/{residentid}", [ClientBlotterController::class, 'index']);
Route::get("/barangay/blotter/pdf/{resident_id}/{blotterid}", [ClientBlotterController::class, 'pdf']);
Route::resource("/barangay/blotter", ClientBlotterController::class);

// // Client Login
// Route::get("/barangay/login", [ResidentUserAccountController::class, 'client_login']);
// Route::post("/barangay/login", [ResidentUserAccountController::class, 'client_check']);
// Route::get("/barangay/register", [ResidentUserAccountController::class, 'client_register']);
// Route::post("/barangay/register", [ResidentUserAccountController::class, 'client_register_check']);
// Route::get("/barangay/logout", [ResidentUserAccountController::class, 'client_logout']);
// Route::get("/barangay/forgot_password
// ", [ResidentUserAccountController::class, 'client_forgot_password']);



//barangay Side End



Route::get("/scan", [AttendanceScan::class, 'index']);


Route::post('insert',function(){
    $server = "localhost";
    $username="root";
    $password="secret";
    $dbname="barangay_db";

    $conn = new mysqli($server,$username,$password,$dbname);
    if($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    if(isset($_POST['text'])){
        $text = $_POST['text'];

        $sql = "INSERT INTO qrcodedb (student_id,time_in) VALUES('$text',NOW())";
        if($conn->query($sql) === true){
          return redirect()->back();
        }else{
            echo "error:" . $sql . "<br />" . $conn->error;
        }
    }
    $conn->close();
});



Route::get('/all-attendance',[AttendanceScan::class,'allRecord']);
















//Testing Area
Route::resource('books', BooksController::class);
Route::get('/invoice', function () {
    return view('Testing.invoice');
    $pdf = PDF::loadView('Testing.invoice')->setOptions(['defaultFont' => 'sans-serif']);;
    return $pdf->download('invoice.pdf');
});
Route::get('/invoice-pdf', function () {
    //   return view('/invoice-pdf');
    $pdf = PDF::loadView('Testing.invoice-pdf')->setOptions(['defaultFont' => 'sans-serif', 'isRemoteEnabled' => true, 'format' => 'letter']);;
    return $pdf->download('invoice.pdf');
});

Route::get('/certificates', function () {
    return view('Testing.certificate');
});
Route::get('/certificate-pdf', function () {
    return view('Testing.certificate-pdf');
    $pdf = PDF::loadView('Testing.certificate-pdf')->setPaper('A4','portrait')->setOptions(['defaultFont' => 'sans-serif','isRemoteEnabled' => true]) ;
    return $pdf->download('certificate.pdf');
});
Route::resource('books', BooksController::class);
Route::get('sampledata', [PagesController::class, 'sampledata']);

// Testing Area End
