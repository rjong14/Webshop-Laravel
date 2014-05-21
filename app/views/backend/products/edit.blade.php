<script type="text/javascript">
$(document).ready(function() {

	var frm = $('#frm');
	$('.button').on('click', function(e){
		e.preventDefault();

		$.post(frm.attr('action'), frm.serialize(), function(response) {

		  console.log(response);
		});
	});
});
</script>

{{ HTML::style('css/crud.css')}}

<i class="fa fa-building-o"></i>{{ " Product " . $product->prNaam . " wijzigen"}}

<div style="max-height: 420px; overflow-y: auto; overflow-x: hidden">
	{{ Form::open(array('url' => 'admin/products/edit/' . $product->id, 'id' => 'frm', 'class' => 'form-horizontal')) }}
	
		<fieldset class="main">
        <fieldset class="nested">
            <legend>Product gegevens : </legend>    
            <ol>
                <li>
                    <label for="name">Name</label>
                    {{ Form::text('name', $product->prNaam, array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="categorie">Categorie</label>
                    {{ Form::select('categorie', $categorie, $product->prCategorie, array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="price">Prijs</label>
                    {{ Form::text('price', $product->prPrijs, array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="image">Plaatje</label>
                    {{ Form::text('image', $product->prImage, array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="short">Korte beschr</label>
                    {{ Form::textarea('short', $product->prKbeschrijving, array('style' => 'width:15em;'))}}
                </li>
                <li>
                    <label for="long">Lange beschr</label>
                    {{ Form::textarea('long', $product->prBeschrijving, array('style' => 'width:15em;'))}}
                </li>
            </ol>
        </fieldset>       
        <div class="buttonsContainer">
            <input class="button" style="float:left;" type="submit" value="Wijzigingen opslaan" /> 
        </div>
    </fieldset>
    {{ Form::close() }}
	</div>
</div>
