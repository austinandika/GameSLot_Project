<?php

namespace App\Http\Controllers;

use App\Models\MsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function createUser(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email:dns|unique:ms_users,email',
            'password' => 'required|min:5|max:255',
            'gender' => 'required|in:Male,Female',
            'date_of_birth' => 'required|date_format:m/d/Y'
        ]);


        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['role_id'] = 2;      // member
        $validatedData['date_of_birth'] = date('Y-m-d H:i:s', strtotime($validatedData['date_of_birth']));

        MsUser::create($validatedData);

        return redirect()->route('account.login')->with('success', 'Your account has been registered. Please login');
    }
}
