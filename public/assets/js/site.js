$(document).ready( function() {

	$('#ambiente').change( function() {
		// console.log();
		$.get("http://localhost:8000/reserva/lista-chaves/"+$(this).val(), function(data) {
			console.log(data);
		})
	}) 
});