<?php
//Jhonatan Acevedo Castrillón
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Order;
use App\Car;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class OrderController extends Controller
{

    public function show($id)
    {
        $data = [];
        $car = Car::findOrFail($id);
        $data["car"] = $car;
        $user_id = Auth::user()->getId();
        $data["user_id"] = $user_id;
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