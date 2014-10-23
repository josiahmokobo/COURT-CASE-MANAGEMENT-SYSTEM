$('#submitL').click(function(){
var pass=$('#password').val();
var usertext=$('#username').val();
if(usertext=="")
{
$('#usernam').html("*required").css('color','red').css('font-weight','bold').show();
}
else if(pass=="")
{
$('#pass').html("*required").css('color','red').css('font-weight','bold').show();
}
else{
var spinner = $("<img src='bin/loader.gif' id='spinner' />").insertAfter("#submitL"); 
$("#submitL").attr('value', 'sending......');	
$.post("php/log.php",{check:"Insert", pass:pass, usertext:usertext},
function(result){
$("#submitL").attr('value', 'submit');
spinner.remove();
	$('#usernam').hide();
	$('#pass').hide();
var f=result;
$('#resultL').html(result);
}
);
}
});
