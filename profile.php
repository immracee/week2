<?php

var_dump($_POST);

echo($_POST["fname"]);
echo($_POST["lname"]);

if(!isset($_POST["acceptTerms"])){
	echo("acceptTerms not received");
}else{
	if($_POST["acceptTerms"] == "on"){
		echo("they accepted");
	}
}

?>


<?php

var grades = [];

for(var i=0; i < 5; i++){
	var randomNumber = Math.floor(Math.random()*100);
	grades[i] = randomNumber;
}

console.log(grades);

/**
var arr = [11,56,89, 45, 99];
var total = 0;

for(var i=0; i<arr.length; i++){
	console.log(arr[i]);
	total = total + arr[i];
}

var average = total/arr.length;
console.log("Average", average);
*/





//show cart contents
$cart = ["prunes","muffins","oj", "Kale", "20% milk"];
echo($cart[0]);
echo($cart[1]);
echo($cart[2]);

?><ul><?php
for($i = 0; $i < count($cart); $i++){
	?><li><?php
	echo($i);
	echo($cart[$i]);
	?></li><?php
}
?></ul><?php

//repeat a word 5 times

for($i = 0; $i < 5; $i++){
	echo($i);
	echo('<h1>');
	echo('I am looping');
	echo('</h1>');
}


?>
