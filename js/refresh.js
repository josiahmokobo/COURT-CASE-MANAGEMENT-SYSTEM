$('#refresh').click(function(){
var spinner = $("<img src='img/loader.gif' id='spinner' />").insertAfter("#refresh"); 
$("#refresh").attr('value', 'sending......');
$.post("php/cases.php",{check:"Insert"},
function(result){
$("#refresh").attr('value', 'add');
spinner.remove();
var f = result;
$('#resultb').html(result);
});
});