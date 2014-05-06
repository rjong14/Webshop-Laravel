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

<i class="fa fa-user"></i>{{ " Gebruiker aanmaken"}}

<div style="max-height: 420px; overflow-y: auto; overflow-x: hidden">
	{{ Form::open(array('url' => 'admin/users/create', 'id' => 'frm', 'class' => 'form-horizontal')) }}
	
		<fieldset class="main">
        <fieldset class="nested">
            <legend>Gebruiker informatie : </legend>    
            <ol>
                <li>
                    <label for="username">Gebruikersnaam</label>
                    {{ Form::text('username', '', array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="password">Wachtwoord</label>
                    {{ Form::password('password', array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="firstname">Voornaam</label>
                    {{ Form::text('firstname', '', array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="lastname">Achternaam</label>
                    {{ Form::text('lastname', '', array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="adress">Adres</label>
                    {{ Form::text('adress', '', array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="city">Woonplaats</label>
                    {{ Form::text('city', '', array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="zip">Postcode</label>
                    {{ Form::text('zip', '', array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="email">Email</label>
                    {{ Form::text('email', '', array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="zip">Admin</label>
                    {{ Form::select('admin', array('0' => 'Nee', '1' => 'Ja'), array('style' => 'width:15em;'))}}
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
