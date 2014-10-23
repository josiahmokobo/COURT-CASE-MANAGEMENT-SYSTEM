$('#submitu').click(function(){
var National_id=$("#National_id").val();
var Name=$("#Name").val();
var phoneNumber=$("#phoneNumber").val();
var location=$("#Location").val();
var type=$("#type").val();
var username=$("#username").val();
if(National_id=="")
{   
	$('#National_ida').show();
	$('#National_ida').html("*required").css('color','red').css('font-weight','bold');
}
else if(Name=="")
{
    $('#Namea').show();
	$('#Namea').html("*required").css('color','red').css('font-weight','bold');
}
else if(phoneNumber=="")
{   
	$('#phoneNumbera').show();
	$('#phoneNumbera').html("*required").css('color','red').css('font-weight','bold');
}
else if(location=="")
{
    $('#Locationa').show();
	$('#Locationa').html("*required").css('color','red').css('font-weight','bold');
}
else if(type=="choose user type")
{   
	$('#typea').show();
	$('#typea').html("*required").css('color','red').css('font-weight','bold');
}
else if(username=="")
{
    $('#usernamea').show();
	$('#usernamea').html("*required").css('color','red').css('font-weight','bold');
}
else{
var spinner = $("<img src='img/loader.gif' id='spinner' />").insertAfter("#submitu"); 
$("#submitu").attr('value', 'sending......');
$.post("php/addUser.php",{check:"Insert",National_id:National_id,location:location,type:type,phoneNumber:phoneNumber,username:username,Name:Name},
function(result){
 $("#submitu").attr('value', 'add');
 spinner.remove();

 $('#National_ida').hide();
 $('#Namea').hide();
$('#phoneNumbera').hide();
$('#Locationa').hide();
$('#typea').hide();
$('#usernamea').hide();
var f = result;
$('#resultu').html(result);
});
}
});