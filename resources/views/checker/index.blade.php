@extends('layouts.app')

@section('content')
  <h1 class="font-primary text-center">
    Aftonbladet Checkr
  </h1>

  <div class="container-fluid">
    <center>
      <strong class="font-secondary">
        Hur många <span class="checker">&#10004;</span> använder Aftonbladet
        per dag egentligen?
      </strong>
          {!! $chart->render() !!}
      </center>
  </div>
@endsection
