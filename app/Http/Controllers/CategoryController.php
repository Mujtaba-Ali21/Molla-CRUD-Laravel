<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    // Create

    public function create(Request $req)
    {
        $validated = $req->validate([
            "categoryText" => "required",
            "image" => "required|mimes:jpeg,png,jpg,gif|max:2048",
        ]);

        // Get the file object from the image input field
        $image = $req->file("image");

        $category = new Category();
        $category->image = $image->getClientOriginalName();
        $category->text = $validated["categoryText"];
        $category->save();

        // Move the uploaded file to public directory
        $image->move(
            public_path("categoryImages"),
            $image->getClientOriginalName()
        );

        $req->session()->flash("success", "Category Created Successfully!");
        return redirect("/categoriesTable");
    }

    // Read

    public function read()
    {
        $data = Category::all();

        return view("tables/categoriesTable", ["data" => $data]);
    }

    // Update

    public function showUpdate($id)
    {
        $data = Category::find($id);

        return view("tables/editCategory", ["category" => $data]);
    }

    public function update(Request $req, $id)
    {
        $validated = $req->validate([
            "categoryText" => "required",
            "image" => "required|mimes:jpeg,png,jpg,gif|max:2048",
        ]);

        // Get the file object from the image input field
        $image = $req->file("image");

        $category = Category::find($req->id);
        $category->image = $image->getClientOriginalName();
        $category->text = $validated["categoryText"];
        $category->save();

        // Move the uploaded file to public directory
        $image->move(
            public_path("categoryImages"),
            $image->getClientOriginalName()
        );

        $req->session()->flash("success", "Category Updated Successfully!");
        return redirect("/categoriesTable");
    }

    // Delete
    
    public function delete(Request $req, $id)
    {
        $category = Category::find($req->id);
        $category->delete();
        session()->flash("success", "Category Deleted Successfully!");
        return redirect("/categoriesTable");
    }
}
