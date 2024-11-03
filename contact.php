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
    $contact=true;
    ?>
         <?php include("header.php"); ?>

         <!--Header End-->
         <!--Inner Header Start-->
         <section class="wf100 p100 inner-header">
            <div class="container">
               <h1>Contact Us</h1>
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="contact.php"> Contact </a></li>
               </ul> 
            </div>
         </section>
         <!--Inner Header End--> 
         <!--Contact Start-->
         <section class="contact-page wf100 p80">
         <div class="container contact-info">
               <div class="row">
                  <div class="col-md-12">
                     <h3>Contact Information</h3>
                  </div>
                  <!--Contact Info Start-->
                  <div class="col-md-4 cen hvr-float2">
                     <div class="ic"><i class="fa-solid fa-location-dot"></i></div>
                     <div class="c-info">
                        
                        <h6>Address:</h6>
                        <p>No 12/4-3, Mariyamman Kovil Street kadayampatti PO & TK,
Salem - 636351, Tamil Nadu, India </p>
                     </div>
                  </div>
                  <!--Contact Info End--> 
                  <!--Contact Info Start-->
                  <div class="col-md-4 cen hvr-float2">
                  <div class="ic"><i class="fa-solid fa-phone"></i></div>
                     <div class="c-info">
                        <h6>Contact:</h6>
                        <p><strong>Phone:</strong><a style="color: #66bb6a;" href="tel:+917550224396">75502 24396</a></p>
                        <p><strong>Whatsapp:</strong><a style="color: #66bb6a;" href="https://wa.me/9486664396">94866 64396</a></p>
                     </div>
                  </div>
                  <!--Contact Info End--> 
                  <!--Contact Info Start-->
                  <div class="col-md-4 cen hvr-float2">
                  <div class="ic"><i class="fa-solid fa-envelope"></i></div>
                     <div class="c-info">
                        <h6>For More Information:</h6>
                        <p><strong>Email:</strong><a style="color: #66bb6a;" href="mailto:greeneco.4396@gmail.com">greeneco.4396@gmail.com</a></p>
                        
                     </div>
                  </div>
                  <!--Contact Info End--> 
               </div>
            </div>


            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="google-map">

                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3904.4517713234036!2d78.09142861479381!3d11.873597941229553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bac07cd0408d06f%3A0x6cfc36f936c60731!2sGreen%20Eco%20Enterprises!5e0!3m2!1sen!2sin!4v1680257195957!5m2!1sen!2sin" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
   </body>


</html>