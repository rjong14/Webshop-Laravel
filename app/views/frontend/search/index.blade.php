@extends('layout/frontend/layout')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

        $('.frm').submit(function(e)
        {   
            var frm = $(this);
            e.preventDefault();

            $.post(frm.attr('action'), frm.serialize(), function(response) 
            {
                
            });
        });
});
</script>
{{ HTML::style('css/style.css'); }}   

@section('content')
    <section id="main">
        <div class="container_12">
            <div id="content" class="grid_9">
                <h1 class="page_title">Search results :</h1>
                 
                <div class="options"></div><!-- .options -->
                <div class="clear"></div>
                <div class="products_list catalog">           
                  @foreach ($products as $product)
                        <article>
                            <form method="post" class="frm" action="{{ URL::to('cart/add') }}">
                                <div class="grid_3">
                                    <div class="prev">
                                        <a href="{{ URL::to('producten/detail/' . $product->id)}}"><img src="{{ $product->prImage }}" alt="Product 2" title=""></a>
                                    </div><!-- .prev -->
                                </div><!-- .grid_3 -->
                                <div class="grid_6">
                                    <div class="entry_content">
                                        <h3 class="title">{{$product->prNaam}}</h3>
                                        <p> {{$product->prKbeschrijving }}</p>
                                    </div><!-- .entry_content -->
                                    <div class="price">
                                       {{$product->prPrijs}}
                                    </div>
                                    Quantity <input type="text" name="product_qty" value=1 style="width: 40px"/>
                                    <div class="cart">
                                        <button data-qty="" data-id="{{$product->id}}" class="add_to_cart add">Add To Cart</button>
                                    </div><!-- .cart -->
                                    <input type="hidden" name="product_id" value="{{ $product->id}}"/>
                                    <input type="hidden" name="product_name" value="{{ $product->prNaam}}"/>
                                    <input type="hidden" name="product_image" value="{{ $product->prImage}}"/>
                                    <input type="hidden" name="product_price" value="{{ $product->prPrijs}}"/>
                                    <input type="hidden" name="product_cat" value="{{$product->prCategorie}}"/>
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
					    <li><a href="{{ URL::to('producten/computer') }}">PC</a></li>
					    <li><a href=" {{ URL::to('producten/playstation') }}">Playstation</a></li>
					    <li><a href="{{ URL::to('producten/xbox') }}">XBOX</a></li>
				</ul>
				 	</nav><!-- .right_menu -->
                </aside><!-- #categories_nav -->
            </div><!-- .sidebar -->
            <div class="clear"></div>
        </div><!-- .container_12 -->
  </section><!-- #main -->
@stop