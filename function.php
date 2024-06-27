<h1>Function</h1>
<p>Function is a reusable block of code which perform specific task!</p>
<ul type start="10">
    <li>Name Function</li>
    <li>Anonymous Function</li>
    
</ul>
<h2>Name Function</h2>
<?php
function sayHello()
{
    echo "Hello Ram";

}

// sayHello();
// sayHello();

echo"<br>";
function sayHellowithName($name,$place)
{
    echo"Hello " .  $name ." Welcome " . $place;
    echo"<br>";
    
}
sayHellowithName('Ram', 'college');
sayHellowithName('Sita', 'Home');

//return type function
function sum_of_two_number($num1, $num2)
{
    
    return $num1+$num2;
}
echo sum_of_two_number(5,9);
echo"<br>";
?>
<h2>Anonymous function</h2>
<?php
(function($email)
{
    echo"I am anonymous function: " .$email;
})('ram@gmail.com');

//nested function
function greeting($address)
{
    echo $address;

     //closer function
     function welcome($name){
        echo"Hello", $name ."Welcome to: " . $address;
     }
}
echo"<br>";
greeting('Arunima College');
?>