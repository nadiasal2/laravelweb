<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class RegisterController extends Controller
{
    public function registerPage() {
        return view('auth.register');
    }

    public function register(Request $request) {

        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validation) {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'remember_token' => Str::random(60),
                'created_at' => Carbon::now()
            ]);

            return redirect('/login');
        }

        return back();
    }
}
