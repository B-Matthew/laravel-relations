@extends('layouts.main-layout')
@section('content')
  <main>
    <div class="container">
      <h1>Crea una macchina:</h1>
      <form class="" action="{{route('storecar')}}" method="POST">
        @csrf
        @method('POST')
        <label for="name">Nome: </label>
        <input type="text" name="name" value="" required>
        <label for="model">Modello: </label>
        <input type="text" name="model" value="" required>
        <label for="kW">kW: </label>
        <input type="number" name="kW" value="" required>
        <select class="" name="brand_id">
          @foreach ($brands as $brand)
            <option name="" value="{{$brand -> id}}">{{$brand -> name}}</option>
          @endforeach
        </select>
        <select class="" name="pilot_id[]" multiple>
          @foreach ($pilots as $pilot)
            <option value="{{$pilot -> id}}">{{$pilot -> name}} {{$pilot -> lastname}}</option>
          @endforeach
        </select>
        <button id="create_car" type="submit" name="button">CREA</button>
      </form>
    </div>
  </main>
@endsection
