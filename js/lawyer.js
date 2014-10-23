$('#submit20').click(function(){
var lawyerid=$('#lawyerid').val();
var lawyerName=$("#lawyerName").val();
if(lawyerid=="")
{
	$('#id2').html("*required").css('color','red').css('font-weight','bold').show();
}
else if(lawyerName=="")
{
	$('#name2').html("*required").css('color','red').css('font-weight','bold').show();
}
else {
var spinner = $("<img src='img/loader.gif' id='spinner' />").insertAfter("#submit20"); 
$("#submit20").attr('value', 'sending......');
$.post("php/addLawyer.php",{check:"Insert",lawyerid:lawyerid,lawyerName:lawyerName},
function(result){
	 $('#id2').hide();
	 $('#name2').hide();
	 $("#submit20").attr('value', 'add');
	 spinner.remove();
var f = result;
$('#result20').html(result);
});
}
});