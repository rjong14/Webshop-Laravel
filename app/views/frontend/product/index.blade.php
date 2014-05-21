@extends('layout/frontend/layout')
{{ HTML::style('css/style.css'); }}   

@section('content')

<section id="main">
        <div class="container_12">
            <div id="content" class="grid_9">
                <h1 class="page_title">Producten categorieën </h1>
                <br> 
                    <h2 class="">Computer spellen </h2>
                        <div class="products_list catalog">           
                            <article>
                           
                            <div class="grid_3">
                                <div class="prev">
                                    <a href="producten/computer"><img src="img/content/computer.png" alt="Product 2" title=""></a>
                                </div><!-- .prev -->
                            </div><!-- .grid_3 -->
                    
                            <div class="grid_6">
                             <div class="entry_content">
                                <h3 class="title">Alle computer spellen</h3>
                                 <p>Ga naar de computer spellen pagina</p>
                            </div><!-- .entry_content -->
                            <div class="cart">
                                <br><br>
                                 <a href="producten/computer"><button class="add_to_cart">Naar spellen toe</button></a>
                            </div><!-- .cart -->
                            </div><!-- .grid_6 -->
                            <div class="clear"></div>
                        
                            </article>
                        </div>
                            

                    <h2 class="">Playstation spellen </h2>
                        <div class="products_list catalog">           
                            <article>
                           
                            <div class="grid_3">
                                <div class="prev">
                                    <a href="producten/playstation"><img src="img/content/playstation.png" alt="Product 2" title=""></a>
                                </div><!-- .prev -->
                            </div><!-- .grid_3 -->
                    
                            <div class="grid_6">
                             <div class="entry_content">
                                <h3 class="title">Alle Playstation spellen</h3>
                                 <p>Ga naar de Playstation spellen pagina</p>
                            </div><!-- .entry_content -->
                            <div class="cart">
                                <br><br>
                                 <a href="producten/playstation"><button class="add_to_cart">Naar spellen toe</button></a>
                            </div><!-- .cart -->
                            </div><!-- .grid_6 -->
                            <div class="clear"></div>
                        
                            </article>
                        </div>


                    <h2 class="">xbox spellen </h2>
                        <div class="products_list catalog">           
                            <article>
                           
                            <div class="grid_3">
                                <div class="prev">
                                    <a href="producten/xbox"><img src="img/content/xbox.png" alt="Product 2" title=""></a>
                                </div><!-- .prev -->
                            </div><!-- .grid_3 -->
                    
                            <div class="grid_6">
                             <div class="entry_content">
                                <h3 class="title">Alle Xbox spellen</h3>
                                 <p>Ga naar de Xbox spellen pagina</p>
                            </div><!-- .entry_content -->
                            <div class="cart">
                                <br><br>
                                 <a href="producten/xbox"><button class="add_to_cart">Naar spellen toe</button></a>
                            </div><!-- .cart -->
                            </div><!-- .grid_6 -->
                            <div class="clear"></div>
                        
                            </article>
                        </div>  </div>
</div>
    </section><!-- #main -->
    <div class="clear"></div>
@stop