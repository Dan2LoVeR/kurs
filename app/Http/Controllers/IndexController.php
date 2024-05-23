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
        

        return view('welcome', [

            'user' => $request->user()
        ]);
    }

    public function testShow(Request $request){

        
        return view('lessons.test.testone',['user' => $request->user(),]);
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

    public function showTestOne()
    {
        return view("contact_form");
    }
}