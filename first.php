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
  <div class="row square-wrapper">


    <div class="col-md-4 square square-transition " data-aos="zoom-in" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false">
      <img src="assets\images\eco-logo.png" class="d-block w-25 mx-auto" alt="...">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus., ut fermentum massa justo sit amet risus. Donec sed odio dui. </p>
    </div>



    <div class="col-md-4 square square-transition" data-aos="zoom-in" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false">
      <img src="assets\images\fresh.png" class="d-block w-25 mx-auto" alt="...">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta mollis euismod. Donec sed odio dui. </p>
    </div>


    <div class="col-md-4 square square-transition" data-aos="zoom-in" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" data-aos-once="false">
      <img src="assets\images\quality.png" class="d-block w-25 mx-auto" alt="...">
      <h2>Heading</h2>
      <p>Donec sed odio dui. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>

    </div>
  </div>


</div>
<!-- ------------MENU------------------------------------------------------------------------------- -->



<div  id="menu" class="container-fluid " >
<div class=" text-center heading-section ftco-animate">
    <p class=" brushfont">Menu</p>
  


<div id="myBtnContainer" my-5 >
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('bpots')"> Biriyani Pots</button>
  <button class="btn" onclick="filterSelection('lpack')"> Lunch Pack</button>
  <button class="btn" onclick="filterSelection('mutt')"> Mutton Masala</button>
  <button class="btn" onclick="filterSelection('bev')"> Bevarages</button>
</div>

</div>

<!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
<div class="containermenue  ">
 
<div>
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
</div>
</div>

</div>
<!-- -------------------------------------------------------------------------------------------------------------------------- -->

<!------------------------------------------------CUSTOMER REVIEW ------------------------------------------------------------------>
<div class=" text-center heading-section ftco-animate  my-5">
    <p class=" brushfont">Testimonial</p>
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
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
<section class="ftco-section "data-aos="fade-up" style="background-color: black;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Contact us</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Get in touch</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Your message was sent, thank you!
				      		</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Full Name</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Subject</label>
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-lg-4 col-md-5 d-flex align-items-stretch">
								<div class="info-wrap bg-success w-100 p-md-5 p-4">
									<h3>Let's get in touch</h3>
									<p class="mb-4">We're open for any suggestion or just to have a chat</p>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-globe"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Website</span> <a href="#">yoursite.com</a></p>
					          </div>
				          </div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



  <!--  -->
<?php
include_once "footer.php";
?>
<style>
.containermenue {
  overflow: hidden;
 /* padding: auto; */
 /* margin: auto; */
 margin-left: 50px;
 /* margin-right: 30px;  */

}

.filterDiv {
  float: left;
  /* background-color: #2196F3;
  color: #ffffff; */
  /* width: 100px; */
  /* line-height: 100px;
  text-align: center; */
  /* margin: 2px; */
  display: none; /* Hidden by default */
  padding: auto;
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
background-color: #deb150; 
  color: black;
  cursor: pointer;
  outline: 1px solid black;
    outline-offset: -5px;
    outline-color: black;
} 

/* Add a light grey background on mouse-over */
.btn:hover {
  background-color: black;
  color: white;
} 

/* Add a dark background to the active button */
/* .btn.active {
  background-color: #666;
  color: white;
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