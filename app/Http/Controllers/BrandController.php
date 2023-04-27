<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Brand;

class BrandController extends Controller
{
    
    // Create

    public function create(Request $req)
    {
        $validated = $req->validate(['name' => 'required', 'image' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048', ]);

         $imageName = null;
        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('brandImages'), $imageName);
        };

        $brand = new Brand;
        $brand->name = $validated['name'];
        if ($imageName) {
            $brand->image = $imageName;
        }
        $brand->save();

        $req->session()->flash('success', 'Brand Created Successfully!');
        return redirect('/brandsTable');
    }

    // Read

    public function read()
    {
        $data = Brand::all();

        return view('tables/brandsTable', ['data' => $data]);
    }
    
    // Update

    public function showUpdate($id)
    {
        $data = Brand::find($id);

        return view('tables/editBrand', ['brand' => $data]);
    }
    

    public function update(Request $req, $id)
    {
        $validated = $req->validate(['name' => 'required', 'image' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048', ]);

        $imageName = null;
        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('brandImages'), $imageName);
        };

        $brand = Brand::find($req->id);
        $brand->name = $validated['name'];
        if ($imageName) {
            $brand->image = $imageName;
        }
        $brand->save();

        $req->session()->flash('success', 'Brand Updated Successfully!');
        return redirect('/brandsTable');
    }

    // Delete
    
    public function delete(Request $req, $id)
    {
        $brand = Brand::find($req->id);
        $brand->delete();
        session()->flash('success', 'Brand Deleted successfully!');
        return redirect('/brandsTable');
    }
   
}
