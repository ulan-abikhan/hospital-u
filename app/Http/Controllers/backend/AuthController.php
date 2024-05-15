<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function login(Request $request)
  {
    $credentials = ['email' => $request->email, 'password' => $request->password];

    if (Auth::attempt($credentials)) {
      $user = Auth::user();
      if ($user->role == 'admin') {
        return redirect('/admin')->with('success', 'Login Success');
      }
      return redirect('/')->with('success', 'Login Success');
    }

    return back()->with('error', 'Error email or password is not valid');
  }

  public function logout(Request $request)
  {
    Auth::logout();
    return redirect('/auth/login-basic');
  }
}
