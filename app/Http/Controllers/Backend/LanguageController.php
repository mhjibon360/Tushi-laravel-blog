<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alllanguage = Language::latest()->get();
        return view('backend.pages.language.index', compact('alllanguage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.language.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // vldiate data
        $request->validate([
            'language_name' => 'required|string|unique:languages,language_name',
            'language_short' => 'required|string|unique:languages,language_short',
        ]);

        // store data
        Language::insert([
            'language_name' => $request->language_name,
            'language_short' => $request->language_short,
            'created_at' => now(),
        ]);

        // notification
        notyf()->success('Language inserted success');
        return back();
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $language = Language::findOrFail($id);
        return view('backend.pages.language.edit', compact('language'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // vldiate data
        $request->validate([
            'language_name' => 'required|string|unique:languages,language_name,' . $id,
            'language_short' => 'required|string|unique:languages,language_short,' . $id,
        ]);

        // store data
        Language::where('id', $id)->update([
            'language_name' => $request->language_name,
            'language_short' => $request->language_short,
            'updated_at' => now(),
        ]);

        // notification
        notyf()->info('language update success');
        return redirect()->route('admin.language.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Language::findOrFail($id)->delete();
        // notification
        notyf()->warning('language delete success');
        return back();
    }
}
