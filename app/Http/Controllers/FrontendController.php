<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Notifications\ContactNotification;
use App\Notifications\NewsletterNotification;
use Illuminate\Notifications\Notification as NotificationsNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class FrontendController extends Controller
{

    /**
     * frontend home page view
     */
    public function index()
    {
        return view('frontend.pages.index');
    }

    /**
     * frontend about page view
     */
    public function about()
    {
        return view('frontend.pages.about');
    }

    /**
     * cntact view
     */
    public function contact()
    {
        return view('frontend.pages.contact');
    }

    /**
     * cntact view
     */
    public function storecontact(Request $request)
    {
        $getadmin = User::where('role', 'admin')->get();
        // valiate data
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        // store message data
        ContactMessage::insert([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'created_at' => now(),
        ]);


        Notification::send($getadmin, new ContactNotification($request->name));
        notyf()->success('Thanks, for contact us');
        return back();
    }
    /**
     * store newsletter
     */
    public function storenewsletter(Request $request)
    {
        $adminget = User::where('role', 'admin')->get();
        // dd($adminget);
        // valiate data
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        // store message data
        Newsletter::insert([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'email' => $request->email,
            'created_at' => now(),
        ]);

        Notification::send($adminget, new NewsletterNotification($request->name));
        notyf()->success('Thanks, for subscribe');
        return back();
    }

    /**
     * frontend home page view
     */
    public function details($slug)
    {
        $post = Post::with(['category', 'author'])->where('slug', $slug)->first();
        $relatedposts = Post::with(['category', 'author'])->where('category_id', $post->category_id)->where('slug', '!=', $slug)->limit(3)->get();
        // return($relatedposts);
        return view('frontend.pages.detail', compact('post', 'relatedposts'));
    }

    /**
     * cateogry wise post
     */
    public function category($category_slug)
    {
        $category = Category::where('category_slug', $category_slug)->first();
        $categoryposts = Post::with(['category', 'author'])->where('category_id', $category->id)->paginate(6);
        return view('frontend.pages.category', compact('category', 'categoryposts'));
    }
    /**
     * author wise post
     */
    public function author($username)
    {
        $author = User::where('username', $username)->first();
        $authorposts = Post::with(['category', 'author'])->where('author_id', $author->id)->paginate(6);
        $authorpostscount = Post::with(['category', 'author'])->where('author_id', $author->id)->count();
        return view('frontend.pages.author', compact('author', 'authorposts', 'authorpostscount'));
    }


    /**
     * cateogry wise post
     */
    public function allblogs()
    {

        $allblogs = Post::with(['category', 'author'])->where('status', 1)->paginate(24);
        return view('frontend.pages.blogs', compact('allblogs'));
    }

    /**
     * cateogry wise post
     */
    public function allauthors()
    {

        $allauthors = User::where('status', '1')->where('role', 'admin')->latest()->paginate(20);
        // return($allauthors);
        return view('frontend.pages.all-authors', compact('allauthors'));
    }

    /**
     * all featured wise post
     */
    public function allfeatured()
    {

        $allfeatured = Post::with(['category', 'author'])->where('status', 1)->where('featured', 1)->paginate(24);
        return view('frontend.pages.all-featured', compact('allfeatured'));
    }

    /**
     * tag wise post
     */
    public function tag($tag_slug)
    {
        $tag = Tag::where('tag_slug', $tag_slug)->first();
        $tagposts =  Post::with(['category', 'author'])
            ->whereRaw('FIND_IN_SET(?, tag_id)', [$tag->id])
            ->paginate(6);
        return view('frontend.pages.all-tags', compact('tag', 'tagposts'));
    }

    /**
     * search blog
     */
    public function searchblog(Request $request)
    {
        $search_data = $request->search_data;
        $searchpostresults = Post::with(['category', 'author'])->where('status', 1)->where('title', 'LIKE', '%' . $search_data . '%')->get();
        return view('frontend.pages.search-post', compact('searchpostresults'));
    }

    
}
