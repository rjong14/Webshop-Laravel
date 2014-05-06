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
                alert("Vul alle velden goed in");
			}
		});
	});
});
</script>

{{ HTML::style('css/crud.css')}}

<i class="fa fa-building-o"></i>{{ " Order aanmaken"}}

<div style="max-height: 420px; overflow-y: auto; overflow-x: hidden">
	{{ Form::open(array('url' => 'admin/orders/create', 'id' => 'frm', 'class' => 'form-horizontal')) }}
	
		<fieldset class="main">
        <fieldset class="nested">
            <legend>Order gegevens : </legend>    
            <ol>
 
                <li>
                    <label for="user">Klant</label>
                    {{ Form::select('user', $users, array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="description">Beschrijving</label>
                    {{ Form::text('description', '', array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="date">Datum</label>
                    {{ Form::text('date', date("Y-m-d H:i:s"), array('style' => 'width:15em;'))}}
                </li>
               
            </ol>
        </fieldset>       
        <div class="buttonsContainer">
            <input class="button" style="float:left;" type="submit" value="Product opslaan" /> 
        </div>
    </fieldset>
    {{ Form::close() }}
	</div>
</div>
