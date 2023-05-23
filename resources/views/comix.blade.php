@extends('layouts.app')

@section('content')
<div class="container">
    <section class="comics">
        <div class="container-md position-relative">
            <span class="badgeSeries text-uppercase">Current Series</span>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-xxl-6 mt-5">
                @foreach($cards as $card)
                <div class="col">
                    <div class="card border-0">
                        <div class="square">
                            <img src="{{$card['thumb']}}" class="card_img img-fluid" alt="{{$card['title'] }}">
                        </div>
                        <div class="card_body pt-3">
                            <span class="card-title text-white text-uppercase">{{$card['title'] }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn_load_more text-uppercase border-0 text-white fw-bold py-1 px-4 mb-3"> Load
                    more</button>
            </div>
        </div>
    </section>
</div>

@endsection