<?php
$connection = new mysqli('localhost','root','','college_newsportal');
// echo"<pre>";
// print_r($connection);
// echo"</pre>";

// //insert data
// $connection(INSERT into `tbl_student`( `name`, `phone`, `dob`, `status`) VALUES ('Ram',90000000,'2002/08/28',1));

// //fetching data
$datas = $connection -> query("SELECT * FROM tbl_student ");
$result =$datas->fetch_assoc();

echo"<pre>";
print_r($result);
echo"</pre>";