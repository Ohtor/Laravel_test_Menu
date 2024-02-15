<?php

namespace App\Http\Controllers;

use App\Http\Requests\StockRequest;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index ()
    {
        $stocks = Stock::all();
        return view('stock.index', compact('stocks'));
    }

    public function create ()
    {
        return view('stock.create');
    }

    public function store (StockRequest $request) 
    {
        $stock = new Stock();
        $stock->ingredient = $request->input('ingredient');
        $stock->ingredient = strtolower($stock->ingredient);
        $stock->quantity = $request->input('quantity');
        $stock->minStock = $request->input('minStock');
        $stock->save();
        return redirect(route(name:'stock.index'));
    }

    public function show ($stock) 
    {
        $stock = Stock::find($stock);
        return view('stock.show', compact('stock'));
    }

    public function edit ($stock)
    {
        $stock = Stock::find($stock);
        return view('stock.edit', compact('stock'));
    }

    public function update (StockRequest $request, $stock)
    {
        $stock = Stock::find($stock);
        $stock->ingredient = $request->input('ingredient');
        $stock->ingredient = strtolower($stock->ingredient);
        $stock->quantity = $request->input('quantity');
        $stock->minStock = $request->input('minStock');
        $stock->update();
        $stock = $stock->id;
        return redirect(route('stock.show', compact('stock')));
    }

    public function destroy ($stock)
    {
        $stock = Stock::find($stock);
        $stock->delete();
        return redirect(route(name:'stock.index'));
    }
}
