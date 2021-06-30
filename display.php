<!doctype html>
<html lang="en">
    <head>
        <title>HOME</title>
        <link rel="stylesheet" href="display.css" type="text/css">
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
        <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
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
            <div class="section">
                <h1>CREATED POLLS</h1>
            </div>
            <div class="created">
                <table>
                    <tr>
                        <th>CODE</th>
                        <th>QUESTIONS</th>
                        <th>OPTION1</th>
                        <th>OPTION2</th>
                        <th>OPTION3</th>
                        <th>OPTION4</th>
                        <th>OPTION5</th>
                        <th>OPTION6</th>
                        <th>OPTION7</th>
                        <th>OPTION8</th>
                        <th>OPTION9</th>
                        <th>OPTION10</th>
                    </tr>
                    <?php
                    // EXTRACTING USER'S CREATED POLLS FROM POLL TABLE
                    $sql = "SELECT * FROM poll WHERE email='$email'";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc())
                    {
                        $code = $row["code"];
                        $question = $row["question"];
                        $ans1 = $row["ans1"];
                        $ans2 = $row["ans2"];
                        $ans3 = $row["ans3"];
                        $ans4 = $row["ans4"];
                        $ans5 = $row["ans5"];
                        $ans6 = $row["ans6"];
                        $ans7 = $row["ans7"];
                        $ans8 = $row["ans8"];
                        $ans9 = $row["ans9"];
                        $ans10 = $row["ans10"];
                        echo "<tr><td>" . $code . "</td><td>" . $question . "</td><td> " . $ans1 . "</td><td>" . $ans2 . "</td><td>" . $ans3 . "</td><td>" . $ans4 . "</td><td>" . $ans5 . "</td><td>" . $ans6 . "</td><td>" . $ans7 . "</td><td>" . $ans8 . "</td><td>" . $ans9 . "</td><td>" . $ans10 . "</td></tr>";
                    }
                    ?>
                </table>
            </div>
            <div class="section">
                <h1>JOINED POLLS</h1>
            </div>
            <div class="joined">
                <table>
                    <tr>
                        <th>CODE</th>
                        <th>ANSWER</th>
                    </tr>
                    <?php
                    // EXTRACTING USER'S JOINED POLLS FROM RESPONSE TABLE
                    $sql = "SELECT * FROM response WHERE email='$email'";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc())
                    {
                        $code = $row["code"];
                        $option = $row["opt"];
                        echo "<tr><td>" . $code . "</td><td>" . $option . "</td></tr>";
                    }
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>