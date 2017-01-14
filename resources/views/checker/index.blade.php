@extends('layouts.app')

@section('content')
  <h1 class="font-primary text-center">
    Aftonbladet Checkr
  </h1>

  <div class="container-fluid">
    <center>
          {!! $chart->render() !!}
      </center>
  </div>
@endsection
