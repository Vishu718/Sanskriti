<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="favi.png" type="image/x-icon" rel="icon">
    <title>Sanskriti Creations/About Us</title>
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
    
    <h2>#Aboutus</h2>
   
    <p>Know more about us..</p>
   
   </section>
    
     <section id="about-head" class="section-p1">
    <img src="e commerce/about/a6.jpg" alt="">
    <div>
        <h2>Who we are?</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A optio maxime nisi. Expedita accusamus voluptatem officiis molestias. Exercitationem, accusantium explicabo eligendi iste maiores velit quasi, rerum porro magni nobis neque?
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet quae eius maiores, voluptatum ab recusandae eaque et quidem architecto accusantium aut totam dicta quasi quis perferendis, sequi facere quod debitis?
        </p>
        <abbr title="">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus quae dicta saepe. Culpa maiores rerum totam quis eos odit, numquam minus doloribus? Odit qui expedita maiores reprehenderit reiciendis deserunt impedit!
        </abbr>

        <br><br>
        <marquee bgcolor="#ccc" loop="1" scrollamount="s" width="100%">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates voluptatum iure soluta nihil non harum odit, enim minus quia velit pariatur fuga necessitatibus ea. Error praesentium libero modi provident numquam!
        </marquee>
    </div>
   </section>

   <section id="about-app" class="section-p1">
    <h1>Download our <a href="#">App</a></h1>
    <div class="video">
        <video autoplay muted loop src="1.mp4"></video>
    </div>
   </section>
    
    <?php include 'feature.php';?>
    
    <?php include 'newsletter.php';?>
    
    <?php include 'footer.php';?>

</body>
</html>
