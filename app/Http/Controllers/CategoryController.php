<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        return Category::all();


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name' => ['required', 'max:255'],
            'slug' => ['required', 'max:255'],
        ]);

        $category = Category::create($request->only('name', 'slug'));

        return response()->json($category, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
        return $category;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
        $request->validate([
            'name' => ['required', 'max:255'],
            'slug' => ['required', 'max:255'],
        ]);

        $category = Category::update($request->only('name', 'slug'));
        return response()->json($category, 201);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();

        return 'success';
    }
}
