@extends('layouts.app')
@section('main')
    <!-- Contact -->
    <br>
    <br>
    <section class="contact" id="contact">
        <div class="container-form">
            <form action="https://orders-ms-pestainc.herokuapp.com/api/orders" method="POST" class="form">
                <h2>FORM ORDER</h2>
                <br>
                <div class="form-2">
                    <div>
                        <div class="form-3">
                            <label for="" class="label-form">Nama Penyewa</label>
                            <br>
                            <input type="text" placeholder="Nama Penyewa" name="nama_customer" id="nama_customer" required>
                        </div>
                        <br>
                        <div class="form-3">
                            <label for="" class="label-form">Nomor HP</label>
                            <br>
                            <input type="text" name="kontak" id="kontak" placeholder="Nomor HP" required>
                        </div>
                        <br>
                        <div class="form-3">
                            <label for="" class="label-form">Alamat</label>
                            <br>
                            <input type="text" name="alamat" id="alamat" placeholder="Alamat" required>
                        </div>
                    </div>
                    <br>
                    <div>
                        <div class="form-3">
                            <label for="" class="label-form">Tanggal Sewa</label>
                            <br>
                            <input type="date" name="tanggal_sewa" id="tanggal_sewa" >
                        </div>
                        <br>
                        <div class="form-3">
                            <label for="" class="label-form">Tanggal Kembali</label>
                            <br>
                            <input type="date" name="tanggal_selesai" id="tanggal_selesai" >
                        </div>
                        <br>
                        <div class="form-3">
                            <label for="" class="label-form">Rincian Pesanan</label>
                            <br>
                            <input type="text" placeholder="Rincian Pesanan" name="detail_order" id="detail_order" required>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-btn2">
                    <br>
                    <button type="submit">Submit</button>
                    <br>
                </div>
            </form>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#2e2e2e" fill-opacity="1"
            d="M0,224L120,202.7C240,181,480,139,720,138.7C960,139,1200,181,1320,202.7L1440,224L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z">
        </path>
    </svg>

   
@endsection
@section('js')
    <script src="script.js"></script>
@endsection
