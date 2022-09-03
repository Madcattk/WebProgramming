<?php // Fig. 26.21: cookies.php
// Program to write a cookie to a client's machine

extract($_POST);
// write each form field’s value to a cookie and set the
// cookie’s expiration date
setcookie("Name", $NAME, time() + 60 * 60 * 24 * 5);
setcookie("Height", $HEIGHT, time() + 60 * 60 * 24 * 5);
setcookie("Color", $COLOR, time() + 60 * 60 * 24 * 5);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poshnun Oupjan 6314110007</title>
</head>

<body style="font-family: arial, sans-serif">
    <p>The cookie has been set with the following data:</p>
    <br /><span style="color: blue">Name:</span>
    <?php print($NAME) ?><br />

    <span style="color: blue">Height:</span>
    <?php print($HEIGHT) ?><br />
    <span style="color: blue">Favorite Color: <?php print("$COLOR") ?><br /></span>
    
 
 <p>Click <a href = " readCookies.php">here</a>
         to read the saved cookie.</p><br><a href="../Lab10/index.html">Back</a>
</body>

</html>