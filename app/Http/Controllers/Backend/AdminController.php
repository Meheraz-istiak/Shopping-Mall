<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('Backend.admin.admin_login');
    }


    public function admin_login(Request $request)
    {


        $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);


        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password]))
         {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('admin.dashboard'));
          } 
      // if unsuccessful, then redirect back to the login with the form data
      return redirect()->back()->withInput($request->only('email', 'remember'));

    }


    public function admin_logout()
    {

        Auth::guard('admin')->logout();
        return redirect()->intended(route('admin.login.submit'));
    }
}
