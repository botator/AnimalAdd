@extends('layout')
@section('content')
    <h1 class="text-center pt-3">
        <b>A ti állataitok</b>
    </h1>
    <form action="/AddAnimal" >
        <div class="row">
            <div class="col-6">
                <div class="rotating-border">
                    <button class="Button"><img class="Buttonimg" src="../assets/img/add-button.png" alt=""></button>
                </div>
            </div>
            @foreach ($result as $row)
                <div class="col-6">
                    <div class="row animalCard">
                        <div class="col">
                            <div class="">
                                <h2>A nevem: {{ $row->name }}</h4><hr>
                                <h4>Az állatfajom: {{ $row->animal }}</h4><hr>
                                <h4>A fajtám: {{$row->species}}</h4><hr>
                                <h4>A korom: {{$row->age}} Év</h4><hr>
                                <h4>{{ $row->color }} színű vagyok</h4><hr>
                            </div>
                        </div>
                        <div class="col">
                            <img style="width: 100%" src="{{asset('storage/'.$row->imgId) }}" alt="">
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </form>
@endsection
