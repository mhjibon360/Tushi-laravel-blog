<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\NewsletterMail;
use App\Models\ContactMessage;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NotificationController extends Controller
{
    /**
     * all subscriber list view
     */
    public function allsubscriberlist()
    {
        $allnewsletter = Newsletter::latest()->get();
        return view('backend.pages.notification.newsletter.index', compact('allnewsletter'));
    }

    /**
     * all subscriber list view
     */
    public function sendnewsletter(Request $request)
    {
        $allnewsletter = Newsletter::all();

        $request->validate([
            'subject' => 'required',
            'message' => 'required',
        ]);

        $maildata = [
            'subject' => $request->subject,
            'message' => $request->message,
        ];
        foreach ($allnewsletter as $key => $letter) {
            Mail::to($letter->email)->queue(new NewsletterMail($maildata));
        }

        notyf()->success("News letter send success");
        return back();
    }

    /**
     * all contact list 
     */
    public function allmessagelist()
    {
        $allcontactmessage = ContactMessage::latest()->get();
        return view('backend.pages.notification.contact.index', compact('allcontactmessage'));
    }

    /**
     * all contact list 
     */
    public function deletemessagelist($id)
    {
        ContactMessage::findOrFail($id)->delete();
        notyf()->warning("Contact message delete success");
        return back();
    }
}
