$('#search').click(function(){
var search=$("#srch").val();
if(search=="")
{
	$('#searcha').show();
	$('#searcha').html("*required").css('color','red').css('font-weight','bold');
}
else{
var spinner = $("<img src='img/loader.gif' id='spinner' />").insertAfter("#search"); 
$("#search").attr('value', 'searching......');
$.post("php/search.php",{check:"Insert",search:search},
function(result){
$("#search").attr('value', 'search by id number');
 spinner.remove();
	$('#searcha').hide();
var f = result;
$('#resultb').html(result);
});
}
});