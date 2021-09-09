<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function handleForm(Request $request)
    {

        $this->validate($request, ['name' => 'required', 'email' => 'required|email', 'message_body' => 'required|min:20']);

        $data = ['name' => $request->get('name') , 'email' => $request->get('email') , 'messageBody' => $request->get('message_body') ];

        Mail::send('email', $data, function ($message) use ($data)
        {
            $message->from($data['email'], $data['name']);
            $message->to('info@laravelarticle.com', 'Admin')
                ->subject('Laravel Article Feedback');
        });

        return redirect()
            ->back()
            ->with('success', 'Thank you for your feedback')

    }

}