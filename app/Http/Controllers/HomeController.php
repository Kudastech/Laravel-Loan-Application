<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if($usertype == '1')
        {
            return view('admin.admin');
        }
        else
        {
            if(Auth::id())
            {

            return view('userdashboard.index');

        }
        }
    }


    public function index()
    {

        return view('user.index');
    }

    public function userdashboard()
    {

        return view('userdashboard.index');
    }


    public function loan_plan()
    {
        return view('user.loan_plan');
    }


    public function about()
    {
        return view('user.about');
    }

    public function contact()
    {
        return view('user.contact');
    }

}
