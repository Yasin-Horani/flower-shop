@extends('layout')

@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex justify-center pt-8">
            <h1 style="font-size: 1.5rem">wijzigen een oude Bloem</h1>
        </div>

        <div class="flex justify-center pt-8">
            <form action="{{route('bloemen.update', [$bloem->id])}}"  class="creeteInput-form form p-6 border-1 " method="post">
                @csrf
                @method('PUT')

                <div class="dform">
                    <div>
                        <label for="bloem-naam" class="text-sm"> Bleom Naam:</label>
                    </div>
                    <input type="text" name="bloem-name" value="{{$bloem->name}}" class="creeteInput text-lg border-1" id="bleom-naam">
                    @error('bloem-name')
                    <div class="form-error">
                        De Bloemen Naam moet ingevuld zijn!
                    </div>
                    @enderror
                </div>

                <div class="dform">
                    <div>
                        <label for="bloem-oorsprong" class=" text-sm">Bloem Oorsprong: </label>
                    </div>
                    <input type="text" name="bloem-origin" value="{{$bloem->origin}}" class="creeteInput text-lg border-1" id="bleom-oorsprong">
                    @error('bloem-origin')
                    <div class="form-error">
                        De Bloemen Oorsprong moet ingevuld zijn!
                    </div>
                    @enderror
                </div>

                <div class="dform">
                    <div>
                        <label for="bloem-image" class="text-sm"> Bleom Image:</label>
                    </div>
                    <input type="text" name="bloem-image" value="{{$bloem->image}}" class="creeteInput text-lg border-1" id="bleom-image">
                    @error('bloem-image')
                    <div class="form-error">
                        De Bloemen image moet ingevuld zijn!
                    </div>
                    @enderror
                </div>

                <div class="dform">
                    <div>
                        <label for="bloem-kosten" class=" text-sm">Bloem Kosten</label>
                    </div>
                    <input type="text" name="bloem-price" value="{{$bloem->price}}" class="creeteInput text-lg border-1" id="bleom-kosten">
                    @error('bloem-origin')
                    <div class="form-error">
                        De Bloemen kosten moet ingevuld zijn!
                    </div>

                    @enderror
                </div>

                <div class="dform">
                    <button class="btnForm" type="submit" name="submit">Wijzigen</button>
                </div>

            </form>
        </div>
    </div>
@endsection


@section('title','Bloemen Wijzigen')
