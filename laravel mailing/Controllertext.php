<?php

namespace App\Http\Controllers;

use App\usernew;
use App\Mail\OrderMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;


class Controllertext extends Controller
{
    /**
     * Create a new flight instance.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        
        $usernew = new usernew;

        $usernew->name = $request->name;
        $usernew->surname = $request->surname;

        $usernew->save();

        Mail::to('grneade28@gmail.com')->send(new OrderMailer($usernew));

        return view('show');
    }
}