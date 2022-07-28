<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $specials = Category::where('name', 'specials')->first();

        return view('Welcome', compact('specials'));
    }

    public function thankyou(){
        return view('thankyou');
    }
}
