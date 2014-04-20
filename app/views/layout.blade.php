<html>
<head>
    <meta charset="utf-8">

    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="shortcut icon" href="favicon.ico">

        {{ HTML::style('css/style.css'); }}

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.8.3.min.js"><\/script>')</script>
    
    {{ HTML::script('js/html5.js'); }}
    {{ HTML::script('js/main.js'); }}
    
    
<!--
    <script src="js/html5.js"></script>
    <script src="js/main.js"></script>
    <script src="js/radio.js"></script>
    <script src="js/checkbox.js"></script>
    <script src="js/selectBox.js"></script>
    <script src="js/jquery.carouFredSel-6.2.0-packed.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>
    <script src="js/jquery.jqzoom-core.js"></script>
    <script src="js/jquery.transit.js"></script>
    <script src="js/jquery.easing.1.2.js"></script>
    <script src="js/jquery.anythingslider.js"></script>
    <script src="js/jquery.anythingslider.fx.js"></script>
-->
</head>
<body>
    <div id="top">
        <div class="container_12">
            <div class="grid_9">
                <nav>
                    <a class="menu-open" href="#">Menu</a>
                    <ul>
                        <li class="current"><a href="index.php">Home</a></li>
                        <li><a href="shopping_cart.php">lol</a></li>
                        <li><a href="login.php">Log In</a></li>
                        <li><a href="signup.php">Sign Up</a></li>
                    </ul>
                </nav>
            </div><!-- .grid_9 -->
        </div>
    </div><!-- #top -->

    <header id="branding">
        <div class="container_12">
            <div class="grid_3">
                <hgroup>
                    <h1 id="site_logo"><a href="index.php" title=""><img src="{{asset('img/gamezlogo.png')}}" alt="GAMEZ"></a></h1>
                    <h2 id="site_description">FOR THE BEST GAMEZ</h2>
                </hgroup>
            </div><!-- .grid_3 -->

            <div class="grid_9">
                <div class="top_header">
                    <div class="welcome">

                        
                    </div><!-- .welcome -->
                    <ul id="cart_nav">
                        <li>
                            <a class="cart_li" href="shopping_cart.php">
                                <div class="cart_ico"></div>
                                <span>€</span>
                            </a>
                            <ul class="cart_cont">
                                


                                    <li class="no_border recently">Your shopping cart is empty</li>
                                    <br>
                                    <br>



                                <li class="no_border">
                                    <a href="shopping_cart.php" class="view_cart">View shopping cart</a>
                                    <a href="checkout.php" class="checkout">Procced to Checkout</a>
                                </li>
                            </ul>
                        </li>
                    </ul><!-- .cart_nav -->

                    <form class="search" action="search.php">
                        <input type="submit" class="search_button" value=""></a>
                        <input type="text" name="search" class="search_form" value="" placeholder="Search entire store here...">
                    </form><!-- .search -->
                </div><!-- .top_header -->
            </div><!-- .grid_9 -->
            
            <div class="grid_9 primary-box">
                <nav class="primary">
                    <div class="bg-menu-select"></div>
                    <a class="menu-select" href="#">Catalog</a>


                </nav><!-- .primary -->
            </div><!-- .grid_9 -->
            <p>
                <div class="breadcrumbs">

                </div>
            </p>
        </div>
        
        <div class="clear"></div>
    </header> 
    
    
    @yield('content')
    
    
    
        <footer>
        <div class="footer_navigation">
            <div class="container_12">
                <div class="grid_3">
                     <h3>Contact Us</h3>
                    <ul class="f_contact">
                        <li>49 straat, awesomeville</li>
                        <li>+777 (100) 1234</li>
                        <li>mail@gamez.com</li>
                    </ul><!-- .f_contact -->
                </div><!-- .grid_3 -->

                <div class="grid_3">
                    <h3>Information</h3>
                    <nav class="f_menu">
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Secure payment</a></li>
                        </ul>
                    </nav><!-- .private -->
                </div><!-- .grid_3 -->

                <div class="grid_3">
                    <h3>Customer Service</h3>
                    <nav class="f_menu">
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Return</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Site Map</a></li>
                        </ul>
                    </nav><!-- .private -->
                </div><!-- .grid_3 -->

                <div class="grid_3">
                    <h3>My Account</h3>
                    <nav class="f_menu">
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Newsletter</a></li>
                        </ul>
                    </nav><!-- .private -->
                </div><!-- .grid_3 -->
            </div><!-- .container_12 -->
            <div class="clear"></div>

                    </div>
                    <div class="clear"></div>
                </div><!-- .container_12 -->
        </div><!-- .footer_navigation -->

        <div class="footer_info">
            <div class="container_12">
                <div class="grid_6">
                    <p class="copyright">© GAMEZ, AVANS, Rick de Jong en Louis Hol</p>
                </div><!-- .grid_6 -->

                <div class="grid_6">
                    <div class="soc">
                        <a class="google" href="#"></a>
                        <a class="twitter" href="#"></a>
                        <a class="facebook" href="#"></a>
                    </div><!-- .soc -->
                </div><!-- .grid_6 -->

                <div class="clear"></div>
            </div><!-- .container_12 -->
        </div><!-- .footer_info -->
    </footer>
</body>
</html>

    