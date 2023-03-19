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
    <link rel="stylesheet" href="style.css">
  
</head>
<body>
  
   <section id="header">
            <a href="#"><img src="logo.png" width="140px" alt=""></a>

            <div>
                <ul id="navbar">
                    <li><a class="btn active" href="index.php">Home</a></li>
                    <li><a class="btn" href="shop.php">Shop</a></li>
                    <li><a class="btn" href="blog.php">Blog</a></li>
                    <li><a class="btn" href="about.php">About</a></li>
                    <li><a class="btn" href="contact.php">Contact</a></li>
                    <li id="lg-bag"><a class="btn" href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                    <li id="lg-bag"><a class="btn" href="#"><i class="far fa-user"></i></a></li>
                    <a href="#" id="close"><i class="far fa-times"></i></a>
                </ul>
            </div>
            <div id="mobile">
                <a href="#"><i class="far fa-user"></i></a>
                <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>
   </section>
    <script>
// Add active class to the current button (highlight it)
var header = document.getElementById("navbar");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script>
    <script src="main.js"></script>
</body>
</html>
