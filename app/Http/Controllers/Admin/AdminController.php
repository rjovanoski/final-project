<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    public function index()
    {
        return view('admin.index');
    }

    public function edit()
    {
        return view('admin.edit');
    }

    public function update(Request $request)
    {
        request()->validate([
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email',
        ]);

        Auth::user()->update([
            'name' => request()->name,
            'username' => request()->username,
            'email' => request()->email,
        ]);

        return redirect()->back()->with('message', 'Profile Updated');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('home');
    }

    public function passwordUpdate(User $user)
    {
        request()->validate([
            'old_password' => 'required|string|min:8',
            'new_password' => 'required|string|min:8',
            'confirm_new_password' => 'required|same:new_password',
        ]);

        $user = Auth::user();

        if (Hash::check(request()->old_password, $user->password)) {
            
            $user->update([
                'password' => Hash::make(request()->new_password)
            ]);

            return redirect()->back()->with('message', 'Password updated successfully');

        }else {
            return redirect()->back()->with('message', 'Incorrect old password!');
        }
    }
}