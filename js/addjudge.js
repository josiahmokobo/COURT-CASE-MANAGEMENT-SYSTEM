$(function(){
$("#submit1").click(function(){
 var jid=$("#jid").val();
var jname=$("#jname").val();
alert(id);
$.post("php/addjudge.php",{check:"Insert",jname:jname,jid:jid},
function(result){
var f = result;
alert(f);
$('#result2').html(result);
});
});
});
