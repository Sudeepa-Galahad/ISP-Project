<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Site Metas -->
   <title>Hyper-Pace</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- site icon -->
   <link rel="icon" href="images/fevicon.png" type="image/png" />
   <!-- Bootstrap core CSS -->
   <link href="css/bootstrap.css" rel="stylesheet">
   <!-- FontAwesome Icons core CSS -->
   <link href="css/font-awesome.min.css" rel="stylesheet">
   <!-- Custom animate styles for this template -->
   <link href="css/animate.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="style.css" rel="stylesheet">
   <!-- Responsive styles for this template -->
   <link href="css/responsive.css" rel="stylesheet">
   <!-- Colors for this template -->
   <link href="css/colors.css" rel="stylesheet">
   <!-- light box gallery -->
   <link href="css/ekko-lightbox.css" rel="stylesheet">
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->
   </head>
   <body id="shop" class="shop_page">
      <!-- loader -->
      <div id="preloader">
         <img class="preloader" src="images/logo.png" alt="#">
      </div>
      <!-- end loader -->
      <!-- header -->
      <header class="header">

        <div class="header_top_section">
           <div class="container">
              <div class="row">
               <div class="col-lg-3">
                  <div class="full">
                     <div class="logo">
                        <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9 site_information">
                  <div class="full">
                      <div class="top_section_info">
                         <ul>
                           <li><form action="login.php">
                                  <fieldset>
                                     <div class="field center">
                                       <button class="btn">Login</button>
                                  </fieldset>
                               </form></li>
                           <li> <form action="signup.php">
                                  <fieldset>
                                     <div class="field center">
                                       <button class="btn">Sign up</button>
                                  </fieldset>
                               </form></li>
                        </ul>
                      </div>
                  </div>
               </div>
            </div>
           </div>
        </div>

        <div class="header_bottom_section">

         <div class="container">
            
           <div class="row">
               <div class="col-md-12">
                  <div class="full ">
                     <div class="main_menu">
                        <nav class="navbar navbar-inverse navbar-toggleable-md">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="float-left">Menu</span>
                           <span class="float-right"><i class="fa fa-bars"></i> <i class="fa fa-close"></i></span>
                           </button>
                           <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
                              <ul class="navbar-nav">
                                 <li class="nav-item">
                                    <a class="nav-link" href="index.html">Home</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-aqua-hover" href="about.html">About</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-aqua-hover" href="Challenge.html">Challenge</a>
                                  </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                     <div class="search_bar">
                        <form action="index.html">
                           <input type="text" class="search_field" placeholder="Search" required="" />
                           <button class="search_button" type="button"><i class="fa fa-search"></i></button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header -->
       <!-- inner page -->
      <section class="innerpage_banner">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="full">
                     <div class="page_title">
                        <div class="full heading_s1">
                           <h2><span>Sign Up</span></h2>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page -->
      <!-- section -->
      <section class="layout_padding section padding_bottom_0">
         <div class="container">
           <div class="row">
               <div class="col-md-12">
                  <div class="contact_section margin_top_30">
                     <div class="row">
                        <div class="col-md-6"> 
                            <div class="gold_con">
                               <img src="images/gold_c.png" alt="#" />
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form_cont">
                               <form name="signup" method="post" action="sign.php" onSubmit="alert("Signup successful")">
                                  <fieldset>
                                     <div class="field">
                                        <input type="text" name="name" placeholder="Full Name" required/>
                                     </div>
                                     <div class="field">
                                        <input type="email" name="email" placeholder="Email" required/>
                                     </div>
                                     <div class="field">
                                        <input type="text" name="uname" placeholder="Username" required/>
                                     </div>
                                     <div class="field">
                                        <input type="text" name="phone" placeholder="Phone" required/>
                                     </div>
                                       <div class="field">
                                        <input type="password" name="pass" placeholder="Password" required/>
                                     </div>
                                       <div class="field">
                                        <input type="password" name="conf" placeholder="Confirm Password" required/>
                                     </div>
                                     <div class="field">
                                        <textarea placeholder="Address" name ="addr" required></textarea> <br>
                                     </div>
                                     <div class="field center">
                                       <button type="submit" name="sigsb">Submit</button>
                                  </fieldset>
                                      <br>
                                      <center>
                                      <p style="color:aliceblue" > Already a member ? <a href="login.php">Login</a></p>
                                    </center>
                               </form>
                                   
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
      <!-- footer -->
      <footer class="footer layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-3 col-sm-12">
                  <a href="index.html"><img class="img-responsive" src="images/logo_footer.png" alt="#" /></a>
               </div>

                <div class="col-md-3 col-sm-12">
                  
                  <div class="address_infor">
                     <p> 
                        <span class="addrs"><p style="color: #171817">-------------------</p></span>
                     </p>
                  </div>
               </div>

               
               <div class="col-md-3 col-sm-12">
                  <div class="footer_link_heading">
                      <center>
                     <h3>Social Link</h3></center>
                  </div>
                  <div class="social_icon">
                    <ul>
                       <li><a href="#"><img src="images/fb.png" alt="#" /></a></li>
                       <li><a href="#"><img src="images/tw.png" alt="#" /></a></li>
                       <li><a href="#"><img src="images/gp.png" alt="#" /></a></li>
                       <li><a href="#"><img src="images/in.png" alt="#" /></a></li>
                    </ul>
                  </div>
               </div>     
            </div>
         </div>
      </footer>
      <div class="cpy">
        <div class="container">
           <div class="row">
             <div class="col-md-12">
               <p>© 2020 All Rights Reserved. <a href="">Hyper-Pace</a></p>
             </div>
           </div>
        </div>
      </div>
      <!-- end footer -->
      <!-- Core JavaScript
         ================================================== -->
      <script src="js/jquery.min.js"></script>
      <script src="js/tether.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/parallax.js"></script>
      <script src="js/animate.js"></script>
      <script src="js/ekko-lightbox.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
