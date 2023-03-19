<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="favi.png" type="image/x-icon" rel="icon">
    <title>Sanskriti Creations/Cart</title>
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
    
       <section id="page-header" class="about-header">
    
    <h2>#Cart</h2>
   
    <p>One step away..</p>
   
   </section>

   <section id="cart" class="section-p1">
    <table width="100%">
        <thead>
            <tr>
                <td>Remove</td>
                <td>Image</td>
                <td>Product</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Subtotaly</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                <td><img src="e commerce/products/f1.jpg" alt=""></td>
                <td class="name">Cartoon Astronaut T-Shirts</td>
                <td>$118.19</td>
                <td><input type="number" value="1"></td>
                <td class="price">$118.19</td>
            </tr>

            <tr>
                <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                <td><img src="e commerce/products/f2.jpg" alt=""></td>
                <td class="name">Cartoon Astronaut T-Shirts</td>
                <td>$118.19</td>
                <td><input type="number" value="1"></td>
                <td class="price">$118.19</td>
            </tr>

            <tr>
                <td><a href="#"><i class="far fa-times-circle"></i></a></td>
                <td><img src="e commerce/products/f3.jpg" alt=""></td>
                <td class="name">Cartoon Astronaut T-Shirts</td>
                <td>$118.19</td>
                <td><input type="number" value="1"></td>
                <td class="price">$118.19</td>
            </tr>
        </tbody>
    </table>
   </section>

   <section id="cart-add" class="section-p1">
    <div id="coupon">
        <h3>Apply Coupon</h3>
        <div>
            <input type="text" placeholder="Enter Your Coupon">
            <button class="normal">Apply</button>
        </div>
    </div>

    <div id="subtotal">
        <h3>Cart Totals</h3>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td>$335</td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>Free</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>$335</strong></td>
            </tr>
        </table>
        <button class="normal">Proceed to Checkout</button>
    </div>
   </section>
    
    <?php include 'newsletter.php';?>
    
    <?php include 'footer.php';?>

</body>
</html>
