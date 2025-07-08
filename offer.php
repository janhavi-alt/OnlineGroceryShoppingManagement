<?php include("header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Offers</title>
</head>
<body>
<div class="container mt-4">
        <div class="row"> 
<div class="col-lg-12 text-center border rounded bg-warning my-5">
    <h1>Offers For You</h1></div></div></div>
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">

        <img src="images/off1.jpg" alt="..." style="width:100% ;">
        <div class="carousel-caption">
          <p></p>
        </div>
        

      </div>
      
      <div class="item">
        <img src="images/off2.jpg" alt="..." style="width:100%;">
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
      
      <div class="item">
        <img src="images/off3.jpg" alt="..." style="width:100%;">
        <div class="carousel-caption">
        </div>
      </div>
  
  
    <div class="item">
        <img src="images/off4.jpg" alt="..." style="width:100%;">
        <div class="carousel-caption">
        </div>
      </div>
  
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="container mt-4">
        <div class="row"> 
<div class="col-lg-12 text-center border rounded bg-secondary my-5">
    <h1 style="color:#FFFFFF;"><marquee scrollamount="20"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-emoji-heart-eyes" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M11.315 10.014a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434z"/>
</svg> Supersaver | Up to 50% off</marquee></h1></div></div></div>
<div class="container-fluid">
<div class="container">
<div class="product-list">
<div class="product">
<div class ="col-lg-3">
              <form action="manage_cart.php" method="POST">
                <div class="card border-danger mb-3">
                   <img src="images/sup1.jpg" class="card-img-top" height="190">
                    <div class="card-body text-center">
                        <h5 class="card-title"><h3>Saffola Oats</h3></h5>
                        <p class="card-text">Price: <s style='color:red'>
  <span style='color:black'>₹ 105<span>
</s> ₹ 53</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                        <input type="hidden" name="Item_Name" value="Saffola Oats">
                        <input type="hidden" name="Price" value="105">
                    </div>
                </div>
              </form>
            </div>
</div>
<div class="product">
<div class ="col-lg-3">
             <form action="manage_cart.php" method="POST">
                <div class="card border-danger mb-3">
                    <img src="images/sup2.jpg" class="card-img-top" height="190">
                     <div class="card-body text-center">
                       <h5 class="card-title"><h3>Tata Tea Gold</h3>
                       </h5>
                       <p class="card-text">Price: <s style='color:red'>
  <span style='color:black'>₹ 200<span>
</s> ₹ 100</p>
                       <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                       <input type="hidden" name="Item_Name" value="Tata Tea Gold">
                       <input type="hidden" name="Price" value="200">
                      </div>
                </div>
             </form>
            </div>
</div>
<div class="product">
<div class ="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card border-danger mb-3">
                 <img src="images/sup3.jpg" class="card-img-top" height="190">
                    <div class="card-body text-center">
                      <h5 class="card-title"><h3>Bourn Vita</h3>
                      </h5>
                      <p class="card-text">Price: <s style='color:red'>
  <span style='color:black'>₹ 90<span>
</s> ₹ 45</p>
                      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                      <input type="hidden" name="Item_Name" value="Bourn Vita">
                      <input type="hidden" name="Price" value="30">
                    </div>
                </div>
            </form>
            </div>
</div>
            <div class="product">
            <div class ="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card border-danger mb-3">
                 <img src="images/sup4.webp" class="card-img-top" height="190">
                    <div class="card-body text-center">
                      <h5 class="card-title"><h3>Dabur Honey</h3>
                      </h5>
                      <p class="card-text">Price: <s style='color:red'>
  <span style='color:black'>₹ 150<span>
</s> ₹ 75</p>
                      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                      <input type="hidden" name="Item_Name" value="Dabur Honey">
                      <input type="hidden" name="Price" value="50">
                    </div>
                </div>
            </form>
            </div>
            </div>
            </div></div></div>
</body>
</html>
