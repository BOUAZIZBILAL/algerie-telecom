<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        // Get the authenticated user
        $user = $request->user();

        // Pass the user data to the profile view
        return view('profile', compact('user'));
    }
}
