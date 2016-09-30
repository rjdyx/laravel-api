<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VerifyController extends Controller
{
    public function token()
    {
        $message['_token'] = csrf_token();
        return $message;
    }
}
