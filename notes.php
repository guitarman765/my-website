<?php
/*
Linking pages.

Within the same folder
<a href="thefile.html">my link</a>

Within the parent folder's directory:
<a href="../thefile.html">my link</a>

Within a sub-directory:
<a href="subdir/thefile.html">my link</a>


php does not use html.index if .html will be .php

if file is ONLY PHP only need <?php and not the ending ?>

dont leave whitespace after ending php tag in pure php pages

escaping php/html = seperating them in the code


scalar data types -
string
integer
float
boolean

compund types
array
object
callable
iterable

special types
resource
NULL

SQL query (Double / Single)
"SELECT person
 WHERE name='Daniel'
 ASC"

echo 'I\'m learning PHP!';

VARIABLES
<?php
 $myName = "Daniel";
 $myAge = 28;
 $havePet = true;
?>

empty value
$someInfo;

<?php
 CONSTANCE
 CONST PI = 3.14;
 CONST YOUAREGOING = true;
?>

OPERATORS
== - same value not same data type
=== - same value and data type
!= - not the same value
!== - not same value and data type
<=> - spaceship - left is greater(1) same (0) right greater (-1) three types of outcomes
	when comparing numbers
<?php
 $num1 = 5;
 $num2 = 10;
 $num1 === 5 and $num2 ===10;
 // shorthand
 $num1 === 5 && $num2 ===10;
?>
or = ||
and = &&
xor
 if both true = false
 if one is true = true
 if both are false = false
!$num1 === 6; opposite of wht comes back

incrementors/decrementors
++$num1; outputs 6 (adds number then outputs)
$num1++; output 5 (outputs then adds number)
-- = subtract

string operators
combines the strings
$a = "My name ";
$b = "is Daniel!";
$c = $a . $b;


control structures
conditional statement (if)
if =
elseif =
else =

<?php
 if ($a === $b){
  echo "They are the same!";
 }
 elseif ($b === 5) {
  echo "Variable 'b' is equal to 5";
 }
 else {
  echo "They are NOT the same!";
 }
?>

SWITCH STATEMENT

$a = 50;

switch (a$) {
	case 25:
		echo "Variable is equal to 25!";
		break;
	case 50:
		echo "Variable is equal to 50!";
		break;
	default:
		echo "None were true!";
		break;
}
switches better many blocks of code with many outcomes

WHILE LOOPS - get data from db and spit out data one by one by looping
$a = 1;
while ($a <= 10) {
	echo "Loop number " . $a++;
}

DO-WHILE LOOP - runs the block at least once then checks
$a = 1;

do {
	echo "Loop number " . $a++;
} while ($a <= 10);

FOR LOOP - specific number of loops
for ($i = 0; $i < 10; $i++) {
	echo "This will loop 10 times!";
}

FOREACH LOOP - loop as many times as there is data in the array.
$array = ["Daniel", "Timmy", "Jane"];

foreach ($array as $value) {
	echo $value;
}

ASSOCIATIVE ARRAY
$array = [
	"Name" => "Daniel",
	"Eyecolor" => "Blue"
];

foreach ($array as $Key => $Value) {
	echo $key . ": " . $value;
// first loop = Name: Daniel
// Second loop = Eyecolor: Blue


include 'test.php';
	links to a file, throws a warning if file cant be found.
include_once 'test.php';
	same a include but looks to see if file is linked already, just wont run the include statement
require 'test.php';
	throws fatal error if file cant be found
require_once 'test.php';
	same but is also check if already linked, if you have itll throw a fatal error

string replace
$a = "Hello world!";
str_replace("world", "Daniel", $a);

$a = "Hi";
str_repeat($greeting, 3);

string position
$a = "Hello world!";
$chars = "lo";
stripos($a, $chars);

USER DEFINED FUNCTION
	reusable and easier to use
	better optimization
	load code before needing it

function calcAdd($num1, $num2) {
	$value = $num1 + $num2;
	return $value;
        }
echo calcAdd(2, 4);















*/
?>
