@extends('layouts.admin_master')
@section("title", 'Show')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 padding-admin">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            Car id: {{ $data["car"]->getId() }}
                        </div>
                        <div class="col">
                            <form method="POST" action="{{ route('admin.car.delete', $data['car']->getId()) }}">
                                <input type="submit" class="btn btn-danger float-right" value="Delete">
                                @method('delete')
                                @csrf
                            </form>

                            <a class="btn btn-info btn-xs float-right" href="{{ route('admin.car.edit', $data['car']->getId()) }}" > Update </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
