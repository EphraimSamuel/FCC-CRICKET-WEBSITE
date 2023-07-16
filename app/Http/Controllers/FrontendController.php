<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }

    public function history()
    {
        return view('frontend.pages.history');
    }



    public function contactSubmit(Request $request)
    {
        $this->validate($request, [
            'name'    => 'required',
            'email'   => 'required',
            'message' => 'required',
        ]);

        $data = $request->all();

        // Create a new ticket
        $ticket = Ticket::create($data);
    
        // Send email
        Mail::to('recipient@example.com')->send(new ContactFormMail($ticket));
    
        // Return a JSON response indicating success
        return new JsonResponse(['success' => true]);

        // Return a JSON response indicating success
        return new JsonResponse(['success' => true]);
    }
}
