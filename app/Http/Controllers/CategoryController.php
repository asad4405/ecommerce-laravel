<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryPostRequest;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()->get();
        return view('backend.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryPostRequest $request)
    {
        $category_img = 'Category_img_'.date('d_m_Y_') . time().'.'.$request->file('category_image')->extension();
        Image::make($request->file('category_image'))->save(base_path('public/uploads/category_images/'.$category_img));

        $category_slug = Str::slug($request->category_name);

        Category::insert([
            'category_name' => $request->category_name,
            'category_details' => $request->category_details,
            'category_slug' => $category_slug,
            'category_image' => $category_img,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('category-success','New Category Added Successfull!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('backend.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category_slug = Str::slug($request->category_name);

        if($request->hasFile('category_image')){

            unlink(base_path('public/uploads/category_images/').$category->category_image);

            $category_img = 'Category_img_' . date('d_m_Y_') . time() . '.' . $request->file('category_image')->extension();
            Image::make($request->file('category_image'))->save(base_path('public/uploads/category_images/' . $category_img));

            $category->category_name = $request->category_name;
            $category->category_details = $request->category_details;
            $category->category_slug = $category_slug;
            $category->category_image = $category_img;
            $category->save();
        }else{

            $category->category_name = $request->category_name;
            $category->category_details = $request->category_details;
            $category->category_slug = $category_slug;
            $category->save();
        }
        return redirect('category')->with('category-update','Category Updated Successfull!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        unlink(base_path('public/uploads/category_images/') . $category->category_image);
        
        $category->delete();
        return back()->with('category-delete', 'Category Deleted Successfull!');
    }
}
