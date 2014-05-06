@extends('layout/backend/layout')

<div id="ajax-modal" class="modal hide fade" tabindex="-1"></div>

<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/dashboard.css" rel="stylesheet">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap.js"></script>
<script src="../js/bootstrap-modal.js" type="text/javascript"></script>
<script src="../js/bootstrap-modalmanager.js" type="text/javascript"></script>
<link href="http://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet" />
<link href="../css/bootstrap-modal.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<script type="text/javascript">
$(document).ready(function() {
  var $modal = $('#ajax-modal');
  
  $('.edit').on('click', function() {
    var id = $(this).data('id');

     $modal.load('products/edit/' + id, '', function(){
     $modal.modal();
     $modal.removeClass("hide");
     });
    
  });
  $('.delete').on('click', function() {
    var id = $(this).data('id');

     $modal.load('products/delete/' + id, '', function(){
     $modal.modal();
     $modal.removeClass("hide");
     });
    
  });
   $('#new').on('click', function() {
    var id = $(this).data('id');

     $modal.load('products/create', '', function(){
     $modal.modal();
     $modal.removeClass("hide");
     });
    
  });
  $('#create').on('click', function(e){
    alert("new");
   });

});
</script>

@section('content')

 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	 <h1 class="page-header">Dashboard</h1>
	 <h2 class="sub-header">Producten overzicht 

   <div style="text-align: right">
          <input type="submit" id='new' class="text-right" name="new" value="Nieuw product toevoegen"/>
    </div>
    </h2>
	  <div class="table-responsive">
	  	  <table class="table table-striped">
	  	  	 <tr>
                  <th>#</th>
                  <th>Naam</th>
                  <th>Korte beschrijving</th>
                  <th>Beschrijving</th>
                  <th>Categorie</th>
                  <th>Prijs</th>
                  <th>Foto</th>
                  <th>Acties</th>
                </tr>

              @foreach ($products as $product)
             	<tr>
             		{{ "<td>" . $product->id .  "</td>"}}
             		{{ "<td>" . $product->prNaam .  "</td>"}}
             		{{ "<td>" . substr($product->prKbeschrijving, 0, 20) . "..." .  "</td>"}}
             		{{ "<td>" . substr($product->prBeschrijving,0,50) . "..." .   "</td>"}}
             		{{ "<td>" . $product->categorie->naam .  "</td>"}}
             		{{ "<td>" . $product->prPrijs .  "</td>"}}
             		{{ "<td>" . $product->prImage .  "</td>"}}
             		{{ "<td class='text-right'> "}}
             		{{ "<a class='edit' style='text-decoration: none' data-id='" . $product->id . "' >"}}
                {{ "<img src='../img/editicon.png' /> </a>"}} 
                {{ "<a class='delete' style='text-decoration: none' data-id='" . $product->id . "'>"}}	
                {{ "<img src='../img/deleteIcon.png' /> </a> </td>"}} 
                    
             	</tr>
              @endforeach
	  	  </table>
	</div>
</div>
@stop