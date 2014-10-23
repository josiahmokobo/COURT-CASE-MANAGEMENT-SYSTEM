$('#submitz').click(function(){
var charges= $('#textarea').val();
var judge= $('#judge').val();
var prosecutor= $('#prosecutor').val();
var clerk= $('#clerk').val();
var accused= $('#accused').val();
var accusor= $('#accusor').val();
var court=$('#court').val();
if(charges=="")
{
	$('#charges1').html("*required").css('color','red').css('font-weight','bold').show();
}
else if(judge=="select judge")
{
	$('#judge1').html("*required").css('color','red').css('font-weight','bold').show();
}
else if(prosecutor=="select prosecutor")
{
	$('#prosecutor1').html("*required").css('color','red').css('font-weight','bold').show();
}
else if(clerk=="select clerk")
{
	$('#clerk1').html("*required").css('color','red').css('font-weight','bold').show();
}
else if(accused=="select Accused")
{
	$('#accused1').html("*required").css('color','red').css('font-weight','bold').show();
}
else if(accusor=="select Accussor")
{
	$('#accusor1').html("*required").css('color','red').css('font-weight','bold').show();
}
else if(court=="select court")
{
	$('#court1').html("*required").css('color','red').css('font-weight','bold').show();
}
else {
var spinner = $("<img src='img/loader.gif' id='spinner' />").insertAfter("#submitz"); 
$("#submitz").attr('value', 'sending......');
$.post("php/addCase.php",{check:"Insert",charges:charges,judge:judge,prosecutor:prosecutor,
	clerk:clerk,accused:accused,accusor:accusor,court:court},
function(result){
 $("#submitz").attr('value', 'add');
	 spinner.remove();
$('#charges1').hide();
$('#judge1').hide();
$('#prosecutor1').hide();
$('#clerk1').hide();
$('#accused1').hide();
$('#accusor1').hide();
$('#court1').hide();
var f = result;
$('#resultz').html(result);
});
}
});