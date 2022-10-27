@extends('layouts.app')
@section('main')
    <section class="contact-card" id="contact">
      <div class="container-contact">
        <h2>CONTACT US</h2>
        <br>
        <p>Contact us and we'll work with you to provide
          <br>
          solutions tailored specifically for your event.</p>
        <br>
        <div class="icons-contact">
          <span class="email fa-solid fa-envelope"></span>
          <a  href="">pestainc@gmail.com</a>
        </div>
        <br>
        <div class="icons-contact">
          <span  class="wa fa-brands fa-whatsapp"></span>
          <a href="" onclick="whatsapp2('Hallo',)">082123437618</a>
        </div>
      </div>
    </section>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2e2e2e" fill-opacity="1" d="M0,224L120,202.7C240,181,480,139,720,138.7C960,139,1200,181,1320,202.7L1440,224L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>

    

    @endsection
    @section('js')
    <script src="../script.js"></script>
    @endsection