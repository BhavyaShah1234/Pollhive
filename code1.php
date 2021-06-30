<!doctype html>
<html lang="en">
    <head>
        <title>HOME</title>
        <link rel="stylesheet" href="code1.css" type="text/css">
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
        // $server = "localhost";
        // $db = "dbms";
        // $un = "root";
        // $password = "";
        $server = "sql109.epizy.com";
        $db = "epiz_28945870_dbms";
        $un = "epiz_28945870";
        $password = "L8CvHw8E7sckv";
        $conn = new mysqli($server, $un, $password, $db);
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }

        // STARTING SESSION AND EXTRACTING VALUES JUST INPUT BY USER
        session_start();
        $fname = $_SESSION["fname"];
        $email = $_SESSION["email"];

        $code = "";
        // IF CREATEPOLL BUTTON IS CLICKED
        if (isset($_POST["createpoll"]))
        {
            // GENERATING RANDOM CODE AND APPEND POLL AND CODE TO DATABASE
            $letters = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
            $random_keys = array_rand($letters, 10);
            for($i = 0; $i < 10; $i = $i + 1)
            {
                $code = $code . $letters[$random_keys[$i]];
            }
            $question = $_POST["question"];
            $ans1 = $_POST["ans1"];
            $ans2 = $_POST["ans2"];
            $ans3 = $_POST["ans3"];
            $ans4 = $_POST["ans4"];
            $ans5 = $_POST["ans5"];
            $ans6 = $_POST["ans6"];
            $ans7 = $_POST["ans7"];
            $ans8 = $_POST["ans8"];
            $ans9 = $_POST["ans9"];
            $ans10 = $_POST["ans10"];
            $sql = "INSERT INTO poll VALUES ('$question', '$ans1', '$ans2', '$ans3', '$ans4', '$ans5', '$ans6', '$ans7', '$ans8', '$ans9', '$ans10', '$email', '$code')";
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
                <p class="note">NOTE:</p>
                <label class="warning">COPY AND SHARE THIS CODE WITH THE PEOPLE YOU WANT TO PARTICIPATE IN THE POLL. THIS CODE WILL BE AVAILABLE IN USER PROFILE.</label>
                <input type="text" name="code" class="code" value="<?php echo $code;?>" readonly>
            </div>
        </div>
    </body>
</html>