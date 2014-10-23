$('#submit100').click(function(){
var witness_id=$("#witness_id").val();
var witness_name=$("#witness_name").val();
var caseId=$("#caseId4").val();
var side= $('#SIDE').val();
if(witness_id=="")
{
	$('#m').html("*required").css('color','red').css('font-weight','bold').show();
}
else if(witness_name=="")
{
	$('#mi').html("*required").css('color','red').css('font-weight','bold').show();
}
else if(caseId=="case number")
{
	$('#mo').html("*required").css('color','red').css('font-weight','bold').show();
}
else if(side=="CHOOSE THE WITNESS SIDE")
{
	$('#mu').html("*required").css('color','red').css('font-weight','bold').show();
}

else {
var spinner = $("<img src='img/loader.gif' id='spinner' />").insertAfter("#submit100"); 
$("#submit100").attr('value', 'sending......');
$.post("php/addWitness.php",{check:"Insert",witness_id:witness_id,witness_name:witness_name,caseId:caseId,side:side},
function(result){
	 $("#submit100").attr('value', 'add');
	 spinner.remove();
	 $('#m').hide();
	 $('#mi').hide();
	 $('#mo').hide();
	  $('#mu').hide();
var f = result;
$('#result100').html(result);
});
}
});