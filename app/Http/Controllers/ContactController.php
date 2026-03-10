<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Display the contact page
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Handle contact form submission
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'service' => 'required|string',
            'message' => 'required|string|min:10',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $validator->validated();

        // Log the submission
        Log::info('Contact form submission:', $data);

        // Send email notification
        try {
            Mail::send('emails.contact', ['data' => $data], function($message) use ($data) {
                $message->to(config('mail.from.address', 'info@crowncitytechnologies.com'))
                        ->subject('New Contact Form Submission from ' . $data['name'])
                        ->replyTo($data['email'], $data['name']);
            });

            Log::info('Contact form email sent successfully');
        } catch (\Exception $e) {
            // Log error but don't fail the request
            Log::error('Contact form email error: ' . $e->getMessage());
        }

        // Optional: Save to database if you have a Contact model
        // try {
        //     Contact::create($data);
        // } catch (\Exception $e) {
        //     Log::error('Failed to save contact to database: ' . $e->getMessage());
        // }

        return response()->json([
            'message' => 'Thank you for contacting us! We will get back to you within 24 hours.',
            'success' => true
        ], 200);
    }
}