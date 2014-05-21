@extends('layout/frontend/layout')
{{ HTML::style('css/style.css'); }}   

@section('content')
    <section id="main">
        <div class="container_12">
            <div id="content" class="grid_9">
                <h1 class="page_title">Product List {{ $name}} : </h1>
                 
                <div class="options"></div><!-- .options -->
                <div class="clear"></div>
                <div class="products_list catalog">           

                    @foreach ($products as $product)
    			  		<article>
    						<form method="post" action="../cart_update.php">
    							<div class="grid_3">
    	  							<div class="prev">
    									<a href="../product_page.php?productid=1"><img src="{{ $product->prImage }}" alt="Product 2" title=""></a>
    	   							</div><!-- .prev -->
    							</div><!-- .grid_3 -->
    							<div class="grid_6">
    	 			 				<div class="entry_content">
    									<h3 class="title">{{ $product->prNaam}}</h3>
           				 				<p> {{ $product->prKbeschrijving }}</p>
              						</div><!-- .entry_content -->
               	 					<div class="price">
                					   {{ $product->prPrijs }}
    	    						</div>
    	    						Quantity <input type="text" name="product_qty" value=1 style="width: 40px"/>
    	    						<div class="cart">
    	   								<button class="add_to_cart">Add To Cart</button>
    								</div><!-- .cart -->
        							<input type="hidden" name="product_id" value="1"/>
        							<input type="hidden" name="type" value="add" />
    								<input type="hidden" name="return_url" value="1" />
    							</div><!-- .grid_6 -->
    							<div class="clear"></div>
    						</form>
        				</article>
                     @endforeach
          			<div class="clear"></div>
                </div><!-- .products_list -->
                <div class="clear"></div>
                <div class="clear"></div>
            </div><!-- #content -->
            
            <div id="sidebar" class="grid_3">
                <aside id="categories_nav">
		    		<header class="aside_title">
                        <h3>Categories</h3>
                    </header>
		    		<nav class="right_menu">
					<ul>
					    <li><a href="computer.php">PC</a></li>
					    <li class="current"><a href=" {{ URL::to('playstation') }}">Playstation</a></li>
					    <li><a href="xbox.php">XBOX</a></li>
					</ul>
				 	</nav><!-- .right_menu -->
                </aside><!-- #categories_nav -->
            </div><!-- .sidebar -->
            <div class="clear"></div>
        </div><!-- .container_12 -->
  </section><!-- #main -->
@stop