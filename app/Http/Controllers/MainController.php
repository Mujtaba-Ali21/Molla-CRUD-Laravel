<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Banner;
use App\Models\Feature;
use App\Models\Category;
use App\Models\Top_selling;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function read()
    {
        // Banners View
        $banners = Banner::all();

        // Brands View
        $brands = Brand::all();

        // Categories View
        $categories = Category::all();

        // Features View
        $features = Feature::all();

        // Top Sellings View
        $top_sellings = Top_selling::all();


        return view("main/main", [
            "banners" => $banners,
            "brands" => $brands,
            "categories" => $categories,
            "features" => $features,
            "top_sellings" => $top_sellings,
        ]);
    }
}
