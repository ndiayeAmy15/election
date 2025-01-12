<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RedirectController extends Controller
{
    //
    public function redirectTo()
    {
        if (Auth::user()->isAdmin()) {
            return '/dashboard';
        } else {
            return '/accueil';
        }
    }
}
