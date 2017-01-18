@extends('layouts.app')

@section('content')
  <h1 class="font-primary text-center">
    Aftonbladet Checkr
  </h1>

  <div class="container-fluid">
    <center>
      <h4 class="font-secondary">
        Hur många <span class="checker">&#10004;</span> använder Aftonbladet
        per dag egentligen?
      </h4>
      <current-checkers></current-checkers>
          {!! $chart->render() !!}
      </center>
  </div>
@endsection
