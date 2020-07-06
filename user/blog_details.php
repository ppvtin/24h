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
        <title>Blog Details</title>
    </head>
    <body>
    <tr>
              <td>
                 <?php
                 include("menu-banner.php");
                 ?>
              </td>
        </tr>
            <!-- End header-top -->
        </header><!-- /header -->
        <div class="container">
            <div class="banner-header banner-lbook3 space-30">
                <img src="assets/images/banner-blog.jpg" alt="Banner-header">
                <div class="text">
                        <h3>Blog Details</h3>
                        <p><a href="#" title="Home">Home</a><i class="fa fa-caret-right"></i>Blog Details</p>
                    </div>
            </div>
        </div>
        <div class="container container-ver2">
            <div class="blog-post-container blog-page blog-classic">
            <div id="primary" class="col-xs-12 col-md-9 float-left center">
                <div class="blog-post-container box single-post">
                    <div class="blog-post-item">
                        <div class="head">
                            <h3><?php 
                                    $queries = array();
                                    parse_str($_SERVER['QUERY_STRING'], $queries);
                                    $connect = new mysqli('us-cdbr-east-02.cleardb.com', 'b3f45e08fe46ae', '55c9f49d', 'heroku_6485ee814dc37c2');
                                    if (!$connect->connect_error) {
                                        $sql = "select title from blog where id = " .$queries['id'];
                                        $result = $connect->query($sql);
                                        if ($result->num_rows === 1) {
                                            $jsonStr = json_encode($result->fetch_assoc());
                                            $jsonObj = json_decode($jsonStr);
                                            $key = 'title';
                                            echo $jsonObj->$key;
                                        }
                                    }
                                ?></h3>
                            <p class="post-by"><span><i class="fa fa-pencil-square-o"></i> Admin</span></p>
                        </div>
                        <!-- End head -->
                        <div class="blog-post-image hover-images">
                            <a href="#" title="Post"><img class="img-responsive" 
                                src="<?php 
                                    $queries = array();
                                    parse_str($_SERVER['QUERY_STRING'], $queries);
                                    echo '/24h/images/' . $queries['id'];
                                ?>" alt=""></a>
                        </div>  
                        <div class="text align-left">           
                            <?php 
                                    $queries = array();
                                    parse_str($_SERVER['QUERY_STRING'], $queries);
                                    $connect = new mysqli('us-cdbr-east-02.cleardb.com', 'b3f45e08fe46ae', '55c9f49d', 'heroku_6485ee814dc37c2');
                                    if (!$connect->connect_error) {
                                        $sql = "select content from blog where id = " .$queries['id'];
                                        $result = $connect->query($sql);
                                        if ($result->num_rows === 1) {
                                            $jsonStr = json_encode($result->fetch_assoc());
                                            $jsonObj = json_decode($jsonStr);
                                            $key = 'content';
                                            echo $jsonObj->$key;
                                        }
                                    }
                                ?>
                            <div class="box box-shadow center content space-30">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip"</p>
                            </div>
                            <!-- End box-shadow -->
                            <div class="social box">
                                <h3>Share this :</h3>
                                <a class="twitter" href="#" title="social"><i class="fa fa-twitter-square"></i></a>
                                <a class="dribbble" href="#" title="social"><i class="fa fa-dribbble"></i></a>
                                <a class="skype" href="#" title="social"><i class="fa fa-skype"></i></a>
                                <a class="pinterest" href="#" title="social"><i class="fa fa-pinterest"></i></a>
                                <a class="facebook" href="#" title="social"><i class="fa fa-facebook-square"></i></a>
                            </div>
                            <!-- End share -->
                            <div class="box">
                                <h3 class="title-v1 space-30">Related Posts</h3>
                                <div class="blog-post-inner blog-related owl-nav-hidden center owl-carousel">
                                    <?php 
                                        $con = mysqli_connect('us-cdbr-east-02.cleardb.com','b3f45e08fe46ae','55c9f49d','heroku_6485ee814dc37c2');
                                        if($con ->connect_error){
                                            echo "Error";
                                        }else{
                                            $query = "select * from blog";
                                            $result = mysqli_query($con, $query);
                                            if ($result->num_rows > 0) {
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    $id = $row["id"];
                                                    echo '<div class="blog-post-item">' . '<div class="blog-post-image hover-images">' . '<a href="/24h/user/blog_details.php?id=' . $id . '" title="Post"><img src="/24h/images/' 
                                                    . $id . '" alt="Error!">' . '</a></div>' . '<div class="text">';    
                                                    echo '<h3 style="float: none;">' . '<a href="/24h/user/blog_details.php?id=' . $id . '">'. $row["title"] .'</a>' .'</h3>';
                                                    echo '<p class="post-by"><span><i class="fa fa-pencil-square-o"></i> admin</span></p>';
                                                    echo '</div></div>';
                                                }
                                            }
                                        }
                                    ?>
                                    <!-- <div class="blog-post-item">
                                        <div class="blog-post-image hover-images">
                                            <a href="#" title="Post"><img src="assets/images/products/1.jpg" alt=""></a>
                                        </div>  
                                        <div class="text">                      
                                            <h3><a href="#" title="Integer scelerisque diam vitae aliquam fringilla.">The new Brand Identity last the Bahamas</a></h3>
                                            <p class="post-by"><span><i class="fa fa-pencil-square-o"></i> Admin</span><span><i class="fa fa-comment-o"></i> 36 Comments</span></p>
                                        </div>
                                    </div> -->
                                    <!-- End item -->
                                </div>
                                <!-- End Blog3ItemSlider -->
                            </div>
                        </div>
                        <!-- End text -->
                    </div>
                    <!-- End item -->                    
                </div>
                <!-- End blog-post-container -->  
                <div class="blog-post-container single-post comments align-left box space-30">
                    <h3 class="title">Comments</h3>
                    <div class="panel" id="media-object">
                        <div class="panel-body">
                            <ul class="media-list">
                                <li class="media">
                                    <a class="pull-left" href="#">
                                       <img class="media-object img-circle" src="assets/images/avatar-1.jpg" alt="images">
                                    </a>
                                    <div class="media-body">
                                        <div class="text">
                                            <h3>ERRIC CATONA</h3>
                                            <p class="date">1 days ago</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidiunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                            <a class="reply" href="#" title="reply"><i class="fa fa-long-arrow-left"></i> Reply</a>
                                        </div>
                                        <!-- End text -->
                                        
                                        <div class="media">
                                            <a class="pull-left" href="#">
                                                <img class="media-object img-circle" src="assets/images/avatar-1.jpg" alt="images">
                                            </a>
                                            <div class="media-body">
                                                <div class="text">
                                                    <h3>ERRIC CATONA</h3>
                                                    <p class="date">5 days ago</p>
                                                    <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque. </p>
                                                    <!-- Nested media object -->
                                                    <a class="reply" href="#" title="reply"><i class="fa fa-long-arrow-left"></i> Reply</a>
                                                </div>
                                                <!-- End text -->
                                            </div>
                                            <!-- Nested media object -->
                                        </div>
                                        <!-- End media-body -->
                                    </div>
                                    <!-- End media body -->
                                </li>
                                <li class="media">
                                    <a class="pull-left" href="#">
                                       <img class="media-object img-circle" src="assets/images/avatar-1.jpg" alt="images">
                                    </a>
                                    <div class="media-body">
                                        <div class="text">
                                            <h3>ERRIC CATONA</h3>
                                            <p class="date">1 days ago</p>
                                            <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque. </p>
                                            <!-- Nested media object -->
                                            <a class="reply" href="#" title="reply"><i class="fa fa-long-arrow-left"></i> Reply</a>
                                        </div>
                                        <!-- End text -->
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End panel -->
                    <h3 class="title">LEAVE A COMMENT</h3>
                    <form class="form-horizontal space-50">
                        <div class="form-group col-md-6">
                            <input type="text" placeholder="Name*" id="inputName" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" placeholder="Email*" id="inputsumary" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <input type="text" placeholder="Website" id="inputemail" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Comment" name="Comment" id="message" class="form-control"></textarea>
                        </div>
                        <a title="add tags" href="#" class="link-v1 rt">Send review</a>
                    </form>
                    <!-- End form -->
                </div>
            </div>
        </div>
        <!-- end product sidebar -->
        </div>
        <!-- End cat-box-container -->
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
    <!-- End wrappage -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/engo-plugins.js"></script>
    
    <script type="text/javascript" src="assets/js/jquery.mousewheel.min.js"></script>
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.zoom.js"></script>
    <script type="text/javascript" src="assets/js/store.js"></script>
    </body>
        
</html>

