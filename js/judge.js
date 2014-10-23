$('#submit1').click(function(){
var jid=$("#jid").val();
var jname=$("#jname").val();
if(jid=="")
{   
	$('#id').show();
	$('#id').html("*required").css('color','red').css('font-weight','bold');
}
else if(jname=="")
{
    $('#name').show();
	$('#name').html("*required").css('color','red').css('font-weight','bold');
}
else{
var spinner = $("<img src='img/loader.gif' id='spinner' />").insertAfter("#submit1"); 
$("#submit1").attr('value', 'sending......');
$.post("php/addjudge.php",{check:"Insert",jid:jid,jname:jname},
function(result){
	 $("#submit1").attr('value', 'add');
	 spinner.remove();
	 	$('#id').hide();
	    $('#name').hide();
var f = result;
$('#results').html(result);
});
}
});