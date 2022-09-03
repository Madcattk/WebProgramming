<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poshnun Oupjan 6314110007</title>
</head>

<body style="font-family: arial, sans-serif; background-color: #F0E68C">
    <?php
    extract($_POST);
    // build SELECT query
    $query = "SELECT " . $select . " FROM info";
    // Connect to MySQL
    if (!($database = mysqli_connect("localhost", "root", "")))
        die("Could not connect to database");
    // open Products database
    if (!mysqli_select_db($database, "student"))
        die("Could not open Products database");

    // query Products database
    if (!($result = mysqli_query($database, $query))) {
        print("Could not execute query! <br />");
        die(mysqli_error($database));
    }
    ?>
    <h3 style="color: blue">
        Search Results</h3>
    <table border="1" cellpadding="3" cellspacing="2" style="background-color: #ADD8E6">
        <?php
        // fetch each record in result set
        for (
            $counter = 0;
            $row = mysqli_fetch_row($result);
            $counter++
        ) {
            // build table to display results
            print("<tr>");
            foreach ($row as $key => $value)
                print("<td>$value</td>");
            print("</tr>");
        }
        mysqli_close($database);
        ?>
    </table>
    <br />Your search yielded <strong>
        <?php print("$counter") ?> results.<br /><br /></strong>
    <h5>Please email comments to
        <a href="mailto:deitel@deitel.com">
            Deitel and Associates, Inc.
        </a>
    </h5><br><a href="../Lab10/index.html">Back</a>
</body>

</html>