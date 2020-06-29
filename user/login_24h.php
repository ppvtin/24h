 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="assets/vendor/owl-slider.css"/>
        <link rel="stylesheet" type="text/css" href="assets/vendor/settings.css"/>
        <link rel="shortcut icon" href="assets/images/favicon.png" />
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,500,700,300' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="assets/js/jquery-3.2.0.min.js"></script>
        <title>Login</title>
    </head>
    <body>
   <tr>
        <td>
            <?php
            include("menu-banner.php");
            ?>
        </td>
    </tr>
        <div class="container container-ver2">
            <div class="page-login box space-50">
                <div class="row">
                    <div class="col-md-6 sign-in space-30">
                        <h3>sign in</h3>
                        <p>Hello, welcome to your account.</p>
                        <div class="social space-30 box">
                            <a class="float-left" href="#" title="facebook">
                                <i class="fa fa-facebook"></i>
                                SIGN IN WITH FACEBOOK
                            </a>
                            <a class="float-right" href="#" title="TWITTER">
                                <i class="fa fa-twitter"></i>
                                SIGN IN WITH TWITTER
                            </a>
                        </div>
                        <!-- End social -->
                        <form class="form-horizontal" method="POST">
                            <div class="group box space-20">
                                <label class="control-label" for="inputemail">EMAIL ADDRESS *</label>
                                <input class="form-control" type="text" placeholder="Your email" id="inputemail">
                                <label class="control-label" for="inputpass">PASSWORD *</label>
                                <input class="form-control" type="password" placeholder="Password" id="inputpass"> 
                            </div>
                            <div class="remember">
                                <input id="remeber" type="checkbox" name="check" value="remeber">
                                <label for="remeber" class="label-check">remember me!</label>
                                <a class="help" href="#" title="help ?">Fogot your password?</a>   
                            </div>           
                            <button type="submit" class="link-v1 rt">LOGIN NOW</button>
                        </form>
                        <!-- End form -->
                    </div>
                    <!-- End col-md-6 -->
                    <div class="col-md-6">
                        <div class="register box space-50">
                            <h3>Create A New Account</h3>
                            <p>Create your own Rimbus account.</p>
                            <form class="form-horizontal" method="POST" action="dang_ky.php">
                                <div class="group box space-20">
                                    <label class="control-label" for="inputemailres">Email Adress *</label>
                                    <input class="form-control" type="text" placeholder="Your email" id="inputemailres" name="txtUser">
                                    <label class="control-label" for="inputemailres">Password *</label>
                                    <input class="form-control" type="password" placeholder="Password" id="inputemailres" name="txtPass">
                                </div>
                                <button type="submit" class="link-v1 rt">Sign Up</button>
                            </form>
                        </div>
                        <!-- End register -->
                    </div>
                    <!-- End col-md-6 -->
                </div>
            </div>
        </div>
        <footer id="footer" class="footer-v3 align-left">
            <div class="container container-ver2">
                <div class="footer-inner">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <h3 class="title-footer">About Us</h3>
                            <p>With more than 15 years of experience we can proudly say that we are one of the best in business, a trusted supplier for more than 1000 companies...</p>
                            <a class="link-footer" href="#" title="footer">Read more <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <h3 class="title-footer">Infomation</h3>
                            <ul class="list-footer">
                                <li><a href="#" title="title">Delivery</a></li>
                                <li><a href="#" title="title">Legal Notice</a></li>
                                <li><a href="#" title="title">Terms & Conditions</a></li>
                                <li><a href="#" title="title">About Us</a></li>
                                <li><a href="#" title="title">Secure Payment</a></li>
                                <li><a href="#" title="title">Our Stores</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h3 class="title-footer">Get It Touch</h3>
                            <div class="social space-30">
                                <a href="#" title="t"><i class="fa fa-twitter"></i></a>
                                <a href="#" title="f"><i class="fa fa-facebook"></i></a>
                                <a href="#" title="y"><i class="fa fa-youtube-play"></i></a>
                                <a href="#" title="g"><i class="fa fa-google"></i></a>
                            </div>
                            <h3 class="title-footer">Payment Accept</h3>
                            <a href="#" title="paypal"><img src="assets/images/paypal-footer.png" alt="images"></a>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <h3 class="title-footer">Get Newsletter</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                            <div class="subscribe">
                                <form action="#" method="get" accept-charset="utf-8">
                                    <input type="text" onblur="if (this.value == '') {this.value = 'Enter Your Email Address';}" onfocus="if(this.value != '') {this.value = '';}" value="Enter Your Email Address" class="input-text required-entry validate-email" title="Sign up for our newsletter" id="newsletter" name="email">
                                    <button class="button button1 hover-white" title="Subscribe" type="submit">Subscribe<i class="fa fa-long-arrow-right"></i></button>
                                </form>
                            </div>
                            <!-- End subscribe -->
                        </div>
                    </div>
                    <!-- End row -->
                </div>
                <!-- End footer-inner -->
            </div>
            <!-- End container -->
            <div class="footer-bottom box">
                <div class="container container-ver2">
                    <div class="box bottom">
                        <p class="float-left">Copyright &copy;2016 Fresh Food - All Rights Reserved.</p>
                        <div class="float-right">
                            <ul class="menu-bottom-footer">
                                <li><a href="#" title="Contact Us">Contact Us</a></li>
                                <li><a href="#" title="Term of Use">Term of Use</a></li>
                                <li><a href="#" title="Privacy Policy">Privacy Policy</a></li>
                                <li><a href="#" title="Site Map">Site Map</a></li>
                            </ul>
                            <div class="language">
                                <span>Language:</span>
                                <div class="hover-menu">
                                    <p>EN <i class="fa fa-angle-down"></i></p>
                                    <div class="list-menu">
                                        <ul>
                                            <li><a href="#" title="EN">EN</a></li>
                                            <li><a href="#" title="VN">VN</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span>Price:</span>
                                <div class="hover-menu">
                                    <p>USD <i class="fa fa-angle-down"></i></p>
                                    <div class="list-menu">
                                        <ul>
                                            <li><a href="#" title="USD">USD</a></li>
                                            <li><a href="#" title="VND">VND</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End language -->
                        </div>
                    </div>
                </div>
                <!-- End container -->
            </div>
        </footer>
    </div>

    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/engo-plugins.js"></script>
    
    <script type="text/javascript" src="assets/js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.zoom.js"></script>
    <script type="text/javascript" src="assets/js/store.js"></script>
    </body>
        
</html>

