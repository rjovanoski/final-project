<?php

namespace App\Http\Controllers\Recipe;

use Auth;
use App\User;
use App\Recipe;
use App\Notifications\NewRecipeNotification;
use App\Notifications\RecipeUpdateNotification;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'user']);
    }

    public function index()
    {
        $userId = Auth::id();

        $breakfasts = Recipe::where('user_id', $userId)->where('type', '=', 'breakfast')->where('status', '=', 1)->orderBy('created_at')->get();
        $breads = Recipe::where('user_id', $userId)->where('type', '=', 'bread')->where('status', '=', 1)->orderBy('created_at')->get();
        $meats = Recipe::where('user_id', $userId)->where('type', '=', 'meat')->where('status', '=', 1)->orderBy('created_at')->get();
        $burgers = Recipe::where('user_id', $userId)->where('type', '=', 'burger')->where('status', '=', 1)->orderBy('created_at')->get();
        $soups = Recipe::where('user_id', $userId)->where('type', '=', 'soup')->where('status', '=', 1)->orderBy('created_at')->get();
        $pastas = Recipe::where('user_id', $userId)->where('type', '=', 'pasta')->where('status', '=', 1)->orderBy('created_at')->get();
        $pizzas = Recipe::where('user_id', $userId)->where('type', '=', 'pizza')->where('status', '=', 1)->orderBy('created_at')->get();
        $cakes = Recipe::where('user_id', $userId)->where('type', '=', 'cake')->where('status', '=', 1)->orderBy('created_at')->get();
        $vegans = Recipe::where('user_id', $userId)->where('type', '=', 'vegan')->where('status', '=', 1)->orderBy('created_at')->get();

        return view('recipes.index', compact('breakfasts', 'breads', 'meats', 'burgers', 'soups', 'pastas', 'pizzas', 'cakes', 'vegans'));
    }

    public function create()
    {
        return view('recipes.create');
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        request()->validate([
            'name' => 'required|string|min:3',
            'image' => 'required|image|mimes:jpeg,jpg,png',
            'type' => 'required',
            'ingredients' => 'required|string',
            'preparation_time' => 'required|integer',
            'preparation' => 'required|string',
            'description' => 'required|string'
        ]);

        if (request()->hasFile('image')) {
                
            $filename = request()->image->getClientOriginalname();

            request()->image->storeAs('images/'.request()->type.'/', $filename, 'public');
                
        }
        
        $recipe = $user->recipes()->create([
     
            'name' => request()->name,
            'image' => $filename,
            'type' => request()->type,
            'ingredients' => request()->ingredients,
            'preparation_time' => request()->preparation_time,
            'preparation' => request()->preparation,
            'description' => request()->description,
     
        ]);
        
        $administrators = User::where('role', '=', 'admin')->get();
        
            foreach ($administrators as $administrator) {
                $administrator->notify(new NewRecipeNotification($recipe, $user));
            }

        return redirect(route('user.index'))->with('message', 'Recipe Created. Please wait for approval.');
    }

    public function show($id)
    {
        $userId = Auth::id();

        $recipe = Recipe::where('user_id', $userId)->where('status', '=', 1)->find($id);

        return view('recipes.show', compact('recipe'));
    }

    public function edit($id)
    {
        $userId = Auth::id();

        $recipe = Recipe::where('user_id', $userId)->where('status', '=', 1)->find($id); 

        return view('recipes.edit', compact('recipe'));
    }

    public function update(Request $request, Recipe $recipe)
    {
        $user = Auth::user();

        request()->validate([
            'name' => 'required|string|min:3',
            'image' => 'image|mimes:jpeg,jpg,png',
            'type' => 'required',
            'ingredients' => 'required|string',
            'preparation_time' => 'required|integer',
            'preparation' => 'required|string',
            'description' => 'required|string'
        ]);
            
        if (request()->hasFile('image')) {

            $filename = request()->image->getClientOriginalname();
            
            if (request()->image != $filename) {
                
                Storage::disk('public')->delete("images/$recipe->type/$recipe->image");

                request()->image->storeAs('images/'.request()->type.'/', $filename, 'public');

                $recipe->update([
                    'image' => $filename,
                ]);

            }else {

                return redirect()->back()->with('error', 'This image already exist!');
            }              
        }
        
        $recipe->update([
            'name' => request()->name,
            'type' => request()->type,
            'ingredients' => request()->ingredients,
            'preparation_time' => request()->preparation_time,
            'preparation' => request()->preparation,
            'description' => request()->description,
            'status' => 0
        ]);
        
        $administrators = User::where('role', '=', 'admin')->get();

            foreach ($administrators as $administrator) {
                $administrator->notify(new RecipeUpdateNotification($recipe, $user));
            }

        return redirect(route('user.index'))->with('message', 'Recipe Updated. Please wait for approval.');
    }

    public function destroy(Recipe $recipe)
    {
        Storage::disk('public')->delete("images/$recipe->type/$recipe->image");

        $recipe->delete(); 
        
        return redirect(route('user.index'))->with('message', 'Recipe Deleted Successfully');
    }
}
