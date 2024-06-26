<h1>Array</h1>
<h2>Types of Array</h2>
<ul>
    <li>Numeric Array (Indexed Array)</li>
    <li>Associative Array</li>
    <li>Multidimensional Array</li>
</ul>

<h3>Numeric Array (Indexed Array)</h3>
Index
<?php
$fruits=['Mango','Apple','Orange'];
$vegetables=array('Potato','Cauliflower','Brinjal');
echo $fruits [1];
echo "<br>";
echo $vegetables[1];
?>

<h3>Associative Array</h3>
<?php
$student = [
    "id"=> "A01",
    "name"=>"Ram KC",
    "email" => "ram@gmail.com",
    "phone" => 1234567891,
    "address" => "Kathmandu",
    "gender" =>"Male",
    "role"=>10
];
echo "This is his email:" .$student['email'];
?>

<h3>Multidimensional Array</h3>
<p>Multidimensional Numeric Array</p>
<?php
$meals =[
    ['mango','apple','banana','guava'],
    ['potato','brinjal','cabbage','spinach'],
    ['fish','mutton','chicken',]
];

echo $meals[1][0];
echo"<br>";
echo $meals[0][3];
?>

<p>Multidimensional Associative Array</p>
<?php
$student = [
    [
    "id" => "A05",
    "name" => "Ram kc",
    "email"=>"ram1@gmail.com",
    "Mobile" =>0233445
    ],
    [
        "id" => "A02",
        "name" => "Sam kc",
        "email"=>"sam1@gmail.com",
        "Mobile" =>0233467
        ]

    ];
    echo $student[0]['Mobile'];
    ?>