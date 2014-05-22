@extends('layout/frontend/layout')
<?php 
require_once(__DIR__ . '/../../views/frontend/ShoppingCart.php');
$shoppingcart = new ShoppingCart();
$items = $shoppingcart->getAll();
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

        $('#checkout').on('click', function(e)
        {   
            e.preventDefault();
            var frm = $('#frm');

            $.post(frm.attr('action'),  function(response) 
            {   
                if(response.code ==1)
                {
                    alert("De betaling is succelvol afgerond");
                }
                else {
                    alert("Er ging iets mis tijdens het verwerken van de betaling");
                }
            });
        });

});
</script>
@section('content')
<section id="main">
        <div class="container_12">
            <div id="content" class="grid_12">
                <header>
                    <h1 class="page_title">Checkout</h1>
                </header>
                @if(!Auth::check())
            	<p>
            		Please login first
            	<p>
                @else
                <article id="checkout_info" class="grid_9">
					<ul class="checkout_list">
						<li class="active">
							<div class="list_header"><div class="number"></div>Checkout</div>
							<div class="list_body">
								<form id="frm" action="{{ URL::to('checkout/order') }}" method="post">
								   <h3>Checkout as a {{ Auth::User()->voornaam }}</h3>
								   <p> products : {{ $shoppingcart->count()}}</p>
                                   <p>Total price : &euro; {{ $shoppingcart->getTotalPrice()}}</p>
					               <ul id="cart_nav" class="clearleft">
                                    <li class="clearleft">
                                        <ul class="cart_cont clearleft">
                                            @foreach ($items as $item)
                                            <li class="clearleft">
                                                <a href="{{ URL::to('producten/detail/' . $item->id)}}" class="prev_cart"><div class="cart_vert">
                                                    <img src="{{ $item->image }}" alt="shoppingcart" title=""></div>
                                                </a>
                                                <div class="cont_cart">
                                                    <h4>{{ $item->name}}</h4>
                                                    <div class="price">&euro; {{ $item->price}} x {{$item->qty}}</span></div>
                                                </div>
                                                <div class="clear"></div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    </ul><!-- .cart_nav -->
								    <input type="submit" id="checkout" name="checkout" value="checkout">
								</form>
							<div class="clear"></div>
							</div>
						</li>
					</ul>
				</article>
                 @endif
            </div><!-- .container_12 -->
	</div>
    <div class="clear"></div>
</section><!-- #main -->
@stop