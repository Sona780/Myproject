<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
      $people=['Taylor','Jaffrey','tommy'];
      return view('welcome', compact('people'));
    }
    public function about()
    {
      return view('about');
    }
    public function forms()
    {
      return 'various forms,validated forms';

    }
}
