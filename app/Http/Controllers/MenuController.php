<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    public function index ()
    {
        $menus = Menu::all();
        return view('menu.index', compact('menus'));
    }

    // public function create () {}

    // public function store () {}

    // public function show ($menu) {}

    public function edit ($menu) 
    {
        $menu = Menu::find($menu);
        return view('menu.edit', compact('menu'));
    }

    public function update (MenuRequest $request, $menu) 
    {
        $menu = Menu::find($menu);
        $menu->dishes = $request->input('dishes');
        // foreach($menu->dishes as $dish)
        // {
        //     $dish = Str::lower($dish);
        // }
        $menu->dishes = array_map('strtolower', $menu->dishes);
        $menu->update();
        $menu = $menu->id;
        return redirect(route('menu.index', compact('menu')));
    }

    // public function destroy ($menu) {} strtolower(
}
