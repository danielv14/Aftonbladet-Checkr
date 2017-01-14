<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Checker extends Model
{
  // Get all sorted from oldest
  // optinal param $days that defaults to 30 days back
  public function scopeGetSortedLastDays($query, $days = null)
  {
    // If $days param is passed
    if ($days !== null) {
      return $query->where('created_at', '>', Carbon::now()->subDays($days))
          ->oldest()
          ->get();
    }

    return $query->where('created_at', '>', Carbon::now()->subDays(30))
        ->oldest()
        ->get();

  }
}
