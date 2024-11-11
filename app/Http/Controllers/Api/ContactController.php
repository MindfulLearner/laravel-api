<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendNewMail;
class ContactController extends Controller
{
    public function createContact(Request $request)
    {

        $contact = Contact::create($request->all());
        Mail::to('test@test.com')->send(new SendNewMail());

        return response()->json($contact, 201);
    }
}
