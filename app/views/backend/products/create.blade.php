<script type="text/javascript">
$(document).ready(function() {

	var frm = $('#frm');
	$('#create').on('click', function(e){
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

<i class="fa fa-building-o"></i>{{ " Product aanmaken"}}

<div style="max-height: 420px; overflow-y: auto; overflow-x: hidden">
	{{ Form::open(array('url' => 'admin/products/create', 'id' => 'frm', 'class' => 'form-horizontal')) }}
	
		<fieldset class="main">
        <fieldset class="nested">
            <legend>Product gegevens : </legend>    
            <ol>
                <li>
                    <label for="name">Name</label>
                    {{ Form::text('name', '', array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="categorie">Categorie</label>
                    {{ Form::select('categorie', $categorie, array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="price">Prijs</label>
                    {{ Form::text('price', '', array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="image">Plaatje</label>
                    {{ Form::text('image', '', array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="short">Korte beschr</label>
                    {{ Form::textarea('short', '', array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="long">Lange beschr</label>
                    {{ Form::textarea('long', '', array('style' => 'width:15em;'))}}
                </li>
            </ol>
        </fieldset>       
        <div class="buttonsContainer">
            <input class="button" id="create" style="float:left;" type="submit" value="Product opslaan" /> 
        </div>
    </fieldset>
    {{ Form::close() }}
	</div>
</div>
