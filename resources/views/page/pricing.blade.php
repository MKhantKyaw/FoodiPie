<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>FoodTPie</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" type="" href="images/FoodTPie_logo2.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="css/colors/orange.css" />

    <!-- Modernizer -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="index.html">
                                        <img src="images/FoodTPie_logo2.png" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                  <li><a href="index.html">Home</a></li>
                                  <li><a href="menu.html">Menu</a></li>
                                  <li class="active"><a href="pricing.html">pricing</a></li>
                                  <li><a href="reservation.html">Reservation</a></li>
                                  <li><a href="about_us.html">About</a></li>
                                  <li><a href="contact_us.html">Contact us</a></li>
                                  <ul class="nav navbar-nav navbar-right"><li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">ACCOUNTS  <span class="glyphicon glyphicon-chevron-down"></span></a>
                                    <ul class="dropdown-menu" style="background-color: #686868;">
                                      <li><a href="register.html" style="color: #ffffff;">Register</a></li>
                                      <li data-toggle="modal" data-target="#myModal" ><a href="#" style="color: #ffffff;">Login</a></li>
                                      <li><a href="" style="color: #ffffff;">Log Out</a></li>
                                    </ul>
                                  </li>
                                </ul>
                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
	<!-- end site-header -->

  <div class="modal fade" id="myModal" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog">
        <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header" style="padding:35px 50px;">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
              </div>
              <div class="modal-body" style="padding:40px 50px;">
                  <form name="loginform" id="loginform" method="POST" action="login.php">
                    <div class="form-group">
                        <label for="useremail"><span class="glyphicon glyphicon-user"></span>Email</label>
                        <input type="text" class="form-control" id="useremail" name="useremail" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="userpassword"><span class="glyphicon glyphicon-eye-open"></span>Password</label>
                      <input type="password" class="form-control" id="userpassword" name="password" placeholder="Enter password">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="" checked>Remember me</label>
                    </div>
                      <button type="submit" class="btn btn-success btn-block" onclick="loginAccount()" name="btnlogin">
                        <span class="glyphicon glyphicon-off"></span>
                        Login
                      </button>
                </form>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal" name="btnlogin">
                  <span class="glyphicon glyphicon-remove"></span> Cancel
                </button>
                  <p>Not a member? <a href="register.php">Register Now</a></p>
                <p><a href="#">Forgot Password?</a></p>
              </div>
          </div>
        </div>
    </div>

    <div id="banner" class="banner full-screen-mode parallax">
        <div class="container pr">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-static">
                    <div class="banner-text">
                        <div class="banner-cell">
                            <h1>Dinner with <span class="typer" id="some-id" data-delay="200" data-delim=":" data-words="Friends:Family:Officemates:Loves " data-colors="red"></span><span class="cursor" data-cursorDisplay="_" data-owner="some-id"></span></h1>
                            <h2>Good Food Equals Good Mood </h2>
                            <p>If more of us valued food and cheer and song above hoarded gold, it would be a merrier world.</p>
                            <div class="book-btn">
                                <a href="#reservation" class="table-btn hvr-underline-from-center">Order Now</a>
                            </div>
                        </div>
                        <!-- end banner-cell -->
                    </div>
                    <!-- end banner-text -->
                </div>
                <!-- end banner-static -->
            </div>
            <!-- end col -->
        </div>
        <!-- end container -->
    </div>
    <!-- end banner -->

    <div id="pricing" class="pricing-main pad-top-100 pad-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="block-title text-center">
						Pricing
					</h2>
                    <p>Choose a payment plan that that works for you</p>
                </div>
                <div class="panel-pricing-in">
                    <!-- item -->
                    <div class="col-md-6 col-sm-6 text-center">
                        <div class="panel panel-pricing">
                            <div class="panel-heading">
                                <div class="pric-icon">
                                    <img src="images/store.png" alt="" />
                                </div>
                                <h3>Basic</h3>
                                <h3>30 Meals/Month <span>Package</span></h3>
                            </div>
                            <div class="panel-body text-center">
                                <p data-toggle="tooltip" title="Aung May Than"><strong>$30/<span>Month</span></strong></p>
                            </div>
                            <ul class="list-group text-center">
                                <li class="list-group-item"><i class="fa fa-check"></i> One Website</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> One User</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> 10 GB Bandwidth</li>
                                <li class="list-group-item"><i class="fa fa-times"></i> 2GB Storage</li>
                                <li class="list-group-item"><i class="fa fa-times"></i> Offline work</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> 24x7 Support</li>
                            </ul>
                            <div class="panel-footer">
                                <a class="btn btn-lg btn-block hvr-underline-from-center"  data-toggle="modal" data-target="#exampleModal" href="#">Purchase Now!</a>
                            </div>
                        </div>
                    </div>
                    <!-- /item -->

                    <!-- item -->
                    <div class="col-md-6 col-sm-6 text-center">
                        <div class="panel panel-pricing">
                            <div class="panel-heading">
                                <div class="pric-icon">
                                    <img src="images/food.png" alt="" />
                                </div>
                                <h3>Pro</h3>
                                <h3>1 Meal/Day <span>Package</span></h3>
                            </div>
                            <div class="panel-body text-center">
                                <p data-toggle="tooltip" title="60,000 MMK"><strong>$60/<span>Month</span></strong></p>
                            </div>
                            <ul class="list-group text-center">
                                <li class="list-group-item"><i class="fa fa-check"></i> One Website</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> One User</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> 50 GB Bandwidth</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> 2GB Storage</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> Offline work</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> 24x7 Support</li>
                            </ul>
                            <div class="panel-footer">
                                <a class="btn btn-lg btn-block hvr-underline-from-center"  data-toggle="modal" data-target="#exampleModal" href="#">Purchase Now!</a>
                            </div>
                        </div>
                    </div>
                    <!-- /item -->

                    <!-- item -->
                    <!-- <div class="col-md-4 col-sm-4 text-center">
                        <div class="panel panel-pricing">
                            <div class="panel-heading">
                                <div class="pric-icon">
                                    <img src="images/coffee.png" alt="" />
                                </div>
                                <h3>Platinum</h3>
                            </div>
                            <div class="panel-body text-center">
                                <p data-toggle="tooltip" title="60,000 MMK"><strong>$90/<span>Month</span></strong></p>
                            </div>
                            <ul class="list-group text-center">
                                <li class="list-group-item"><i class="fa fa-check"></i> One Website</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> One User</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> 100 GB Bandwidth</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> 2GB Storage</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> Offline work</li>
                                <li class="list-group-item"><i class="fa fa-check"></i> 24x7 Support</li>
                            </ul>
                            <div class="panel-footer">
                                <a class="btn btn-lg btn-block hvr-underline-from-center" href="#">Purchase Now!</a>
                            </div>
                        </div>
                    </div>
                    <!-- /item -->
                </div> -->
                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header ">
                        <h4 class="modal-title mt " id="exampleModalLabel">Purchase Form</h4>
                        <button type="button" class="close cc" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body col-12">
                    <form class="needs-validation" id="needs">
                      <div class=" row">
                        <div class="form-group col-md-6">
                          <label  for="inputName4">Name</label>
                          <input type="text" class="form-control validate" id="inputName4" name="NameField" data-error="wrong" data-success="right" placeholder="Name" required >

                      </div>
                      <div class="form-group col-md-6">
                          <label for="inputPh4">Phone Number (format: xxxx-xxx-xxxx):</label>
                          <input type="tel" class="form-control " id="inputPhone4" placeholder="Phone" pattern="^\d{4}-\d{3}-\d{4}$" required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" name="AddrField" placeholder="1234 Main St" required>
                </div>

                <div class="form-group row">
                    <div class=" form-group col-md-6">
                        <label for="inputPcType">Purchase Type</label>
                    <select id="inputPcType" class="form-control" required="required" >
                        <option selected>Choose...</option>
                        <option value="kbz" >KBZ Pay</option>
                        <option value="cash">Cash</option>
                    </select>                        
                 </div>
                 <div class="form-group col-md-6">
                     <label for="inputPackage4">Packages</label>
                     <select id="inputPackage" class="form-control"  required="required">
                        <option selected>Choose...</option>
                        <option id="pg1" value="triple">30meal package       $45</option>
                        <option value="triple">Triple 1 Package   $50</option>
                    </select>
                </div>
            </div>         
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     <button type="submit" class="btn btn-warning submit" >Purchase Now!</button>
           
    </form>
</div>
<div class="modal-footer">
    
</div>
</div>
</div>
</div>



            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end pricing-main -->

    <div id="footer" class="footer-main">
        <div class="footer-box pad-top-70">
            <div class="container">
                <div class="row">
                    <div class="footer-in-main">
                        <div class="footer-logo">
                            <div class="text-center">
                                <img src="images/FoodTPie_logo2.png" alt="logo" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-a">
                                <h3>About Us</h3>
                                <p>Food Service.<br> </p>
                                <ul class="socials-box footer-socials pull-left">
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-twitter"></i></div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-instagram"></i></div>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <!-- end footer-box-a -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-b">
                                <h3>New Menu</h3>
                                <ul>
                                    <li><a href="#">Italian Bomba Sandwich</a></li>
                                    <li><a href="#">Double Dose of Pork Belly</a></li>
                                    <li><a href="#">Spicy Thai Noodles</a></li>
                                    <li><a href="#">Triple Truffle Trotters</a></li>
                                </ul>
                            </div>
                            <!-- end footer-box-b -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-c">
                                <h3>Contact Us</h3>
                                <p>
                                    <i class="fa fa-map-signs" aria-hidden="true"></i>
                                    <span><a href="https://goo.gl/maps/mFRhokdE6Sm" class="hover_footer">Parami Road, Universities' Hlaing Campus, Ward (12), Hlaing Township, Yangon, Myanmar</a></span>
                                </p>
                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <span>
									<a href="tel: +959766410019" class="hover_footer"> +95 976 641 100 19</a>
								</span>
                                </p>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span><a href="#">getfood@foodtpie.com</a></span>
                                </p>
                            </div>
                            <!-- end footer-box-c -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-d">
                                <h3>Opening Hours</h3>

                                <ul>
                                    <li>
                                        <p>Monday - Friday </p>
                                        <span> 10:00 AM - 8:00 PM</span>
                                    </li>
                                    <li>
                                        <p>Friday - Saturday </p>
                                        <span>  11:00 AM - 5:00 PM</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- end footer-box-d -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end footer-in-main -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <div id="copyright" class="copyright-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h6 class="copy-title"> Copyright &copy; 2019 FoodTPie. All right received.<a href="" target="_blank"></a> </h6>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end copyright-main -->
        </div>
        <!-- end footer-box -->
    </div>
    <!-- end footer-main -->

    <a href="#" class="scrollup" style="display: none;">Scroll</a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>

</html>
