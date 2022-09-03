<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poshnun Oupjan 6314110007</title>
    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "MailingList";
    $con = mysqli_connect($host, $username, $password)
        or die("cannot connect");
    mysqli_select_db($con, $db_name) or die("cannot select DB");
    $sql = "select * from contacts";
    $result = mysqli_query($con, $sql);
    $json = array();
    if ($result = mysqli_query($con, $sql)) {
        while ($row = mysqli_fetch_assoc($result)) {
            $row_array['ID'] = $row['ID'];
            $row_array['FirstName'] = $row['FirstName'];
            $row_array['LastName'] = $row['LastName'];
            $row_array['Email'] = $row['Email'];
            $row_array['Phone'] = $row['Phone'];
            $row_array['Book'] = $row['Book'];
            $row_array['OS'] = $row['OS'];
            array_push($json, $row_array);
        }
    }
    mysqli_close($con);
    $myjson = json_encode($json, TRUE);
    echo $myjson;
    ?>
</head>

<body style="background-color: #F0E68C">

    <h3 style="color: blue"> Database Query Results</h3>
    <table border="1" cellpadding="3" cellspacing="2" style="background-color: #ADD8E6">
        <thead>
            <tr>
                <th>ID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Book</th>
                <th>OS</th>
            </tr>
        </thead>
        <tbody>
            <?php $json_decoded = json_decode($myjson);
                foreach ($json_decoded as $result) {
                    echo '<tr>';
                    echo '<td>' . $result->ID . '</td>';
                    echo '<td>' . $result->FirstName . '</td>';
                    echo '<td>' . $result->LastName . '</td>';
                    echo '<td>' . $result->Email . '</td>';
                    echo '<td>' . $result->Phone . '</td>';
                    echo '<td>' . $result->Book . '</td>';
                    echo '<td>' . $result->OS . '</td>';
                    echo '</tr>';
                }
                ?>
        </tbody>
    </table>
    <br> <br><a href="../Lab12/index.html">Back</a>
</body>

</html>