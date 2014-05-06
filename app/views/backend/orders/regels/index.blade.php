@extends('layout/backend/layout')

<div id="ajax-modal-2" class="modal hide fade" tabindex="-1"></div>
<div id="ajax-modal-create" class="modal hide" tabindex="-1"></div>
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

    var $modal = $('#ajax-modal-3');
    var $create = $('#ajax-modal-create');

  	$('.delete').on('click', function() {
    var id = $(this).data('id');
    if (confirm('Are you sure you want to delete this item')) {
    
      $.post('orders/deleteregel/' + id, '', function()
      {
          $.get('orders/detail/' + <?php echo $order_id ?>, '', function(response){
          $modal.html(response);
          });
      });
    }
       
    });
    $('.newregel').on('click', function(e) {
     
      e.preventDefault();
      var frm = $('#frm');
      var serialize = frm.serialize();
     
      $.post('orders/newregel/' + <?php echo $order_id ?>, frm.serialize(), function(){
          $.get('orders/detail/' + <?php echo $order_id ?>, '', function(response){
          $modal.html(response);
          });
      });
    });

});
</script>

@section('content')

    {{ Form::open(array('url' => 'orders/newregel/'. $order_id, 'id' => 'frm', 'class' => 'form-horizontal')) }}
    <fieldset>
    <legend>Nieuw product:
    </legend>
    <label for="product">Product</label>
    {{ Form::select('product', $products, array('style' => 'width:15em;'))}}<br>
          
    <label for="amount">Hoeveelheid</label>
    {{ Form::text('amount', '', array('style' => 'width:220px;'))}}<br>
    <input class="button newregel" style="width:100px;" type="submit" value="Toevoegen" />

    </fieldset>
    {{ Form::close()}}

    <fieldset>
    <legend>Bestaande producten:</legend>
    <div style="max-height: 300px; overflow-y: auto; overflow-x: hidden">
	  <div class="table-responsive">
	  	  <table class="table table-striped">
	  	  	 <tr>
                  <th>#</th>
                  <th>product naam</th>
                  <th>aantal</th>
                  <th>acties</th>
             </tr>

             @foreach ($regels as $regel)
             	<tr>
             		{{ "<td>" . $regel->order_regel_id .  "</td>"}}
             		{{ "<td>" . $regel->prNaam .  "</td>"}}
             		{{ "<td>" . $regel->aantal .  "</td>"}}
             		
             		{{ "<td class='text-right'> "}}
	                {{ "<a class='delete' style='text-decoration: none' data-id='" . $regel->order_regel_id . "'>"}}	
	                {{ "<img src='../img/deleteIcon.png' /> </a> </td>"}} 
                
                    
             	</tr>
              @endforeach
	  	  </table>
	  </div>
  </div>

    </fieldset>

@stop