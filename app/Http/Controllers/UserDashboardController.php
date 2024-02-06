<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use App\Models\newrequest;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function newrequest()
    {
        return view('userdashboard.newrequest');
    }

    public function submit_newrequest(Request $request)
    {

        $validated = $request->validate([
            'lamount' => 'required|numeric',

            'ltype' => 'required|string',

            'lplan' => 'required|string',

            'lpurpose' => 'required|string',
        ],
        [
            'lamount.required' => 'The Loan Amount Field is Required',

            'ltype.required' => 'The Loan Type Field is Required',

            'lplan.required' => 'The Loan Plan Field is Required',

            'lpurpose.required' => 'The Loan Purpose Field is Required',
        ]);

        // $messages = [

        //     'lamount.required' => 'The Loan Amount Field is Required',
        // ];
        $user_id = Auth::id();

        $nrequest = new newrequest;

        $nrequest->lamount = $request->lamount;

        $nrequest->ltype = $request->ltype;

        $nrequest->lplan = $request->lplan;

        $nrequest->lpurpose = $request->lpurpose;

        $randomString = Str::random(4);

        $randomNumber = rand(1000, 9999);

        $referencenumber = 'ref'. strtolower($randomString) . $randomNumber;

        $nrequest->refnumber = $referencenumber;

        $nrequest->user_id = $user_id;

        $nrequest->payment_status = 'Not Approved';

        // $nrequest = 'ref'.Str::random(10);

        $nrequest->save();

        session()->flash('success', 'Your New Request has been successfully submitted.');

        return redirect()->back();
    }




    public function loanstatus()
    {

        if(Auth::id())
        {
            $user = Auth::user();

            $userid = $user->id;

            $loanstatus = newrequest::where('user_id', '=', $userid)->orderBy('created_at', 'Desc')->get();


        return view('userdashboard.loanstatus', compact('loanstatus'));
        }
        else
        {
            return redirect('login');
        }
    }



    public function repayment()
    {


        if(Auth::id())
        {
            $user = Auth::user();

            $userid = $user->id;

            $repayment = newrequest::where('user_id', '=', $userid)->orderBy('created_at', 'Desc')->get();


            return view('userdashboard.repayment', compact('repayment'));

        }
        else
        {
            return redirect('login');
        }

    }
}
