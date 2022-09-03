<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poshnun Oupjan 6314110007</title>
</head>

<body>
    <?php $myObj1 = [
        "name" => "John", "age" => 30,
        "city" => "New York",
    ];
    $myJSON1 = json_encode($myObj1);
    echo $myJSON1;
    echo "<br>"; 
    //$myArr = ["John", "Mary", "Peter", "Sally"]; 
    $myArr =array("John", "Mary", "Peter", "Sally");
    $myJSON2 = json_encode($myArr); echo $myJSON2;
    ?>
   <br> <br><a href="../Lab12/index.html">Back</a>
</body>

</html>