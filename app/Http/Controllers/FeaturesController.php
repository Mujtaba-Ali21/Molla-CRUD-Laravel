<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Feature;

class FeaturesController extends Controller
{
    // Create

    public function create(Request $req)
    {
        $validated = $req->validate([
            "featureText" => "required",
            "image" => "required|mimes:jpeg,png,jpg,gif|max:2048",
            "price" => "required",
        ]);

        // Get the file object from the image input field
        $image = $req->file("image");

        $feature = new Feature();
        $feature->image = $image->getClientOriginalName();
        $feature->name = $validated["featureText"];
        $feature->price = $validated["price"];
        $feature->save();

        // Move the uploaded file to public directory
        $image->move(
            public_path("featureImages"),
            $image->getClientOriginalName()
        );

        $req->session()->flash("success", "feature Created Successfully!");
        return redirect("/featuresTable");
    }

    // Read
    public function read()
    {
        $data = Feature::all();

        return view("tables/featuresTable", ["data" => $data]);
    }

    // Update
    public function showUpdate($id)
    {
        $data = Feature::find($id);

        return view("tables/editFeature", ["feature" => $data]);
    }

    public function update(Request $req, $id)
    {
        $validated = $req->validate([
            "featureText" => "required",
            "image" => "required|mimes:jpeg,png,jpg,gif|max:2048",
            "price" => "required",
        ]);

        // Get the file object from the image input field
        $image = $req->file("image");

        $feature = Feature::find($req->id);
        $feature->image = $image->getClientOriginalName();
        $feature->name = $validated["featureText"];
        $feature->price = $validated["price"];
        $feature->save();

        // Move the uploaded file to public directory
        $image->move(
            public_path("featureImages"),
            $image->getClientOriginalName()
        );

        $req->session()->flash("success", "Feature Updated Successfully!");
        return redirect("/featuresTable");
    }

    // Delete
    public function delete(Request $req, $id)
    {
        $feature = Feature::find($req->id);
        $feature->delete();
        session()->flash("success", "Feature Deleted successfully!");
        return redirect("/featuresTable");
    }
}
