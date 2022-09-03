<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poshnun Oupjan 6314110007</title>
    <style type="text/css">
        
        h1 {color: #524A4E;}
        body {background-color: #E5E3C9;}
    </style>
</head>

<body style="font-family: arial,sans-serif">
    <?php
    extract($_POST);
    // determine whether phone number is valid and print 
    // an error message if not 
    if (!preg_match(
        "/^\([0-9]{3}\)[0-9]{3}-[0-9]{4}$/",
        $phone
    )) {
        print("<p><span style = \"color: red; 
 font-size: 2em\"> 
INVALID PHONE NUMBER</span><br /> 
 A valid phone number must be in the form 
 <strong>(555)555-5555</strong><br /> 
 <span style = \"color: blue\"> 
 Click the Back button, enter a valid phone 
 number and resubmit.<br /><br /> 
 Thank You.</span></p></body></html>");

        die(); // terminate script execution 
    }
    ?>


    <table border="0" cellpadding="0" cellspacing="10">
        <tr>
            <td bgcolor="#ffffaa">Name </td>
            <td bgcolor="#ffffbb">id</td>
            <td bgcolor="#ffffcc">Phone</td>
            <td bgcolor="#ffffdd">faculty</td>
            <td bgcolor="#ffffee">major</td>
        </tr>
        <tr>
            <?php
            // print each form field’s value 
            print("<td>$fname $lname</td> 
 <td>$id</td> 
 <td>$phone</td> 
 <td>$faculty</td>
 <td>$major</td>");
            ?>
        </tr>
    </table>
    <br>
    <span style="color: #524A4E">
        <strong>
            <em>Enrollment</em> <br>
            <?php
            for ($i = 0; $i < count($subject); $i++) {
                if (empty($subject[$i])) {
                    $subject[$i] = "";
                } 
                else
                    print("$subject[$i] <br />");
            }
            ?>
        </strong>
    </span>
    <br>  <td><a href="../LAb9/index.html">Back</a></td>
</body>

</html>