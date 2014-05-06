<script type="text/javascript">
$(document).ready(function() {

	var frm = $('#frm');
	$('.button').on('click', function(e){
		e.preventDefault();

		$.post(frm.attr('action'), frm.serialize(), function(response) {

			if(response.code ==1)
			{
					window.location.reload();
			} else {

			}
		});
	});
});
</script>

{{ HTML::style('css/crud.css')}}

<i class="fa fa-building-o"></i>{{ " Order " . $order->beschrijving . " verwijderen"}}

<div style="max-height: 200x; overflow-y: auto; overflow-x: hidden">
	{{ Form::open(array('url' => 'admin/orders/delete/' . $order->id, 'id' => 'frm', 'class' => 'form-horizontal')) }}
	    <p> Weet u zeker dat u de order wilt verwijderen ? </p>
        <div class="buttonsContainer">
            <input class="button" style="float:left;" type="submit" value="Verwijderen" /> 
        </div>
    </fieldset>
    {{ Form::close() }}
	</div>
</div>
