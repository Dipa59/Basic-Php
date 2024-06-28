<?php
class student
{
    var $id, $name, $email, $roll_no, $phone,$gender,$address,$status;
    function __construct($id,$name)
    {
        // echo"I am construct method";
        $this->id= $id;
        $this->name = $name;
    }
    function sayHello()
    {
        echo"Hello world";
        echo"<br>";
    }
}
// $stud = new student();
// $stud->sayHello();
 $ram = new student(1001,"Ram Thapa");
//  $ram->id =1001;

 echo"<pre>";
 print_r($ram);
 echo"</pre>";

 $hari = new student(1002,"Hari kc");
// $hari-> id =1002;

echo"<pre>";
 print_r($ram);
 echo"</pre>";



