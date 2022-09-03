<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poshnun Oupjan 6314110007</title>
</head>

<body>
    <?php

    // create array fruits 
    $fruits = array("apple", "orange", "banana");

    // iterate through each array element 
    for ($i = 0; $i < count($fruits); $i++) {

        // call function strcmp to compare the array element 
        // to string "banana" 
        if (strcmp($fruits[$i], "banana") < 0)
            print($fruits[$i] . " is less than banana ");
        elseif (strcmp($fruits[$i], "banana") > 0)
            print($fruits[$i] .
                " is greater than banana ");
        else
            print($fruits[$i] . " is equal to banana ");

        // use relational operators to compare each element 
        // to string "apple" 
        if ($fruits[$i] < "apple")
            print("and less than apple! <br />");
        elseif ($fruits[$i] > "apple")
            print("and greater than apple! <br />");
        elseif ($fruits[$i] == "apple")
            print("and equal to apple! <br />");
    }
    ?><br><a href="../Lab9/index.html">Back</a>
</body>

</html>