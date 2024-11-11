<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function createContact(Request $request)
    {

        $contact = Contact::create($request->all());

        return response()->json($contact, 201);
    }
}
