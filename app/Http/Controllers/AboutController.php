<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AboutController extends Controller
{
    /**
     * about us
     */
    function about(): View
    {
        $about = About::first();
        return view('backend.pages.about.index', compact('about'));
    }

    /**
     * about us
     */
    function aboutupdate(Request $request): RedirectResponse
    {
        $about = About::where('id', $request->id)->first();

        $request->validate([
            'title' => 'required',
            'icon' => 'nullable',
            'heading' => 'required',
            'image' => 'nullable',
            'big_heading' => 'required',
            'details' => 'required',
            'story_icon' => 'nullable',
            'story_heading' => 'required',
            'story_details_left' => 'required',
            'story_details_right' => 'required',
            'short' => 'required',
        ]);



        if ($request->hasFile('icon')) {
            $icon = $request->file('icon');
            $name = hexdec(uniqid()) . '.' . $icon->getClientOriginalExtension();
            $iconurl = "upload/about/" . $name;
            $icon->move(public_path("upload/about/"), $name);
            if (file_exists($about->icon)) {
                unlink(file_exists($about->icon));
            }
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $imageurl = "upload/about/" . $name;
            $image->move(public_path("upload/about/"), $name);
            if (file_exists($about->image)) {
                unlink(file_exists($about->image));
            }
        }
        if ($request->hasFile('story_icon')) {
            $story_icon = $request->file('story_icon');
            $name = hexdec(uniqid()) . '.' . $story_icon->getClientOriginalExtension();
            $story_iconurl = "upload/about/" . $name;
            $story_icon->move(public_path("upload/about/"), $name);
            if (file_exists($about->story_icon)) {
                unlink(file_exists($about->story_icon));
            }
        }




        About::where('id', $request->id)->update([
            'title' => $request->title,
            'icon' => isset($iconurl) ? $iconurl : $about->icon,
            'heading' => $request->heading,
            'image' => isset($imageurl) ? $imageurl : $about->image,
            'big_heading' => $request->big_heading,
            'details' => $request->details,
            'story_icon' => isset($story_iconurl) ? $story_iconurl : $about->story_icon,
            'story_heading' => $request->story_heading,
            'story_details_left' => $request->story_details_left,
            'story_details_right' => $request->story_details_right,
            'short' => $request->short,
            'updated_at' => now(),
        ]);

        notyf()->info('About update success');
        return back();
    }
}
