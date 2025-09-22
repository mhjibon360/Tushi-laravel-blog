<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class Categorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allcategory = Category::latest()->get();
        return view('backend.pages.category.index', compact('allcategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // vldiate data
        $request->validate([
            'category_name' => 'required|string|unique:categories,category_name',
        ]);

        // store data
        Category::insert([
            'category_name' => $request->category_name,
            'created_at' => now(),
        ]);
        // notification
        notyf()->success('Category inserted success');
        return back();
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('backend.pages.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // vldiate data
        $request->validate([
            'category_name' => 'required|string|unique:categories,category_name,' . $id,
        ]);

        // store data
        Category::where('id', $id)->update([
            'category_name' => $request->category_name,
            'created_at' => now(),
        ]);
        // notification
        notyf()->info('Category update success');
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::findOrFail($id)->delete();
        // notification
        notyf()->warning('Category delete success');
        return back();
    }
}
