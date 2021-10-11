<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Phone;

class SiteController extends Controller
{
    public function getPhone($user_id)
    {
        // Passing user id into find()
        return User::find($user_id)->phone;
    }

    public function getUser($phone_id)
    {
        // Passing phone id into find()
        return Phone::find($phone_id)->user;
    }
}
