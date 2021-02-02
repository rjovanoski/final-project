<?php

namespace App\Http\Controllers\Admin;

use App\Recipe;
use App\User;
use Illuminate\Support\Facades\Storage;
use App\Notifications\ApprovedRecipeNotification;
use App\Notifications\DeletedRecipeNotification;
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

    public function edit($id)
    {
        $recipe = Recipe::find($id);

        return view('admin.edit', compact('recipe'));
    }

    public function update($id)
    {
        $recipe = Recipe::find($id);
        
        if (request()->status && request()->status == 1) {

            $recipe->update([
                'status' => request()->status
            ]);

            $recipe->user->notify(new ApprovedRecipeNotification($recipe));             
                          
        }else {
            return redirect()->back()->with('message', 'Please approve the recipe');
        }        

        return redirect()->route('admin.index')->with('message', 'Recipe approved');
    }

    public function destroy(Recipe $recipe)
    {
        Storage::disk('public')->delete("images/$recipe->type/$recipe->image");

        $recipe->delete(); 
        
        $recipe->user->notify(new DeletedRecipeNotification($recipe));

        return redirect()->route('admin.index')->with('message', 'Recipe Deleted Successfully');
    }

    public function userRecipes()
    {
        $recipes = Recipe::all();
    
        return view('admin.user-recipes', compact('recipes'));
    }
}
