<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="favi.png" type="image/x-icon" rel="icon">
    <title>Sanskriti Creations/Shop</title>
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
    
    <section id="page-header">
    
    <h2>#stayhome</h2>
   
    <p>Save more with coupons & up to 70& off!</p>
   
   </section>
    
     <section id="product1" class="section-p1">
    <?php include 'product1.php';?>
     </section>
    
    <section id="product1" class="section-p1">
    <?php include 'product2.php';?>
    </section>
    
    <?php include 'newsletter.php';?>
    
    <?php include 'footer.php';?>

</body>
</html>
