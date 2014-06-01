<?php require_once(__DIR__ . '/../../views/frontend/ShoppingCart.php'); 
$cart = new ShoppingCart();
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="shortcut icon" href="favicon.ico">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.8.3.min.js"><\/script>')</script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    {{ HTML::style('http://getbootstrap.com/2.3.2/assets/css/bootstrap.css'); }}
    {{ HTML::script('http://getbootstrap.com/2.3.2/assets/js/bootstrap.js'); }}
    {{ HTML::style('css/bootstrap-modal.css'); }}
    {{ HTML::style('css/style.css'); }}    
    {{ HTML::script('js/main.js'); }}
    {{ HTML::script('js/click.js'); }}
    {{ HTML::script('js/bootstrap-modalmanager.js'); }}
    {{ HTML::script('js/bootstrap-modal.js'); }}
    
    <script type="text/javascript">
       $(document).ready(function() {
             $('.login').on('click', function() {
                 var $modal = $('#ajax-modal');
                 $modal.load('{{ URL::to("login") }}', function(){
                 $modal.modal();  
                 $modal.removeClass("hide");
                });
             });
            $('.logout').on('click', function() {
                $.post("{{ URL::to('login/logout')}}", function(response){
                    if(response.code == 1)
                    {
                        alert("uitloggen")
                    } else {
                        alert("Fout tijdens uitloggen");
                    }
                });
            });
             $('.signup').on('click', function() {
                 var $modal = $('#ajax-modal');
                 $modal.load('{{ URL::to("signup") }}', function(){
                 $modal.modal();  
                 $modal.removeClass("hide");
                });
             });
        });
    </script>

</head>
<body>
    <div id="ajax-modal" class="modal hide fade" tabindex="-1"></div>
    <div id="top">
        <div class="container_12">
            <div class="grid_9">
                <nav>
                    <a class="menu-open" href="#">Menu</a>
                    <ul>
                        <li><a href="{{ URL::to('home')}}">Home</a></li>
                        <li><a href="{{ URL::to('cart/index')}}">Shopping cart</a></li>
                        @if(!Auth::check())
                        <li><a class="login"> Log In</a></li>
                        <li><a class="signup">Sign Up</a></li>
                        @else
                        <li><a class="logout">Logout</a></li>
                        @endif
                        <li><a href="{{ URL::to('checkout/index')}}">Check out</a></li>
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
                        @if(Auth::check())
                            Welcome {{ Auth::User()->gebruikersnaam}}
                        @else
                            Welcome visitor you can <a class="login">login</a> or <a class="signup">create an account</a>
                        @endif
                    </div><!-- .welcome -->
                    <ul id="cart_nav">
                        <li>
                            <a class="cart_li" href="{{ URL::to('cart/index') }}">
                                <div class="cart_ico"></div>
                                <span>&euro; {{ $cart->getTotalPrice() }}</span>
                            </a>
                            <ul class="cart_cont">
                                    <li class="no_border recently">Recently added item(s)</li>
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
                    <form class="search" method="post" action="{{ URL::to('search/index/')}}">
                        <input type="submit" id="search" class="search_button" value="">
                        <input type="text" id="search_input" name="search_input" class="search_form" placeholder="Search entire store here...">
                    </form><!-- .search -->

                </div><!-- .top_header -->
            </div><!-- .grid_9 -->
            
            <div class="grid_9 primary-box">
                <nav class="primary">
                    <div class="bg-menu-select"></div>
                    <a class="menu-select" href="#">Catalog</a>
                    <ul class="parents">
                    @foreach ($menu_items as $item)
                    @if(count($item->belongsToCategories) == 0)

                        @if(count($item->hasManysubCategories) > 0)
                        <li class="parent plus"> 
                            <a href='{{ URL::to($item->link)}}'> {{ $item->label}} </a>
                            <ul class="sub" style="display: none;">
                                @foreach ($item->hasManysubCategories as $sub)
                                    <li>
                                   
                                        <a href='{{ URL::to($sub->link) }}'> {{ $sub->label }} </a>
                                    </li>
                                @endforeach    
                            </ul>
                        </li>
                        @else
                         <li><a href='{{ URL::to($item->link) }}'> {{ $item->label}} </a></li>
                        @endif
                    @endif
                    @endforeach
                    </ul>
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