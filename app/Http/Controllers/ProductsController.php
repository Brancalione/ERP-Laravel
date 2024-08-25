<?php

namespace App\Http\Controllers;



use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $products = Product::all();

        return view("products", [
            "products" => $products,
        ]);
    }

    public function create() {
        $product = New Product();
        $categories = Category::all();
        $brands = Brand::all();
        return view('product', [
            'product' => $product,
            'categories' => $categories,
            'brands' => $brands,
        ]);
    }

    public function store(Request $request) {

        $nameFile = null;
        if($request->hasFile("photo") ){
            $nameFile = uniqid() . "." . $request->file("photo")->extension();
            $request->file("photo")->storeAs("public", $nameFile);
        }
        $product = new Product();
        $product->name = $request->input("name");
        $product->description = $request->input("description");
        $product->stock = $request->input("stock");
        $product->price = $request->input("price");
        $product->photo = $nameFile;
        $product->brand_id = $request->input("brand_id");
        $product->category_id = $request->input("category_id");
        $product->save();

        return redirect()->route("products.index");
    }

    public function edit($id) {

        $product = Product::find($id);
        $categories = Category::all();
        $brands = Brand::all();
        return view('product', [
            'product' => $product,
            'categories' => $categories,
            'brands' => $brands,
        ]);
    }

    public function update($id, Request $request) {

        $product = Product::find($id);

        if($request->hasFile("photo")) {
            $nameFile = uniqid() . "." . $request->file("photo")->extension();
            $request->file("photo")->storeAs("public", $nameFile);    
            $product->photo = $nameFile;
        }

        $product->name = $request->input("name");
        $product->description = $request->input("description");
        $product->stock = $request->input("stock");
        $product->price = $request->input("price");
        $product->brand_id = $request->input("brand_id");
        $product->category_id = $request->input("category_id");
        $product->save();

        return redirect()->route("products.index");
    }

    public function destroy($id) {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route("products.index");
    }
}
