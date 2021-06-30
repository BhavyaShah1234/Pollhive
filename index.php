<!doctype html>
<html lang="en">
    <head>
        <title>HOME</title>
        <link rel="stylesheet" href="index.css" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Modak&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Frijole&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php
        // $server = "localhost";
        // $db = "dbms";
        // $un = "root";
        // $password = "";
        $server = "sql109.epizy.com";
        $db = "epiz_28945870_dbms";
        $un = "epiz_28945870";
        $password = "L8CvHw8E7sckv";

        // ESTABLISHING CONNECTION
        // $conn = new mysqli($server, $un, $password);
        // if ($conn->connect_error)
        // {
        //     die("Connection failed: " . $conn->connect_error);
        // }

        // CREATING DATABASE
        // $sql = "CREATE DATABASE " . $db;
        // if ($conn->query($sql) !== TRUE)
        // {
        //     echo "Error creating database: " . $conn->error;
        // }

        // ESTABLISHING CONNECTION TO NEWLY CREATED DATABASE
        $conn = new mysqli($server, $un, $password, $db);
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        // CREATING TABLE
        // $sql = "CREATE TABLE dbms
        // (fname VARCHAR(50) NOT NULL,
        // dob DATE NOT NULL,
        // email VARCHAR(50) PRIMARY KEY,
        // pw VARCHAR(20) NOT NULL,
        // phone VARCHAR(10) NOT NULL,
        // stat INT(1) UNSIGNED NOT NULL)";
        // if ($conn->query($sql) !== TRUE)
        // {
        //     echo "Error creating table: " . $conn->error;
        // }

        // CREATING TABLE TO STORE POLLS
        // $sql = "CREATE TABLE poll(question VARCHAR(1000) NOT NULL, ans1 VARCHAR(500) NOT NULL, ans2 VARCHAR(500) NOT NULL, ans3 VARCHAR(500), ans4 VARCHAR(500), ans5 VARCHAR(500), ans6 VARCHAR(500), ans7 VARCHAR(500), ans8 VARCHAR(500), ans9 VARCHAR(500), ans10 VARCHAR(500), email VARCHAR(50) NOT NULL, code VARCHAR(10) PRIMARY KEY)";
        // if ($conn->query($sql) !== TRUE)
        // {
        //     echo "Error creating table: " . $conn->error;
        // }

        // CREATING TABLE TO STORE RESPONSE
        // $sql = "CREATE TABLE response(email VARCHAR(50) NOT NULL, code VARCHAR(10) NOT NULL, opt VARCHAR(1) NOT NULL)";
        // if ($conn->query($sql) !== TRUE)
        // {
        //     echo "Error creating table: " . $conn->error;
        // }

        // CREATING TABLE TO STORE RESPONSE
        $sql = "CREATE TABLE queries(email VARCHAR(50) REFERENCES dbms(email), remarks VARCHAR(200) NOT NULL)";
        if ($conn->query($sql) !== TRUE)
        {
            echo "Error creating table: " . $conn->error;
        }
        ?>
        <div class="header">
            <div class="logo">
                <img src="media/cross.png" class="logo1" width="40" height="40">
                <img src="media/square.png" class="logo2" width="40" height="40">
                <img src="media/plus.png" class="logo3" width="40" height="40">
                <a href="index.php" class="sitename">POLLHIVE</a>
            </div>
            <div class="pages">
                <ul class="list">
                    <li class="home">
                        <a href="index.php">HOME</a>
                    </li>
                    <li class="create">
                        <a href="signup1.php">CREATE&nbsp;POLL</a>
                    </li>
                    <li class="join">
                        <a href="signup1.php">JOIN&nbsp;POLL</a>
                    </li>
                    <li class="about">
                        <a href="signup1.php">ABOUT</a>
                    </li>
                </ul>
            </div>
            <div class="links">
                <a href="signup1.php"><button type="button" class="signup">SIGN UP</button></a>
                &nbsp;&nbsp;
                <a href="log1.php"><button type="button" class="login">LOG IN</button></a>
            </div>
        </div>

        <div class="content">
            <div class="container">
                <div class="left">
                    <p class="make">MAKE</p>
                    <br>
                    <p class="polling">POLLING</p>
                    <br>
                    <p class="fun">FUN</p>
                </div>
                <div class="right">
                    <img src="media/polling.png" class="pic1" width="470" height="450">
                    <img src="media/vote.png" class="pic2" width="470" height="450">
                    <img src="media/report.png" class="pic3" width="470" height="450">
                    <script>
                        $(document).ready(function()
                        {
                            function loop()
                            {
                                $(".pic1").fadeTo(1500, 1).fadeTo(1500, 0, function()
                                {
                                    $(".pic2").fadeTo(1500, 1).fadeTo(1500, 0, function()
                                    {
                                        $(".pic3").fadeTo(1500, 1).fadeTo(1500, 0, function()
                                        {
                                            loop();
                                        })
                                    })
                                })
                            }
                            loop();
                        })
                    </script>
                </div>
            </div>
            <img src="media/pencil.png" class="pencil" width="120" height="120">
            <img src="media/graph.png" class="graph" width="0" height="200">
            <img src="media/rocket2.png" class="rocket1" width="125" height="125">
            <img src="media/rocket1.png" class="rocket2" width="150" height="150">
            <img src="media/book.png" class="book" width="200" height="200">
            <script>
                $(document).ready(function()
                {
                    $(".pencil").animate({"left": "+=13%"}, 1000);
                    $(".graph").animate({"width": "+=200"}, 1000);
                    $(".rocket1").animate({"top": "-=25%", "left": "+=7%"}, 1000);
                    $(".rocket2").animate({"top": "-=15%", "right": "+=8%"}, 1000);
                    $(".book").fadeTo(1000, 1);
                })
            </script>
        </div>
    </body>
</html>