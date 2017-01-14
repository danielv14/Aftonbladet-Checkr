<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Goutte;
use App\Checker;
use Charts;
use Carbon\Carbon;


class CheckerController extends Controller
{
    public function index()
    {

      // set up empty arrays to loop through and pass on to chart
      $checkersNrs = [];
      $dates = [];
      // Loop though Checker scope for last x days and push to empty arrays
      foreach(Checker::GetSortedLastDays() as $checker) {
        // Push values to each array
        array_push($checkersNrs, $checker->checkers);
        array_push($dates, $checker->created_at->format('d/m/Y'));
      }

      // Create the chart
      $chart = Charts::create('line', 'morris')
          ->values($checkersNrs) // here we use created checker count array above as value
          ->labels($dates) // here we use created dates array above as labels
          ->elementLabel('Antal &#10004;')
          ->colors(['#DD3836'])
          ->responsive(true)
          ->title('');

      return view('checker.index', [
        'chart' => $chart,
      ]);
    }
}
