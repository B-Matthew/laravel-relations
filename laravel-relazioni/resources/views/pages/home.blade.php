@extends('layouts.main-layout')
@section('content')
  <main>
    <div class="container">
      <h2>Lista:</h2>
      <ul>
        @foreach ($cars as $car)
          <li>
            <h4>Macchine:</h4>
            {{$car-> name}} {{$car-> model}} <br>
            <h4>Brand:</h4>
            {{$car->brand->name}} <br>
            <h4>Piloti:</h4>
            @foreach ($car -> pilots as $pilot)
              <a href="{{route('pilot', $pilot -> id)}}">{{$pilot->name}} {{$pilot->lastname}}</a><br>
            @endforeach
          </li>
        @endforeach
      </ul>
    </div>
  </main>
@endsection
