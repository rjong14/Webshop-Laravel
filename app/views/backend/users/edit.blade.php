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

<i class="fa fa-user"></i>{{ "Gebruiker aanpassen"}}

<div style="max-height: 420px; overflow-y: auto; overflow-x: hidden">
	{{ Form::open(array('url' => 'admin/users/edit/' . $user->id , 'id' => 'frm', 'class' => 'form-horizontal')) }}
	
		<fieldset class="main">
        <fieldset class="nested">
            <legend>Gebruiker informatie : </legend>    
            <ol>
                <li>
                    <label for="username">Gebruikersnaam</label>
                    {{ Form::text('username', $user->gebruikersnaam, array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="password">Wachtwoord</label>
                    {{ Form::password('password' , array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="firstname">Voornaam</label>
                    {{ Form::text('firstname', $user->voornaam, array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="lastname">Achternaam</label>
                    {{ Form::text('lastname', $user->achternaam, array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="adress">Adres</label>
                    {{ Form::text('adress', $user->adres, array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="city">Woonplaats</label>
                    {{ Form::text('city', $user->woonplaats, array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="zip">Postcode</label>
                    {{ Form::text('zip', $user->postcode, array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="email">Email</label>
                    {{ Form::text('email', $user->email, array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="zip">Admin</label>
                    {{ Form::select('admin', array('0' => 'Nee', '1' => 'Ja'),$user->isAdmin, array('style' => 'width:15em;'))}}
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
