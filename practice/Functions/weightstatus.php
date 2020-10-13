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
function weightstatus(){
	$height=$_POST["height"];
	$weight=$_POST["weight"];
	$mheight=$height/100;
	
	
	
$rawbmi=$weight/($mheight*$mheight);
	$bmi=number_format($rawbmi,2);
	

if($bmi>0 && $bmi<18.5){//checks if underweight
		 $status="underweight";}
		 elseif ($bmi>=18.5 && $bmi<25){//checks if normal
		 	 $status="normal";
 } elseif ($bmi>=25 && $bmi<30){//checks if overweight
		 	 $status="overweight";
 }elseif ($bmi>=30){//checks if obese
		 	 $status="obese";
 }else{
 	$status ="Invalid <br>";//invalid choice
}
		 	# code...
echo $status;
}


if ($error) {
	echo $error;
}

else{

	
	weightstatus();
}
















?>
