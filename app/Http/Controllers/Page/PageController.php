<?php

namespace App\Http\Controllers\Page;

use App\Recipe;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $breakfasts = Recipe::where('type', '=', 'breakfast')->where('status', '=', 1)->orderBy('created_at')->get();
        $breads = Recipe::where('type', '=', 'bread')->where('status', '=', 1)->orderBy('created_at')->get();
        $meats = Recipe::where('type', '=', 'meat')->where('status', '=', 1)->orderBy('created_at')->get();
        $burgers = Recipe::where('type', '=', 'burger')->where('status', '=', 1)->orderBy('created_at')->get();
        $soups = Recipe::where('type', '=', 'soup')->where('status', '=', 1)->orderBy('created_at')->get();
        $pastas = Recipe::where('type', '=', 'pasta')->where('status', '=', 1)->orderBy('created_at')->get();
        $pizzas = Recipe::where('type', '=', 'pizza')->where('status', '=', 1)->orderBy('created_at')->get();
        $cakes = Recipe::where('type', '=', 'cake')->where('status', '=', 1)->orderBy('created_at')->get();
        $vegans = Recipe::where('type', '=', 'vegan')->where('status', '=', 1)->orderBy('created_at')->get();

        return view('pages.index', compact('breakfasts', 'breads', 'meats', 'burgers', 'soups', 'pastas', 'pizzas', 'cakes', 'vegans'));
    }

    public function recipes()
    {
        $breakfasts = Recipe::where('type', '=', 'breakfast')->where('status', '=', 1)->orderBy('created_at')->get();
        $breads = Recipe::where('type', '=', 'bread')->where('status', '=', 1)->orderBy('created_at')->get();
        $meats = Recipe::where('type', '=', 'meat')->where('status', '=', 1)->orderBy('created_at')->get();
        $burgers = Recipe::where('type', '=', 'burger')->where('status', '=', 1)->orderBy('created_at')->get();
        $soups = Recipe::where('type', '=', 'soup')->where('status', '=', 1)->orderBy('created_at')->get();
        $pastas = Recipe::where('type', '=', 'pasta')->where('status', '=', 1)->orderBy('created_at')->get();
        $pizzas = Recipe::where('type', '=', 'pizza')->where('status', '=', 1)->orderBy('created_at')->get();
        $cakes = Recipe::where('type', '=', 'cake')->where('status', '=', 1)->orderBy('created_at')->get();
        $vegans = Recipe::where('type', '=', 'vegan')->where('status', '=', 1)->orderBy('created_at')->get();

        return view('pages.recipes', compact('breakfasts', 'breads', 'meats', 'burgers', 'soups', 'pastas', 'pizzas', 'cakes', 'vegans'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }
    
    public function breakfast()
    {
        $breakfasts = Recipe::where('type', '=', 'breakfast')->where('status', '=', 1)->orderBy('created_at')->get();
        
        return view('pages.breakfast', compact('breakfasts'));
    }

    public function bread()
    {
        $breads = Recipe::where('type', '=', 'bread')->where('status', '=', 1)->orderBy('created_at')->get();
        
        return view('pages.bread', compact('breads'));
    }

    public function meat()
    {
        $meats = Recipe::where('type', '=', 'meat')->where('status', '=', 1)->orderBy('created_at')->get();
        
        return view('pages.meat', compact('meats'));
    }

    public function burger()
    {
        $burgers = Recipe::where('type', '=', 'burger')->where('status', '=', 1)->orderBy('created_at')->get();
        
        return view('pages.burger', compact('burgers'));
    }

    public function soup()
    {
        $soups = Recipe::where('type', '=', 'soup')->where('status', '=', 1)->orderBy('created_at')->get();
        
        return view('pages.soup', compact('soups'));
    }

    public function pasta()
    {
        $pastas = Recipe::where('type', '=', 'pasta')->where('status', '=', 1)->orderBy('created_at')->get();
        
        return view('pages.pasta', compact('pastas'));
    }

    public function pizza()
    {
        $pizzas = Recipe::where('type', '=', 'pizza')->where('status', '=', 1)->orderBy('created_at')->get();
        
        return view('pages.pizza', compact('pizzas'));
    }

    public function vegan()
    {
        $vegans = Recipe::where('type', '=', 'vegan')->where('status', '=', 1)->orderBy('created_at')->get();
        
        return view('pages.vegan', compact('vegans'));
    }

    public function cake()
    {
        $cakes = Recipe::where('type', '=', 'cake')->where('status', '=', 1)->orderBy('created_at')->get();
        
        return view('pages.cake', compact('cakes'));
    }

    public function recipeView($id)
    {
        $recipe = Recipe::find($id);

        return view('pages.recipe-view', compact('recipe'));
    }
}
