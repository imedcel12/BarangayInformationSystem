<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;

//Models
use App\Models\brgy_official;
use App\Models\area_setting;
use App\Models\Senior_Citizen;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class Senior_CitizenController extends Controller
{
    public function index()
    {
        if (!session()->has("user")) {
            return redirect("login");
        }

        $senior_citizen = Senior_Citizen::all();


    return view('pages.AdminPanel.senior_citizen', compact('senior_citizen'));
    }

    public function store(Request $request){
        $senior_citizen = new Senior_Citizen();
        $senior_citizen->status = $request->input('status');
        $senior_citizen->name = $request->input('name');
        $senior_citizen->purok = $request->input('purok');
        $senior_citizen->street = $request->input('street');


        $senior_citizen->save();


        return redirect()->back()->with('status', 'New Record Added Successfully!');
    }

    public function destroy($id){
        $senior_citizen = Senior_Citizen::find($id);
        $senior_citizen->delete();
        return redirect()->back()->with('status', 'Record Deleted Successfully!');
   }

   public function edit(Request $request, $id){

    $senior_citizen = Senior_Citizen::find($id);

    return view('pages.AdminPanel.edit_senior_citizen', compact('senior_citizen'));


   }

   public function update(Request $request, $id){
    $senior_citizen = Senior_Citizen::find($id);
    $senior_citizen->status = $request->input('status');
    $senior_citizen->name = $request->input('name');
    $senior_citizen->purok = $request->input('purok');
    $senior_citizen->street = $request->input('street');



    $senior_citizen->update();
    return redirect("senior_citizen")->with('status', 'Record Updated Successfully!');

 }

}
