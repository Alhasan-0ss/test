<?php include 'header.php' ?>


<body>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="cor2.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="cor1.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="cor2.jpg" alt="Third slide">
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

<br>
<!-- Page content -->


  <!-- About Section -->
 

  </div>
  
  
  <div class="container-fluid">
  <h1>About MAMARestaurant</h1><br>
  <p>Tradition since 1999.</p>
  <div class="row">
    <div class="col-sm-4 col-sm-push-8">The MAMA Restaurant was founded in Finland by Mrs. MAMA in Finland, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.We only use <span class="w3-tag w3-light-grey">seasonal</span> ingredients.<br> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div> 
    <br>
    <div class="col-sm-8 col-sm-pull-4"><img src="image22.jpg" class="img-thumbnail">
</div>
  </div>
</div>
<br>
  <hr style="border-color:white">
  
  <!-- Menu Section -->


  <div class="container-fluid">
  <h1>Our Menu</h1><br>
  <div class="row">
    <div class="col-sm-4 col-sm-push-8"><h3> Bread Basket </h3> <br> <p>Assortment of fresh baked fruit breads and muffins 5.50</p> <br> <h3>Honey Almond Granola with Fruits</h3><br><p>Natural cereal of honey toasted oats, raisins, almonds and dates 7.00</p> <br> <h3>Belgian Waffle</h3><p>Vanilla flavored batter with malted flour 7.50</p><br>      <h3>Scrambled eggs</h3> <br> <p>Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p> <br> <h3>Blueberry Pancakes</h3> <br> <p> With syrup, butter and lots of berries 8.50</p>

</div>
    <div class="col-sm-8 col-sm-pull-4"><img src="coffe2.jpg" class="img-thumbnail">
</div>
  </div>
</div>
    
</div>
    
  <br>
  <hr style="border-color:white">

<!-- Contact Section -->


<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


</style>
<h1 align="center">Contact Form</h1>

<br>

<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>

</div>

<h3 align="center">Valssaamontie 49, HÄMEENLINNA, Tavastia Proper, 13100</h3>



</body>

<?php include 'footer.php' ?>