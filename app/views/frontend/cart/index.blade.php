@extends('layout/frontend/layout')
<?php 
require_once(__DIR__ . '/../../views/frontend/ShoppingCart.php');
$shoppingcart = new ShoppingCart();
$items = $shoppingcart->getAll();
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

        $('.remove').on('click', function(e)
        {   
            e.preventDefault();
            var id = $(this).data('id');
            var action = $(this).data('action');
            $.post(action + '/' + id,  function(response) 
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
                    <h1 class="page_title">Shopping cart</h1>
                </header>
                     <article>  
                            <table class="cart_product">
                                <tr class="bg">
                                    <th class="images">Image</th>
                                    <th class="name">Product Name</th>
                                    <th class="price">Unit Price</th>
                                    <th class="qty">Qty</th>
                                    <th class="subtotal">Subtotal</th>
                                    <th class="category">Category </th>
                                    <th class="close"> </th>
                                  
                                </tr>
                                @foreach($items as $item)
                                <tr>
                                        <td class="images"><a href=""><img src="{{ $item->image }}"></a></td>
                                        <td class="name">{{ $item->name }}</td>
                                        <td class="price">&euro; {{ $item->price }}</td>
                                        <td class="qty">{{ $item->qty }}</td>
                                        <td class="subtotal">&euro; {{ $item->price * $item->qty}}</td>
                                        <td class="category">{{ $item->category }}</td>
                                        <td><a title="close" data-action="{{ URL::to('cart/remove') }}" data-id="{{ $item->id}} " class="close remove" href=""></a></td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td style="height: 30x; font-size:20px;">Totaal prijs : &euro; {{ $shoppingcart->getTotalPrice() }} </td>
                                    <td class="close" colspan="5" style="font-size:20px;"><td>
                                </tr>
                             </table>
                    </article>
                <div class="clear"></div>
            </div><!-- #content -->

            <div class="clear"></div>
        </div><!-- .container_12 -->
</section><!-- #main -->
@stop