<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        return Product::all();
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:200',
            'description' => 'required|string|max:200',
            'price' => 'required|decimal',
        ]);
        return Product::create($validated);
    }

    public function show($id) {
        return Product::findOrFail($id);
    }

    public function update(Request $request, $id) {
        $Product = Product::findOrFail($id);
        $Product->update($request->all());
        return $Product;
    }

    public function destroy($id) {
        return Product::destroy($id);
    }
}
