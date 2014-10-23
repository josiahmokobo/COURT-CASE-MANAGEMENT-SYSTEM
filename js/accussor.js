$('#submit5').click(function(){
var AccussorId=$("#AccussorId").val();
var AccussorName=$("#AccussorName").val();
var caseId=$("#caseId").val();
var lawyer_id2=$('#lawyer_id2').val();
if(AccussorId=="")
{
	$('#s').html("*required").css('color','red').css('font-weight','bold').show();
}
else if(AccussorName=="")
{
	$('#si').html("*required").css('color','red').css('font-weight','bold').show();
}
else if(caseId=="case number")
{
	$('#s1').html("*required").css('color','red').css('font-weight','bold').show();
}
else if(lawyer_id2=="lawyer_name")
{
	$('#s2').html("*required").css('color','red').css('font-weight','bold').show();
}
else {
var spinner = $("<img src='img/loader.gif' id='spinner' />").insertAfter("#submit5"); 
$("#submit5").attr('value', 'sending......');
$.post("php/addAccussor.php",{check:"Insert",AccussorId:AccussorId,AccussorName:AccussorName,caseId:caseId,lawyer_id2:lawyer_id2},
function(result){
$("#submit5").attr('value', 'add');
	 spinner.remove();
$('#s').hide();
$('#si').hide();
$('#so').hide();
var f = result;
$('#result5').html(result);
});
}
});
