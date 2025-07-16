<?php
// PHP Basics
echo "Hello, world! This is a PHP basics example.";
print "<br>";

print date("Y-m-d H:i:s");
print "<br>";

print date("l ");
Print "<br>";

$yob = 1990;
print $yob;
print "<br>";

$age = date("Y") - $yob;

print "<br>";
print "Your age is: $age";

print "<br>";
print $lname . ' is '. $age . ' years old.';
print "<br>";

if ($age > 18) {
    print "You are an adult.";
} else {
    print "You are a minor.";
}

print "<br>";
print date("l Y-m-d H:i:s", strtotime("+1 day"));
print "<br>";

print date("l Y/m/d H:i:s", strtotime("+1 week"));
print "<br>";

print date("l Y M D H:i:s", strtotime("+1 month"));
print "<br>";

// Using a variable in a string
$greetings = "Hello";

$about['name'] = "John";
$about['age'] = 30;
print "<br>";

$oper = [ 'name' => 'John', 'age' => 30, 'city' => 'New York' ];

print "Name: {$oper['name']}, Age: {$oper['age']}, City;
    {$oper['city']}";
?>