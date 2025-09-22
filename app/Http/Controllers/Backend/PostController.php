<?php

namespace App\Http\Controllers\Backend;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allposts = Post::orderBy('id', 'desc')->get();
        return view('backend.pages.post.index', compact('allposts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $allcategory = Category::all();
        $alltag = Tag::all();
        return view('backend.pages.post.create', compact(['allcategory', 'alltag']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // validate 
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'thumbnail' => 'required',
        ]);

        // profile image unlink and store new
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $name = hexdec(uniqid()) . '.' . $thumbnail->getClientOriginalExtension();
            $url = "upload/post/" . $name;
            $thumbnail->move(public_path("upload/post/"), $name);
        }

        // store data
        Post::insert([
            'author_id' => Auth::id(),
            'category_id' => $request->category_id,
            'tag_id' => isset($request->tag_id) ? implode(',', $request->tag_id) : '',
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'details' => $request->details,
            'thumbnail' => $url,
            'featured' => isset($request->featured) ? $request->featured : '0',
            'post_of_the_month' => isset($request->post_of_the_month) ? $request->post_of_the_month : '0',
            'status' => isset($request->status) ? $request->status : '0',
            'created_at' => now(),
        ]);

        notyf()->success('Post create success');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $allcategory = Category::all();
        $alltag = Tag::all();
        $post = Post::findOrFail($id);
        return view('backend.pages.post.edit', compact(['allcategory', 'alltag', 'post']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $post = Post::findOrFail($id);
        // validate 
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'thumbnail' => 'nullable',
        ]);

        // profile image unlink and store new
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $name = hexdec(uniqid()) . '.' . $thumbnail->getClientOriginalExtension();
            $url = "upload/post/" . $name;
            $thumbnail->move(public_path("upload/post/"), $name);
            if (file_exists($post->thumbnail)) {
                unlink(file_exists($post->thumbnail));
            }
        }

        // store data
        $post->update([
            'author_id' => Auth::id(),
            'category_id' => $request->category_id,
            'tag_id' => isset($request->tag_id) ? implode(',', $request->tag_id) : '',
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'details' => $request->details,
            'thumbnail' => isset($url) ? $url : $post->thumbnail,
            'featured' => isset($request->featured) ? $request->featured : '0',
            'post_of_the_month' => isset($request->post_of_the_month) ? $request->post_of_the_month : '0',
            'status' => isset($request->status) ? $request->status : '0',
            'updated_at' => now(),
        ]);

        notyf()->info('Post update success');
        return redirect()->route('admin.post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        if (file_exists($post->thumbnail)) {
            unlink($post->thumbnail);
        }
        // delete data
        $post->delete();

        notyf()->warning('Post delete success');
        return redirect()->route('admin.post.index');
    }

    /**
     * change status
     */
    public function changestatus(Request $request)
    {
        $post = Post::findOrFail($request->id);

        $post->{$request->name} = $request->status;
        $post->save();

        return response()->json('Update success');
    }
}
