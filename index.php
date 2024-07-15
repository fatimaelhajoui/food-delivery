<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!----------foont------------>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Kanit:wght@500;600&family=Lato:wght@400;700&family=Roboto:wght@100&family=Ubuntu:ital,wght@0,300;1,300&display=swap"
    rel="stylesheet">

  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <section class="header">
    <?php
    session_start();
    include 'nav.php';
    ?>


    <div class="hero">
      <h1>Everything Nice</h1>
      <h3>Welcome To the Place Of The <u>Taste</u> and <u>Quality</u></h3>
      <button class="btn-hero">Order Now</button>
    </div>

  </section>

  <!----------Counter Wrapper------------>
  <div class="counters">
    <div class="container" style=" overflow-x: hidden; overflow-y: hidden;">
      <div class="counter" data-aos="slide-up" data-aos-duration="1000">
        <div class="ctn-txt">
          <i class="fas fa-shopping-cart" style="font-size:28px;"></i>
          <p>Orders</p>
        </div>
        <br>
        <h1><span class="num" data-val="823">0</span>+</h1>
      </div>

      <div class="counter" data-aos="slide-up" data-aos-duration="1000">
        <div class="ctn-txt">
          <i class="	fas fa-drumstick-bite" style="font-size:28px;"></i>
          <p>Products</p>
        </div>
        <br>
        <h1><span class="num" data-val="56">0</span></h1>

      </div>

      <div class="counter" data-aos="slide-up" data-aos-duration="1000">
        <div class="ctn-txt">
          <i class="	fas fa-user-friends" style="font-size:28px;"></i>
          <p>Customers</p>
        </div>
        <br>
        <h1><span class="num" data-val="600">0</span>+</h1>
      </div>
    </div>
  </div>

  <div class="about">
    <div class="container">
      <div class="row">

        <div class="col-md-6">
          <!----------about imager------------>
          <img src="chef.jpg" alt="">
        </div>

        <div class="col-md-6">
          <!----------about text------------>
          <h3>More About Everything Nice</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, quos optio quae quidem illum quod
            atque,
            dignissimos rerum minus blanditiis beatae voluptatem, quo labore recusandae? Sunt voluptatibus
            vel quas fugiat. <br><br>
          
        </div>

      </div>
    </div>

  </div>


  <div class="adv">
    <div class="container-fluid">
      <div class="row" id="adv-row">
        <div class="col-md-6">
          <!----------about text------------>
          <h3>Why Eating From Everything Nice ?</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, quos optio quae quidem illum quod
            atque.</p>
          <br>
          <ul>
            <li><i class="fa fa-chevron-circle-right"></i> Clean Kitchen</li>
            <br>
            <li><i class="fa fa-chevron-circle-right"></i> Online Order</li>
            <br>
            <li><i class="fa fa-chevron-circle-right"></i> Paiement when receiving</li>
            <br>
            <li><i class="fa fa-chevron-circle-right"></i> 24/7 Service</li>
          </ul>
        </div>



        <div class="col-md-6" id="adv-img">
          <!----------about imager------------>
          <!----------  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="pexels-anna-shvets-5953500.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="pexels-anna-shvets-4482885.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="pexels-pavel-danilyuk-6407626.jpg" class="d-block w-100" alt="...">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                    
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
           ------------>


        </div>
      </div>

    </div>


    <div class="clients">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-10 col-xl-8 text-center">
            <h3 class="mb-4">Our Clients Reviews</h3>

          </div>
        </div>

        <div class="row text-center">
          <div class="col-md-4 mb-5 mb-md-0">

            <h5 class="mb-3" style="font-weight: bold;">Maria Benaicha</h5>
            <p class="px-xl-3">
              <i class="fas fa-quote-left pe-2"></i>I ordered food and after 20 min The food is ready and fresh ! Very
              tasty and well prepared and you can chose among many menu options.
            </p>
            <ul class="list-unstyled d-flex justify-content-center mb-0">
              <li>
                <i class="fas fa-star fa-sm" style="color: #bf6e02;"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm" style="color: #bf6e02;"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm" style="color: #bf6e02;"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm" style="color: #bf6e02;"></i>
              </li>
              <li>
                <i class="fas fa-star-half-alt fa-sm" style="color: #bf6e02;"></i>
              </li>
            </ul>
          </div>
          <div class="col-md-4 mb-5 mb-md-0">

            <h5 class="mb-3" style="font-weight: bold;">Lisa Cudrow</h5>
            <p class="px-xl-3">
              <i class="fas fa-quote-left pe-2"></i>Really enjoyed this restaurant. We dined here two nights.
              The food is some of the best I've tried while touring Morocco.
              Clean, fresh food. Great friendly staff.
            </p>
            <ul class="list-unstyled d-flex justify-content-center mb-0">
              <li>
                <i class="fas fa-star fa-sm" style="color: #bf6e02;"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm" style="color: #bf6e02;"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm" style="color: #bf6e02;"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm" style="color: #bf6e02;"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm" style="color: #bf6e02;"></i>
              </li>
            </ul>
          </div>
          <div class="col-md-4 mb-0">

            <h5 class="mb-3" style="font-weight: bold;">Chakib.M</h5>
            <p class="px-xl-3">
              <i class="fas fa-quote-left pe-2"></i>Food was delicious and service was very good. A bit pricey but the
              ambience and amount of food served makes up for it.
            </p>
            <ul class="list-unstyled d-flex justify-content-center mb-0">
              <li>
                <i class="fas fa-star fa-sm" style="color: #bf6e02;"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm" style="color: #bf6e02;"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm" style="color: #bf6e02;"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm" style="color: #bf6e02;"></i>
              </li>
              <li>
                <i class="fas fa-star-half-alt fa-sm" style="color: #bf6e02;"></i>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!--Section: Contact v.2-->

    <div class="container">
      <div class="adresse">
        <div class="row">
          <div class="col-md-6 col-lg-6 mb-4 ">

            <h2 style="color: #bf6e02;font-weight: 900;"><i class="fa fa-map-marker" aria-hidden="true"
                style="color: #bf6e02; width: 50px; font-weight: 900;"></i>Adresse</h2>
            <p>62 Rue De La Mer Adriatique, Casablanca Maroc</p>
            <br>
            <h2 style="color: #bf6e02; font-weight: 900;"><i class="fa fa-phone" aria-hidden="true"
                style="color: #bf6e02; width: 50px; font-weight: 900;"></i>Téléphone</h2>
            <p>(12)-100-100-100</p>
            <br>
            <h2 style="color: #bf6e02;font-weight: 900;"><i class="fa fa-envelope-o" aria-hidden="true"
                style="color: #bf6e02; width: 50px; font-weight: 900;"></i>Email</h2>
            <p>five.guys@gmail.com</p>
          </div>
          <div class="col-md-6 col-lg-6 mb-4 ">

            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11177.845683190577!2d-7.676242539291458!3d33.60028600335954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd4778aa113b%3A0xb06c1d84f310fd3!2sCasablanca!5e0!3m2!1sen!2sma!4v1703591367722!5m2!1sen!2sma"
              width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>

          </div>


        </div>


      </div>
    </div>

    <!--Section: Contact v.2-->

    <footer class=" text-center text-lg-start">
      <!-- Copyright -->
      <div class="text-center p-3">
        © 2023 Copyright
      </div>
      <!-- Copyright -->
    </footer>
    <script src="script.js"></script>
</body>

</html>