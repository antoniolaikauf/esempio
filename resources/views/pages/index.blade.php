@extends('layouts.main-layout')
<!-- @section('head')
<title>Home</title>
@endsection -->
@section('content')
<!-- inizio sezione card  -->
<section class="bg-black">
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
</section>
<!-- fine sezione card  -->
<!-- inizio sezione utility per utente  -->
<section class="bg-primary py-5">
    <div class="container">
        <div class="row">
        
            <div class="col-12 d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center ">
                    <img src="{{ Vite::asset('resources/imgs/buy-comics-digital-comics.png') }}" alt="">
                    <div class="text-white ms-3">DIGITAL COMIC</div>
                </div>
                <div class="d-flex align-items-center ">
                    <img src="{{ Vite::asset('resources/imgs/buy-comics-merchandise.png') }}" alt="">
                    <div class="text-white  ms-3">DIGITAL COMIC</div>
                </div>
                <div class="d-flex align-items-center ">
                    <img src="{{ Vite::asset('resources/imgs/buy-comics-subscriptions.png') }}" alt="">
                    <div class="text-white  ms-3">DIGITAL COMIC</div>
                </div>

                <div class="d-flex align-items-center ">
                    <img src="{{ Vite::asset('resources/imgs/buy-comics-shop-locator.png') }}" alt="">
                    <div class="text-white  ms-3">DIGITAL COMIC</div>
                </div>
                <div class="d-flex align-items-center ">
                    <img src="{{ Vite::asset('resources/imgs/buy-dc-power-visa.svg') }}" alt="">
                    <div class="text-white  ms-3 ">DIGITAL COMIC</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fine sezione utility per utente  -->
@endsection