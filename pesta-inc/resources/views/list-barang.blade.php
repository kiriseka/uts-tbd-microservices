@extends('layouts.app')
@section('main')
    <br><br><br><br><br>
    <div class="row">
        @foreach ($items as $item)
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
        @endforeach
        {{-- <div class="col">
            <img src="../assets/images/barang/kipas-blower.png" alt="">
            <div class="buy">
                <h4 class="item-name">Kipas Blower</h4>
                <p>Harga sewa per unit</p>
                <p class="fa-solid fa-tag">
                    <a>400.000/hari</a>
                </p>
            </div>
        </div>
        <div class="col">
            <img src="../assets/images/barang/set-meja-futura.png" alt="">
            <div class="buy">
                <h4 class="item-name">Set Meja Futura</h4>
                <p>1 set: 8 kursi dan 1 meja</p>
                <p class="fa-solid fa-tag">
                    <a>250.000/set per hari</a>
                </p>
            </div>
        </div> --}}
    </div>
    {{-- <div class="row">
        <div class="col">
            <img src="../assets/images/barang/backdrop.jpg" alt="">
            <div class="buy">
                <h4 class="item-name">Backdrop</h4>
                <p>Bisa custom desain</p>
                <p class="fa-solid fa-tag">
                    <a>3.000.000</a>
                </p>
            </div>
        </div>
        <div class="col">
            <img src="../assets/images/barang/genset.jpg" alt="">
            <div class="buy">
                <h4 class="item-name">Genset</h4>
                <p>Harga sewa per unit</p>
                <p class="fa-solid fa-tag">
                    <a>2.500.000</a>
                </p>
            </div>
        </div>
        <div class="col">
            <img src="../assets/images/barang/karpet.jpg" alt="">
            <div class="buy">
                <h4 class="item-name">Karpet</h4>
                <p>1 gulung: 8 meter</p>
                <p class="fa-solid fa-tag">
                    <a>150.000/gulung per hari</a>
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <img src="../assets/images/barang/lampu-sorot.jpg" alt="">
            <div class="buy">
                <h4 class="item-name">Lighting</h4>
                <p>Include: tiang penyangga lampu</p>
                <p class="fa-solid fa-tag">
                    <a>250.000/buah</a>
                </p>
            </div>
        </div>
        <div class="col">
            <img src="../assets/images/barang/photobooth.jpg" alt="">
            <div class="buy">
                <h4 class="item-name">Photobooth</h4>
                <p>Bisa custom desain</p>
                <p class="fa-solid fa-tag">
                    <a>1.500.000</a>
                </p>
            </div>
        </div>
        <div class="col">
            <img src="../assets/images/barang/sound-system.jpg" alt="">
            <div class="buy">
                <h4 class="item-name">Sound System</h4>
                <p>Harga sewa untuk 1 set</p>
                <p class="fa-solid fa-tag">
                    <a>1.500.000</a>
                </p>
            </div>
        </div>
    </div> --}}

    
@endsection
@section('js')
    <script src="script.js"></script>
    <script src="app.js"></script>
@endsection
