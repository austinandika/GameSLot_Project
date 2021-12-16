<?php

namespace App\Http\Controllers;

use App\Models\MsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function getProfile()
    {
        $profile = MsUser::find(auth()->user()->id);

        return view('profile', compact('profile'));
    }

    public function updateProfile(Request $request)
    {
        $profile = MsUser::find(auth()->user()->id);
        $profile->name = $request->name != null ? $request->name : $profile->name;
        $profile->email = $request->email != null ? $request->email : $profile->email;

        // get file
        $file = $request->file('profilePhoto');
        if ($file != null) {
            $imageName = auth()->user()->id . '-' . time() . '.' . $file->getClientOriginalExtension();
            Storage::putFileAs('public/profileImage', $file, $imageName);

            // delete file foto yang lama
            if ($profile->photo != null) {
                Storage::delete('public/' . $profile->photo);
            }

            $profile->photo = 'profileImage/' . $imageName;
        }

        $profile->save();

        return redirect()->back()->with('success', 'Your profile has been updated');
    }

    public function updatePassword(Request $request)
    {
        $profile = MsUser::find(auth()->user()->id);

        if (Hash::check($request->oldPassword, $profile->password)) {
            $validatedData = $request->validate([
                'password' => 'required|confirmed|min:5|max:255'
            ]);

            $validatedData['password'] = Hash::make($validatedData['password']);
            $profile->password = $validatedData['password'];
            $profile->save();
            return redirect()->back()->with('success', 'Your password has been updated');
        }
        return redirect()->back()->with('failed', 'Your password is incorrect');
    }
}
