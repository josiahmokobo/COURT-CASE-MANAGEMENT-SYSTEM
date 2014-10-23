$(document).ready(function(){
$('#form').hide(500);
});
$('#toggle').click(function(){
var value= $('#toggle').attr('value');
$('#form').toggle('fast');


if(value=='hide'){
$('#toggle').attr();
$('#form').fadeIn(9);

}
else if(value=='show'){
$('#toggle').attr();
$('#form').fadeOut(9);
}
}
);