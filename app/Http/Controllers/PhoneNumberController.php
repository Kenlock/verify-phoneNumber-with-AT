<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhoneNumberController extends Controller
{
    /**
     * Return home page.
     *
     * @return void
     */
    public function index()
    {
        return view('verify_phoneNumber.index');
    }
}
