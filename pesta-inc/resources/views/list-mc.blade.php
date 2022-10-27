@extends('layouts.app')
@section('main')
    <br><br><br><br><br>
    <div class="row">
        @foreach ($mcs as $mc)
            <div class="col-mc">
                <img src="https://emp-mc.herokuapp.com/gambar/{{ $mc['gambar'] }}" alt="">
                <div class="buy">
                    <h4 class="item-name">{{ $mc['nama'] }}</h4>

                    <p>{{ $mc['deskripsi'] }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    </div>


    </section>
@endsection
@section('js')
    <script src="script.js"></script>
    <script src="app.js"></script>
@endsection
