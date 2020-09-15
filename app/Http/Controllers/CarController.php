<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Car;

//Juan José Escudero

class CarController extends Controller 
{
    
    public function show($id) 
    {
        $data = [];
        $car = Car::findOrFail($id);
        $data["car"] = $car;

        return view('car.show')->with("data", $data);
    }

    public function showAll() 
    {
        $data = [];
        $data["cars"] = Car::all();
        
        return view('car.show_all')->with("data", $data);
    }
    
}