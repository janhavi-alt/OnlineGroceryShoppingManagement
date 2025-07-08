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
    <title>Category</title>
</head>
<body>
<div class="container mt-4">
        <div class="row"> 
         <div class="col-lg-12 text-center border rounded bg-warning my-5">
            <h1> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
</svg> Shop By Category <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
</svg>
                </h1>
          </div>
          <div class="col-lg-12 text-center border rounded bg-success my-5">
            <h2 style="color:#FFFFFF;"><marquee scrollamount="20">Household Cleaners</marquee></h2>
            </div>
            <div class="container-fluid">
<div class="container">
<div class="product-list">
<div class="product">
            <div class ="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card border-danger mb-3">
                 <img src="images/comfort.jpg" class="card-img-top" height="190">
                    <div class="card-body text-center">
                      <h5 class="card-title"><h3>Comfort</h3>
                      </h5>
                      <p class="card-text">Price: ₹ 50</p>
                      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                      <input type="hidden" name="Item_Name" value="Comfort">
                      <input type="hidden" name="Price" value="50">
                    </div>
                </div>
            </form>
            </div></div>
            <div class="product">
            <div class ="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card border-danger mb-3">
                 <img src="images/harpic.jpg" class="card-img-top" height="190">
                    <div class="card-body text-center">
                      <h5 class="card-title"><h3>Harpic</h3>
                      </h5>
                      <p class="card-text">Price: ₹ 80</p>
                      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                      <input type="hidden" name="Item_Name" value="Harpic">
                      <input type="hidden" name="Price" value="80">
                    </div>
                </div>
            </form>
            </div></div>
            <div class="product">
            <div class ="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card border-danger mb-3">
                 <img src="images/surf.jpg" class="card-img-top" height="190">
                    <div class="card-body text-center">
                      <h5 class="card-title"><h3>Surf Excel</h3>
                      </h5>
                      <p class="card-text">Price: ₹ 90</p>
                      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                      <input type="hidden" name="Item_Name" value="Surf Excel">
                      <input type="hidden" name="Price" value="90">
                    </div>
                </div>
            </form>
            </div></div>
            <div class="product">
            <div class ="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card border-danger mb-3">
                 <img src="images/vim.jpg" class="card-img-top" height="190">
                    <div class="card-body text-center">
                      <h5 class="card-title"><h3>Vim Bar</h3>
                      </h5>
                      <p class="card-text">Price: ₹ 20</p>
                      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                      <input type="hidden" name="Item_Name" value="Vim Bar">
                      <input type="hidden" name="Price" value="20">
                    </div>
                </div>
            </form>
            </div>
            </div></div></div>
            <div class="col-lg-12 text-center border rounded bg-danger my-5">
            <h2 style="color:#FFFFFF;"><marquee scrollamount="20">Bath & Body</marquee></h2>
            </div>
            <div class="container">
<div class="product-list">
<div class="product">
            <div class ="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card border-danger mb-3">
                 <img src="images/dettol.jpg" class="card-img-top" height="190">
                    <div class="card-body text-center">
                      <h5 class="card-title"><h3>Dettol</h3>
                      </h5>
                      <p class="card-text">Price: ₹ 40</p>
                      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                      <input type="hidden" name="Item_Name" value="Dettol">
                      <input type="hidden" name="Price" value="40">
                    </div>
                </div>
            </form>
            </div></div><div class="product">
            <div class ="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card border-danger mb-3">
                 <img src="images/pears.jpg" class="card-img-top" height="190">
                    <div class="card-body text-center">
                      <h5 class="card-title"><h3>Pears Soap</h3>
                      </h5>
                      <p class="card-text">Price: ₹ 130</p>
                      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                      <input type="hidden" name="Item_Name" value="Pears Soap">
                      <input type="hidden" name="Price" value="130">
                    </div>
                </div>
            </form>
            </div></div><div class="product">
            <div class ="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card border-danger mb-3">
                 <img src="images/nivea.jpg" class="card-img-top" height="190">
                    <div class="card-body text-center">
                      <h5 class="card-title"><h3>Nivea Body Lotion</h3>
                      </h5>
                      <p class="card-text">Price: ₹ 90</p>
                      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                      <input type="hidden" name="Item_Name" value="Nivea Body Lotion">
                      <input type="hidden" name="Price" value="90">
                    </div>
                </div>
            </form>
            </div></div><div class="product">
            <div class ="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card border-danger mb-3">
                 <img src="images/himalaya.jpg" class="card-img-top" height="190">
                    <div class="card-body text-center">
                      <h5 class="card-title"><h3>Himalaya face wash</h3>
                      </h5>
                      <p class="card-text">Price: ₹ 40</p>
                      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                      <input type="hidden" name="Item_Name" value="Himalaya face wash">
                      <input type="hidden" name="Price" value="40">
                    </div>
                </div>
            </form>
            </div></div></div></div>
            <div class="col-lg-12 text-center border rounded bg-success my-5">
            <h2 style="color:#FFFFFF;"><marquee scrollamount="20">Dairy & Bread</marquee></h2>
            </div>
            <div class="container">
<div class="product-list">
<div class="product">
            <div class ="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card border-danger mb-3">
                 <img src="images/amul.jpg" class="card-img-top" height="190">
                    <div class="card-body text-center">
                      <h5 class="card-title"><h3>Amul Butter</h3>
                      </h5>
                      <p class="card-text">Price: ₹ 100</p>
                      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                      <input type="hidden" name="Item_Name" value="Amul Butter">
                      <input type="hidden" name="Price" value="100">
                    </div>
                </div>
            </form>
            </div></div><div class="product">
            <div class ="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card border-danger mb-3">
                 <img src="images/paneer.jpg" class="card-img-top" height="190">
                    <div class="card-body text-center">
                      <h5 class="card-title"><h3>Amul Paneer</h3>
                      </h5>
                      <p class="card-text">Price: ₹ 140</p>
                      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                      <input type="hidden" name="Item_Name" value="Amul Paneer">
                      <input type="hidden" name="Price" value="140">
                    </div>
                </div>
            </form>
            </div></div><div class="product">
            <div class ="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card border-danger mb-3">
                 <img src="images/cake.jpg" class="card-img-top" height="190">
                    <div class="card-body text-center">
                      <h5 class="card-title"><h3>Cakes</h3>
                      </h5>
                      <p class="card-text">Price: ₹ 20</p>
                      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                      <input type="hidden" name="Item_Name" value="Cakes">
                      <input type="hidden" name="Price" value="20">
                    </div>
                </div>
            </form>
            </div></div><div class="product">
            <div class ="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card border-danger mb-3">
                 <img src="images/wibs.jpg" class="card-img-top" height="190">
                    <div class="card-body text-center">
                      <h5 class="card-title"><h3>Wibs Bread</h3>
                      </h5>
                      <p class="card-text">Price: ₹ 40</p>
                      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                      <input type="hidden" name="Item_Name" value="Wibs Bread">
                      <input type="hidden" name="Price" value="28">
                    </div>
                </div>
            </form>
            </div></div></div></div>
            <div class="col-lg-12 text-center border rounded bg-danger my-5">
            <h2 style="color:#FFFFFF;"><marquee scrollamount="20">Oil, Masala & Sauces</marquee></h2>
            </div>
            <div class="container">
<div class="product-list">
<div class="product">
            <div class ="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card border-danger mb-3">
                 <img src="images/tata-salt.jpg" class="card-img-top" height="190">
                    <div class="card-body text-center">
                      <h5 class="card-title"><h3>Tata Salt</h3>
                      </h5>
                      <p class="card-text">Price: ₹ 28</p>
                      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                      <input type="hidden" name="Item_Name" value="Tata Salt">
                      <input type="hidden" name="Price" value="28">
                    </div>
                </div>
            </form>
            </div></div>
            <div class="product">
            <div class ="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card border-danger mb-3">
                 <img src="images/fortune.jpg" class="card-img-top" height="190">
                    <div class="card-body text-center">
                      <h5 class="card-title"><h3>Sunflower Oil</h3>
                      </h5>
                      <p class="card-text">Price: ₹ 149</p>
                      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                      <input type="hidden" name="Item_Name" value="Fortune Sunflower Oil">
                      <input type="hidden" name="Price" value="149">
                    </div>
                </div>
            </form>
            </div></div>
            <div class="product">
            <div class ="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card border-danger mb-3">
                 <img src="images/ketchup.jpg" class="card-img-top" height="190">
                    <div class="card-body text-center">
                      <h5 class="card-title"><h3>Tomato Ketchup</h3>
                      </h5>
                      <p class="card-text">Price: ₹ 70</p>
                      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                      <input type="hidden" name="Item_Name" value="Tomato Ketchup">
                      <input type="hidden" name="Price" value="70">
                    </div>
                </div>
            </form>
            </div></div>
            <div class="product">
            <div class ="col-lg-3">
            <form action="manage_cart.php" method="POST">
                <div class="card border-danger mb-3">
                 <img src="images/magic-masala.jpg" class="card-img-top" height="190">
                    <div class="card-body text-center">
                      <h5 class="card-title"><h3>Magic Masala</h3>
                      </h5>
                      <p class="card-text">Price: ₹ 60</p>
                      <button type="submit" name="Add_To_Cart" class="btn btn-primary">Add To Cart</button>
                      <input type="hidden" name="Item_Name" value="Maggie Magic Masala">
                      <input type="hidden" name="Price" value="60">
                    </div>
                </div>
            </form>
            </div>
       </div>
    </div></div>
    <script type="text/javascript">
function search() {
  let filter = document.getElementById('find').value.toUpperCase();
  let item = document.querySelectorAll('.product');
  let l = item.length;
  let found = false;
  for (var i = 0; i < l; i++) {
    let a = item[i].getElementsByTagName('h3')[0];
    let value = a.innerHTML || a.innerText || a.textContent;
    if (value.toUpperCase().indexOf(filter) > -1) {
      item[i].style.display = "";
      found = true;
    } else {
      item[i].style.display = "none";
    }
  }
  if (!found) {
    alert('Sorry, item not found');
  }
}

</script>

</body>
</html>