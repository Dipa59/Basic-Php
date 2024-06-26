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
                    echo"<br>"
                    echo "id". ':' .$std['id'];
                    echo "name". ':' .$std['name'];
                    echo "email". ':' .$std['email'];
                }
?>