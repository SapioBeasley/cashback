<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function mail()
    {
        $data = Request::all();

        \Mail::send('emails.inquire', ['data' => $data], function ($message) use ($data)
        {
            $message->from('inquire@jacobsgroupvegas.com', '[INQUIRE CASHBACK] ' . $data['name']);
            $message->to(env('MAIL_USERNAME', 'andreas@sapioweb.com'), 'Lead Gen')->subject('[INQUIRE CASHBACK] ' . $data['name']);
        });

        return redirect()->route('index')->with('success_message', 'Your Inquire has been successfully sent. We will be in contact shortly.');
    }
}
