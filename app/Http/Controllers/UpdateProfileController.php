<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class UpdateProfileController extends Controller
{
    public function index()
    {
        return view('dashboard.update-profile.index');
    }

    public function indexuser()
    {
        return view('dashboard-user.update-profile-user.index');
    }

    public function update(User $user, Request $request)
    {   
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
            'updated_at' => now()
        ]);

        Alert::success('Success!', 'Profile has been updated!');
        return redirect('/dashboard/update-profile');
    }

    public function updateuser(User $user, Request $request)
    {   
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
            'updated_at' => now()
        ]);

        Alert::success('Success!', 'Profile has been updated!');
        return redirect('/dashboard-user/update-profile-user');
    }
}