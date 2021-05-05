<!doctype html>
<html lang="en">
    <head>
        <title>HOME</title>
        <link rel="stylesheet" href="home2.css" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Modak&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Frijole&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php
        // ESTABLISHING CONNECTION
        $server = "localhost";
        $db = "dbms";
        $un = "root";
        $password = "";
        $conn = new mysqli($server, $un, $password, $db);
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        // STARTING SESSION AND EXTRACTING VALUES JUST INPUT BY USER
        session_start();
        $fname = $_SESSION["fname"];
        $email = $_SESSION["email"];

        /*
        // CREATING TABLE TO STORE POLLS
        $sql = "CREATE TABLE poll(question VARCHAR(1000) NOT NULL, ans1 VARCHAR(500) NOT NULL, ans2 VARCHAR(500) NOT NULL, ans3 VARCHAR(500), ans4 VARCHAR(500), ans5 VARCHAR(500), ans6 VARCHAR(500), ans7 VARCHAR(500), ans8 VARCHAR(500), ans9 VARCHAR(500), ans10 VARCHAR(500), email VARCHAR(50) NOT NULL, code VARCHAR(10) PRIMARY KEY)";
        if ($conn->query($sql) !== TRUE)
        {
            echo "Error creating table: " . $conn->error;
        }
        */

        /*
        // CREATING TABLE TO STORE RESPONSE
        $sql = "CREATE TABLE response(email VARCHAR(50) NOT NULL, code VARCHAR(10) NOT NULL, opt VARCHAR(1) NOT NULL)";
        if ($conn->query($sql) !== TRUE)
        {
            echo "Error creating table: " . $conn->error;
        }
        */

        // IF ANY OF THE OPTIONS FROM JOIN POLL IS CLICKED
        if (isset($_POST["ans1"]))
        {
            $option = $_POST["ans1"];
            $code = $_SESSION["code"];
            $sql = "INSERT INTO response VALUES('$email', '$code', '$option')";
            if ($conn->query($sql) !== TRUE)
            {
                echo "Error inserting values: " . $conn->error;
            }
        }
        if (isset($_POST["ans2"]))
        {
            $option = $_POST["ans2"];
            $code = $_SESSION["code"];
            $sql = "INSERT INTO response VALUES('$email', '$code', '$option')";
            if ($conn->query($sql) !== TRUE)
            {
                echo "Error inserting values: " . $conn->error;
            }
        }
        if (isset($_POST["ans3"]))
        {
            $option = $_POST["ans3"];
            $code = $_SESSION["code"];
            $sql = "INSERT INTO response VALUES('$email', '$code', '$option')";
            if ($conn->query($sql) !== TRUE)
            {
                echo "Error inserting values: " . $conn->error;
            }
        }
        if (isset($_POST["ans4"]))
        {
            $option = $_POST["ans4"];
            $code = $_SESSION["code"];
            $sql = "INSERT INTO response VALUES('$email', '$code', '$option')";
            if ($conn->query($sql) !== TRUE)
            {
                echo "Error inserting values: " . $conn->error;
            }
        }
        if (isset($_POST["ans5"]))
        {
            $option = $_POST["ans5"];
            $code = $_SESSION["code"];
            $sql = "INSERT INTO response VALUES('$email', '$code', '$option')";
            if ($conn->query($sql) !== TRUE)
            {
                echo "Error inserting values: " . $conn->error;
            }
        }
        if (isset($_POST["ans6"]))
        {
            $option = $_POST["ans6"];
            $code = $_SESSION["code"];
            $sql = "INSERT INTO response VALUES('$email', '$code', '$option')";
            if ($conn->query($sql) !== TRUE)
            {
                echo "Error inserting values: " . $conn->error;
            }
        }
        if (isset($_POST["ans7"]))
        {
            $option = $_POST["ans7"];
            $code = $_SESSION["code"];
            $sql = "INSERT INTO response VALUES('$email', '$code', '$option')";
            if ($conn->query($sql) !== TRUE)
            {
                echo "Error inserting values: " . $conn->error;
            }
        }
        if (isset($_POST["ans8"]))
        {
            $option = $_POST["ans8"];
            $code = $_SESSION["code"];
            $sql = "INSERT INTO response VALUES('$email', '$code', '$option')";
            if ($conn->query($sql) !== TRUE)
            {
                echo "Error inserting values: " . $conn->error;
            }
        }
        if (isset($_POST["ans9"]))
        {
            $option = $_POST["ans9"];
            $code = $_SESSION["code"];
            $sql = "INSERT INTO response VALUES('$email', '$code', '$option')";
            if ($conn->query($sql) !== TRUE)
            {
                echo "Error inserting values: " . $conn->error;
            }
        }
        if (isset($_POST["ans10"]))
        {
            $option = $_POST["ans10"];
            $code = $_SESSION["code"];
            $sql = "INSERT INTO response VALUES('$email', '$code', '$option')";
            if ($conn->query($sql) !== TRUE)
            {
                echo "Error inserting values: " . $conn->error;
            }
        }
        ?>
        <div class="header">
            <div class="logo">
                <img src="media/cross.png" class="logo1" width="40" height="40">
                <img src="media/square.png" class="logo2" width="40" height="40">
                <img src="media/plus.png" class="logo3" width="40" height="40">
                <a href="home2.php" class="sitename">POLLHIVE</a>
            </div>
            <div class="pages">
                <ul class="list">
                    <li class="home">
                        <a href="home2.php">HOME</a>
                    </li>
                    <li class="create">
                        <a href="create.php">CREATE POLL</a>
                    </li>
                    <li class="join">
                        <a href="code2.php">JOIN POLL</a>
                    </li>
                    <li class="about">
                        <a href="about2.php">ABOUT</a>
                    </li>
                </ul>
            </div>
            <div class="links">
                <form method="POST" action="validation3.php">
                    <button type="submit" name="display" class="display">
                        <?php echo $fname;?>
                    </button>
                    <button type="submit" name="logout" class="logout">LOGOUT</button>
                </form>
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