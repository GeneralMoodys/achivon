<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    //
    public function index()
    {
        $user = auth()->user();
        Log::info('User Info:', ['user' => $user]);

        return view('dashboard');
    }

    public function admin()
    {
        $user = auth()->user();
        Log::info('Admin User Info:', ['user' => $user]);

        return view('admin');
    }

    public function spv()
    {
        $user = auth()->user();
        Log::info('Spv User Info:', ['user' => $user]);

        return view('spv');
    }

}
