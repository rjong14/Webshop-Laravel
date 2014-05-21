@extends('layout/frontend/layout')
{{ HTML::style('css/style.css'); }}   

@section('content')
<section id="main" class="home">
        <div class="container_12">
            <div id="content">
                <div class="grid_12">
                    <h2 class="product-title">PC</h2>
                </div><!-- .grid_12 -->

                <div class="clear"></div>

                <div class="products featured-products">

                @foreach ($computer as $comp) 
                <article class="grid_3 article">
                    <form action="cart_update.php" method="POST">
                    <img class="sale" src="img/top.png" alt="Sale">
                    <div class="prev">
                        <a href="product_page.php?productid={{ $comp->id }}"><img src='{{ $comp->prImage }}' alt="product" title=""></a>
                    </div><!-- .prev -->

                    <h3 class="title">{{ $comp->prNaam }}</h3>
                    <div class="cart">
                        <div class="price">
                            <div class="vert">
                                &#8364; {{ $comp->prPrijs }}
                          </div>
                        </div>
                        <span>Quantity</span> <input type="text" value=1 name="product_qty" style="width: 40px">

                         <input type="image" class="bay" alt="product" src= "img/bg_cart.png" style="width:30px; height:30px;"/>
                        
                    </div><!-- .cart -->
                        <input type="hidden" name="product_id" value=" {{ $comp->id }}"/>
                        <input type="hidden" name="type" value="add" />
                        
                     </form>
                </article><!-- .grid_3.article -->
                @endforeach
				</div><!-- .products featured-products -->

				<div class="products featured-products">
				<h2 class="product-title">XBOX</h2>

                @foreach ($xbox as $x) 
                <article class="grid_3 article">
                    <form action="cart_update.php" method="POST">
                    <img class="sale" src="img/top.png" alt="Sale">
                    <div class="prev">
                        <a href="product_page.php?productid={{ $x->id }}"><img src='{{ $x->prImage }}' alt="product" title=""></a>
                    </div><!-- .prev -->

                    <h3 class="title">{{ $x->prNaam }}</h3>
                    <div class="cart">
                        <div class="price">
                            <div class="vert">
                                &#8364; {{ $x->prPrijs }}
                          </div>
                        </div>
                        <span>Quantity</span> <input type="text" value=1 name="product_qty" style="width: 40px">

                         <input type="image" class="bay" alt="product" src= "img/bg_cart.png" style="width:30px; height:30px;"/>
                        
                    </div><!-- .cart -->
                        <input type="hidden" name="product_id" value=" {{ $x->id }}"/>
                        <input type="hidden" name="type" value="add" />
                        
                     </form>
                </article><!-- .grid_3.article -->
                @endforeach
				</div><!-- .products featured-products -->
                
                <div class="products featured-products">
				<h2 class="product-title">Playstation</h2>

                @foreach ($playstation as $play) 
                <article class="grid_3 article">
                    <form action="cart_update.php" method="POST">
                    <img class="sale" src="img/top.png" alt="Sale">
                    <div class="prev">
                        <a href="product_page.php?productid={{ $play->id }}"><img src='{{ $play->prImage }}' alt="product" title=""></a>
                    </div><!-- .prev -->

                    <h3 class="title">{{ $play->prNaam }}</h3>
                    <div class="cart">
                        <div class="price">
                            <div class="vert">
                                &#8364; {{ $play->prPrijs }}
                          </div>
                        </div>
                        <span>Quantity</span> <input type="text" value=1 name="product_qty" style="width: 40px">

                         <input type="image" class="bay" alt="product" src= "img/bg_cart.png" style="width:30px; height:30px;"/>
                        
                    </div><!-- .cart -->
                        <input type="hidden" name="product_id" value=" {{ $play->id }}"/>
                        <input type="hidden" name="type" value="add" />
                        
                     </form>
                </article><!-- .grid_3.article -->
                @endforeach
				</div><!-- .products featured-products -->               
            </div><!-- #content -->


            <div id="content_bottom">
                <div class="grid_6">
                    <div class="bottom_block about_as">
                        <h3>About Us</h3>
                        <div class="about_as_content">
                            <p>Deze webshop is gebouwd door Louis Hol en Rick de Jong, dit in opdracht van Avans hogeschool</p>
                        </div>
                    </div><!-- .about_as -->
                </div><!-- .grid_6 -->

                <div class="grid_6">
                    <div class="bottom_block news">
                        <h3>News</h3>
                        <ul>
                            <li>
                                <time datetime="2012-03-03">19 Maart 2014</time>
                                <p>GTA VI vanaf volgende week expliciet verkrijgbaar, alleen bij onze webshop!</p>
                            </li>

                            <li>
                                <time datetime="2012-02-03">15 Maart 2014</time>
                                <p>Vanaf morgen 90% korting op alle xBox spellen</p>
                            </li>

                            <li>
                                <time datetime="2012-01-03">1 Maart 2014</time>
                                <p>2 halen 3 betalen vanaf morgen!</p>
                            </li>
                        </ul>
                    </div><!-- .news -->
                </div><!-- .grid_6 -->
                <div class="clear"></div>
            </div><!-- #content_bottom -->
        </div><!-- .container_12 -->
    </section><!-- #main.home -->

@stop