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
        $page = [
            'name'      =>  'Products',
            'title'     =>  'Products',
            'crumb'     =>  array(
            "Index" => '/dashboard',
            "" => ''
            )
        ];

        $products = Product::all();
        return view('products.index',compact('products','page'));
    }
    
    public function create(Request $request)
    {

                $page = [
            'name'      =>  'Products',
            'title'     =>  'Products',
            'crumb'     =>  array(
            "Index" => '/dashboard',
            "" => ''
            )
        ];

        return view('products.create',compact('page'));
    }

    public function store(Request $request)
    {
        // return$request->type;
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required',
            'preparation_time' => 'required',
            'type' => 'required',
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
            'preparation_time' => $request->preparation_time,
            'product_type' => $request->type,
            'pax' => $request->pax,
            'status' => 'active',
            'image_name' => $imageName,
        ]);

        return redirect()->route('products.create')->with('success', 'Product created successfully!');
    }

    public function update($id,Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'preparation_time' => 'required|string',
            'type' => 'required|string',
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
            'preparation_time' => $request->preparation_time,
            'product_type' => $request->type,
            'price' => $request->price,
            'pax' => $request->pax,
            'image_name' => $imageName,
        ]);

        return back()->with('success', 'Product edited successfully!');
    }

    public function edit($id,Request $request)
    {
        $page = [
            'name'      =>  'Products',
            'title'     =>  'Products',
            'crumb'     =>  array(
            "Edit" => '/dashboard',
            "" => ''
            )
        ];

        $product = Product::findOrFail($id);
        return view('products.edit',compact('product','page'));
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

       public function active_status($id)
    {
        Product::where('id', $id)->update([
            'status' => 'active',
        ]);
        return redirect("/product")->with('success', 'Activated');
    }

       public function inactive_status($id)
    {
        Product::where('id', $id)->update([
            'status' => 'inactive',
        ]);
        return redirect("/product")->with('success', 'Deactivated');
    }
    
}
