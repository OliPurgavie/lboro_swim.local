<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class CoachLoginController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest:coach');
  }

  public function showLoginForm()
  {
    return view('coach.login');
  }

  public function login(Request $request)
  {
    // Validate form data
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required|min:6'
    ]);

    // Attempt to log user in
    if (Auth::guard('coach')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
    {
      // If successful, then redirect to destination
      return redirect()->intended(route('coach.dashboard'));
    }

    // If unsuccessful, then redirect back with form data
    return redirect()->back()->withInput($request->only('email', 'remember'));
  }
}
