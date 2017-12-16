<?php

namespace App\Http\Controllers;

use App\ContactUS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = ContactUS::all();

        return view('admin.contactus.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getContact()
    {
        return view('kontakt');
    }

    public function postContact(Request $request)
    {
    $this->validate($request, [

        'email'      => 'required|email',
        'name'    => 'min:3',
        'message'       => 'min:10'
        ]);

        $data = array(

            'email' => $request->email,
            'name' => $request->name,
            'phone' => $request->phone || null,
            'bodyMessage' => $request->message //ne sme biti message, ker je to rezervirano pri Laravelu

        );

        ContactUs::create($data);

        return view('poslano');

//        Mail::send('emails.contact', $data, function ($message) use ($data) {
//
//            $message->from($data['email']);
//            $message->to('anze20@hotmail.com');
//            $message->subject($data['name']);
//
//
//        });
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function store(Request $request)
    {
        $data = [

            'name'       =>$request->name,
            'email'      =>$request->email,
            'phone'      =>$request->phone,
            'message'    =>$request->message

        ];

        ContactUs::create($data);

        $request->session()->flash('comment_message', 'Your message has been sumbitted and is waiting moderation');

        return redirect()->back();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function sent()
    {
        return view('poslano');
    }


}
