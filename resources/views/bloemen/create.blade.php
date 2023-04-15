@extends('layout')

@section('content')
    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex justify-center pt-8">
            <h1 style="font-size: 1.5rem">Bloem Producten maken</h1>
        </div>

        <div class="flex justify-center pt-8">
            <form action="{{route('bloemen.store')}}" method="post" class="creeteInput-form form p-6 border-1 ">
                @csrf
                <div class="dform">
                    <div>
                        <label for="bloem-naam" class="text-sm"> Bleom Naam:</label>
                    </div>
                    <input type="text" name="bloem-name" value="{{old('bloem-name')}}" class="creeteInput text-lg border-1" id="bloem-naam">
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
                    <input type="text" name="bloem-origin" value="{{old('bloem-origin')}}" class="creeteInput text-lg border-1" id="bloem-oorsprong">
                    @error('bloem-origin')
                    <div class="form-error">
                        De Bloemen Oorsprong moet ingevuld zijn!
                    </div>
                    @enderror
                </div>

                {{-- <div class=" dform form-group">
                    <input type="file" name="bloem-image" required>
                </div> --}}

                <div class="dform">
                    <div>
                        <label for="bloem-naam" class="text-sm"> Bleom image:</label>
                    </div>
                    <input type="text" name="bloem-image" value="{{old('bloem-image')}}" class="creeteInput text-lg border-1" id="bloem-image">
                    @error('bloem-image')
                    <div class="form-error">
                        De Bloemen Image moet ingevuld zijn!
                    </div>
                    @enderror
                </div>

                <div class="dform">
                    <div>
                        <label for="bloem-kosten" class=" text-sm">Bloem Kosten</label>
                    </div>
                    <input type="text" name="bloem-price" value="{{old('bloem-price')}}" class="creeteInput text-lg border-1" id="bloem-kosten">
                    @error('bloem-price')
                    <div class="form-error">
                        De Bloemen kosten moet ingevuld zijn!
                    </div>

                    @enderror
                </div>

                <div class="dform">
                    <button class="btn btn-success" type="submit" name="submit">creëren</button>
                </div>

            </form>
        </div>
    </div>
@endsection


@section('title','Bloemen Create')
