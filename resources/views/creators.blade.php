<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>My Play a Entertainment Category Flat Bootstrap Responsive Website Template | Developers :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="My Play Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
    <!-- //bootstrap -->
    <link href="css/dashboard.css" rel="stylesheet">
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
    <script src="js/jquery-1.11.1.min.js"></script>
    <!--start-smoth-scrolling-->
    <!-- fonts -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
            <a class="navbar-brand" href="/developers"><h1><img  src="images/anti.png" alt="" /></h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="top-search">
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Search...">
                    <input type="submit" value=" ">
                </form>
            </div>
            <div class="header-top-right">

                <div class="signin">
                    @guest
                    <a href="{{Url('/login')}}">Log in</a>
                        <a href="{{Url('/register')}}">Sign Up</a>
                    @endguest

                    @auth
                    <a href="{{Url('/logout')}}">Log Out</a>
                   @endauth
                    <!-- pop-up-box -->
                    <script type="text/javascript" src="js/modernizr.custom.min.js"></script>
                    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
                    <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
                    <!--//pop-up-box -->
                    <!--
                    <div id="small-dialog2" class="mfp-hide">
                        <h3>Create Account</h3>
                        <div class="social-sits">
                            <div class="facebook-button">
                                <a href="#">Connect with Facebook</a>
                            </div>
                            <div class="chrome-button">
                                <a href="#">Connect with Google</a>
                            </div>
                            <div class="button-bottom">
                                <p>Already have an account? <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Login</a></p>
                            </div>
                        </div>
                        <div class="signup">
                            <form>
                                <input type="text" class="email" placeholder="Mobile Number" maxlength="10" pattern="[1-9]{1}\d{9}" title="Enter a valid mobile number" />
                            </form>
                            <div class="continue-button">
                                <a href="#small-dialog3" class="hvr-shutter-out-horizontal play-icon popup-with-zoom-anim">CONTINUE</a>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div id="small-dialog3" class="mfp-hide">
                        <h3>Create Account</h3>
                        <div class="social-sits">
                            <div class="facebook-button">
                                <a href="#">Connect with Facebook</a>
                            </div>
                            <div class="chrome-button">
                                <a href="#">Connect with Google</a>
                            </div>
                            <div class="button-bottom">
                                <p>Already have an account? <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Login</a></p>
                            </div>
                        </div>
                        <div class="signup">
                            <form>
                                <input type="text" class="email" placeholder="Email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="Enter a valid email"/>
                                <input type="password" placeholder="Password" required="required" pattern=".{6,}" title="Minimum 6 characters required" autocomplete="off" />
                                <input type="text" class="email" placeholder="Mobile Number" maxlength="10" pattern="[1-9]{1}\d{9}" title="Enter a valid mobile number" />
                                <input type="submit"  value="Sign Up"/>
                            </form>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div id="small-dialog7" class="mfp-hide">
                        <h3>Create Account</h3>
                        <div class="social-sits">
                            <div class="facebook-button">
                                <a href="#">Connect with Facebook</a>
                            </div>
                            <div class="chrome-button">
                                <a href="#">Connect with Google</a>
                            </div>
                            <div class="button-bottom">
                                <p>Already have an account? <a href="#small-dialog" class="play-icon popup-with-zoom-anim">Login</a></p>
                            </div>
                        </div>
                        <div class="signup">
                            <form action="upload.html">
                                <input type="text" class="email" placeholder="Email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="Enter a valid email"/>
                                <input type="password" placeholder="Password" required="required" pattern=".{6,}" title="Minimum 6 characters required" autocomplete="off" />
                                <input type="submit"  value="Sign In"/>
                            </form>
                        </div>
                        <div class="clearfix"> </div>
                    </div>-->
                    <div id="small-dialog4" class="mfp-hide">
                        <h3>Feedback</h3>
                        <div class="feedback-grids">
                            <div class="feedback-grid">
                                <p>Suspendisse tristique magna ut urna pellentesque, ut egestas velit faucibus. Nullam mattis lectus ullamcorper dui dignissim, sit amet egestas orci ullamcorper.</p>
                            </div>
                            <div class="button-bottom">
                                <p><a href="#small-dialog" class="play-icon popup-with-zoom-anim">Sign in</a> to get started.</p>
                            </div>
                        </div>
                    </div>
                    <div id="small-dialog5" class="mfp-hide">
                        <h3>Help</h3>
                        <div class="help-grid">
                            <p>Suspendisse tristique magna ut urna pellentesque, ut egestas velit faucibus. Nullam mattis lectus ullamcorper dui dignissim, sit amet egestas orci ullamcorper.</p>
                        </div>
                        <div class="help-grids">
                            <div class="help-button-bottom">
                                <p><a href="#small-dialog4" class="play-icon popup-with-zoom-anim">Feedback</a></p>
                            </div>
                            <div class="help-button-bottom">
                                <p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Lorem ipsum dolor sit amet</a></p>
                            </div>
                            <div class="help-button-bottom">
                                <p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Nunc vitae rutrum enim</a></p>
                            </div>
                            <div class="help-button-bottom">
                                <p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Mauris at volutpat leo</a></p>
                            </div>
                            <div class="help-button-bottom">
                                <p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Mauris vehicula rutrum velit</a></p>
                            </div>
                            <div class="help-button-bottom">
                                <p><a href="#small-dialog6" class="play-icon popup-with-zoom-anim">Aliquam eget ante non orci fac</a></p>
                            </div>
                        </div>
                    </div>

                    <div id="small-dialog6" class="mfp-hide">
                        <div class="video-information-text">
                            <h4>Video information & settings</h4>
                            <p>Suspendisse tristique magna ut urna pellentesque, ut egestas velit faucibus. Nullam mattis lectus ullamcorper dui dignissim, sit amet egestas orci ullamcorper.</p>
                            <ol>
                                <li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
                                <li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
                                <li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
                                <li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
                                <li>Nunc vitae rutrum enim. Mauris at volutpat leo. Vivamus dapibus mi ut elit fermentum tincidunt.</li>
                            </ol>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function() {
                            $('.popup-with-zoom-anim').magnificPopup({
                                type: 'inline',
                                fixedContentPos: false,
                                fixedBgPos: true,
                                overflowY: 'auto',
                                closeBtnInside: true,
                                preloader: false,
                                midClick: true,
                                removalDelay: 300,
                                mainClass: 'my-mfp-zoom-in'
                            });

                        });
                    </script>
                </div>
                {{--<div class="signin">--}}
                    {{--<a href="#small-dialog" >Sign In</a>--}}
                    {{--<div id="small-dialog" class="mfp-hide">--}}
                        {{--<h3>Login</h3>--}}
                        {{--<div class="social-sits">--}}
                            {{--<div class="facebook-button">--}}
                                {{--<a href="#">Connect with Facebook</a>--}}
                            {{--</div>--}}
                            {{--<div class="chrome-button">--}}
                                {{--<a href="#">Connect with Google</a>--}}
                            {{--</div>--}}
                            {{--<div class="button-bottom">--}}
                                {{--<p>New account? <a href="#small-dialog2" class="play-icon popup-with-zoom-anim">Signup</a></p>--}}
                            {{--</div>--}}
                        </div>
                        {{--<div class="signup">--}}
                            {{--<form>--}}
                                {{--<input type="text" class="email" placeholder="Enter email / mobile" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?"/>--}}
                                {{--<input type="password" placeholder="Password" required="required" pattern=".{6,}" title="Minimum 6 characters required" autocomplete="off" />--}}
                                {{--<input type="submit"  value="LOGIN"/>--}}
                            {{--</form>--}}
                            {{--<div class="forgot">--}}
                                {{--<a href="#">Forgot password ?</a>--}}
                            {{--</div>--}}
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!--
      <div class="menu">
          <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation"><a href="developers.html" class="active">Home</a></li>
                  <li role="presentation"><a href="index.html">Video</a></li>
                  <li role="presentation"><a href="news.html">News</a></li>
                  <li role="presentation"><a href="history.html">History</a></li>
                  <li role="presentation"><a href="contact.html">Contact</a></li>
          </ul>
      </div>
  </div>-->

    <!-- 2. Navigation -->

    <div class="text-xs-center tm-navbar-rounded" id="tmNavbar">

        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/developers">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/index">Video</a>
            </li>
            <li class="nav-item">
                <a class="nav-link external" href="/creators">Contact</a>
            </li>

        </ul>

    </div>

</nav>


<div class="developers">
    <div class="developers-banner">
        <!-- container -->
        <div class="container">
            <div class="developers-info">
                <h3>Anti Gaptek</h3>
                <p>Anti Gaptek adalah web yang berisi informasi dan kumpulan video tutorial seputar teknologi agar kamu tidak gaptek lagi :) </p>
            </div>
        </div>
        <!-- //container -->
    </div>
    <div class="creators-grids">
        <!-- container -->
        <div class=" foto-anggota">
            <img src="images/april.jpg">
            <img src="images/mafa.jpg">
            <img src="images/rich.jpg">
            <img src="images/rianA.jpg">
            <img src="images/rianS.jpg">
            <img src="images/sapir.jpg">
            <h4>Aprilia Dwi L &emsp;&emsp;&emsp;&emsp;&emsp; Hadyan Mulya M &emsp;&emsp;&emsp;&emsp;&nbsp; Rich Thonio
                &emsp;&emsp;&emsp;&emsp;&emsp; Ryian Andalas &emsp;&emsp;&emsp;&emsp;&emsp; Rian Safrianto &emsp;&emsp;&emsp;&emsp;
            Syafira Indah N</h4>
        </div>
        <!-- //container -->
    </div>
    <div class="creators-bottom">
        <!-- container -->
        <div class="container">
            <div class="creators-bottom-grids-info">
                <h3>Video Pilihan</h3>
            </div>
            <div class="creators-bottom-grids">
                <div class="col-md-4 creators-bottom-grid">
                    <iframe src="https://www.youtube.com/embed/1gKDKM5zhFk"  frameborder="0" allowfullscreen></iframe>
                    <!--
                    <div class="services-icon">
                        <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                    </div>-->
                    <h4>Handphone</h4>
                    <p>Video tutorial seputar aplikasi pada handphone, beragam tips, dan cara penggunaannya</p>
                </div>
                <div class="col-md-4 creators-bottom-grid green">
                    <iframe src="https://www.youtube.com/embed/vhp856CYTc0" frameborder="0" allowfullscreen></iframe>
                    <h4>Komputer</h4>
                    <p>Video tutorial seputar aplikasi pada komputer, beragam tips, dan cara penggunaannya</p>
                </div>
                <div class="col-md-4 creators-bottom-grid red">
                    <iframe src="https://www.youtube.com/embed/0WjaQ2SRFwg" frameborder="0" allowfullscreen></iframe>
                    <h4>Others</h4>
                    <p>Video menarik lainnya seputar dunia teknologi biar kammu makin banyak tau :D</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //container -->
    </div>
</div>

<div class="clearfix"> </div>
<div class="drop-menu">
    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>
        <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>
    </ul>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
</body>
</html>