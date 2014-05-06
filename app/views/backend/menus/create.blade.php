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

<i class="fa fa-building-o"></i>{{ " Menu item aanmaken"}}

<div style="max-height: 420px; overflow-y: auto; overflow-x: hidden">
	{{ Form::open(array('url' => 'admin/menus/create', 'id' => 'frm', 'class' => 'form-horizontal')) }}
	
		<fieldset class="main">
        <fieldset class="nested">
            <legend>Menu gegevens : </legend>    
            <ol>
                <li>
                    <label for="label">Label</label>
                    {{ Form::text('label', '', array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="link">Link</label>
                    {{ Form::text('link', '', array('style' => 'width:15em;'))}}
                  
                </li>
                <li>
                    <label for="parent">Parent</label>
                    {{ Form::select('parent', $menus, array('style' => 'width:15em;'))}}
                   
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
