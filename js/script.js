/*---------------------------------------------------------------------------------------------------------------------------*/
/*                                                  Restaurant Script                                                        */
/*---------------------------------------------------------------------------------------------------------------------------*/

$(document).ready(function($) {
	$(window).scroll(function() {
		$scroll = $(document).scrollTop();
		if ($scroll > 300) {
			$('.navbar').addClass('bg')
		} else {
			$('.navbar').removeClass('bg');
		}
	});

	$(document).ready(function() {
		$("#fecha").datepicker({dateFormat: 'D, d-MM-yy'});
	});
});

function cantidad(id_input, operacion) {
	let numero = $('#' + id_input).val();
	if (operacion == '1') {
		numero++;
	} else {
		numero--;
	}
	$('#' + id_input).val(numero);
}