<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use \App\Http\Controllers\Controller;
use App\Mail\FeedbackMail;

class ContactController extends Controller
{
    public function feedback(Request $request)
    {
        $mailParameters = [
            'feedbackName' => $request['feedbackName'],
            'feedbackTopic' => $request['feedbackTopic'],
            'feedbackEmail' => $request['feedbackEmail'],
            'feedbackMessage' => $request['feedbackMessage']
        ];
        $mailContent = new FeedbackMail($mailParameters);
        Mail::to('info@mehmettunaselvi.com')
            ->send($mailContent);
        return redirect('/');
    }
}
