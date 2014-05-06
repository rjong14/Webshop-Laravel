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
				alert("Foutje");
			}
		});
	});
});
</script>

{{ HTML::style('css/crud.css')}}

<i class="fa fa-user"></i>{{ " gebruiker " . $user->gebruikersnaam . " verwijderen"}}

<div style="max-height: 200x; overflow-y: auto; overflow-x: hidden">
	{{ Form::open(array('url' => 'admin/users/delete/' . $user->id, 'id' => 'frm', 'class' => 'form-horizontal')) }}
	    <p> Weet u zeker dat deze gebruiker wilt verwijderen ? </p>
        <div class="buttonsContainer">
            <input class="button" style="float:left;" type="submit" value="Verwijderen" /> 
        </div>
    </fieldset>
    {{ Form::close() }}
	</div>
</div>
