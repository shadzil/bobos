<?php
include_once "header.php";
?>
  <nav class="navbar sticky-top bg-transparent navbar-expand-lg px-3" style="background-image: url('assets/images/sketch-header.png'); background-repeat: no-repeat; background-size: 100% 100%;">
  
  <a class="navbar-brand" href="#"><img src="assets/images/Untitled design (6).png" class=" "width="80" alt="Logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
    
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="my-2 my-lg-0">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Oder Now</button>
    </form>
  </div>
</nav>
<div class="intro"style="padding-top: -100px;" >



<div id="myCarousel" class="carousel slide" data-bs-ride="carousel" ">
    
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      
      <div class="carousel-item active">
  
        <img src="assets\images\photo-1574085733277-851d9d856a3a.jpg" class="d-block w-100" alt="...">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="assets\images\photo-1574085733277-851d9d856a3a.jpg" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="assets\images\photo-1574085733277-851d9d856a3a.jpg" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good mea78ooo78o7sure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  </div>
<!-- ------------------------------------------------------------------------------------------------------------ -->



<div class="container-fluid  my-5 text-center px-5 p-3 ">


<div class=" text-center heading-section ftco-animate">
      <h2 class="subheading brushfont">Services</h2>
    </div>
  

        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
          <img src="assets\images\eco-logo.png" class="d-block w-25 mx-auto" alt="...">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta gravida at eget metus., ut fermentum massa justo sit amet risus. Donec sed odio dui. </p>
          </div>
          <div class="col-md-4">
          <img src="assets\images\fresh.png" class="d-block w-25 mx-auto" alt="...">
            <h2>Heading</h2>
            <p>Donec id elit non mi porta  mollis euismod. Donec sed odio dui. </p>
           
          </div>
          <div class="col-md-4">
          <img src="assets\images\quality.png" class="d-block w-25 mx-auto" alt="...">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      
          </div>
        </div>
</div>
<!-- ------------------------------------------------------------------------------------------- -->



<div class="container-fluid">


<div class=" text-center heading-section ftco-animate">
      <span class="subheading">MENU</span>
      <!-- <h2 class="mb-3">Our Latest Services</h2> -->
    <!-- </div> -->


    <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>



</div>
</div>

<?php
include_once "footer.php";
?>