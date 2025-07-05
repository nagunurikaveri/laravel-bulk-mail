<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendBulkEmailJob;

class BulkEmailController extends Controller
{
    public function showForm()
    {
        return view('bulk-email.form');
    }

    public function sendEmails(Request $request)
    {
        $request->validate([
            'subject' => 'required|string',
            'body' => 'required|string',
            'emails' => 'required|string',
        ]);

        $emails = array_map('trim', explode(',', $request->emails));
        
        foreach ($emails as $email) {
            SendBulkEmailJob::dispatch($email, $request->subject, $request->body);
        }

        return back()->with('success', 'Emails are being sent!');
    }
}
