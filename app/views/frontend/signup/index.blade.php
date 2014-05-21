<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
{{ HTML::style('http://getbootstrap.com/2.3.2/assets/css/bootstrap.css'); }}
{{ HTML::style('css/bootstrap-modal.css'); }}
{{ HTML::style('css/style.css'); }}    
{{ HTML::script('js/main.js'); }}
{{ HTML::script('js/click.js'); }}
{{ HTML::script('http://getbootstrap.com/2.3.2/assets/js/bootstrap.js'); }}
{{ HTML::script('js/bootstrap-modalmanager.js'); }}
{{ HTML::script('js/bootstrap-modal.js'); }}


<script type="text/javascript">
$(document).ready(function() {

    var frm = $('#frm');
    $('#register').on('click', function(e){
        e.preventDefault();

        $.post(frm.attr('action'), frm.serialize(), function(response) {
            if(response.code == 1)
            {
                alert("Geregistreerd");
            } else if(response.code == 2) {
                alert("Deze gebruikersnaam bestaat al");
            } else {
                alert("Controleer of alles is ingevuld");
            }
        });
    });
});
</script>

{{ HTML::style('css/crud.css')}}

<i class="fa fa-user"></i>{{ "Registreren"}}
<div style="max-height: 420px; overflow-y: auto; overflow-x: hidden">
    {{ Form::open(array('url' => 'signup/create', 'id' => 'frm', 'class' => 'form-horizontal')) }}
    
        <fieldset class="main">
        <fieldset class="nested">
            <legend>Gebruiker gegevens : </legend>    
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
            </ol>
        </fieldset>       
        <div class="buttonsContainer">
            <input class="button" id="register" style="float:left;" type="submit" value="Registreren" /> 
        </div>
    </fieldset>
    {{ Form::close() }}
    </div>
</div>
