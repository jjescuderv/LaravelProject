<?php
//Jhonatan Acevedo Castrillón
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Order;
use App\Car;



class OrderController extends Controller
{

    public function show($id)
    {
        $data = [];
        $car = Car::findOrFail($id);
        $data["car"] = $car;

        return view('order')->with("data", $data);
    }
    
    
    public function save(Request $request) 
    {
        Order::validate($request);
        Order::create(
            $request->only([
                "total_price","car_id","user_id"
            ])
        );

        return redirect('home/successbuy');
    }

    public function cancel() 
    {
        return redirect('admin/car');
    }



}