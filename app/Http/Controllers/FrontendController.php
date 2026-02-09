<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display the frontend homepage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Simple welcome page or redirect to backend dashboard
        return redirect()->route('backend.home');
    }
}
