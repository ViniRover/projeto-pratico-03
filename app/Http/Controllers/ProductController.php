<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function create(Request $request) {
        $product = new Product();

        $product->title = $request->title;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->company_id = $request->company_id;

        $product->save();

        return 'Ok';
    }

    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);

        $product->title = $request->title;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->description = $request->description;

        $product->save();

        return 'OK';
    }
}
