<?php
	/* // Variables
    $test="I\"m a variable";
	$test2 = "Me too";
	$number=75;
	$name="Rob";
	$a="name";
	echo $$a;
	*/ // Variables
	
	/* // Arrays
	$myArray=array("pizza", "chocolate", "coffe");
	print_r($myArray);

	echo "<br/><br />";

	$anotherArray[0]="pizza";
	$anotherArray[1]="yoghurt";
	print_r($anotherArray);

	echo "<br/><br />";

	$thirdArray=array(

		"France" => "French",
		"USA" => "English",
		"Germany" => "German"

	);
	print_r($thirdArray);

	echo "<br/><br />";

	$anotherArray[]="salad";
	print_r($anotherArray);

	echo "<br/><br />";
	
	unset($thirdArray["Germany"]);
	print_r($thirdArray);

	echo "<br/><br />";

	$name="Rob";
	unset($name);
	echo $name;
	*/ // Arrays


	/* // if statement
	$number=1;
	$anothernumber=2;
	$thirdnumber=2;

	if ($number==$anothernumber OR $anothernumber==$thirdnumber) {
		echo "True!";
	}else{
		echo "False!";
	}
	*/ // if statement

	/* // Loops for and foreach
	$array=array("cat", "dog", "turtle", "panda");
	print_r($array);

	echo "<br/><br />";

	foreach ($array as $key => $value) {
		echo "Key: $key Value: $value </br />";
	}

	for ($i=500; $i>=100; $i=$i-5){
		echo $i."<br />";
	}
	*/ // Loops for and foreach





?>