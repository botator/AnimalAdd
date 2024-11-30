@extends('layout')
@section('content')
    <form action="/">
        <div class="sor">
            <button class="back"><- </button>
                    <h1 class="center">
                        <b>Add hozzá az állatodat</b>
                    </h1>
        </div>
    </form>
    <form action="/AddAnimal" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="w-50 mx-auto">
            @error('name')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
            @error('age')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
            @error('animal')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror
            @error('petPic')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @enderror

            <div>
                <label for="name" class="form-label">A kis állat neve:</label>
                <input type="text" name="name" id="name" placeholder="Pl.:Buksi"
                    class="form-control   @error('name') is-invalid @enderror" value="{{ old('name') }}">
            </div>
            <div>
                <label for="name" class="form-label">A kis állat kora(év):</label>
                <input type="number" name="age" id="age" placeholder="Pl.:10"
                    class="form-control  @error('age') is-invalid @enderror" value="{{ old('age') }}"">
            </div>
            <div>
                <label for="name" class="form-label">A kis állat Faja:</label>
                <input type="text" name="animal" id="animal" placeholder="Pl.:Kutya"
                    class="form-control  @error('animal') is-invalid @enderror" value="{{ old('animal') }}"">
            </div>
            <div>
                <label for="species" class="form-label">A kis állat Fajtája:</label>
                <input type="text" name="species" id="species" placeholder="Pl.:Labrador"
                    class="form-control  @error('species') is-invalid @enderror" value="{{ old('species') }}"">
            </div>
            <div>
                <label for="color" class="form-label">A kis állat színe:</label>
                <input type="text" name="color" id="color" placeholder="Pl.:világos barna"
                    class="form-control  @error('color') is-invalid @enderror" value="{{ old('color') }}"">
            </div>
            <div>
                <label for="petPic">A kis állatodról egy kép:</label>
                <input type="file" name="file" id="file"  class="form-control  @error('color') is-invalid @enderror">
            </div>
            <div class="d-flex justify-content-center mt-3">
                <button type="submit" class="w-50">Kis Állat Beküldése</button>
            </div>
        </div>
    </form>
@endsection
