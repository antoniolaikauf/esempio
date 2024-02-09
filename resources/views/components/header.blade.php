<div class="container py-3">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <!-- immagine logo  -->
            <img src="{{ Vite::asset('resources/imgs/dc-logo.png') }}" alt="">
            <div class="d-flex align-items-center">
                <!-- barra di ricerca per utente  -->
                <ul class="d-flex align-items-center m-0">
                    <!-- ciclo per stampare componenti header  -->
                    @foreach($componentiheader as $componente)
                        <li>
                            {{$componente}}
                        </li>
                    @endforeach
                </ul>
                    <div class="input-group " style="width: 150px">
                        <input type="text" class="form-control border-0 border-bottom border-3 border-primary rounded-0" aria-label="Dollar amount (with dot and two decimal places)" placeholder="search">
                        <span class="input-group-text bg-white border-0 border-bottom border-3 border-primary rounded-0"><i class="fa-solid fa-magnifying-glass"></i></span>
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="position-relative">
    <div id="jumbotron">
        <!-- jumbotron immgine -->
    </div>
</div>