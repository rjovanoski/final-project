<?php

namespace App\Http\Controllers\User;

use Auth;
use App\User;
use App\Recipe;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'user']);
    }

    public function index()
    {
        $userId = Auth::id();

        $recipes = Recipe::where('user_id', $userId)->where('status', '=', 1)->get();

        return view('user.index', compact('recipes'));
    }

    public function edit()
    {
        return view('user.edit');
    }

    public function update(Request $request)
    {
        request()->validate([
            'name' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email',
            'avatar' => 'image|mimes:jpg,jpeg,png',
            'facebook',
            'twitter'
        ]);

        if (request()->hasFile('avatar')) {
            
            $filename = request()->avatar->getClientOriginalName();

            if (Auth::user()->avatar != $filename) {
                
                Storage::disk('public')->delete("images/user/".Auth::id()."/".Auth::user()->avatar);

                request()->avatar->storeAs('images/user/'.Auth::id().'/', $filename, 'public');

                Auth::user()->update([
                    'avatar' => $filename
                ]);

            }else {
                return redirect()->back()->with('error', 'This image already exist!');
            }
        }

        Auth::user()->update([
            'name' => request()->name,
            'username' => request()->username,
            'email' => request()->email,
            'facebook' => request()->facebook,
            'twitter' => request()->twitter
        ]);

        return redirect()->back()->with('message', 'Profile Updated');
    }

    public function destroy(User $user)
    {   
        Storage::disk('public')->delete("images/user/".Auth::id()."/".Auth::user()->avatar);
        
        foreach ($user->recipes as $recipe) {

            Storage::disk('public')->delete("images/$recipe->type/$recipe->image");
        }

        $user->delete();

        return redirect(route('home'));
    }
}
