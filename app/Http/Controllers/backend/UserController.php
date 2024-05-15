<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Mail\VerificationMail;
use App\Models\Doctor;
use App\Models\EmailVerification;
use App\Models\Record;
use App\Models\Service;
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
    User::create([
      'name' => $request['username'],
      'email' => $request['email'],
      'password' => bcrypt($request['password']),
      'role' => 'client',
    ]);

    $this->sendMail($request['username'], $request['email']);

    return redirect('/')->with('success', 'Successful');
  }

  public function sendMail($firstName, $email)
  {
    $token = Str::random(50);

    $emailVerification = EmailVerification::create([
      'token' => $token,
      'email' => $email,
    ]);

    $link = URL::to('/') . '/auth/verify-mail?token=' . $token;

    $dicardLink = URL::to('/') . '/auth/discard-mail?token=' . $token;

    Mail::to($email)->send(new VerificationMail($link, $firstName, $dicardLink));
  }

  public function verify(Request $request)
  {
    $token = $request['token'];

    $email = EmailVerification::where('token', $token)->first();

    $user = User::where('email', $email['email'])->first();

    $user->email_verified_at = Carbon::now();

    $user->save();

    $email->delete();

    return redirect(URL::to('/'));
  }

  public function discard(Request $request)
  {
    $token = $request['token'];

    $email = EmailVerification::where('token', $token)->first();

    $user = User::where('email', $email['email'])->first();

    $email->delete();

    $user->delete();

    return redirect(URL::to('/'));
  }

  public function update(Request $request)
  {
    $user = $request->user();

    if ($request->hasFile('photo')) {
      $photo = $request->file('photo');
      $photoName = Str::random(32);
      $mime = $photo->getClientOriginalExtension();
      $photoName = "photos/$photoName" . '.' . $mime;
      Storage::disk('public')->put("$photoName", file_get_contents($photo));
      $user->photo = 'storage/' . $photoName;
    }

    if (isset($request['name'])) {
      $user->name = $request['name'];
    }

    $user->save();

    return back()->with('success', 'Successful');
  }

  public function index()
  {
    $users = User::where('role', 'client')->get();

    return view('content.patients', ['users' => $users]);
  }

  function show($id)
  {
    $user = User::find($id);

    $records = Record::with('recordInfo')
      ->where('checked', true)
      ->where('client_id', $id)
      ->orderBy('updated_at', 'desc')
      ->get();

    foreach ($records as $record) {
      $client = User::find($record->client_id);
      $record->client_name = $client->name;
      $doctor = Doctor::find($record->doctor_id);
      $record->doctor_name = $doctor->name;
      $service = Service::find($record->service_id);
      $record->service_name = $service->name;
    }

    return view('content.patient', ['user' => $user, 'records' => $records]);
  }
  function me(Request $request)
  {
    $user = $request->user();

    $records = Record::with('recordInfo')
      ->where('checked', true)
      ->where('client_id', $user->id)
      ->orderBy('updated_at', 'desc')
      ->get();

    foreach ($records as $record) {
      $client = User::find($record->client_id);
      $record->client_name = $client->name;
      $doctor = Doctor::find($record->doctor_id);
      $record->doctor_name = $doctor->name;
      $service = Service::find($record->service_id);
      $record->service_name = $service->name;
    }

    return view('content.patient-self', ['user' => $user, 'records' => $records]);
  }
}
