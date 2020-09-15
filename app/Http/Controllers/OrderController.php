<?php
//Jhonatan Acevedo Castrillón
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Order;
use App\Car;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Storage;



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

        $data = [];
        $data["total_price"] = $request->input('total_price');
        $data["car_id"] = $request->input('car_id');
        $data["user_id"] = $request->input('user_id');

        return view('/home/successbuy')->with("data", $data);

    }

    public function download() 
    {

    }


    public function cancel($data) 
    {
        $total_price = $data["total_price"] ;
        $car_id = $data["car_id"];
        $user_id = $data["user_id"];
        
        $pdf = app('dompdf.wrapper');
        $cadena = "<h1>".$car_id.$total_price.$user_id."</h1";

        $pdf->loadHTML($cadena);
     
        return $pdf->download('Order.pdf');
    }

    



}