<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    public function show()
    {
        return view('auth.profile');
    }

    public function update(ProfileUpdateRequest $request)
    {
        // Task: fill in the code here to update name and email
        // Also, update the password if it is set
        $request->user()->name=$request->get('name');
        $request->user()->email=$request->get('email');
       if($request->has('email')){
           $request->user()->email=$request->get('email');
        }


        return redirect()->route('profile.show')->with('success', 'Profile updated.');
    }
}
