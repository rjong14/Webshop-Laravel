<script type="text/javascript">
$(document).ready(function() {

	var frm = $('#frm');
	var $modal = $('#ajax-modal-3');
	$('#deleteregel').on('click', function(e){
		e.preventDefault();

		$.post(frm.attr('action'), frm.serialize(), function(response) {

			if(response.code ==1)
			{
				$.get('orders/detail/' + <?php echo $orderid ?>, '', function(response){
				$modal.html(response);
				});

				
			} else {

			}
		});
	});
});
</script>

{{ HTML::style('css/crud.css')}}

<i class="fa fa-building-o"></i>{{ " Order regel verwijderen"}}

<div style="max-height: 200x; overflow-y: auto; overflow-x: hidden">
	{{ Form::open(array('url' => 'admin/orders/deleteregel/' . $id, 'id' => 'frm', 'class' => 'form-horizontal')) }}
	    <p> Weet u zeker dat u de order regel wilt verwijderen ? </p>
        <div class="buttonsContainer">
            <input class="button" id="deleteregel" style="float:left;" data-dismiss="modal" aria-hidden="true" type="submit" value="Verwijderen" /> 
        </div>
    </fieldset>
    {{ Form::close() }}
	</div>
</div>
