$('#submit4').click(function(){
var court_id=$("#court_id").val();
var court_name=$("#court_name").val();
var clerk_id=$("#clerk_id").val();
var judge_id=$("#judge_id").val();
var prosecutor_id=$("#prosecutor_id").val();
if(court_id=="")
{
	$('#courtID').html("*required").css('color','red').css('font-weight','bold').show();
}
else if(court_name=="")
{
	$('#courtN').html("*required").css('color','red').css('font-weight','bold').show();
}
else if(clerk_id=="select clerk")
{
	$('#clerk').html("*required").css('color','red').css('font-weight','bold').show();
}
else if(judge_id=="select judge")
{
	$('#judge').html("*required").css('color','red').css('font-weight','bold').show();
}
else if(prosecutor_id=="select prosecutor")
{
	$('#prosecutor').html("*required").css('color','red').css('font-weight','bold').show();
}
else {
var spinner = $("<img src='img/loader.gif' id='spinner' />").insertAfter("#submit4"); 
$("#submit4").attr('value', 'sending......');
$.post("php/addCourt.php",{check:"Insert",clerk_id:clerk_id,court_name:court_name,court_id:court_id,judge_id:judge_id,prosecutor_id:prosecutor_id},
function(result){
	 $("#submit4").attr('value', 'add');
	 spinner.remove();
$('#courtID').hide();
$('#courtN').hide();
$('#clerk').hide();
$('#judge').hide();
$('#prosecutor').hide();
var f = result;
$('#result4').html(result);
});
}
});