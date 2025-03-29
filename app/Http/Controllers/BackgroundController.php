<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Background;

class BackgroundController extends Controller
{
    public function index(Request $request)
    {   
        $products = Background::all();
        return view('backgrounds.index',compact('products'));
    }
    
    public function create(Request $request)
    {
        return view('backgrounds.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Store image in public/uploads folder
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/carousel'), $imageName);

        // Save product to database
        Background::create([
            'image' => $imageName,
        ]);

        return redirect()->route('backgrounds.create')->with('success', 'Product created successfully!');
    }

    public function update($id,Request $request)
    {
        // Store image in public/uploads folder
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/carousel'), $imageName);
        } else {
            return back()->withErrors('No image uploaded.');
        }

        // Save product to database
        Background::where('id', $id)->update([
            'image' => $imageName,
        ]);

        return back()->with('success', 'Product edited successfully!');
    }

    public function edit($id,Request $request)
    {
        $product = Background::findOrFail($id);
        return view('backgrounds.edit',compact('product'));
    }

    public function destroy($id)
    {
        Background::destroy($id);
        
        return redirect("/backgrounds")->withErrors('Deleted Successfull');
    }

    public function upload_destroy($id)
    {
        Background::where('id', $id)->update([
            'image' => '',
        ]);
        return redirect("/backgrounds/$id/edit")->with('success', 'successfuly added');
    }
}
