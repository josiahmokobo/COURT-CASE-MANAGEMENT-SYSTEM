
$(document).ready(function(){
	for (var i = 0; i <=100; i++) {
$('#header0').css('color','red').css('font-family','Tahoma').css('font-weight','bold').css('style','italic');
$('#head1').css('color','green').css('font-family','Tahoma').css('font-weight','bold');
$('#span').show();
	};
});	

$('#see').click(function(){
var spinner = $("<img src='img/loader.gif' id='spinner' />").insertAfter("#see"); 
$("#see").attr('value', 'loading......');
$.post("php/see.php",{check:"Insert"},
function (result) {
 $("#see").attr('value', 'see all cases today');
 spinner.remove();
var f= result;
$('#span').show();
$('#span0').hide();
$('#span').html(result);
});	
});