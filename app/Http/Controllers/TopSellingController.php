<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Top_selling;

class TopSellingController extends Controller
{
    // Create

    public function create(Request $req)
    {
        $validated = $req->validate([
            "productName" => "required",
            "image" => "required|mimes:jpeg,png,jpg,gif|max:2048",
            "price" => "required",
        ]);

        // Get the file object from the image input field
        $image = $req->file("image");

        $top_selling = new Top_selling();
        $top_selling->image = $image->getClientOriginalName();
        $top_selling->name = $validated["productName"];
        $top_selling->price = $validated["price"];
        $top_selling->save();

        // Move the uploaded file to public directory
        $image->move(
            public_path("top_sellingImages"),
            $image->getClientOriginalName()
        );

        $req->session()->flash("success", "Product Created Successfully!");
        return redirect("/top_sellingsTable");
    }

    // Read
    public function read()
    {
        $data = Top_selling::all();

        return view("tables/top_sellingsTable", ["data" => $data]);
    }

    // Update
    public function showUpdate($id)
    {
        $data = Top_selling::find($id);

        return view("tables/editProduct", ["product" => $data]);
    }

    public function update(Request $req, $id)
    {
        $validated = $req->validate([
            "productName" => "required",
            "image" => "required|mimes:jpeg,png,jpg,gif|max:2048",
            "price" => "required",
        ]);

        // Get the file object from the image input field
        $image = $req->file("image");

        $top_selling = Top_selling::find($req->id);
        $top_selling->image = $image->getClientOriginalName();
        $top_selling->name = $validated["productName"];
        $top_selling->price = $validated["price"];
        $top_selling->save();

        // Move the uploaded file to public directory
        $image->move(
            public_path("top_sellingImages"),
            $image->getClientOriginalName()
        );

        $req->session()->flash("success", "Product Updated Successfully!");
        return redirect("/top_sellingsTable");
    }

    // Delete
    public function delete(Request $req, $id)
    {
        $top_selling = Top_selling::find($req->id);
        $top_selling->delete();
        session()->flash("success", "Product Deleted successfully!");
        return redirect("/top_sellingsTable");
    }
}
