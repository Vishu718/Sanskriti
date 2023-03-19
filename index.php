<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="favi.png" type="image/x-icon" rel="icon">
    <title>Sanskriti Store</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="style.css">
    <script>
        $(document).ready(function () {
             // will first fade out the loading animation 
             $("#loaderanimate").delay(900).fadeOut("slow", function () {
                 // will fade out the whole DIV that covers the website.
                 $("#loader").fadeOut("slow");
             });
         });
         </script>
</head>
<body>
    <div class="container-fluid">
        <div id="loader">
          <div id="loaderanimate">
            <div class="container">
  <div class="spinner"></div>
</div>
          </div>
      </div>
    </div>
 <?php include 'header.php';?>
    
     <section id="hero">
    <h4>Trade-in-offer</h4>
    <h2>Super value deals</h2>
    <h1>On all products</h1>
    <p>Save more with coupons & up to 70& off!</p>
    <a href="shop.html"><button>Shop Now</button></a>
   </section>
    
    <?php include 'feature.php';?>
    
     <section id="product1" class="section-p1">
    <h2>Featured Products</h2>
    <p>Summer Collection New Modern Design</p>
    <?php include 'product1.php';?>
     </section>
    
     <section id="banner" class="section-m1">
    <h4>Repair Services</h4>
    <h2>Up to <span>70% off</span>  - All T-Shirts & Accessories</h2>
    <button class="normal">Explore More</button>
   </section>
    
    <section id="product1" class="section-p1">
    <h2>New Arrivals</h2>
    <p>Summer Collection New Morden Design</p>
    <?php include 'product2.php';?>
    </section>
    
     <section id="sm-banner" class="section-p1">
    <div class="banner-box">
        <h4>Crazy Deals</h4>
        <h2>Buy 1 Get 1 Free</h2>
        <span>The best classic dress is on sale</span>
        <button class="white">Learn More</button>
    </div>

    <div class="banner-box banner-box2">
        <h4>Spring/Summer</h4>
        <h2>Upcoming Season</h2>
        <span>The best classic dress is on sale</span>
        <button class="white">Collection</button>
    </div>
   </section>

   <section id="banner3">
    <div class="banner-box">
        <h2>Seasonal Sale</h2>
        <h3>Winter Collection -50% OFF</h3>
    </div>

    <div class="banner-box banner-box2">
        <h2>New Footwear Collection</h2>
        <h3>Spring/Summer 2023</h3>
    </div>

    <div class="banner-box banner-box3">
        <h2>T-Shirts</h2>
        <h3>New Treandy Prints</h3>
    </div>
   </section>
    
    <?php include 'newsletter.php';?>
    
    <?php include 'footer.php';?>
    <script src="main.js"></script>
</body>
</html>
