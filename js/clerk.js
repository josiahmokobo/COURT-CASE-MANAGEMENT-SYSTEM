$('#submit3').click(function(){
var ClerkId=$("#ClerkId").val();
var ClerkName=$("#ClerkName").val();
if(ClerkId=="")
{
	$('#id1').html("*required").css('color','red').css('font-weight','bold').show();
}
else if(ClerkName=="")
{
	$('#name1').html("*required").css('color','red').css('font-weight','bold').show();
}
else {
var spinner = $("<img src='img/loader.gif' id='spinner' />").insertAfter("#submit3"); 
$("#submit3").attr('value', 'sending......');
$.post("php/addClerk.php",{check:"Insert",ClerkId:ClerkId,ClerkName:ClerkName},
function(result){
	 $('#id1').hide();
	 $('#name1').hide();
	 $("#submit3").attr('value', 'add');
	 spinner.remove();
var f = result;
$('#result3').html(result);
});
}
});