<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Home</title>
</head>
<body id="home">

  <!-- Navbar -->
  <nav>
    <ul>
      <a href="#home" class="logo">
        <img src="assets/images/logo-removebg.png" alt="">
      </a>
    </ul>
    <input type="checkbox" id="check">
    <label for="check">
      <span class="x fa-solid fa-xmark" id="close"></span>
      <span class="bar fa-solid fa-bars" id="btn"></span>
    </label>

    <ul class="nav-list" >
      <li class="nav-items">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="nav-items">
        <a class="nav-link" href="/order">Order</a>
      <li class="nav-items">
        <a class="nav-link" href="/contact">Contact</a>
      </li>      
    </ul>
  </nav>

  <main> 
    @yield('main')
  </main>
    @yield('js')
    <!-- Date -->
    <section class="date">
      <div class="date-row">
          <div class="date-col">
              <img src="../assets/images/logo-removebg.png" alt="">
          </div>
          <div class="date-col">
              <h2>We provide you the
                  <br>
                  best quality and services
                  <br>
                  to your event or party!
              </h2>
          </div>
          <div class="date-col">
              <p style="font-weight: bold;">Monday - Thursday: </p>
              <h3 style="color: #FFC107">7.00 AM - 10.00 PM</h3>
              <p style="font-weight: bold;">Friday:</p>
              <h3 style="color: #FFC107">Close</h3>
              <p style="font-weight: bold;">Saturday - Sunday:
              </p>
              <h3 style="color: #FFC107">10.00 AM - 10.00 PM</h3>
          </div>
      </div>
</body>
</html>