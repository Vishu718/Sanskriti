<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="favi.png" type="image/x-icon" rel="icon">
    <title>Sanskriti Creations/Products</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    
          <section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img src="e commerce/products/f1.jpg" width="100%" id="mainimg" alt="">

        <div class="small-img-group">
            <div class="small-img-col">
                <img src="e commerce/products/f1.jpg" width="100%" alt="" class="small-img">
            </div>

            <div class="small-img-col">
                <img src="e commerce/products/f2.jpg" width="100%" alt="" class="small-img">
            </div>

            <div class="small-img-col">
                <img src="e commerce/products/f3.jpg" width="100%" alt="" class="small-img">
            </div>

            <div class="small-img-col">
                <img src="e commerce/products/f4.jpg" width="100%" alt="" class="small-img">
            </div>
        </div>
    </div>
    <div class="single-pro-details">
        <h6>Home/T-Shirt</h6>
        <h4>Men's Fashion T-Shirt</h4>
        <h2>$139.00</h2>
        <select>
            <option selected disabled>Select Size</option>
            <option>S</option>
            <option>M</option>
            <option>L</option>
            <option>XL</option>
            <option>XXL</option>
        </select>
        <input type="number" value="1">
        <button class="normal">Add To Cart</button>
        <h4>Product Details</h4>
        <span>The Gildan Ultra Cotton T-shirt is made from a substantial 6.0 oz. per 
        sq. yd. fabric constructed from 100% cotton, this classic fit preshrunk
        jersey knit provides unmatched comfort with each other, Featuring a taped neck 
        and shoulder, and a seamless double-needle collar, and available in a range
        of colors, it offers it all in the ultimate head- turning package. </span>
    </div>
   </section>
    
     <section id="product1" class="section-p1">
    <h2>New Arrivals</h2>
    <p>Summer Collection New Morden Design</p>
    <?php include 'product2.php';?>
    </section>
    
    <?php include 'newsletter.php';?>
    
    <?php include 'footer.php';?>
    
     <script>
    var mainImg = document.getElementById("mainimg");
    var smallimg = document.getElementsByClassName("small-img");

    smallimg[0].onclick = function(){
        mainImg.src = smallimg[0].src;
    }

    smallimg[1].onclick = function(){
        mainImg.src = smallimg[1].src;
    }

    smallimg[2].onclick = function(){
        mainImg.src = smallimg[2].src;
    }

    smallimg[3].onclick = function(){
        mainImg.src = smallimg[3].src;
    }
   </script>

</body>
</html>
