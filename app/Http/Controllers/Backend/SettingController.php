<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SeoSetting;
use App\Models\SiteSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingController extends Controller
{
    /**
     * setting
     */
    function setting(): View
    {
        return view('backend.pages.setting.index');
    }

    /**
     * setting
     */
    function sitesetting(): View
    {
        $sitesetting = SiteSetting::first();
        return view('backend.pages.setting.site-setting', compact('sitesetting'));
    }

    /**
     * setting
     */
    function sitesettingupdate(Request $request): RedirectResponse
    {
        $sitesetting = SiteSetting::where('id', $request->id)->first();

        // $request->validate([
        //     'fav_fav_icon' => 'nullable',
        //     'logo' => 'nullable',
        //     'rss_fav_icon' => 'nullable',
        //     'rss_text' => 'nullable',
        //     'site_map_text' => 'required',
        //     'privacy_text' => 'required',
        //     'footer_text' => 'nullable',
        //     'twitter' => 'nullable',
        //     'linkdin' => 'nullable',
        //     'instagram' => 'nullable',
        //     'facebook' => 'nullable',
        // ]);



        if ($request->hasFile('fav_icon')) {
            $fav_icon = $request->file('fav_icon');
            $name = hexdec(uniqid()) . '.' . $fav_icon->getClientOriginalExtension();
            $fav_iconurl = "upload/setting/" . $name;
            $fav_icon->move(public_path("upload/setting/"), $name);
            if (file_exists($sitesetting->fav_icon)) {
                unlink($sitesetting->fav_icon);
            }
        }

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $name = hexdec(uniqid()) . '.' . $logo->getClientOriginalExtension();
            $logourl = "upload/setting/" . $name;
            $logo->move(public_path("upload/setting/"), $name);
            if (file_exists($sitesetting->logo)) {
                unlink($sitesetting->logo);
            }
        }

        if ($request->hasFile('post_of_month_bg')) {
            $post_of_month_bg = $request->file('post_of_month_bg');
            $name = hexdec(uniqid()) . '.' . $post_of_month_bg->getClientOriginalExtension();
            $post_of_month_bgurl = "upload/setting/" . $name;
            $post_of_month_bg->move(public_path("upload/setting/"), $name);
            if (file_exists($sitesetting->post_of_month_bg)) {
                unlink($sitesetting->post_of_month_bg);
            }
        }

        $sitesetting->update([
            'fav_icon' => isset($fav_iconurl) ? $fav_iconurl : $sitesetting->fav_icon,
            'post_of_month_bg' => isset($post_of_month_bgurl) ? $post_of_month_bgurl : $sitesetting->post_of_month_bg,
            'logo' => isset($logourl) ? $logourl : $sitesetting->logo,
            'rss_icon' => $request->rss_icon,
            'rss_text' => $request->rss_text,
            'site_map_text' => $request->site_map_text,
            'privacy_text' => $request->privacy_text,
            'footer_text' => $request->footer_text,
            'twitter' => $request->twitter,
            'linkdin' => $request->linkdin,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'home_banner_title' => $request->home_banner_title,
            'recentpost_title' => $request->recentpost_title,
            'topauthor_title' => $request->topauthor_title,
            'featured_title' => $request->featured_title,
            'subscribe_news_letter_title' => $request->subscribe_news_letter_title,
            'subscribe_news_letter_details' => $request->subscribe_news_letter_details,
            'subscribe_news_button_text' => $request->subscribe_news_button_text,
            'contact_us_title' => $request->contact_us_title,
            'contact_us_button_text' => $request->contact_us_button_text,
            'contact_us_right_heading' => $request->contact_us_right_heading,
            'contact_us_right_details' => $request->contact_us_right_details,
            'contact_us_email_icon' => $request->contact_us_email_icon,
            'contact_us_email_address' => $request->contact_us_email_address,
            'contact_us_phone_icon' => $request->contact_us_phone_icon,
            'contact_us_phone_address' => $request->contact_us_phone_address,
            'updated_at' => now(),
        ]);

        notyf()->info('Site setting update success');
        return back();
    }

    /**
     * seo setting
     */
    function seosetting(): View
    {
        $seosetting = SeoSetting::first();
        return view('backend.pages.setting.seo-setting', compact('seosetting'));
    }

    /**
     * setting
     */
    function seosettingupdate(Request $request): RedirectResponse
    {
        $seosetting = SeoSetting::where('id', $request->id)->first();

        $request->validate([
            'meta_title' => 'nullable',
            'meta_description' => 'nullable',
        ]);



        if ($request->hasFile('og_image')) {
            $og_image = $request->file('og_image');
            $name = hexdec(uniqid()) . '.' . $og_image->getClientOriginalExtension();
            $og_imageurl = "upload/about/" . $name;
            $og_image->move(public_path("upload/about/"), $name);
            if (file_exists($seosetting->og_image)) {
                unlink(file_exists($seosetting->og_image));
            }
        }

        if ($request->hasFile('twitter_image')) {
            $twitter_image = $request->file('twitter_image');
            $name = hexdec(uniqid()) . '.' . $twitter_image->getClientOriginalExtension();
            $twitter_imageurl = "upload/about/" . $name;
            $twitter_image->move(public_path("upload/about/"), $name);
            if (file_exists($seosetting->twitter_image)) {
                unlink(file_exists($seosetting->twitter_image));
            }
        }

        $seosetting->update([
            'og_image' => isset($og_imageurl) ? $og_imageurl : $seosetting->og_image,
            'twitter_image' => isset($twitter_imageurl) ? $twitter_imageurl : $seosetting->twitter_image,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'meta_author' => $request->meta_author,
            'meta_robots' => $request->meta_robots,
            'canonical_url' => $request->canonical_url,
            'og_title' => $request->og_title,
            'og_description' => $request->og_description,
            'twitter_title' => $request->twitter_title,
            'twitter_description' => $request->twitter_description,
            'updated_at' => now(),
        ]);

        notyf()->info('Seo setting update success');
        return back();
    }
}
