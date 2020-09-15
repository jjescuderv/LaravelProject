@extends('layouts.master')
@section("title", 'Order')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            Order:
                        </div>
                        <div class="col">

                            <a class="btn btn-info btn-xs float-right" href="{{ route('order.cancel') }}" > Cancel </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col"><b>Car-id: </b></div>
                        <div class="col"> {{ $data["car"]->getId() }} </div>
                    </div>
                    <div class="row">
                        <div class="col"><b>Brand: </b></div>
                        <div class="col"> {{ $data["car"]->getBrand() }} </div>
                    </div>
                    <div class="row">
                        <div class="col"><b>Model: </b></div>
                        <div class="col"> {{ $data["car"]->getModel() }} </div>
                    </div>
                    <div class="row">
                        <div class="col"><b>Color: </b></div>
                        <div class="col"> {{ $data["car"]->getColor() }} </div>
                    </div>
                    <div class="row">
                        <div class="col"><b>Price: </b></div>
                        <div class="col"> {{ $data["car"]->getPrice() }} </div>
                    </div>
                    <div class="row">
                        <div class="col"><b>Mileage: </b></div>
                        <div class="col"> {{ $data["car"]->getMileage() }} </div>
                    </div>
                    <div class="row">
                        <div class="col"><b>License Plate: </b></div>
                        <div class="col"> {{ $data["car"]->getLicensePlate() }} </div>
                    </div>
                    <div class="row">
                        <div class="col"><b>Description: </b></div>
                        <div class="col"> {{ $data["car"]->getDescription() }} </div>
                    </div>
                    <div class="row">
                        <div class="col"><b>Availability: </b></div>
                        <div class="col"> 
                            @if($data["car"]->getAvailability())
                                Available
                            @else
                                Not Available
                            @endif
                        </div>
                    </div>

                     <form class="link_mimic" form method="POST" action="{{ route('order.save') }}">
                        @csrf
                        <input type="hidden" name="car_id" value=" {{$data["car"]->getId()}}">
                        <input type="hidden" name="user_id" value=" {{$data["user_id"]}}">
                        <input type="hidden" name="total_price" value=" {{$data["car"]->getPrice()}}">
                        <input type="submit" class="btn btn-success" value="Continue">
                      </form> 

                </div>
            </div>
        
    </div>
</div>
@endsection
