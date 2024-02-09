<!-- inizio sezione contatti -->
<section id="container-immagine" class="py-5 overflow-hidden">
    <div class="container">
        <div class="row ">
            <div class="col-12 d-flex justify-content-between">
                <div>
                    {{-- ciclo che stampa le liste --}}
                    <div class="d-flex">
                        @foreach($componentfooter as $lista)
                            <ul>
                               <li>
                                 <h6 class="p-3 ps-0 text-white">
                                    {{ $lista['nome']}}
                                 </h6>
                               </li>
                               @foreach ($lista['sottocomponenti'] as $complista)
                                   <li class="text-white">
                                        {{$complista['nome']}}
                                    </li>
                                  @endforeach
                            </ul>
                            @endforeach
                    </div>
                    <div class="text-white">
                        all site content TIM @ 2020 DC entrainment , unless otherwise <span><a href="">noted here </a></span>. all rights reserved <br> <a href="">cookies settings</a>
                    </div>
                </div>
                <div>
                    <img src="{{ Vite::asset('resources/imgs/dc-logo-bg.png') }}" alt="" class="position-relative" style="top: -90px;">
                </div>
            </div>

        </div>
    </div>
</section>
<!-- inizio sezione link social -->
<section class="link py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between">
                <div class="btn-group me-2 border border-primary border-4 rounded-0" role="group" aria-label="Second group">
                    <button type="button" class="btn text-white">SIGN-UP NOW!</button>
                </div>
                <ul class="d-flex align-items-center">
                    <li><a href="">FOLLOW US</a></li>
                    <li><img src="{{ Vite::asset('resources/imgs/footer-facebook.png') }}" alt=""></li>
                    <li><img src="{{ Vite::asset('resources/imgs/footer-periscope.png') }}" alt=""></li>
                    <li><img src="{{ Vite::asset('resources/imgs/footer-pinterest.png') }}" alt=""></li>
                    <li><img src="{{ Vite::asset('resources/imgs/footer-twitter.png') }}" alt=""></li>
                    <li><img src="{{ Vite::asset('resources/imgs/footer-youtube.png') }}" alt=""></li>
                </ul>
            </div>
        </div>
    </div>
</section>