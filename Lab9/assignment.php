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
    <?php
    extract($_POST);

    // check if user has left USERNAME or PASSWORD field blank 
    if (!$USERNAME || !$PASSWORD) {
        fieldsBlank();
        die();
    }

    // check if the New User button was clicked 
    if (isset($NewUser)) {

        // open password.txt for writing using append mode 
        if (!($file = fopen(
            "password.txt",
            "a"
        ))) {
            // print error message and terminate script 
            // execution if file cannot be opened 
            print("<title>Error</title></head><body> 
 Could not open password file 
 </body></html>");
            die();
        }

        // write username and password to file and 
        // call function userAdded 
        fputs($file, "$USERNAME,$PASSWORD\n");
        userAdded($USERNAME);
    } else {

        // if a new user is not being added, open file 
        // for reading 
        if (!($file = fopen(
            "password.txt",
            "r"
        ))) {
            print("<title>Error</title></head> 
 <body>Could not open password file 
 </body></html>");
            die();
        }
        $userVerified = 0;

        // read each line in file and check username 
        // and password 
        while (!feof($file) && !$userVerified) {

            // read line from file 
            $line = fgets($file, 255);

            // remove newline character from end of line 
            $line = chop($line);

            // split username and password 
            $field = explode(",", $line);
            // verify username 
            if ($USERNAME == $field[0]) {
                $userVerified = 1;

                // call function checkPassword to verify 
                // user’s password 
                if (checkPassword($PASSWORD, $field) == true)
                    accessGranted($USERNAME);
                else
                    wrongPassword();
            }
        }

        // close text file 
        fclose($file);

        // call function accessDenied if username has 
        // not been verified 
        if (!$userVerified)
            accessDenied();
    }

    // verify user password and return a boolean 
    function checkPassword($userpassword, $filedata)
    {

        if ($userpassword == $filedata[1])
            return true;
        else
            return false;
    }
    // print a message indicating the user has been added 
    function userAdded($name)
    {
        print("<title>Thank You</title></head> 
  <body style = \"font-family: arial; 
  font-size: 1em; color: blue\"> 
  <strong>You have been added 
  to the user list, $name. 
  <br />Enjoy the site.</strong>");
    }

    // print a message indicating permission 
    // has been granted 
    function accessGranted($name)
    {
        print("<title>Thank You</title></head> 
  <body style = \"font-family: arial; 
  font-size: 1em; \">");
        echo "<script type='text/javascript'>alert('Permission has been granted, $name. Enjoy the site.');</script>";
    ?>
        <h1>Student Registration.</h1>

        <!-- post form data to form.php -->
        <form method="post" action="form_assignment.php">
           
            <span style="color: #789395">
                Please fill out the fields below.<br />
            </span>
            <!-- create four text boxes for user input -->
            <label>Firstname: <br> <input type="text" name="fname" /><br /></label>
            <label>Lastname: <br> <input type="text" name="lname" /><br /></label>
            <label>ID: <br> <input type="text" name="id" /><br /></label>
            <label>Phone: <br> <input type="text" name="phone" /></label>

            <span style="font-size: 10pt;color: #B4CFB0">
                Must be in the form (555)555-5555</span>
            <br />
            <label>Faculty: <br> <input type="text" name="faculty" /><br /></label>
            <label>Major: <br> <input type="text" name="major" /><br /></label>
           <br>
            <span style="color: #789395">
                Subjects<br />
            </span>
            <!-- create five radio buttons -->
            <label>
            <input type="checkbox" name="subject[0]"value="System Analysist ITEC1204"> ITEC1204</label><br>
            <label>
            <input type="checkbox" name="subject[1]"value="Database Managment ITEC1205"> ITEC1205</label><br>
            <label>
            <input type="checkbox" name="subject[2]"value="Web Programming ITEC1208"> ITEC1208</label><br>
            <br>
            <input type="submit" value="Register" />
        </form>
    <?php
    }
    // print a message indicating password is invalid 
    function wrongPassword()
    {
        print("<title>Access Denied</title></head> 
 <body style = \"font-family: arial; 
 font-size: 1em; color: red\"> 
 <strong>You entered an invalid 
 password.<br />Access has 
 been denied.</strong>");
    }

    // print a message indicating access has been denied 
    function accessDenied()
    {
        print("<title>Access Denied</title></head> 
 <body style = \"font-family: arial; 
 font-size: 1em; color: red\"> 
 <strong> 
 You were denied access to this server. 
 <br /></strong>");
    }
    // print a message indicating that fields 
    // have been left blank 
    function fieldsBlank()
    {
        print("<title>Access Denied</title></head> 
 <body style = \"font-family: arial; 
 font-size: 1em; color: red\"> 
 <strong> 
 Please fill in all form fields. 
 <br /></strong>");
    }
    ?>

</head>

<body>

</body>

</html>