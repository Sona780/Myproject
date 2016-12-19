<?php

namespace App\Http\Controllers;
use App\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index()
    { $cards= Card::All();
      return view('cards.index', compact('cards'));
    }

public function show($id)
{
   $card=Card::find($id);
   return view('cards.show', compact('cards'));
 }
}
