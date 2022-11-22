<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\DB;


class ProfilebrgyController extends Controller
{
    public function index()
    {


        if (!session()->has("user")) {
            return redirect("login");
        }

        return view('pages.AdminPanel.profilebrgy');
    }
}



