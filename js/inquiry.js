
	$('#inquire').click(function() {
	$('#span0').show();
	$('#span').hide();
var spinner = $("<img src='img/loader.gif' id='spinner' />").insertAfter("#inquire"); 
$("#inquire").attr('value', 'sending......');
$("#inquire").attr('value', 'add');
	 spinner.remove();
	});