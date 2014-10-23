$('#searchs').click(function(){
var search=$("#srchme").val();
if(search=="")
{
	$('#searchb').show();
	$('#searchb').html("*required").css('color','red').css('font-weight','bold');
}
else{
var spinner = $("<img src='img/loader.gif' id='spinner' />").insertAfter("#searchs"); 
$("#searchs").attr('value', 'searching......');
$.post("php/reset.php",{check:"Insert",search:search},
function(result){
	$("#searchs").attr('value', 'reset password');
 spinner.remove();
	$('#searchb').hide();
var f = result;
$('#resultd').html(result);
});
}
});