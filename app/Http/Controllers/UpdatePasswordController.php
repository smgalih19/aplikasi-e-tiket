<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UpdatePasswordController extends Controller
{
    public function edit(){
        return view('dashboard.update-profile.password.edit',[
            'title' => 'ChangePassword'
        ]);
    }

    public function edituser(){
        return view('dashboard-user.update-profile-user.password.edit',[
            'title' => 'ChangePassword'
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required','min:5','confirmed'],
        ]);

        $user = $request->user();

        if(Hash::check($request->current_password, $user->password)){
            $user->update(['password' => Hash::make($request->password)]);
            return redirect('/dashboard/update-profile')->with('success', 'Password has been updated');
        }

        throw ValidationException::withMessages([
            'current_password' => 'You current password does not match with our record'
        ]);
    }

    
    public function updateuser(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required','min:5','confirmed'],
        ]);

        $user = $request->user();

        if(Hash::check($request->current_password, $user->password)){
            $user->update(['password' => Hash::make($request->password)]);
            return redirect('/dashboard-user/update-profile-user')->with('success', 'Password has been updated');
        }

        throw ValidationException::withMessages([
            'current_password' => 'You current password does not match with our record'
        ]);
    }
}
