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
    $('#login').on('click', function(e){
        e.preventDefault();

        $.post(frm.attr('action'), frm.serialize(), function(response) {
            if(response.code == 1)
            {
                alert("Ingelogt");
            } else {
                alert("Controleer je gegevens");
            }
        });
    });
});
</script>

{{ HTML::style('css/crud.css')}}

<i class="fa fa-user"></i>{{ "Inloggen"}}

<div style="max-height: 420px; overflow-y: auto; overflow-x: hidden">
    {{ Form::open(array('url' => 'login/check', 'id' => 'frm', 'class' => 'form-horizontal')) }}
    
        <fieldset class="main">
        <fieldset class="nested">
            <legend>Inlog gegevens : </legend>    
            <ol>
               
                <li>
                    <label for="username">Username</label>
                    {{ Form::text('username', '', array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="password">Password</label>
                    {{ Form::password('password','', array('style' => 'width:15em;'))}}
                </li>
            
            </ol>
        </fieldset>       
        <div class="buttonsContainer">
            <input id="login" class="button" style="float:left;" type="submit" value="Inloggen" /> 
        </div>
    </fieldset>
    {{ Form::close() }}
    </div>
</div>
