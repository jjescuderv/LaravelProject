@extends('layouts.master')

@section('content')

<section class="page-section portfolio" id="portfolio">
    <div class="container">
        
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Congratulations, you just bought yourself a car!!</h2>
        
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>

        <a class="btn btn-info float-right" href="{{ action('OrderController@cancel', $data['car_id']) }}" > Download PDF-Bid </a>
        
          
    </div>
</section>
@endsection