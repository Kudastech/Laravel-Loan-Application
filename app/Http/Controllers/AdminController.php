<?php

namespace App\Http\Controllers;

use App\Models\personal;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admindashboard()
    {
        return view('admin.admin');
    }

    public function show_user()
    {

        $personal = personal::all();
        return view('admin.show_user', compact('personal'));
    }

    public function delivered($id)
    {
        $personal = personal::find($id);

        $personal->payment_status = "Approved";

        // $personal->delivery_status = "Delivered";

        $personal->save();

        return redirect()->back();
    }
}
