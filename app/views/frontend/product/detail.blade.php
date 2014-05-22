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
@section('content')

<section id="main">
        <div class="container_12">
            <div id="content" class="grid_12">
                <header>
                    <h1 class="page_title">{{$product->prNaam}}</h1>
                </header> 
                <article class="product_page negative-grid">
                 	<div class="grid_5 img_slid" id="products">
						<div class="preview slides_container">
						    <div class="prev_bg">
								<a href="{{$product->prImage}}" class="jqzoom" rel="gal1" title="">
									<img src="{{$product->prImage}}" alt="Product 1" title="" style="width: 100%">
								</a>
						    </div>
						</div><!-- .preview -->
     					<br><br><br>
		    		</div><!-- .grid_5 -->
                    
            	<div class="grid_7">
					<div class="entry_content">              
			   			<p>{{$product->prBeschrijving}}</p>
                 		<div class="ava_price">
                    		<div class="price">
                     		&euro; {{$product->prPrijs}}
                     		</div><!-- .price -->
							<div class="availability_sku">
				    			<div class="availability">
									Availability: <span>In stock</span>
				    			</div>
							</div><!-- .availability_sku -->
                            <div class="clear"></div>
			   			</div><!-- .ava_price -->
			   		<form class="frm" action="{{ URL::to('cart/add')}}" method="POST">
                    Quantity <input type="text" name="product_qty" style="width: 40px">
                      	<input type="hidden" name="product_id" value="{{ $product->id}}"/>
                        <input type="hidden" name="product_name" value="{{ $product->prNaam}}"/>
                        <input type="hidden" name="product_image" value="{{ $product->prImage}}"/>
                        <input type="hidden" name="product_price" value="{{ $product->prPrijs}}"/>
                        <input type="hidden" name="product_cat" value="{{$product->prCategorie}}"/>
                    <br>
                    <br>
			    	<div class="cart">
			    	<button class="add_to_cart">Add To Cart</button>					
                 </div><!-- .cart -->
             </form>
			</div><!-- .entry_content -->
		    </div><!-- .grid_7 -->
		    <div class="clear"></div>
            <div class="clear"></div>
		</article><!-- .product_page -->
	    <div class="related negative-grid">
	    <div class="clear"></div>
    </div><!-- #content -->
</div><!-- .container_12 -->
<div class="clear"></div>
</section><!-- #main -->
@stop