$(document).ready(function(){
	$('.carousel').carousel();
	Materialize.updateTextFields();
	$('.modal-trigger').leanModal();
	
	$('#textarea1').trigger('autoresize');
	$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 105 // Creates a dropdown of 15 years to control year
});
});
