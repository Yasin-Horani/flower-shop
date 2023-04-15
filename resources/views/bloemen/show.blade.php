@extends('layout')

@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex justify-center pt-8">
            <h1 style="font-size: 1.5rem">Bloemen Bekijken</h1>
        </div>
        <div class="show-item flex justify-center pt-8">
            <img class="show-image" src="{{ $bloem['image'] }}" />
            <hr>
            <h3 class="show-text"> De Bloem naam is <strong>({{ $bloem['name'] }})</strong> en het komt uit
                <strong>{{ $bloem['origin'] }}</strong> Dit is voor - <strong>{{ $bloem['price'] }}</strong>€</h3>
        </div>

        <div class="show-btn">
            <button class="btn btn-success"><a class="edit-btn" href="{{ route('bloemen.edit', $bloem->id) }}">Wijzigen</a> </button>
            
            <form action="{{ route('bloemen.destroy', $bloem->id) }}" method="post">
                @method('delete')
                @csrf
                <button class="btn btn-danger" type="submit">verwijderen</button>
            </form>
        </div>


    </div>
@endsection
@section('title', 'Bloemen Bekijken')



