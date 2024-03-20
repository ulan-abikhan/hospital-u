<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Mail\VerificationMail;
use App\Models\EmailVerification;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
          'username'=>'required|max:255|alpha',
          'email'=>'required|email:rfs,dns|unique:users,email',
          'password'=>'required|min:8|max:100|string',
          'photo'=>'image|max:1000',
        ]);

        User::create([
            'name'=>$request['username'],
            'email'=>$request['email'],
            'password'=>bcrypt($request['password']),
            'role'=>'client'
        ]);

        $this->sendMail($request['username'], $request['email']);

        return redirect('/')->with('success', "Successful");
    }

    public function sendMail($firstName, $email) {

        $token = Str::random(50);

        $emailVerification = EmailVerification::create([
            "token"=>$token,
            "email"=>$email
        ]);

        $link = URL::to('/').'/auth/verify-mail?token='.$token;

        $dicardLink = URL::to('/').'/auth/discard-mail?token='.$token;

        Mail::to($email)->send(new VerificationMail($link, $firstName, $dicardLink));

    }

    public function verify(Request $request) {
        $token = $request['token'];

        $email = EmailVerification::where('token', $token)->first();

        $user = User::where('email', $email['email'])->first();

        $user->email_verified_at = Carbon::now();

        $user->save();

        $email->delete();

        return redirect(URL::to('/'));

    }

    public function discard(Request $request) {
        $token = $request['token'];

        $email = EmailVerification::where('token', $token)->first();

        $user = User::where('email', $email['email'])->first();

        $email->delete();

        $user->delete();

        return redirect(URL::to('/'));
    }

    public function update(Request $request) {

//        $request->validate([
//          'photo'=>'image|max:800',
//          'name'=>'max:255|alpha'
//        ]);

        $user = $request->user();

        if ($request->hasFile('photo')) {
          $photo = $request->file('photo');
          $photoName = Str::random(32);
          $mime = $photo->getClientOriginalExtension();
          $photoName = "photos/$photoName".'.'.$mime;
          Storage::disk('public')->put("$photoName", file_get_contents($photo));
          $user->photo = 'storage/'.$photoName;
        }

        if (isset($request['name'])) {
            $user->name = $request['name'];
        }

        $user->save();

        return back()->with('success', "Successful");

    }


}
