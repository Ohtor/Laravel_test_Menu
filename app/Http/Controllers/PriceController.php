<?php

namespace App\Http\Controllers;

use App\Http\Requests\PriceRequest;
use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index ()
    {
        $prices = Price::all();
        return view('prices.index', compact('prices'));
    }

    public function create ()
    {
        return view('prices.create');
    }

    public function store (PriceRequest $request)
    {
        $price = new Price();
        $price->ingredient = $request->input('ingredient');
        $price->ingredient = strtolower($price->ingredient);
        $price->price = $request->input('price');
        $price->save();
        return redirect(route(name:'prices.index'));
    }

    public function show ($price)
    {
        $price = Price::find($price);
        return view('prices.show', compact('price'));
    }

    public function edit ($price)
    {
        $price = Price::find($price);
        return view('prices.edit', compact('price'));
    }

    public function update (PriceRequest $request, $price)
    {
        $price = Price::find($price);
        $price->ingredient = $request->input('ingredient');
        $price->ingredient = strtolower($price->ingredient);
        $price->price = $request->input('price');
        $price->update();
        $price = $price->id;
        return redirect(route('prices.show', compact('price')));
    }

    public function destroy ($price)
    {
        $price = Price::find($price);
        $price->delete();
        return redirect(route(name:'prices.index'));
    }
}
