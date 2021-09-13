<?php
include_once "header.php";
?>


<?php

include_once "nav.php";
?>


<!-- -----------------------Carousel------------------------------------------------------------------------------------------------------ -->
<div id="myCarousel" class="carousel slide " data-bs-ride="carousel">

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


<!-- --------------Why Choose Us---------------------------------------------------------------------------------------------- -->


<div class="container-fluid parallax  my-5 text-center px-5 p-3 text-white ">


  <div class=" text-center heading-section ftco-animate">
    <p class=" brushfont">Why Choose Us</p>
  </div>


  <!-- Example row of fjgnjfcolumns -->
  <div class="row square-wrapper justify-content-center">


    <div class="col-sm-3 square square-transition sqrbox mx-2 my-2" data-aos="zoom-in" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false">
      <img src="assets\images\eco-logo.png" class="d-block w-25 mx-auto" alt="...">
      <h2>ECO Friendly</h2>
      <p>We use clay pots insted of plastic to save the mother earth and improve the quality of the food</p>
    </div>



    <div class="col-sm-3 square square-transition sqrbox mx-2 my-2" data-aos="zoom-in" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false">
      <img src="assets\images\fresh.png" class="d-block w-25 mx-auto" alt="...">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta mollis euismod. Donec sed odio dui. </p>
    </div>


    <div class="col-sm-3 square square-transition sqrbox mx-2 my-2 " data-aos="zoom-in" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false">
      <img src="assets\images\quality.png" class="d-block w-25 mx-auto" alt="...">
      <h2>Heading</h2>
      <p>Donec sed odio dui. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>

    </div>
  </div>


</div>
<!-- ------------MENU for the shop------------------------------------------------------------------------------- -->



<div  id="menu" class="container-fluid " >
<div class=" text-center heading-section ftco-animate">
    <p class=" brushfont">Menu</p>
  


<div id="myBtnContainer" >
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('bpots')"> Biriyani Pots</button>
  <button class="btn" onclick="filterSelection('lpack')"> Lunch Pack</button>
  <button class="btn" onclick="filterSelection('mutt')"> Mutton Masala</button>
  <button class="btn" onclick="filterSelection('bev')"> Bevarages</button>
</div>

</div>

<!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->

<div class="containermenue  mx-auto ">

 

  <div class="filterDiv bpots">
    <div class="card bpots " style="width: 18rem;" >
  <img class="card-img-top" src="assets/images/brijpg.jpg" alt="Card image cap">
  <div class="card-body ">
  <h4> Biriyani </h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

    <a href="#" class="theme-btn">Order Now <i class="fa fa-arrow-right"> </i> </a>
  </div>
</div>

</div>

  <div class="filterDiv colors bpots"><div class="card  " style="width: 18rem;" >
  <img class="card-img-top" src="assets/images/brijpg.jpg" alt="Card image cap">
  <div class="card-body ">
  <h4> Biriyani </h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

    <a href="#" class="theme-btn">Order Now <i class="fa fa-arrow-right"> </i> </a>
  </div>
</div>
</div>

  <div class="filterDiv lpack"><div class="card  " style="width: 18rem;" >
  <img class="card-img-top" src="assets/images/brijpg.jpg" alt="Card image cap">
  <div class="card-body ">
  <h4> Lunch Pack </h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

    <a href="#" class="theme-btn">Order Now <i class="fa fa-arrow-right"> </i> </a>
  </div>
</div>
</div>
<div class="filterDiv lpack"><div class="card  " style="width: 18rem;" >
  <img class="card-img-top" src="assets/images/brijpg.jpg" alt="Card image cap">
  <div class="card-body ">
  <h4> Lunch Pack  </h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

    <a href="#" class="theme-btn">Order Now <i class="fa fa-arrow-right"> </i> </a>
  </div>
</div>
</div>  <div class="filterDiv bpots"><div class="card  " style="width: 18rem;" >
  <img class="card-img-top" src="assets/images/brijpg.jpg" alt="Card image cap">
  <div class="card-body ">
  <h4> Italian pizza </h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

    <a href="#" class="theme-btn">Order Now <i class="fa fa-arrow-right"> </i> </a>
  </div>
</div>
</div>

  <div class="filterDiv mutt"><div class="card" style="width: 18rem;" >
  <img class="card-img-top" src="assets/images/brijpg.jpg" alt="Card image cap">
  <div class="card-body ">
  <h4> Italian pizza </h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

    <a href="#" class="theme-btn">Order Now <i class="fa fa-arrow-right"> </i> </a>
  </div>
</div>
</div>

  <div class="filterDiv bev"> <div class="card" style="width: 18rem;" >
  <img class="card-img-top" src="assets/images/brijpg.jpg" alt="Card image cap">
  <div class="card-body ">
  <h4> Italian pizza </h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

    <a href="#" class="theme-btn">Order Now <i class="fa fa-arrow-right"> </i> </a>
  </div>
</div>

</div>
<div class="filterDiv bev"> <div class="card" style="width: 18rem;" >
  <img class="card-img-top" src="assets/images/brijpg.jpg" alt="Card image cap">
  <div class="card-body ">
  <h4> Italian pizza </h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

    <a href="#" class="theme-btn">Order Now <i class="fa fa-arrow-right"> </i> </a>
  </div>
</div>

</div>

</div>

</div>



<!-- -------------------------------------------------------------------------------------------------------------------------- -->

<!------------------------------------------------CUSTOMER REVIEW ------------------------------------------------------------------>




<div class=" text-center heading-section ftco-animate  my-5 ">
    <p class=" brushfont">Testimonial</p>
</div>

<div id="carouselExampleIndicators" class="carousel slide parallax" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">

    <div class="row">
    <div class="col-sm-6">
    <section class="py-5">
    <div class="container">
        <!-- FOR DEMO PURPOSE -->
        <div class="row">

            <div class="" >

                <!-- CUSTOM BLOCKQUOTE -->
                <blockquote class="blockquote blockquote-custom  p-5 shadow rounded" style="background-color: #deb150;   outline: 1px solid black;
    outline-offset: -10px;">
                    <div class=""><i class="fa fa-quote-left text-white"></i></div>
                    <p class="mb-0 mt-2 font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <a href="#" class="text-info"></a>."</p>
                    <footer class="blockquote-footer pt-4 mt-4 border-top">Someone famous in
                        <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote><!-- END -->

            </div>

            
        </div>
    </div>
</section> 
    </div>


    <div class="col-sm-6">
    <section class="py-5">
    <div class="container">
        <!-- FOR DEMO PURPOSE -->
        <div class="row">

            <div class="" >

                <!-- CUSTOM BLOCKQUOTE -->
                <blockquote class="blockquote blockquote-custom  p-5 shadow rounded" style="background-color: #deb150;   outline: 1px solid black;
    outline-offset: -10px;">
                    <div class=""><i class="fa fa-quote-left text-white"></i></div>
                    <p class="mb-0 mt-2 font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <a href="#" class="text-info"></a>."</p>
                    <footer class="blockquote-footer pt-4 mt-4 border-top">Someone famous in
                        <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote><!-- END -->

            </div>

            
        </div>
    </div>
</section> 
    </div>

    </div>
    </div>

    <div class="carousel-item">
     <div class="row">
    <div class="col-sm-6">
    <section class="py-5">
    <div class="container">
        <!-- FOR DEMO PURPOSE -->
        <div class="row">

            <div class="" >

                <!-- CUSTOM BLOCKQUOTE -->
                <blockquote class="blockquote blockquote-custom  p-5 shadow rounded" style="background-color: #deb150;   outline: 1px solid black;
    outline-offset: -10px;">
                    <div class=""><i class="fa fa-quote-left text-white"></i></div>
                    <p class="mb-0 mt-2 font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <a href="#" class="text-info"></a>."</p>
                    <footer class="blockquote-footer pt-4 mt-4 border-top">Someone famous in
                        <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote><!-- END -->

            </div>

            
        </div>
    </div>
</section> 
    </div>


    <div class="col-sm-6">
    <section class="py-5">
    <div class="container">
        <!-- FOR DEMO PURPOSE -->
        <div class="row">

            <div class="" >

                <!-- CUSTOM BLOCKQUOTE -->
                <blockquote class="blockquote blockquote-custom  p-5 shadow rounded" style="background-color: #deb150;   outline: 1px solid black;
    outline-offset: -10px;">
                    <div class=""><i class="fa fa-quote-left text-white"></i></div>
                    <p class="mb-0 mt-2 font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <a href="#" class="text-info"></a>."</p>
                    <footer class="blockquote-footer pt-4 mt-4 border-top">Someone famous in
                        <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote><!-- END -->

            </div>

            
        </div>
    </div>
</section> 
    </div>
    
    </div>
    </div>
    <div class="carousel-item">
    <div class="row">
    <div class="col-sm-6">
    <section class="py-5">
    <div class="container">
        <!-- FOR DEMO PURPOSE -->
        <div class="row">

            <div class="" >

                <!-- CUSTOM BLOCKQUOTE -->
                <blockquote class="blockquote blockquote-custom  p-5 shadow rounded" style="background-color: #deb150;   outline: 1px solid black;
    outline-offset: -10px;">
                    <div class=""><i class="fa fa-quote-left text-white"></i></div>
                    <p class="mb-0 mt-2 font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <a href="#" class="text-info"></a>."</p>
                    <footer class="blockquote-footer pt-4 mt-4 border-top">Someone famous in
                        <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote><!-- END -->

            </div>

            
        </div>
    </div>
</section> 
    </div>


    <div class="col-sm-6">
    <section class="py-5">
    <div class="container">
        <!-- FOR DEMO PURPOSE -->
        <div class="row">

            <div class="" >

                <!-- CUSTOM BLOCKQUOTE -->
                <blockquote class="blockquote blockquote-custom  p-5 shadow rounded" style="background-color: #deb150;   outline: 1px solid black;
    outline-offset: -10px;">
                    <div class=""><i class="fa fa-quote-left text-white"></i></div>
                    <p class="mb-0 mt-2 font-italic">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo <a href="#" class="text-info"></a>."</p>
                    <footer class="blockquote-footer pt-4 mt-4 border-top">Someone famous in
                        <cite title="Source Title">Source Title</cite>
                    </footer>
                </blockquote><!-- END -->

            </div>

            
        </div>
    </div>
</section> 
    </div>
    
    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!----------------------------------contact us ------------------------------------------------------------------------------------->


<div class="cswrapper " id="contact">
    <div class="csoverlay">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-9">
                <div class="contact-us text-center ">
                <p class=" brushfont">Contact Us</p>
                    <p class="mb-5">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mt-5 text-center px-3">
                                <div class="d-flex flex-row align-items-center"> <span class="icons"><i class="fa fa-map-marker"></i></span>
                                    <div class="address cstextlft"> <span>Address</span>
                                        <p>461, Sugar camp, San jose, California, USA</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center mt-3"> <span class="icons"><i class="fa fa-phone"></i></span>
                                    <div class="address cstextlft"> <span>Phone</span>
                                        <p>501 205 2929</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center mt-3"> <span class="icons"><i class="fa fa-envelope-o"></i></span>
                                    <div class="address cstextlft"> <span>Address</span>
                                        <p>contact@bbbootstrap.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center px-1">
                                <div class="forms p-4 py-5 bg-white">
                                    <h5>Send Message</h5>
                                    <div class="mt-4 inputs"> <input type="text" class="form-control" placeholder="Name"> <input type="text" class="form-control" placeholder="Email"> <textarea class="form-control" placeholder="Type your message"></textarea> </div>
                                    <div class="button mt-4 text-left"> <button class="btn btn-dark">Send</button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



  <!--  -->
<?php
include_once "footer.php";
?>
<style>
.containermenue {

 overflow: hidden; 
padding-left: 55px;



}

.filterDiv {
  float: left;
  /* background-color: #2196F3;
  color: #ffffff; */
  /* width: 100px; */
  /* line-height: 100px;
  text-align: center; */
  /* margin: 2px; */
  /* display: none; */
  
  /* Hidden by default */
  /* padding: auto; */

 
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
 .btn {
  /* border: none; */
  /* outline: 2px;
  outline-color: black; */
  padding: 2px 5px;
  background-color: #000; 
  color: white;
  cursor: pointer;
  border: #deb150 solid 1px;
  outline-color: #deb150;
  outline-offset: -5px;
  outline-color: black;
} 

/* Add a light grey background on mouse-over */
.btn:hover {
  background-color: #deb150;
  color: white;
} 

.sqrbox{
  border: #deb150 solid 1px;
  
  padding: auto;

}

/* Add a dark background to the active button */


.cswrapper {
    height: 100vh;
    background: #000;
    background: url("https://t4.ftcdn.net/jpg/03/04/19/71/360_F_304197125_VyputFZzIIam7Bp4KzAxFNGkgGSWQaEl.jpg");
    background-size: cover;
    width: 100%
}

.csoverlay {
    width: 100%;
    height: 100vh;
    background: rgba(0, 0, 0, 0.8)
}

.contact-us {
    margin-top: 50px;
    margin-bottom: 50px
}

.contact-us h3,
p {
    color: #fff
}

.address {
    margin-top: 14px !important;
    margin-left: 10px
}

.address span {
    color: #deb150
}

.icons {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #fff;
    display: inline-block;
    display: flex;
    justify-content: center;
    align-items: center
}

.icons i {
    font-size: 20px
}

.forms {
    padding: 20px
}

.inputs input {
    margin-bottom: 13px;
    border: none;
    border-bottom: 2px solid #eee
}

.inputs input:focus {
    margin-bottom: 13px;
    border: none;
    border-bottom: 2px solid #deb150;
    box-shadow: none
}

.inputs textarea {
    margin-bottom: 13px;
    border: none;
    border-bottom: 2px solid #eee;
    width: 100%;
    resize: none
}

.inputs textarea:focus {
    margin-bottom: 13px;
    border: none;
    border-bottom: 2px solid #deb150;
    box-shadow: none;
    resize: none
}

.form-control {
    padding: .375rem .25rem
}

.cstextlft{
  text-align: start;
}

</style>



<script>
  filterSelection("all")

  function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    if (c == "all") c = "";
    // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
    for (i = 0; i < x.length; i++) {
      w3RemoveClass(x[i], "show");
      if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
  }

  // Show filtered elements
  function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) {
        element.className += " " + arr2[i];
      }
    }
  }

  // Hide elements that are not selected
  function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      while (arr1.indexOf(arr2[i]) > -1) {
        arr1.splice(arr1.indexOf(arr2[i]), 1);
      }
    }
    element.className = arr1.join(" ");
  }

  // Add active class to the current control button (highlight it)
  var btnContainer = document.getElementById("myBtnContainer");
  var btns = btnContainer.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }
</script>