$('#judgement').click(function(){
var judge=$('#srch').val();
if(judge=="")
{
	$('#good').html("*required").css('color','red').css('font-weight','bold').show();
}
else{
var spinner = $("<img src='img/loader.gif' id='spinner' />").insertAfter("#judgement"); 
$("#judgement").attr('value', 'loading......');
$.post("php/judgement.php",{check:"Insert", judge:judge },
	function(result)
	{
	$("#judgement").attr('value', 'search the case here');
	 spinner.remove();
	$('#good').hide();	
var f=result;
$('#result8').html(result);
});
}
});