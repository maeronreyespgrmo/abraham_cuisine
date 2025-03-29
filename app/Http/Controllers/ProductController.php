<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index(Request $request)
    {   
        $products = Product::all();
        return view('products.index',compact('products'));
    }
    
    public function create(Request $request)
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Store image in public/uploads folder
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/products'), $imageName);

        // Save product to database
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image_name' => $imageName,
        ]);

        return redirect()->route('products.create')->with('success', 'Product created successfully!');
    }

    public function update($id,Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required',
        ]);

        // Store image in public/uploads folder
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/products'), $imageName);
        } else {
            return back()->withErrors('No image uploaded.');
        }

        // Save product to database
        Product::where('id', $id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image_name' => $imageName,
        ]);

        return back()->with('success', 'Product edited successfully!');
    }

    public function edit($id,Request $request)
    {
        $product = Product::findOrFail($id);
        return view('products.edit',compact('product'));
    }

    public function destroy($id)
    {
        Product::destroy($id);

        return redirect("/product")->withErrors('Deleted Successfull');
    }

    public function upload_destroy($id)
    {
        Product::where('id', $id)->update([
            'image_name' => '',
        ]);
        return redirect("/product/$id/edit")->with('success', 'successfuly added');
    }
}
