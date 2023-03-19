<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="favi.png" type="image/x-icon" rel="icon">
    <title>Sanskriti Creations/Blog</title>
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
    
     <section id="page-header" class="blog-header">
    
    <h2>#readmore</h2>
   
    <p>Read all case studies about our products</p>
   
   </section>
    
       <section id="blog">
    <div class="blog-box">
        <div class="blog-img">
            <img src="e commerce/blog/b1 (1).jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>The Cotton-jersey Zip-up Hoodies</h4>
            <p>Kickstarter man braid godard coloring book. Raclette waistcoat selfies yr wolf charteuse hexagon irony, godard_</p>
            <a href="#">CONTINUE READING</a>
        </div>
        <h1>11/12</h1>
    </div>

    <div class="blog-box">
        <div class="blog-img">
            <img src="e commerce/blog/b2.jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>The Cotton-jersey Zip-up Hoodies</h4>
            <p>Kickstarter man braid godard coloring book. Raclette waistcoat selfies yr wolf charteuse hexagon irony, godard_</p>
            <a href="#">CONTINUE READING</a>
        </div>
        <h1>07/08</h1>
    </div>

    <div class="blog-box">
        <div class="blog-img">
            <img src="e commerce/blog/b3.jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>The Cotton-jersey Zip-up Hoodies</h4>
            <p>Kickstarter man braid godard coloring book. Raclette waistcoat selfies yr wolf charteuse hexagon irony, godard_</p>
            <a href="#">CONTINUE READING</a>
        </div>
        <h1>10/12</h1>
    </div>

    <div class="blog-box">
        <div class="blog-img">
            <img src="e commerce/blog/b4.jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>The Cotton-jersey Zip-up Hoodies</h4>
            <p>Kickstarter man braid godard coloring book. Raclette waistcoat selfies yr wolf charteuse hexagon irony, godard_</p>
            <a href="#">CONTINUE READING</a>
        </div>
        <h1>18/09</h1>
    </div>

    <div class="blog-box">
        <div class="blog-img">
            <img src="e commerce/blog/b5.jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>The Cotton-jersey Zip-up Hoodies</h4>
            <p>Kickstarter man braid godard coloring book. Raclette waistcoat selfies yr wolf charteuse hexagon irony, godard_</p>
            <a href="#">CONTINUE READING</a>
        </div>
        <h1>26/10</h1>
    </div>

    <div class="blog-box">
        <div class="blog-img">
            <img src="e commerce/blog/b6.jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>The Cotton-jersey Zip-up Hoodies</h4>
            <p>Kickstarter man braid godard coloring book. Raclette waistcoat selfies yr wolf charteuse hexagon irony, godard_</p>
            <a href="#">CONTINUE READING</a>
        </div>
        <h1>04/10</h1>
    </div>

    <div class="blog-box">
        <div class="blog-img">
            <img src="e commerce/blog/b7.jpg" alt="">
        </div>
        <div class="blog-details">
            <h4>The Cotton-jersey Zip-up Hoodies</h4>
            <p>Kickstarter man braid godard coloring book. Raclette waistcoat selfies yr wolf charteuse hexagon irony, godard_</p>
            <a href="#">CONTINUE READING</a>
        </div>
        <h1>10/01</h1>
    </div>
   </section>

   <section id="pagination" class="section-p1">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>
   </section>
    
    <?php include 'newsletter.php';?>
    
    <?php include 'footer.php';?>

</body>
</html>
