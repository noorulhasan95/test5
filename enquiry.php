<?php
session_start();
?>

<!doctype html>
<html lang="en">
   

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="images/favicon.png">
      <title>Green Eco Enterprises</title>

<?php include("weblink.php"); ?>

   </head>
   <body>

   <!--script-->
   <script>
    $(document).ready(function() {

$(".onlytext").keydown(function(event) {

    var inputValue = event.which;

    // allow letters and whitespaces only.

    if (!(inputValue >= 65 && inputValue <= 90) && (inputValue != 32 && inputValue != 0 && inputValue != 8 && inputValue != 46) && !(inputValue < 48 && inputValue > 57)) {

        event.preventDefault();

    }

});

});



function isNumberKey(evt) {

var charCode = (evt.which) ? evt.which : event.keyCode

if (charCode > 31 && (charCode < 48 || charCode > 57))

    return false;



return true;

}

</script>



<script>

    function refreshCaptcha() {

        var img = document.images['captchaimg'];

        img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + Math.random() * 1000;

    }

</script>

<!--script-->

      <div class="wrapper">
         <!--Header Start-->
         <?php
    $enquiry=true;
    ?>
         <?php include("header.php"); ?>

         <!--Header End-->
         <!--Inner Header Start-->
         <section class="wf100 p100 inner-header">
            <div class="container">
               <h1>Enquiry</h1>
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="enquiry.php"> Enquiry </a></li>
               </ul> 
            </div>
         </section>
         <!--Inner Header End--> 
         <!--Contact Start-->
         <section class="contact-page wf100 p80">

            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <form action="" method="post">
                        <h3>Feel Free to Contact us</h3>
                        <ul class="cform" >
                           <li class="half pr-15">
                              <input type="text" class="form-control onlytext" placeholder="Full Name" required autocomplete="off" name="enq_name">
                           </li>
                           <li class="half pl-15">
                              <input type="text" class="form-control" placeholder="Email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,63}$" required autocomplete="off"   name="enq_email">
                              
                           </li>
                           <li class="half pr-15">
                              <input type="text" class="form-control" placeholder="Mobile" pattern="[0-9]{10}" maxlength="10" onkeypress="return isNumberKey(event)" required autocomplete="off"   name="enq_mobile">
                           </li>
                           <li class="half pl-15">
                              
                              <select class="form-control onlytext" required name="enq_product" id="cars">
                              <option   value="--select the product--">--select the product--</option>
                              <option <?php if(isset($_GET['pname']) && ($_GET['pname']=="8-inches-square-areca-plates")){echo "selected";} ?> value="8-inches-square-areca-plates">8 inches square areca plates</option>
                              <option <?php if(isset($_GET['pname']) && ($_GET['pname']=="6-inches-square-areca-plates")){echo "selected";} ?> value="6-inches-square-areca-plates">6 inches square areca plates</option>
                              <option <?php if(isset($_GET['pname']) && ($_GET['pname']=="4-inches-square-areca-plates")){echo "selected";} ?> value="4-inches-square-areca-plates">4 inches square areca plates</option>
                              <option <?php if(isset($_GET['pname']) && ($_GET['pname']=="12-inches-round-areca-plates")){echo "selected";} ?> value="12-inches-round-areca-plates">12 inches round areca plates</option>
                              <option <?php if(isset($_GET['pname']) && ($_GET['pname']=="10-inches-round-areca-plates")){echo "selected";} ?> value="10-inches-round-areca-plates">10 inches round areca plates</option>
                              <option <?php if(isset($_GET['pname']) && ($_GET['pname']=="8-inches-round-areca-plates")){echo "selected";} ?> value="8-inches-round-areca-plates">8 inches round areca plates</option>
                              <option <?php if(isset($_GET['pname']) && ($_GET['pname']=="6-inches-round-areca-plates")){echo "selected";} ?> value="6-inches-round-areca-plates">6 inches round areca plates</option>
                              <option <?php if(isset($_GET['pname']) && ($_GET['pname']=="5-inches-round-areca-plates")){echo "selected";} ?> value="5-inches-round-areca-plates">5 inches round areca plates</option>
                              </select>

                           </li>
                           <li class="full">
                              <textarea name="enq_message" class="textarea-control" placeholder="Message"></textarea>
                           </li>
                           <li class="half pl-15 cap">
                                 <!--Captcha start-->
                                    <div class="captcha_outer">
                              <img src="captcha.php?rand=<?php echo rand(); ?>" id='captchaimg'>
                              <input id="captcha_code" style="color:#333;" name="captcha_code" class="form-control" placeholder="Captcha" type="text" >
                              <br>
                              <font>Can't read the image? click <a style="color: #008A3E; text-decoration:underline;" href='javascript: refreshCaptcha();'>here</a> to refresh.</font>
                              <br>
                              </div>
                                 <!--Captcha close-->
                           </li>
                           <li class="sub">
                              
                              <input type="submit" value="Submit" class="fsubmit hvr-shrink">
                           </li>
                        </ul>
                     </form>
                  </div>
                  <div class="col-md-6">
                     <div class="google-map hvr-shrink2">
                     <img src="images/pt22.jpg" alt="">
                  </div>
                  </div>
               </div>
            </div>

         </section>
         <!--Contact End--> 
         <!--Footer Start-->
         <?php include("fooder.php"); ?>
         <!--Footer End--> 
      </div>
      <!--   JS Files Start  --> 
      <?php include("js-files.php"); ?>


    <!--mail transver-->
      <?php
    

    if (isset($_POST['enq_name'])) {

 if ($_SESSION['captcha_code'] == $_POST['captcha_code']){
       

        $enq_name = $_POST['enq_name'];

        $enq_email = $_POST['enq_email'];

        $enq_mobile = $_POST['enq_mobile'];

        $enq_course = $_POST['enq_product'];

        $enq_message = $_POST['enq_message'];

        $email = "noorulhasanmechanical786@gmail.com";



 
       
        $headers1  = "MIME-Version: 1.0 \n";

        $headers1 .= "Content-type: text/html; charset=utf-8 \n";

        // $headers1 .= "From:  info@thementors.ae \n";

        $subject = "Green Eco Enterprises - Enquiry Mail ";

 

       $message_for = "\n Name : " . $enq_name . "\n \n

                                               Mobile : " . $enq_mobile . "\n \n

                                               Email : " . $enq_email . "\n \n

                                               Category : " . $enq_course . "\n \n  

                                               Message : " . $enq_message;

 

        if (mail($email, $subject, $message_for, $headers1)) {

            echo '<script>alert("Your Contact Enquiry Mail has been successfully sent");</script>';

        }
else {
    echo '<script>alert("sorry your mail not send");</script>';
}
 }
 else {
    echo '<script>alert("Invalid Captcha");</script>';
 }
    }

    ?>

    <!--mail transver-->

   </body>


</html>