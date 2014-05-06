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

     $modal.load('categories/edit/' + id, '', function(){
     $modal.modal();
     $modal.removeClass("hide");
     });
    
  });
  $('.delete').on('click', function() {
    var id = $(this).data('id');

     $modal.load('categories/delete/' + id, '', function(){
     $modal.modal();
     $modal.removeClass("hide");
     });
    
  });
   $('#new').on('click', function() {
    var id = $(this).data('id');

     $modal.load('categories/create', '', function(){
     $modal.modal();
     $modal.removeClass("hide");
     });
    
  });

});
</script>

@section('content')

 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	 <h1 class="page-header">Dashboard</h1>
	 <h2 class="sub-header">Categoriën overzicht 

   <div style="text-align: right">
          <input type="submit" id='new' class="text-right" name="new" value="Nieuw categorie toevoegen"/>
    </div>
    </h2>
	  <div class="table-responsive">
	  	  <table class="table table-striped">
	  	  	 <tr>
                  <th>#</th>
                  <th>Naam</th>
                
                  <th>Acties</th>
                </tr>

              @foreach ($categories as $categorie)
             	<tr>
             		{{ "<td>" . $categorie->id .  "</td>"}}
             		{{ "<td>" . $categorie->naam .  "</td>"}}
             		{{ "<td class='text-right'> "}}
             		{{ "<a class='edit' style='text-decoration: none' data-id='" . $categorie->id . "' >"}}
                {{ "<img src='../img/editicon.png' /> </a>"}} 
                {{ "<a class='delete' style='text-decoration: none' data-id='" . $categorie->id . "'>"}}	
                {{ "<img src='../img/deleteIcon.png' /> </a> </td>"}} 
                    
             	</tr>
              @endforeach
	  	  </table>
	  </div>
</div>
@stop