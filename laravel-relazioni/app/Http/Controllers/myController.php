<?php

namespace App\Http\Controllers;
use App\Brand;
use App\Pilot;
use App\Car;
use Illuminate\Http\Request;

class myController extends Controller
{
  public function home() {
    $cars = Car::all();
    return view('pages.home', compact('cars'));
  }

  public function pilot($id) {

    $pilot = Pilot::findOrFail($id);
    return view('pages.pilot', compact('pilot'));
  }

  public function createCar() {
    $brands = Brand::all();
    $pilots = Pilot::all();
    return view('pages.createCar', compact('brands','pilots'));
  }

  public function storecar(Request $request) {

    $validate = $request -> validate([
      'name' => 'required|string',
      'model' => 'required|string',
      'kW' => 'required|integer',
    ]);

    $car = Car::make($validate);

    $brand = Brand::findOrFail($request -> get('brand_id'));
    $car -> brand()->associate($brand);
    $car->save();

    $car -> pilots()->attach($request -> get('pilot_id'));
    $car->save();

    return redirect()->route('home');
  }
}
