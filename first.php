<?php
include_once "header.php";
?>


<?php

include_once "nav.php";
?>



<div id="myCarousel" class="carousel slide" data-bs-ride="carousel" >
    
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
  

        <!-- Example row of fjgnjfcolumns -->
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
    <div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('cars')"> Cars</button>
  <button class="btn" onclick="filterSelection('animals')"> Animals</button>
  <button class="btn" onclick="filterSelection('fruits')"> Fruits</button>
  <button class="btn" onclick="filterSelection('colors')"> Colors</button>
</div>

 

<div class="container">
<div class=" filterDiv cars card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  <div class="filterDiv cars">BMW</div>
  <div class="filterDiv colors fruits">Orange</div>
  <div class="filterDiv cars">Volvo</div>
  <div class="filterDiv colors">Red</div>
  <div class="filterDiv cars animals">Mustang</div>
  <div class="filterDiv colors">Blue</div>
  <div class="filterDiv animals">Cat</div>
  <div class="filterDiv animals">Dog</div>
  <div class="filterDiv fruits">Melon</div>
  <div class="filterDiv fruits animals">Kiwi</div>
  <div class="filterDiv fruits">Banana</div>
  <div class="filterDiv fruits">Lemon</div>
  <div class="filterDiv animals">Cow</div>
</div>


</div>
</div>

<?php
include_once "footer.php";
?>
<style>

.container {
  overflow: hidden;
}

.filterDiv {
  float: left;
  /* background-color: #2196F3; */
  /* color: #ffffff; */
  width: 100px;
  line-height: 100px;
  text-align: center;
  margin: 2px;
  display: none; /* Hidden by default */
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
/* .btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

/* Add a light grey background on mouse-over */
/* .btn:hover {
  background-color: #ddd;
} */

/* Add a dark background to the active button */
/* .btn.active {
  background-color: #666;
  color: white;
} */ 

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