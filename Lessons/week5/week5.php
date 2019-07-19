<?php
/* 
basics covered:
- creating, saving and running php files
- php files are essentially html files
- php tag/block: provides the area to write/declare php codes
- Line delimiter: Lines of code must be terminated with the semi-colon (;)
- Commenting: the 3 types of commenting in php. All three have been used on this file
- case sensitivity
- Code indentation
- handling white space insensitivity
- data types
- variables
- embeding php codes inside html 
*/


# outputing results 
// echo phpinfo(); // this is a single line comment
echo 34; echo '<br>';
echo 'welcome Bright!';

# mutilines comment
/* 
echo "welcome Bright!";

echo "welcome Bright!";

echo "welcome Bright!";
*/

# using html elements in PHP
echo "<center>";
echo "hello"; 
echo "<br>";
ECHO "hello"; # keywords like the echo construct is caseinsensitive. Observe the use of ECHO and echo
print 'william ofosu'; # the print construct can also be used to display results just as the echo

print '<br>';

print 34555;

# creating variables and assigning values
$user = 'Michael';
$amount = 0;

echo $user;

echo "<h2>";
echo $amount;
echo "</h2>";
echo "</center>";

# variables are case sensitive
$myName = 'William';
echo $myName;
echo $myname; //this line will generate error, because the variable $myName is not the same as the variabale $myname


# Handling the user inputs: part of the Activity:
// we use the php superglobal $_POST['index'] to collect form data
// In our example we can collect the user's data from the form as follows

echo "<h2> The errors you see down here are normal. Don't worry about them now</h2>";
    $name = $_POST['name'];
    $fpass = $_POST['first_password'];
    $spass = $_POST['second_password'];
    $age = $_POST['age'];
    $username = $_POST['username'];

    echo $username;
# NB: The errors generated on this page from collecting the form data should be 
#     seen normal at this part of our tutorial. 
#     We shall learn how to handle such errors later on in our next tutorial session

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CODE-S | Week5</title>

    <!-- css styles for activity -->
    <style>
        #form-area{
            width: 50%;
            min-height: 300px;
            margin: auto;
            background-color:#f8f8f8;
            padding: 15px 0 20px 100px;
        }
        .input-wrapper{
            margin-top:10px;
            margin-bottom:10px;
        }
    </style>
</head>
<body>
    <!- 
        Activity:
        create a program to collect a user's details including name, age, username and a password.
        Store the individual details as variables.
        Output: Welcome ...(name)! You just turned ...(age) and your username is ...(username)
        Verify if the user entered the same passwords.
    -->
    <!-- Output -->
    <hr> <!-- creates a horizontal line across page -->
    <h1>Activity output</h1>
    <h2>Welcome <i><?php echo $name; ?> !</i></h2>
    <p>You just turned <i><?php echo $age;?> </i> and your username is <i> <?php echo $username; ?></i></p>
    
    <!-- user form to collect input -->
    <div id="form-area">
    <h2>Registration Form</h2>
        <form action="week5.php" method="post">
           <div class="input-wrapper">
                <label>Name:</label><br>
                <input type="text"  name="name">
           </div>
           <div class="input-wrapper">
                <label>Password:</label><br>
                <input type="password"  name="first_password">
           </div>
            
           <div class="input-wrapper">
                <label>Confirm Pass:</label><br>
                <input type="password"  name="second_password">
           </div>

           <div class="input-wrapper">
                <label>Username:</label><br>
                <input type="text"  name="username">
           </div>

           <div class="input-wrapper">
                <label>Age:</label><br>
                <input type="text"  name="age">
           </div>

           <div class="input-wrapper">
                <input type="submit"  name="register" value="Register">
           </div>
        </form>
    </div>
</body>
</html>