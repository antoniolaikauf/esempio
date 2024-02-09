@extends('layouts.main-layout')
<!-- @section('head')
<title>Home</title>
@endsection -->
@section('content')

<div class="bg-black">
    <div class="container py-5">
        <div class="row position-relative">
            <!-- bottone per attuale serie  -->
            <div class="col-12">
                <div class="btn-group position-absolute top-0 start-0" role="group" aria-label="Basic example" style="margin-top: -70px;">
                    <button type="button" class="btn btn-primary fs-4">CURRENT SERIES</button>
                </div>
            </div>
            <!-- ciclo che stampa le card in array comics  -->
            @foreach($comics as $comic)
            <div class="col-2 ">
                <img class="img-cartoon" src="{{ Vite::asset('resources/imgs/th.jpg') }}" alt="immagine">
                <h6 class="p-3 ps-0 text-white">
                    {{ strtoupper($comic['series'])}};
                </h6>
            </div>
            @endforeach
            <!-- fine ciclo -->
            <!-- bottone per caricare piu card -->
            <div class="col-12 text-center">
                <div class="btn-group " role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary">LOAD MORE</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection