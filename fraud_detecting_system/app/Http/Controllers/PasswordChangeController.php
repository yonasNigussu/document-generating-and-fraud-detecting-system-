<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordChangeController extends Controller
{
    public function show()
    {
        return view('auth.password-change');
    }

    public function updata(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => [
                'required',
                'confirmed',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            ],
        ]);
        

        $user = auth()->user();

        if (Hash::check($request->current_password,$user->password)) {
            $user->update([
                'password' => Hash::make($request->password),
                'password_changed' => true,
            
            ]);
            //dd($user->password_changed);
            return redirect()->route('/home/actor')->with('success', 'Password changed successfully.');
        }

        return back()->withErrors(['current_password' => 'The current password is incorrect.']);
    }
}