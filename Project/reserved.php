<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poshnun Oupjan 6314110007</title>
    <style>
        body {
            align-items: center;
            background-color: #FFFFF0;
            display: flex;
            justify-content: center;
            height: 100vh;
        }

        .thx {
            background-color: #694E4E;
            box-sizing: border-box;
            height: 550px;
            padding: 20px;
            width: 320px;
        }

        .title {
            color: #eee;
            font-family: sans-serif;
            font-size: 36px;
            font-weight: 600;
            margin-top: 30px;
        }

        .subtitle {
            color: #eee;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 600;
            margin-top: 10px;
        }

        .submit {
            background-color: #F3C5C5;
            border: 0;
            box-sizing: border-box;
            color: white;
            cursor: pointer;
            font-size: 18px;
            height: 50px;
            margin-top: 88%;
            outline: 0;
            text-align: center;
            width: 100%;
        }

        .submit:active {
            background-color: #f3bebe;
        }
    </style>
</head>

<body>
    <div class="thx">
        <div class="title">Thank you<3</div>
                <div class="subtitle"> <?php
                                        extract($_POST);
                                        $product = $info;
                                       
                                        session_start(); // this NEEDS TO BE AT THE TOP of the page before any output etc
                                        $customer = $_SESSION['customer'];                                  

                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "project";
                                        $conn = mysqli_connect($servername, $username, $password, $dbname);

                                        if (!$conn) {
                                            die("Connection failed: " . mysqli_connect_error());
                                          }
                                        // build INSERT query
                                        $sql = "INSERT INTO sale (Name, Product, Price) VALUES ( '$customer', '$product', '$price')";

                                        if (mysqli_query($conn, $sql)) {
                                            print("Hi $customer! Your $product Price: \$$price ");
                                          } else {
                                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                          }
                                
                                          mysqli_close($conn);
                                        ?> has been reserved for you. You can pick up your order at 71, ABC Apartment, Sukhumvit 2, Sukhumvit Road, Klongtoey, Bangkok, 10110.</div>
                <button class="submit" onclick="history.back()">See some products more</button>
                <a style="text-decoration: none; color: #eee; float: right;" href="..\index.html"></br>Home</a>
        </div>
</body>

</html>

</body>

</html>