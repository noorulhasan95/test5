<!--Header Start-->
<header class="header-style-2">
            <nav class="navbar navbar-expand-lg">
               <a class="navbar-brand hvr-skew-backward" href="index.php">
                <div class="outimg">  
                  <img src="images/logog3.png" alt=""></div>
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i> </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item  ac">
                        <a <?php if(isset($home)) {echo'class="nav-link active"';} ?> class="nav-link" href="index.php"  >Home</a>

                     </li>
                     <li class="nav-item"> <a <?php if(isset($about)) {echo'class="nav-link active"';} ?> class="nav-link" href="about.php">About&nbsp;Us</a> </li>
                     <li class="nav-item ">
                        <a <?php if(isset($products)) {echo'class="nav-link active"';} ?> class="nav-link " href="products.php" >Products</a>

                     </li>
                     <li class="nav-item">
                        <a <?php if(isset($infrastructure)) {echo 'class="nav-link active"';} ?> class="nav-link" href="infrastructure.php">Infrastructure</a>
                     </li>
                     <li class="nav-item">
                        <a <?php if(isset($manufacturing)) {echo 'class="nav-link active"';} ?> class="nav-link" href="manufacturing.php">Manufacturing Process</a>
                     </li>
                     <li class="nav-item">
                        <a <?php if(isset($gallery)) {echo'class="nav-link active"';} ?> class="nav-link" href="gallery.php" >Gallery</a>

                     </li>

                     <li class="nav-item">
                        <a <?php if(isset($enquiry)) {echo'class="nav-link active"';} ?> class="nav-link " href="enquiry.php">Enquiry</a>
                        
                     </li>
                     <li class="nav-item ">
                        <a <?php if(isset($contact)) {echo'class="nav-link active"';} ?> class="nav-link" href="contact.php"  >Contact us</a>
                     </li>

                  </ul>
                  <ul class="topnav-right">
                     <li> <a class="mdonate" href="enquiry.php"><span>Appointment</span></a> </li>
                     <li> <a title="+91-7550224396" class="search-icon hvr-float2" href="tel:+917550224396"> <i class="fa-solid fa-phone"></i> </a></li>
                     <li class="dropdown">
                        <a title="greeneco.4396@gmail.com" class="cart-icon hvr-float2" href="mailto:greeneco.4396@gmail.com"  id="cartdropdown" > <i class="fa-regular fa-envelope"></i></a>
                        
                     </li>
                     <li class="login-reg" style="display: none;"> <a href="my-account.html">Login</a> | <a href="my-account.html">Signup</a> </li>
                  </ul>
               </div>
            </nav>
         </header>
         <div id="search">
            <button type="button" class="close">×</button>
            <form class="search-overlay-form">
               <input type="search" value="" placeholder="type keyword(s) here" />
               <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
            </form>
         </div>
         <!--Header End--> 