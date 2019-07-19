<?php 

// More on data types

## String manipulations
echo '<h1> String Manipulations </h1>';
$full_name = 'Agyemang Collins';
echo  "Agyemang Collins";
echo '<br>';
echo $full_name; // get the same name using a variable

// getting string length 
$name_length = strlen($full_name);
echo $name_length; // returns 16, with the space included
echo '<br>';

// getting first occurrence of a string in another string
$greeting = "hello world";
echo strpos($greeting, 'world');// returns 6 instead of 7 because string position starts from 0
echo '<br>';
echo strpos($full_name, 'Collins'); // returns 9 instead of 10

$full_name = " william agyapong  ";

$fruits = 'mango orange apple pineapple';
$num_words = str_word_count($fruits); // returns number of words in a string

echo "<h4> There are $num_words words in the variable fruits </h4>";

# stripping white spaces and other characters before and after a string
echo '<h3>Stripping white spaces or specified characters at the ends of a string </h3>';
echo 'number of characters before stripping: ' ;
echo strlen($full_name);
// remove both left and right white spaces from a string
$full_name = trim($full_name);

echo "<br>number of characters After stripping: ";
echo strlen($full_name);
$full_name = " William Agyapong,";
echo '<br> full name before stripping: ';
echo $full_name;
$full_name = rtrim($full_name, ','); // removes the trailing comma
echo '<br> full name after stripping: ';
echo $full_name; // returns full name without the trailing comma
ltrim($full_name); // removes the left white space only


// STRING CONCATENATION: USE THE DOT OPERATOR
echo '<h3> String Concatenation</h3>';
$first_name = "William";
$last_name = "Agyapong";
// we wish to print both first and last names together as single string

//first alternative
echo '<h5>First alternative</h5>';
echo 'My name is:';
echo $first_name;
echo " ";
echo $last_name;

// second alternative 
echo '<h5> Second alternative</h5>'; 
echo "My name is:  $first_name $last_name";
echo '<br> $first_name $last_name';// returns the literal variable names. Don't use single quotes for this

// third alternative
echo '<h5>Third alternative: using the concatenation operator </h5>';
$full_name = $first_name .' '. $last_name; // using the concatenation operator
echo 'My name is: ' . $full_name;


echo "<h2> OPERATORS </h2>";
/* 
  OPERATORS
- arithmetic 
- assignment 
- increment/decrement
- comparison
- logical
*/

$x = 2;
$y = 3;

echo '<h2> Arithmetic Operators </h2>';

 echo $x + $y; // addition
 echo '<br><br>'; 
 echo $y - $x; // subtraction
 echo '<br><br>';
 echo $x * $y; // multiplication

 echo '<br><br>';
 echo $y / $x; // division

 echo '<br><br>';
echo $y % $x; // modulus

echo '<br><br>';
echo pow($x, $y); // exponentiation
echo '<br><br>';

echo $x ** $y; // alternative form of exponentiation 

echo '<h2> Assignment Operators </h2>';

$counter = 0;
echo $counter;
$counter = $counter + 5;
$counter += 10; // alternative short-hand assignment
echo '<br><br>';
echo $counter;

echo $fruits;
$fruits .= ' Berry'; // same as $fruits = $fruits . ' Berry';
echo '<br>';
echo $fruits;

title2('Increment Operators'); // this function is created below, used here for demonstration
//pre incrementing: increase value by 1 before use
$z = 9;
echo ++$z; // this returns 10
echo '<br>';
// post incrementing: increase value by 1 after use
$k = 9;
echo $k++; // at this point the value of k is still 9 though it has been incremented
echo '<br>';
echo $k; // this now returns 10. Note the difference between this and the pre incrementing

## decrement operators work the same way except that the decrease the value by 1
$age = 14;
echo '<br>';
echo --$age; // this returns 13

$amount = 100;
echo '<br>';
echo $amount--; // returns 100 at this point
echo '<br>';
echo $amount; // current value of $amount is now 99

echo '<h2>Comparison Operators</h2>'; 
// Used to compare values
echo '== : for equality <br>';
echo '< : less than <br>';
echo '> : greater than <br>';
echo '<= : less than or equal to <br>';
echo '>= : greater than or equal to <br>';
$x = 2;
$y = 4;
echo $x == $y;

echo '<h2> Logical Operators </h2>';
/*
  The OR operator: OR/or/ || 
  The AND operator: AND/and/&&
  The NOT operator: !
*/
echo '<h2> Conditional Statements </h2>';
$x = TRUE; // assign x to a boolean value
$y = FALSE; // assign y to a boolen value
echo $x AND $y; // true if both x and y are true, returns FALSE(null) in this case
echo $x OR $y; // true if either x or y is trure, returns TRUE(1) in this case
echo !$y; // true if y is false, returns TRUE(1) in this case

# NB: PHP interprets zero (0) as false and all other numbers as true

// using logical operators and if statements
if($x and $y) {
	// code to run if true
	echo "<h4> it is true </h4>";

} else {
	// code to run if false
	echo "<h4>It is false </h4>";
}

if($x || $y) {
	// code to run if true
	echo " <h4>it is true </h4>";
}

// using comparison operators and if statements
$age = 14;
if($age < 18) {
	echo '<h4>You are too young to vote </h4>';
} else {
	echo '<h4>You are eligible to vote since you are above 18 years <h4>';
}


## functions 
title('Writing Your own Functions', 1); // this function is created below

// this function does not take any argument
function nline() {
	echo '<br><br>';
}
echo "A journey of thousand miles begins with a step";
nline(); 
echo "Happy coding";
// this function takes two arguments: the text to display and the header level
function title($text, $h_level) {
	echo "<h$h_level>". $text . "</h$h_level>";

}

title('I am the title function', 3); // call the function with two required arguments

// specifying a default value
// this function displays a text in header 2 tag when the level is not specified
function title2($text, $h_level= 2) {
	echo "<h$h_level>". $text . "</h$h_level>";

}

title2("Hello world"); // header 2 tag is used by default


// create a function to add two numbers
function add($x, $y) {
	echo $x + $y; // the sum is printed immediately the function is called
}

// Returning value instead
function add2($x, $y) {
	return $x + $y; 
} 

// function call
echo '5 + 4 = ';
add(5,44);
nline();
$sum =  add2(60, 10); // store the returned value for later use
echo $sum; nline();

if(isset($_POST['form_submitted']))
{
	$fnum = $_POST['first_number'];
	$snum = $_POST['secon_number'];
	
	echo $fnum .' + '. $snum .' = ';
	add($fnum, $snum);
}


 ?>

 <h4>Find the sum of two numbers<h4>
 <form action="week6.php" method="post">
 	<input type="text" name="first_number"><br><br>
 	<input type="text" name="secon_number"><br><br>

 	<input type="submit" name="form_submitted" value="ADD">
 </form>














