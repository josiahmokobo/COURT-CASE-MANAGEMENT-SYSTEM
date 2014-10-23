$('#submit7').click(function(){
var AccusedId=$("#AccusedId").val();
var AccusedName=$("#AccusedName").val();
var caseme=$("#caseme").val();
var rawyer=$('#rawyer').val();

if(AccusedId=="")
{
	$('#w').html("*required").css('color','red').css('font-weight','bold').show();
}
else if(AccusedName=="")
{
	$('#wi').html("*required").css('color','red').css('font-weight','bold').show();
}


else if(caseme=="case number")
{
	$('#result9').html("*required").css('color','red').css('font-weight','bold').show();
}
else if(rawyer=="lawyer_name")
{
	$('#m0').html("*required").css('color','red').css('font-weight','bold').show();
}
else {
var spinner = $("<img src='img/loader.gif' id='spinner' />").insertAfter("#submit7"); 
$("#submit7").attr('value', 'sending......');
$.post("php/addAccussed.php",{check:"Insert",AccusedId:AccusedId,AccusedName:AccusedName,caseme:caseme,rawyer:rawyer},
function(result){
	 $("#submit7").attr('value', 'add');
	 spinner.remove();
	$('#w').hide();
	$('#wi').hide();
	$('#wo').hide();
var f = result;
$('#result6').html(result);
});
}
});
