<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Banner;

class BannerController extends Controller
{

    // Create

    public function create(Request $req)
    {
        $validated = $req->validate(['bannerText' => 'required', 'image' => 'required|mimes:jpeg,png,jpg,gif|max:2048', ]);

        // Get the file object from the image input field
        $image = $req->file('image');

        $banner = new Banner;
        $banner->image = $image->getClientOriginalName();
        $banner->text = $validated['bannerText'];
        $banner->save();

        // Move the uploaded file to public directory
        $image->move(public_path('bannerImages') , $image->getClientOriginalName());

        $req->session()->flash('success', 'Banner Created Successfully!');
        return redirect('/bannersTable');
    }

    // Read

    public function read()
    {
        $data = Banner::all();

        return view('tables/bannersTable', ['data' => $data]);
    }
    
    // Update

    public function showUpdate($id)
    {
        $data = Banner::find($id);

        return view('tables/editBanner', ['banner' => $data]);
    }
    

    public function update(Request $req, $id)
    {
        $validated = $req->validate(['bannerText' => 'required', 'image' => 'required|mimes:jpeg,png,jpg,gif|max:2048', ]);

        // Get the file object from the image input field
        $image = $req->file('image');

        $banner = Banner::find($req->id);
        $banner->image = $image->getClientOriginalName();
        $banner->text = $validated['bannerText'];
        $banner->save();
                
        // Move the uploaded file to public directory
        $image->move(public_path('bannerImages'), $image->getClientOriginalName());

        $req->session()->flash('success', 'Banner Updated Successfully!');
        return redirect('/bannersTable');
    }

    // Delete

    public function delete(Request $req, $id)
    {
        $banner = Banner::find($req->id);
        $banner->delete();
        session()->flash('success', 'Banner Deleted successfully!');
        return redirect('/bannersTable');
    }
}