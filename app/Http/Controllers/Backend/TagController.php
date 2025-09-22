<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alltag = Tag::latest()->get();
        return view('backend.pages.tag.index', compact('alltag'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // vldiate data
        $request->validate([
            'tag_name' => 'required|string|unique:tags,tag_name',
        ]);

        // store data
        Tag::insert([
            'tag_name' => $request->tag_name,
            'created_at' => now(),
        ]);
        // notification
        notyf()->success('tag inserted success');
        return back();
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tag = Tag::findOrFail($id);
        return view('backend.pages.tag.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // vldiate data
        $request->validate([
            'tag_name' => 'required|string|unique:tags,tag_name,' . $id,
        ]);

        // store data
        Tag::where('id', $id)->update([
            'tag_name' => $request->tag_name,
            'created_at' => now(),
        ]);
        // notification
        notyf()->info('tag update success');
        return redirect()->route('admin.tag.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tag::findOrFail($id)->delete();
        // notification
        notyf()->warning('tag delete success');
        return back();
    }
}
