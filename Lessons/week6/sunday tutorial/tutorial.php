<?php
  
 // import/require functions
 require('functions.php'); // reference the functions file

  ## arrays
  #Numeric arrays
  $fruits = array('mango', 'apple', 'orange', 'berry');// a numeric array

  // viewing the structure of an array
  var_dump($fruits); // see values and types
  print_r($fruits);  // see values

  echo '<br>';
  # accessing/getting array elements
  # The echo statement cannot be used directly on arrays.
  echo $fruits; // generates a string to array conversion error

  echo $fruits[1]; // outputs the second array element
  // echo $fruits[2];

  // Associative array
  $student = array('name'=>'Ama', 'age'=>23, 'class'=>4, 'gender'=>'female');
  print_r($student);

  //echo '<br>';
  nextLine(3);

  echo $student['gender']; // accessing array element

  // multi-dimensional array
  $student1 = array('name'=>'Ama', 'age'=>23, 'class'=>4, 'gender'=>'female');
  $student2 = array('name'=>'Kofi', 'age'=>18, 'class'=>6, 'gender'=>'male');
  $student3 = array('name'=>'Collins', 'age'=>30, 'class'=>5, 'gender'=>'male');

  $students =  array($student1, $student2, $student3); // $students is a multi-dimensional array: an array of array
  $students_other =  array(

  							'kofi'=>$student1, 
  							'ama'=>$student2, 
  							'collins'=>$student3
  						); // another example with keys spicified


  dArray($students_other); // view array structure

  dArray($students); // view array structure

  $kofi = $students[1];
  echo $kofi['name'];

  echo $students[1]['name'];

  nextLine(2);

  ##  loops
  
  # using for loop
  for($x =1; $x<=10; $x += 2) {
  		//echo "welcome <br>";
  		echo $x;nextLine(1);
  }

 // using while loop
 $x = 0;
 while($x<=10) {
 	echo $x;nextLine(1);

 	$x++;
 }

$x = 0;
while(true) {
	 
	 if($x = 15) {
	 	echo '<br> Guess number:'. $x . '<br>';
	 	break;
	 }
   $x++;
}
nextLine(1);
echo count($fruits);
nextLine(1);


## looping through arrays
for($key=0; $key<count($fruits); $key++) {
		echo $fruits[$key];nextLine(1);
}


// use foreach loop to loop through any kind of array
foreach($fruits as $fruit) {
	echo $fruit;
}
nextLine(2);


foreach($student1 as $value) {
	echo $value;
}





## requiring/referencing other files
# use the function require, require_once or include

require('form.html'); // we reference a file like so
?>









