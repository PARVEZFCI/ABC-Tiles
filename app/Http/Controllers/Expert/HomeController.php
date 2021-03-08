<?php


namespace App\Http\Controllers\Expert;

use App\Mode\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

use App\Model\AisAccountsConfig;
use App\Model\AisCoaTypes;
use App\Model\AisCoaGeneralLedger;
use App\Model\AisCoaSubsidiaryLedger;
use App\Model\AisSubsidiaryCalculation;
use App\Model\AisVouchers;
use App\Model\AisVoucherDetails;

use App\Model\Logs;
use DB;
use DateTime;

class HomeController extends Controller
{
    public function login()
    {
        return view('expert.login');
    }

    public function loginAction(Request $request)
    {
    	// Validate the form data
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        // Attempt to log the user in
        if (Auth::guard('user')->attempt(['username' => $request->username, 'password' => $request->password, 'status' => 'Active'], $request->remember)) {
            return redirect()->route('Admin.one');
        }

        // if unsuccessful, then redirect back to the login with the form data
        $flashdata = ['class'=>'danger', 'message'=>"Username and password doesn't match"];
        return redirect()->back()->withInput($request->only('username', 'remember'))->with($flashdata);
    }

    //Logout
    public function logout()
    {
        Auth::guard('user')->logout();
        return redirect()->route('login');
    }

    public function app()
    {
        return view('admin.dashboard');
    }


}