$(document).ready(function(){
	$('#form1').show(1);
});
$('#toggle1').click(function(){
var value= $('#toggle1').attr('value');
$('#form1').slideToggle(1);
$('#form2').hide(1);
$('#form3').hide(1);
$('#form4').hide(1);
$('#form5').hide(1);
$('#form6').hide(1);

if(value=='hide'){
$('#toggle1').attr();
$('#form1').slideToggle(1);

}
else if(value=='show'){
$('#toggle1').attr();
$('#form1').slideToggle(1);
}
}
);

$('#toggle2').click(function(){
var value= $('#toggle2').attr('value');
$('#form2').slideToggle(1);
$('#form1').hide(1);
$('#form3').hide(1);
$('#form4').hide(1);
$('#form5').hide(1);
$('#form6').hide(1);

if(value=='hide'){
$('#toggle2').attr();
$('#form2').slideToggle(1);

}
else if(value=='show'){
$('#toggle2').attr();
$('#form2').slideToggle(1);
}
}
);

$('#toggle3').click(function(){
var value= $('#toggle3').attr('value');
$('#form3').slideToggle(1);
$('#form2').hide(1);
$('#form1').hide(1);
$('#form4').hide(1);
$('#form5').hide(1);
$('#form6').hide(1);

if(value=='hide'){
$('#toggle3').attr();
$('#form3').slideToggle(1);

}
else if(value=='show'){
$('#toggle3').attr();
$('#form3').slideToggle(1);
}
}
);

$('#toggle4').click(function(){
var value= $('#toggle4').attr('value');
$('#form4').slideToggle(1);
$('#form2').hide(1);
$('#form3').hide(1);
$('#form1').hide(1);
$('#form5').hide(1);
$('#form6').hide(1);

if(value=='hide'){
$('#toggle4').attr();
$('#form4').slideToggle(1);

}
else if(value=='show'){
$('#toggle4').attr();
$('#form4').slideToggle(1);
}
}
);
$('#toggle5').click(function(){
var value= $('#toggle5').attr('value');
$('#form5').slideToggle(1);
$('#form2').hide(1);
$('#form3').hide(1);
$('#form1').hide(1);
$('#form4').hide(1);
$('#form6').hide(1);

if(value=='hide'){
$('#toggle5').attr();
$('#form5').slideToggle(1);

}
else if(value=='show'){
$('#toggle5').attr();
$('#form5').slideToggle(1);
}
}
);

$('#toggle6').click(function(){
var value= $('#toggle6').attr('value');
$('#form6').slideToggle(1);
$('#form2').hide(1);
$('#form3').hide(1);
$('#form1').hide(1);
$('#form4').hide(1);
$('#form5').hide(1);
if(value=='hide'){
$('#toggle6').attr();
$('#form6').slideToggle(1);

}
else if(value=='show'){
$('#toggle6').attr();
$('#form6').slideToggle(1);
}
}
);
