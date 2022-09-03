<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poshnun Oupjan 6314110007</title>
</head>

<body>
    <table border="0" cellpadding="2" cellspacing="0" width="100%">
        <?php

        // print the key and value for each element 
        // in the $_ENV array 
        foreach ($_SERVER as $key => $value)
            print("<tr><td bgcolor = \"#11bbff\"> 
 <strong>$key</strong></td> 
 <td>$value</td></tr>");
        ?>
    </table>
    <br><a href="../Lab9/index.html">Back</a>
</body>

</html>