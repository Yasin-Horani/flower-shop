@extends('layout')

@section('content')

<div class="row">
    @foreach($products as $product)
        <div class="main-winkelen_image col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                {{-- image --}}
                <img class = 'winkelen_image' src="{{ $product->image }}" alt="">
                <div class="caption">
                    <h4>{{ $product->name }}</h4>
                    <p>{{ $product->origin }}</p>
                    <p><strong>Prijs: </strong> {{ $product->price }}€</p>
                    <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-success btn-block text-center" role="button">toevoegen</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
