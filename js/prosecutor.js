$('#submit2').click(function(){
var ProIdd=$("#ProIdd").val();
var ProName=$("#ProName").val();
if(ProIdd=="")
{
$('#pro').html("*required").css('color','red').css('font-weight','bold').show();	
}
else if(ProName=="")
{
	
	$('#ProNa').html("*required").css('color','red').css('font-weight','bold').show();
}
else{
var spinner = $("<img src='img/loader.gif' id='spinner' />").insertAfter("#submit2").show(); 
$("#submit2").attr('value', 'sending......');
$.post("php/addprosecutor.php",{check:"Insert",ProIdd:ProIdd,ProName:ProName},
function(result){
	 $("#submit2").attr('value', 'add');
	 spinner.remove();
	 $('#pro').hide();
	 $('#ProNa').hide();
var f = result;
$('#result1').html(result);
});
}
});