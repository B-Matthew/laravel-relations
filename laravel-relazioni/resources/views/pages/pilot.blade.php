@extends('layouts.main-layout')
@section('content')
  <main>
    <div class="container">
      <h2>Pilota:</h2>
      <h3>{{$pilot -> name}} {{$pilot -> lastname}}</h3>
      <h3>{{$pilot -> nationality}} {{$pilot -> date_of_birth}}</h3>
      <h2>Macchine:</h2>
      @foreach ($pilot -> cars as $car )
        <h3>{{$car -> name}}</h3>
      @endforeach
    </div>
  </main>
@endsection
