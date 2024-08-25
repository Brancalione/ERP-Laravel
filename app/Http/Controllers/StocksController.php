<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class StocksController extends Controller
{
    public function indexlista() {
        $products = Product::all();

        return view("stocks", [
            "products" => $products,
        ]);
    }
    
    public function edit($id) {

        $product = Product::find($id);
        return view('stock', [
            'product' => $product,

        ]);
    }

    public function update(Request $request, $id){
        $product = Product::find($id);
        $action = $request->input('action');
    
        if ($action == 'soma') {
            $product->stock += $request->input('stock');
        } elseif ($action == 'diminui') {
            $product->stock -= $request->input('stock');
        } else {
            $product->stock = $request->input('stock');
        }
    
        $product->save();
        return redirect()->route('stocks.index');
    }
    
}