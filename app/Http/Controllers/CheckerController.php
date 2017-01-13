<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Goutte;

class CheckerController extends Controller
{
    public function index()
    {

      $crawler = Goutte::request('GET', 'https://www.aftonbladet.se');
      $checkers = $crawler->filter('.abSymbBo')->count();

      return view('checker.index')->with('checkers', $checkers);
    }
}
