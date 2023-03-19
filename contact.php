<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="favi.png" type="image/x-icon" rel="icon">
    <title>Sanskriti Creations/Contact Us</title>
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
    
    <h2>#ContactUs</h2>
   
    <p>Leave a Message. We love to hear from you!</p>
   
   </section>

    <section id="contact-details" class="section-p1">
    <div class="details">
        <span>GET IN TOUCH</span>
        <h2>Visit one of our store locations or contact us today</h2>
        <h3>Head Office</h3>
        <div>
            <li>
                <i class="fal fa-map"></i>
                <p>Lehra Mandir, Maharajganj, Uttar Pradesh, India</p>
            </li>
            <li>
                <i class="fal fa-envelope"></i>
                <p><a href="mailto:vishalagrahari2782@gmail.com" style="text-decoration: none; color: #4e4444;">vishalagrahari2782@gmail.com</a></p>
            </li>
            <li>
                <i class="fal fa-phone-alt"></i>
                <p><a href="tel:+918874642690" style="text-decoration: none; color: #4e4444;">+918874642690</a></p>
            </li>
            <li>
                <i class="fal fa-clock"></i>
                <p>24/7 Support</p>
            </li>
        </div>
    </div>


    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3549.876634703878!2d83.2454218501234!3d27.160171455849177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3996c8290dbb3a91%3A0x53f9f4064c4ba861!2sLehra%20Mandir%20(Adravana%20Vasini)!5e0!3m2!1sen!2sin!4v1677945903753!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
   </section>

  <?php include 'message_form.php';?>
    
    <?php include 'newsletter.php';?>
    
    <?php include 'footer.php';?>

</body>
</html>
