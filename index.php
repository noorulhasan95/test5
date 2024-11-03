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
      
      <title>Green Eco Enterprises</title>


      <?php include("weblink.php");?>

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

      <div class="wrapper home2">


                  <!--Header Start-->
                  <?php
                  $home=true;
                  ?>

                  <?php include("header.php");?>
                  
         <!--Header End--> 


         <!--Slider Start-->
         <section id="home-slider" class="owl-carousel owl-theme wf100">
            <div class="item">
               
               <img src="images/banner-1.jpg" alt=""> 
            </div>
            <div class="item">
               
               <img src="images/banner-2.jpg" alt=""> 
            </div>
            <div class="item">
               
               <img src="images/banner-3.jpg" alt=""> 
            </div>
         </section>
         <!--Slider End--> 
         <!--Service Area Start-->
         <section class="services-area wf100">
            <div class="container">
               <ul>
                  <!--box  start-->
                  <li class="sin">
                     <div class="sinfo">
                        <img src="images/leaf1.png" class="img-Front" alt="">
                        <img src="images/leaf6.png" class="img-top" alt="">
                        <h6>Eco friendly</h6>
                        
                     </div>
                  </li>
                  <!--box  end--> 
                  <!--box  start-->
                  <li class="sin">
                     <div class="sinfo">
                        <img src="images/leaf2.png" class="img-Front" alt="">
                        <img src="images/leaf7.png" class="img-top" alt="">
                        <h6>100% Recyclable</h6>
                        
                     </div>
                  </li>
                  <!--box  end--> 
                  <!--box  start-->
                  <li class="sin">
                     <div class="sinfo">
                        <img src="images/leaf3.png" class="img-Front" alt="">
                        <img src="images/leaf8.png" class="img-top" alt="">
                        <h6>Water Proof</h6>
                        
                     </div>
                  </li>
                  <!--box  end--> 
                  <!--box  start-->
                  <li class="sin">
                     <div class="sinfo">
                        <img src="images/leaf4.png" class="img-Front" alt="">
                        <img src="images/leaf9.png" class="img-top" alt="">
                        <h6>Sustainable</h6>
                        
                     </div>
                  </li>
                  <!--box  end--> 
                  <!--box  start-->
                  <li class="sin">
                     <div class="sinfo">
                        <img src="images/leaf5.png" class="img-Front" alt="">
                        <img src="images/leaf10.png" class="img-top" alt="">
                        <h6>Disposable Dinnerware</h6>
                        
                     </div>
                  </li>
                  <!--box  end-->
               </ul>
            </div>
         </section>
         <!--Service Area End--> 
         <!--About Section Start-->
         <section class="home2-about wf100 p100 gallery">
            <div class="container">
               <div class="row">
                  <div class="col-md-5">
                     <div class="video-img hvr-grow"> <a style="display: none;" href="http://vimeo.com/43338103&amp;width=700" data-rel="prettyPhoto" title="Vimeo video"><i class="fas fa-play"></i></a> <img src="images/plate1.png" alt=""> </div>
                  </div>
                  <div class="col-md-7">
                     <div class="h2-about-txt">
                        <h3>About Green Eco Enterprises</h3>
                        <h2>Eco-friendly products can be made from our enterprises.</h2>
                        <p> We are manufacturer of Eco-Friendly Biodegradable Areca Leaf Plates and Bowls.
Green Eco Friendly Bio Products 100% Natural and its made from Areca palm leaf. Our mission is to serve people Go Green by ensuring a clean environment and hygienic products and affordable price.</p>
                        <a class="aboutus" href="about.php">More us</a> 
                     </div>
                  </div>
               </div>
            </div>
            
         </section>

         <section class="why-ecova wf100">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <h1> Why Green Eco Enterprises!</h1>
                     <p>Are you looking for a reliable exporter of 
                        high-quality areca palm leaf plates in bulk? 
                        Then you’re in the right place.
                     </p>
                     <a href="contact.php" class="cus hvr-shrink">Contact Us</a> 
                  </div>
               </div>
            </div>
         </section>
         <!--Urgent Causes End--> 
         <!--Current Projects Start-->
         <section class="wf100 p80 current-projects">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="section-title-2">
                        
                        <h2>Our Products</h2>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <ul class="nav" id="myTab" role="tablist">
                        <li class="nav-item sqro hvr-float2"> <a class="nav-link active" id="wildlife-tab" data-toggle="tab" href="#wildlife" role="tab" aria-controls="wildlife-tab" aria-selected="true">Square Areca Plates</a> </li>
                        <li class="nav-item sqro hvr-float2"> <a class="nav-link" id="water-tab" data-toggle="tab" href="#water" role="tab" aria-controls="water-tab" aria-selected="false">Round Areca Plates</a> </li>
                     </ul>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="tab-content" id="myTabContent">
                        <!--WildLife Slider Start-->
                        <div class="tab-pane fade show active" id="wildlife" role="tabpanel" aria-labelledby="wildlife-tab">
                           <div class="cpro-slider owl-carousel owl-theme">
                              <!--Pro Box-->
                              <div class="item ">
                                 <div class="pro-box hvr-float">
                                    <img src="images/pt20.jpg" alt="">
                                    <h5>8 inches square areca plates</h5>
                                    <div class="pro-hover">
                                       <h6>8 inches square areca plates</h6>
                                       
                                       <a href="enquiry.php?pname=8-inches-square-areca-plates">Enquiry Now</a> 
                                    </div>
                                 </div>
                              </div>
                              <!--Pro Box End--> 
                              <!--Pro Box-->
                              <div class="item ">
                                 <div class="pro-box hvr-float">
                                    <img src="images/pt2.jpg" alt="">
                                    <h5>6 inches square areca plates</h5>
                                    <div class="pro-hover">
                                       <h6>6 inches square areca plates</h6>
                                       
                                       <a href="enquiry.php?pname=6-inches-square-areca-plates">Enquiry Now</a> 
                                    </div>
                                 </div>
                              </div>
                              <!--Pro Box End--> 
                              <!--Pro Box-->
                              <div class="item ">
                                 <div class="pro-box hvr-float">
                                    <img src="images/pt3.jpg" alt="">
                                    <h5>4 inches square areca plates
                                    </h5>
                                    <div class="pro-hover">
                                       <h6>4 inches square areca plates
                                       </h6>
                                       
                                       <a href="enquiry.php?pname=4-inches-square-areca-plates">Enquiry Now</a> 
                                    </div>
                                 </div>
                              </div>
                              <!--Pro Box End--> 
                              <!--Pro Box-->
                              <div class="item ">
                                 <div class="pro-box hvr-float">
                                    <img src="images/pt4.jpg" alt="">
                                    <h5>8 inches square areca plates 
                                    </h5>
                                    <div class="pro-hover">
                                       <h6>8 inches square areca plates 
                                       </h6>
                                       
                                       <a href="enquiry.php?pname=8-inches-square-areca-plates">Enquiry Now</a> 
                                    </div>
                                 </div>
                              </div>
                              <!--Pro Box End--> 
                              <!--Pro Box-->
                              <div class="item ">
                                 <div class="pro-box hvr-float">
                                    <img src="images/pt5.jpg" alt="">
                                    <h5>6 inches square areca plates</h5>
                                    <div class="pro-hover">
                                       <h6>6 inches square areca plates</h6>
                                       
                                       <a href="enquiry.php?pname=6-inches-square-areca-plates">Enquiry Now</a> 
                                    </div>
                                 </div>
                              </div>
                               
                           </div>
                        </div>
                        <!--WildLife Slider End--> 
                        <!--Water Resources Slider Start-->
                        <div class="tab-pane fade" id="water" role="tabpanel" aria-labelledby="water-tab">
                           <div class="cpro-slider owl-carousel owl-theme">
                              <!--Pro Box-->
                              <div class="item ">
                                 <div class="pro-box hvr-float">
                                    <img src="images/pt13.jpg" alt="">
                                    <h5>12 inches round areca plates</h5>
                                    <div class="pro-hover">
                                       <h6>12 inches round areca plates</h6>
                                       
                                       <a href="enquiry.php?pname=12-inches-round-areca-plates">Enquiry Now</a> 
                                    </div>
                                 </div>
                              </div>
                              <!--Pro Box End--> 
                              <!--Pro Box-->
                              <div class="item ">
                                 <div class="pro-box hvr-float">
                                    <img src="images/pt12.jpg" alt="">
                                    <h5>10 inches round areca plates</h5>
                                    <div class="pro-hover">
                                       <h6>10 inches round areca plates</h6>
                                       
                                       <a href="enquiry.php?pname=10-inches-round-areca-plates">Enquiry Now</a> 
                                    </div>
                                 </div>
                              </div>
                              <!--Pro Box End--> 
                              <!--Pro Box-->
                              <div class="item">
                                 <div class="pro-box hvr-float">
                                    <img src="images/pt14.jpg" alt="">
                                    <h5>8 inches round areca plates
                                    </h5>
                                    <div class="pro-hover">
                                       <h6>8 inches round areca plates
                                       </h6>
                                       
                                       <a href="enquiry.php?pname=8-inches-round-areca-plates">Enquiry Now</a> 
                                    </div>
                                 </div>
                              </div>
                              <!--Pro Box End--> 
                              <!--Pro Box-->
                              <div class="item">
                                 <div class="pro-box hvr-float">
                                    <img src="images/pt15.jpg" alt="">
                                    <h5>6 inches round areca plates
                                    </h5>
                                    <div class="pro-hover">
                                       <h6>6 inches round areca plates 
                                       </h6>
                                        
                                           <a href="enquiry.php?pname=6-inches-round-areca-plates">Enquiry Now</a> 
                                    </div>
                                 </div>
                              </div>
                              <!--Pro Box End--> 
                              <!--Pro Box-->
                              <div class="item">
                                 <div class="pro-box hvr-float">
                                    <img src="images/pt16.jpg" alt="">
                                    <h5>5 inches round areca plates</h5>
                                    <div class="pro-hover">
                                       <h6>5 inches round areca plates</h6>
                                       
                                       <a href="enquiry.php?pname=5-inches-round-areca-plates">Enquiry Now</a> 
                                    </div>
                                 </div>
                              </div>
                              <!--Pro Box End--> 
                              <!--Pro Box-->
                              <div class="item">
                                 <div class="pro-box hvr-float">
                                    <img src="images/pt17.jpg" alt="">
                                    <h5>12 inches round areca plates</h5>
                                    <div class="pro-hover">
                                       <h6>12 inches round areca plates</h6>
                                       
                                       <a href="enquiry.php?pname=12-inches-round-areca-plates">Enquiry Now</a> 
                                    </div>
                                 </div>
                              </div>
                               
                           </div>
                        </div>
                        <!--Water Resources Slider End--> 
                        <!--Solar Energy Slider Start-->
                        
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--Current Projects End--> 
         <!--News & Articles Start-->
         <section class="h2-news wf100 p80">
            <div class="container">

               <div class="row">

                     <div class="col-md-6">
                     <form action="" method="post">
                     <h2 class="tes2">Quick Enquiry</h2>
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
                              <option selected disabled value="--select the product--">--select the product--</option>
                              <option value="8 inches square areca plates">8 inches square areca plates</option>
                              <option value="6 inches square areca plates">6 inches square areca plates</option>
                              <option value="4 inches square areca plates">4 inches square areca plates</option>
                              <option value="12 inches round areca plates">12 inches round areca plates</option>
                              <option value="10 inches round areca plates">10 inches round areca plates</option>
                              <option value="8 inches round areca plates">8 inches round areca plates</option>
                              <option value="6 inches round areca plates">6 inches round areca plates</option>
                              <option value="5 inches round areca plates">5 inches round areca plates</option>
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
                     <!--Blog Small Post Start-->
                      <h2 class="tes">Testimonial</h2> 
                     <marquee direction="up"  onmouseover="this.stop()" onmouseout="this.start()" scrollamount="7">
                     


                     <div class="blog-small-post">
                        <div class="smpout">
                        <div class="post-thumb">
                            <!-- <a href="#"><i class="fas fa-link"></i></a>  -->
                            <img src="images/auser.jpg" alt=""> </div>
                        <div class="post-txt">
                           <!-- <span class="pdate"> <i class="fas fa-calendar-alt"></i> 29 September, 2018</span> -->
                           <h5><a href="#">Buy the best Product for your money.</a></h5>
                           
                           <!-- <a href="#" class="rm">Read More</a>  -->
                        </div>
                        
                     </div>
                     <p class="bac">We have been very satisfied with Green Eco Enterprises in every term, may it be quality, timely supply,
new product development, or innovation. They have put us at complete ease with respect to our product quality.</p>
                     </div>
                     <!--Blog Small Post End--> 
                     <!--Blog Small Post Start-->
                     
                     <div class="blog-small-post">
                        <div class="smpout">
                        <div class="post-thumb">
                            <!-- <a href="#"><i class="fas fa-link"></i></a>  -->
                            <img src="images/auser.jpg" alt=""> </div>
                        <div class="post-txt">
                           <!-- <span class="pdate"> <i class="fas fa-calendar-alt"></i> 29 September, 2018</span> -->
                           <h5><a href="#">Terrific purchase</a></h5>
                           
                           <!-- <a href="#" class="rm">Read More</a>  -->
                        </div>
                        
                     </div>
                     <p class="bac">These plates are the best economical way
                        to go green! All our plates, platters, bowls, and
                         cutlery are high quality products</p>
                     </div>
                     <!--Blog Small Post End--> 


                  </marquee>




                  </div>

                  
               </div>
            </div>
         </section>
         

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