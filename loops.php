<h1>loops in php</h1>
<p>Types of loops</p>
<ul>
    <li>for</li>
    <li>while</li>
    <li>for each</li>
<ul>

<h3>while loop<h3>
    <?php
    $i=10;
    while($i>0){
        echo $i;
        echo"<br>";
        $i--;
    }
    ?>


    <h3>if loop</h3>
    <?php
    for($j=1;$j<=50;$j++){
        if(($j % 2)==0){
        echo "<br>";
        echo $j;
    }
}
    ?>

<h3> odd number</h3>
    <?php
    for($j=1;$j<=50;$j++){
        if(($j % 2)!=0){
        echo "<br>";
        echo $j;
    }
}
    ?>

    <h3>for each</h3>
    <?php
    $fruits =['Mango','apple','banana'];
    foreach($fruits as $value){
        echo $value;
        echo"<br>";
    
}
echo "===================================";
echo"<br>";
$Single_student=[
    "id" => "A05",
    "name" => "Ram kc",
    "email"=>"ram1@gmail.com"

];

foreach($Single_student as $key => $value) {
    echo $key . ':' .$value;
    echo"<br>";
}

echo "========== Multidimensional Array ============";
echo"<br>";
$group_of_students =[
    [
        "id" => "A05",
        "name" => "Ram kc",
        "email"=>"ram1@gmail.com",
        "Mobile" => 233445
        ],
        [
            "id" => "A02",
            "name" => "Sam kc",
            "email"=>"sam1@gmail.com",
            "Mobile" => 233467
        ],
            [
                "id" => "A01",
                "name" => "Sita kc",
                "email"=>"sita1@gmail.com",
                "Mobile" => 2336322
                ] ,

                [
                    "id" => "A03",
                    "name" => "Rita chettri",
                    "email"=>"rita1@gmail.com",
                    "Mobile" =>  46758
                ]
     ];
                // foreach($group_of_students as $std){
                //     foreach($std as $key => $value){
                //         echo $key . ':' .$value;
                //         echo"<br>";
                //     }
                // }
                 
                foreach($group_of_students as $std){
                    echo"<br>";
                    echo "id". ':' .$std['id'];
                    echo "name". ':' .$std['name'];
                    echo "email". ':' .$std['email'];
                }
?>
<?php

$students = [
  [
    "id" => "A05",
    "name" => "Ram kc",
    "email" => "ram1@gmail.com",
    "Mobile" => 0233445
  ],
  [
    "id" => "A02",
    "name" => "Sam kc",
    "email" => "sam1@gmail.com",
    "Mobile" => 0233467
  ]
];

// // Print table header
// echo "<table>";
// echo "<tr>";
// foreach ($students[0] as $key => $value) { // Access keys from the first student
//   echo "<th>", $key, "</th>";
// }
// echo "</tr>";

// // Print table rows
// echo "<tbody>";
// foreach ($students as $student) {
//   echo "<tr>";
//   foreach ($student as $value) { // Iterate through values in each student
//     echo "<td>", $value, "</td>";
//   }
//   echo "</tr>";
// }
// echo "</tbody>";

// echo "</table>";

?>
<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>Mobile</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($students as $value) {?>
            <tr>
                <td><?php echo  $value['id'];?></td>
                <td><?php echo  $value['name'];?></td>
                <td><?php echo $value['email'];?></td>
                <td><?php echo $value['Mobile'];?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>