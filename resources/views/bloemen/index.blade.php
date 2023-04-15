@extends('layout')

@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex justify-center ">
            <h1 style="font-size: 1.5rem">Bloemen</h1>
        </div>
        @if(empty($bloemen))
            <h2>Helaas Er Zijn Geen Bloemen</h2>

        @else
            @foreach($bloemen as $bloem)

                <ul>
                    <a href="{{route('bloemen.show',$bloem['id'])}}">
                        <li>
                            <h3><img style="max-width: 50px " src="{{ $bloem['image'] }}" />  De Bloem naam is <strong>({{$bloem['name']}})</strong> en het komt uit <strong>{{$bloem['origin']}}</strong> Dit is voor - <strong>{{$bloem['price']}}</strong>€</h3>
                        </li>
                    </a>
                </ul>
            @endforeach
        @endif

    </div>

@endsection


@section('title','Bloemen page')
