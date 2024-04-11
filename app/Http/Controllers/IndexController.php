<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Utilities\Notification\MessengerNotificatorInterface;
use Illuminate\Contracts\Encryption\Encrypter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class IndexController extends Controller
{
    /**
     * @throws \Exception
     */
    public function index(Request $request)
    {
        $posts = Post::orderBy("created_at", "DESC")->paginate(3);

        return view('welcome', [
            "posts" => $posts,
            'user' => $request->user()
        ]);
    }

    public function showContactForm()
    {
        return view("contact_form");
    }

    public function contactForm(ContactFormRequest $request)
    {
        Mail::to("info@cutcode.ru")->send(new ContactForm($request->validated()));

        return redirect(route("contacts"));
    }
}