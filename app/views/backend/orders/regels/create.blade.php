<script type="text/javascript">
$(document).ready(function() {

	var frm = $('#frm');
    var $modal = $('#ajax-modal-3');
	$('#opslaan').on('click', function(e){
		e.preventDefault();

		$.post(frm.attr('action'), frm.serialize(), function(response) {

			if(response.code ==1)
			{
				
                $.get('orders/detail/' + <?php echo $id ?>, '', function(response){
                $modal.html(response);
                });

			} else {
                alert("Vul alle velden goed in");
			}
		});
	});


});
</script>

{{ HTML::style('css/crud.css')}}

<i class="fa fa-building-o"></i>{{ " Order regel aanmaken"}}

<div style="max-height: 420px; overflow-y: auto; overflow-x: hidden">
	{{ Form::open(array('url' => 'admin/orders/newregel/' . $id, 'id' => 'frm', 'class' => 'form-horizontal')) }}
	
		<fieldset class="main">
        <fieldset class="nested">
            <legend>Order regel gegevens : </legend>    
            <ol>
 
                <li>
                    <label for="product">Product</label>
                    {{ Form::select('product', $products, array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="amount">Hoeveelheid</label>
                    {{ Form::text('amount', '', array('style' => 'width:15em;'))}}
                </li>
               
            </ol>
        </fieldset>       
        <div class="buttonsContainer">
            <input class="button" id="opslaan" style="float:left;" type="submit" data-dismiss="modal" aria-hidden="true" value="Product opslaan" /> 
            <input class="button" id="cancel" style="margin-left:20px; float:left;" data-dismiss="modal" aria-hidden="true" type="submit" value="Cancel" /> 
        </div>
    </fieldset>
    {{ Form::close() }}
	</div>
</div>
