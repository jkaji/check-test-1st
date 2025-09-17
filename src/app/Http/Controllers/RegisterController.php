<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    //
    public function admin(RegisterRequest $request) {
        $contact = $requuest->only(['name', 'email', 'password']);
        return view('admin', ['contact' => $contact]);
    }
}
