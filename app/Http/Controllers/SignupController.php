<?php

namespace App\Http\Controllers;

use App\Models\Signup;
use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SignupController extends Controller
{
    public function signUp(SignupRequest $req)
    {
        $signup = new Signup();

        $signup->name   = Str::of($req->input('name'))->lower()->ucfirst();
        $signup->phone  = $req->input('phone');

        $signup->save();

        return redirect()->route('home')->with('success', 'Спасибо! В ближайшее время с Вами свяжутся :)');
    }
}
