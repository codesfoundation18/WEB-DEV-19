<?php

// some user defined functions 
function  dArray($array) 
{
	echo '<pre>';
    print_r($array);
    echo '</pre>';
}


function nextLine($num) {
	if ($num == 1) {
		echo '<br>';
	}
	elseif($num == 2) {
		echo '<br><br>';
	}
	elseif($num == 3) {
		echo '<br><br><br>';
	} 
	else{
		  die("Argument must be between 1 and 3 inclusive!");
	}

}

?>