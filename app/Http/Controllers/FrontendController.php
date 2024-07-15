<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Inventory;
use App\Models\Offer_one;
use App\Models\Offer_two;
use App\Models\Product;
use App\Models\ProductGrallery;
use App\Models\Subscribe;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index()
    {
        $banners = Banner::all();
        $categories = Category::all();
        $offer_ones = Offer_one::all();
        $offer_twos = Offer_two::all();
        $products = Product::latest()->take(8)->get();
        $trending_products = Product::all();
        $recent_products = Product::latest()->take(3)->get();
        return view('index', [
            'banners' => $banners,
            'categories' => $categories,
            'offer_ones' => $offer_ones,
            'offer_twos' => $offer_twos,
            'products' => $products,
            'trending_products' => $trending_products,
            'recent_products' => $recent_products,
        ]);
    }

    function subscribe_store(Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);
        Subscribe::insert([
            'customer_id' => 1,
            'email' => $request->email,
            'created_at' => Carbon::now(),
        ]);
        return back();
    }

    function product_details($slug)
    {
        $product_id = Product::where('slug', $slug)->first()->id;
        $product = Product::find($product_id);
        $galleries = ProductGrallery::where('product_id', $product->id)->get();
        $available_colors = Inventory::where('product_id', $product->id)
            ->groupBy('color_id')
            ->selectRaw('sum(color_id) as sum, color_id')
            ->get();
        $available_sizes = Inventory::where('product_id', $product->id)
            ->groupBy('size_id')
            ->selectRaw('sum(size_id) as sum, size_id')
            ->get();
        return view('frontend.product_details', [
            'product' => $product,
            'galleries' => $galleries,
            'available_colors' => $available_colors,
            'available_sizes' => $available_sizes,
        ]);
    }

    function get_size(Request $request)
    {
        $str = '';
        $sizes = Inventory::where([
            'product_id' => $request->product_id,
            'color_id' => $request->color_id,
        ])->get();
        foreach ($sizes as $size) {
            if ($size->size->size_name == 'NA') {
                $str = '<li class="color"><input checked class="size_id" id="' . $size->size_id . '" type="radio"
                    name="size_id" value=" ' . $size->size_id . ' ">
                    <label for="' . $size->size_id . '">' . $size->size->size_name . '</label>
                    </li>';
            } else {
                $str .= '<li class="color"><input class="size_id" id="' . $size->size_id . '" type="radio"
                    name="size_id" value=" ' . $size->size_id . ' ">
                    <label for="' . $size->size_id . '">' . $size->size->size_name . '</label>
                    </li>';
            }
        }
        echo $str;
    }

    function get_quantity(Request $request)
    {
        $str = '';
        $quantity = Inventory::where([
            'product_id' => $request->product_id,
            'color_id' => $request->color_id,
            'size_id' => $request->size_id,
        ])->first()->quantity;
        $str = $quantity. ' In Stock';
        echo $str;
    }
}
