<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecipeRequest;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index ()
    {
        $recipes = Recipe::all();
        return view('recipes.index', compact('recipes'));
    }

    public function create () 
    {
        return view('recipes.create');
    }

    public function store (RecipeRequest $request)
    {
        $recipe = new Recipe();
        $recipe->recipe = $request->input('recipe');
        $recipe->recipe = strtolower($recipe->recipe);
        $recipe->components = $request->input('components');
        // $recipe->components = array_map('strtolower', $recipe->components);
        $recipe->save();
        return redirect(route(name:'recipes.index'));
    }

    public function show ($recipe)
    {
        $recipe = Recipe::find($recipe);
        return view('recipes.show', compact('recipe'));
    }

    public function edit ($recipe)
    {
        $recipe = Recipe::find($recipe);
        return view('recipes.edit', compact('recipe'));
    }

    public function update (RecipeRequest $request, $recipe)
    {
        $recipe = Recipe::find($recipe);
        $recipe->recipe = $request->input('recipe');
        $recipe->recipe = strtolower($recipe->recipe);
        $recipe->components = $request->input('components');
        // $recipe->components = array_map('strtolower', $recipe->components);
        $recipe->update();
        $recipe = $recipe->id;
        return redirect(route('recipes.show', compact('recipe')));
    }

    public function destroy ($recipe)
    {
        $recipe = Recipe::find($recipe);
        $recipe->delete();
        return redirect(route(name:'recipes.index'));
    }

}
