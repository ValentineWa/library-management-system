<?php
$height=$_POST["height"];
$weight=$_POST["weight"];
$error ='';

if(!$height){
	$error .="input height value <br>";
}

if(!$weight){
	$error .="input weight value <br>";
}

if (!is_numeric($weight)) {
	$error .="weight value is not a number <br>";
}
if (!is_numeric($height)) {
	$error .="height value is not a number <br>";
}
if($height=""){
	echo "input height value";
}

if($weight=""){
	echo "input weight value";
}

function calculatebmi(){
	$height=$_POST["height"];
	$weight=$_POST["weight"];
	$mheight=$height/100;


	$rawbmi=$weight/($mheight*$mheight);
	$bmi=number_format($rawbmi,2);
	echo $bmi."KG/M";


}
if ($error) {
	echo $error;
}

else{

	
	calculatebmi();
}



















?>
