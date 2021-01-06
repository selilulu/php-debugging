<?php


function new_exercise($x) {
    // $x=1; this variable we move it as an argument above,that way we can show the other numbers following for next exercises
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}

new_exercise(1);
new_exercise(2);
// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];

$monday = $week[0];

echo $monday;
new_exercise(3);
// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed


$str = "Debugged ! Also very fun";
echo substr($str, 0, 10);

new_exercise(4);
// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!


// some notes from me ;
//add & before the second argument below $day so you can get the value of it 
// foreach (iterable_expression as $value)
//     statement
// foreach (iterable_expression as $key => $value)
//     statement
foreach($week as &$day) {
    $day = substr($day, 0, -3);
}

print_r($week);
new_exercise(5);
// === Exercise 5 ===
// The array should be printing every letter of the alphabet (a-z) but instead it does that + aa-yz
// Fix the code so the for loop only pushes a-z in the array

$arr = [];
for ($letter = 'a'; $letter !='z'; $letter++) { //in this case with != z is not included...
    array_push($arr, $letter);
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alphabetical array

new_exercise(7);
function copyright(int $year) {
    return "&copy; $year BeCode";
}


//print the copyright
copyright(date('Y'));



///
///
///







?>