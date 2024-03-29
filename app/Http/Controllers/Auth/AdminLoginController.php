<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
      return view('admin.login');
    }

    public function login(Request $request)
    {
      // Validate form data
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:6'
      ]);

      // Attempt to log user in
      if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
      {
        // If successful, then redirect to destination
        return redirect()->intended(route('admin.dashboard'));
      }

      // If unsuccessful, then redirect back with form data
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
