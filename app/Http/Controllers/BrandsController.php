<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Brand;

class BrandsController extends Controller
{
    
    public function index() {
        $brands = Brand::all();

        return view("brands", [
            "brands" => $brands
        ]);
    }

    public function create() {
        $brand = new Brand();

        return view("brand", [
            "brand" => $brand
        ]);
    }

    public function store(Request $request) {

        $nameFile = null;
        if($request->hasFile("photo") ){
            $nameFile = uniqid() . "." . $request->file("photo")->extension();
            $request->file("photo")->storeAs("public", $nameFile);
        }

        $brand = new Brand();
        $brand->name = $request->input("name");
        $brand->photo = $nameFile;
        $brand->save();

        return redirect()->route("brands.index");
    }

    public function edit($id) {
        $brand = Brand::find($id);

        return view("brand", [
            "brand" => $brand
        ]);
    }

    public function update($id, Request $request) {

        $brand = Brand::find($id);

        if($request->hasFile("logo")) {
            $nameFile = uniqid() . "." . $request->file("logo")->extension();
            $request->file("logo")->storeAs("public", $nameFile);    

            $brand->photo = $nameFile;
        }

        $brand->name = $request->input("name");
        $brand->save();

        return redirect()->route("brands.index");
    }

    public function destroy($id) {
        $brand = Brand::find($id);
        $brand->delete();

        return redirect()->route("brands.index");
    }
}
