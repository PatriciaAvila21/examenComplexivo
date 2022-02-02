$(function(){

	// Lista de docente
	$.post( '../view/select/medico.php' ).done( function(respuesta)
	{
		$( '#medico' ).html( respuesta );
	});
	
	
	// Lista de Ciudades
	$( '#medico' ).change( function()
	{
		var el_continente = $(this).val();

	});


	
	
	

})
