<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoriesController extends Controller
{
    public function index() {
        $categories = Category::all();

        return view("categories", [
            "categories" => $categories
        ]);
    }

    public function create() {
        $category = new Category();

        return view("category", [
            "category" => $category
        ]);
    }

    public function store(Request $request) {
        $category = new Category();
        $category->name = $request->input("name");
        $category->description = $request->input("description");
        $category->save();

        return redirect()->route("categories.index");
    }

    public function edit($id) {
        $category = Category::find($id);

        return view("category", [
            "category" => $category
        ]);
    }

    public function update($id, Request $request) {
        $category = Category::find($id);
        $category->name = $request->input("name");
        $category->description = $request->input("description");
        $category->save();

        return redirect()->route("categories.index");
    }

    public function destroy($id) {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route("categories.index");
    }

}
