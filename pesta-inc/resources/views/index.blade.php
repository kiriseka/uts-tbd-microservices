@extends('layouts.app')
@section('main')
    <!-- Home -->
    <section class="home" id="home">
        <div class="background-img"></div>
        <div class="text-box">
            <h1>LET US MAKE YOUR <br>
                NEXT EVENT AND PARTY GREAT!</h1>
            <br>
            <p>
                Pesta.inc is a professional event or party planner. We will be there to
                <br>
                serves all your event or party needs. We have been providing
                <br>
                this rental for 10 years. Pesta.inc is your best choice
                <br>
                to arranging your next event!
            </p>
            <br>
            <a href="#daftar-barang" class="about-btn">Start Planning Your Event</a>
        </div>
    </section>

    <section class="offering" id="daftar-barang">
        <div class="row" style="background-color: #fff;">
            <div class="text-center" style="color: #2e2e2e; letter-spacing: 0.5rem;">
                <h1><b>What Are We Offering to You?</b></h1>
            </div>
        </div>
    </section>

    <!-- Product -->
    <section class="product" id="product">
        <div class="cont-product">
            <div class="row">
                @foreach ($items as $item)
                    @if ($loop->index < 3)
                        <div class="col">
                            <img src="https://barang-pesta.herokuapp.com/gambar/{{ $item['gambar'] }}" alt="">
                            <div class="buy">
                                <h4 class="item-name">{{ $item['nama'] }}</h4>
                                <p>{{ $item['deskripsi'] }}</p>
                                <p class="fa-solid fa-tag">
                                    <a>{{ $item['harga'] }}/m2 per hari</a>
                                </p>
                            </div>
                        </div>
                    @endif
                @endforeach
                <a href="/items" class="about-btn">Lihat lainnya...</a>
            </div>
        </div>
    </section>

    <section class="offering2">
        <div class="row" style="background-color: #fff;">
            <div class="text-center" style="color: #2e2e2e; letter-spacing: 0.5rem;">
                <h1><b>Need a Decoration?</b></h1>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>

    <!-- Decoration  -->
    <section class="decoration">
        <div class="desc-title">
            <h2>We serve various of decorations to
                <br>
                beauty almost any space.
            </h2>
        </div>
        <section>
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <img src="assets/images/carousel/carousel1.jpg" alt="Decoration">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/carousel/carousel2.png" alt="Decoration">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/carousel/carousel3.png" alt="Decoration">
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/images/carousel/carousel4.png" alt="Decoration">
                    </div>
                </div>

                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </section>
        <br>
        <br>
    </section>

    <section class="offering3">
        <div class="row" style="background-color: #fff;">
            <div class="text-center mb-5 mt-5" style="color: #2e2e2e; letter-spacing: 0.5rem;">
                <h1><b>List of Master of Ceremony (MC)</b></h1>
            </div>
        </div>
    </section>

    <!-- MC -->
    <section class="product" id="product">
        <div class="cont-product">
            <div class="desc-title-mc">
                <h2>
                    <br>
                    The role of Master of Ceremony (MC) very important.
                    <br>
                    In every event, you definitely need an MC to handle the event so that it runs well.
                </h2>
            </div>
            <div class="row">
                @foreach ($mcs as $mc)
                    @if ($loop->index < 3)
                        <div class="col-mc">
                            <img src="https://emp-mc.herokuapp.com/gambar/{{ $mc['gambar'] }}" alt="">
                            <div class="buy">
                                <h4 class="item-name">{{ $mc['nama'] }}</h4>
                                
                                <p>{{ $mc['deskripsi'] }}
                                </p>
                            </div>
                        </div>
                    @endif
                @endforeach
                <a href="/mcs" class="about-btn">Lihat lainnya...</a>
            </div>
        </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#2e2e2e" fill-opacity="1"
            d="M0,224L120,202.7C240,181,480,139,720,138.7C960,139,1200,181,1320,202.7L1440,224L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z">
        </path>
    </svg>

   
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
@endsection
