<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Checker extends Model
{
  public function scopeGetSortedLast30Days($query)
  {
    return $query->where('created_at', '>', Carbon::now()->subDays(30))
        ->oldest()
        ->get();
  }
}
