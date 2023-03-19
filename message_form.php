<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanskriti Creations/Contact Us/Form</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
   <?php
    $merr = $eerr = $sterr = $confirm = '';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_REQUEST["nam"];
            $mobile = $_REQUEST["mobile"];
            $email = $_REQUEST["mail"];

            if (!preg_match('/^[a-zA-Z]*$/', $name)) {
                $sterr = 'invalid name';
            }

            if (!preg_match('/^[0-9]*$/', $mobile ||strlen($mobile!= 10))) {
                $merr = 'invalid mobile no.';
            }
            if (!preg_match('/^[a-zA-Z0-9@.]*$/', $email)) {
                $eerr = 'invalid email id';
            } else {
                $connect = mysqli_connect("localhost", "root", "root1", "sanskriti_contact") or die('connection failed');
                $query = mysqli_query($connect,"select email from message where email='" . $email . "'") or die('table connection failed');

                if ($row = mysqli_fetch_array($query)) {
                    $eerr = 'Email already exist';
                }
            }
            
              if ($sterr== '' && $merr== '' && $eerr== '') {
                $name = $_REQUEST["nam"];
                $email = $_REQUEST["mail"];
                $mobile = $_REQUEST["mobile"];
                $message = $_REQUEST["text"];
                
                $connect = mysqli_connect("localhost", "root", "root1", "sanskriti_contact") or die('connection failed');
                $query = mysqli_query($connect,"select email from message where email='" . $email . "'") or die('table connection failed');
               
                $query = mysqli_query($connect,"INSERT INTO `message` (`name`, `email`, `phone`, `message`) VALUES ('".$name."', '".$email."', '".$mobile."', '".$message."')") or die("Query Connection Failed");
                $confirm="Submitted";
            }
            
        }
                
   ?>
   <section id="form-details">
       <form onsubmit="return check();" title="Enquiry Form" action="" method="post">
        <span>LEAVE A MESSAGE</span>
        <h2>We love to hear from you</h2>
        <input type="text" placeholder="Your Name" name="nam" required>
        <span style="color:red;"> <?php echo $sterr; ?> </span>
        <input type="email" placeholder="YourEmail" name="mail" required>
        <span style="color:red;"> <?php echo $eerr; ?> </span>
        <input type="tel" placeholder="Mobile No." name="mobile" maxlength="15" required>
          <span style="color:red;"> <?php echo $merr; ?> </span>
        <textarea name="" id="" cols="30" rows="10" placeholder="Your Message" name="text" required></textarea>
        <input type="submit" class="normal">
         <span style="color: red"><?php echo $confirm; ?></span>
    </form>
    <div class="people">
        <div>
            <img src="e commerce/people/1.png" alt="">
            <p><span>Jhon Doe</span>Senior Marketing Manager<br> Phone:- 000 000 123 55 77 <br>Email:- jhondoe@gmail.com</p>
        </div>
        <div>
            <img src="e commerce/people/2.png" alt="">
            <p><span>William Smith</span>Senior Marketing Manager<br> Phone:- 000 000 123 55 77 <br>Email:- jhondoe@gmail.com</p>
        </div>
        <div>
            <img src="e commerce/people/3.png" alt="">
            <p><span>Emma Stone</span>Senior Marketing Manager<br> Phone:- 000 000 123 55 77 <br>Email:- jhondoe@gmail.com</p>
        </div>
    </div>
   </section>
   
</body>
</html>
