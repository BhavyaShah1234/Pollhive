<!doctype html>
<html lang="en">
    <head>
        <title>HOME</title>
        <link rel="stylesheet" href="join.css" type="text/css">
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
        <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
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
        $code = $_SESSION["code"];

        // RETRIEVING QUESTION AND OPTIONS FROM DATABASE
        $question = "";
        $ans1 = "";
        $ans2 = "";
        $ans3 = "";
        $ans4 = "";
        $ans5 = "";
        $ans6 = "";
        $ans7 = "";
        $ans8 = "";
        $ans9 = "";
        $ans10 = "";
        $sql = "SELECT * FROM poll WHERE code='$code'";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc())
        {
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
                        <a href="create.php">CREATE&nbsp;POLL</a>
                    </li>
                    <li class="join">
                        <a href="join.php">JOIN&nbsp;POLL</a>
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
            <form method="POST" action="home2.php">
                <input type="text" name="question" class="question" value="<?php echo $question;?>" readonly>
                <ul class="format">
                    <li>
                        <?php
                        if ($ans1 != "")
                        {
                            echo "<button type='submit' name='ans1' class='ans'>" . $ans1 ."</button>";
                        }
                        ?>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <?php
                        if ($ans2 != "")
                        {
                            echo "<button type='submit' name='ans2' class='ans'>" . $ans2 ."</button>";
                        }
                        ?>
                    </li>
                    <li>
                        <?php
                        if ($ans3 != "")
                        {
                            echo "<button type='submit' name='ans3' class='ans'>" . $ans3 ."</button>";
                        }
                        ?>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <?php
                        if ($ans4 != "")
                        {
                            echo "<button type='submit' name='ans4' class='ans'>" . $ans4 ."</button>";
                        }
                        ?>
                    </li>
                    <li>
                        <?php
                        if ($ans5 != "")
                        {
                            echo "<button type='submit' name='ans5' class='ans'>" . $ans5 ."</button>";
                        }
                        ?>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <?php
                        if ($ans6 != "")
                        {
                            echo "<button type='submit' name='ans6' class='ans'>" . $ans6 ."</button>";
                        }
                        ?>
                    </li>
                    <li>
                        <?php
                        if ($ans7 != "")
                        {
                            echo "<button type='submit' name='ans7' class='ans'>" . $ans7 ."</button>";
                        }
                        ?>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <?php
                        if ($ans8 != "")
                        {
                            echo "<button type='submit' name='ans8' class='ans'>" . $ans8 ."</button>";
                        }
                        ?>
                    </li>
                    <li>
                        <?php
                        if ($ans9 != "")
                        {
                            echo "<button type='submit' name='ans9' class='ans'>" . $ans9 ."</button>";
                        }
                        ?>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <?php
                        if ($ans10 != "")
                        {
                            echo "<button type='submit' name='ans10' class='ans'>" . $ans10 ."</button>";
                        }
                        ?>
                    </li>
                </ul>
            </form>
        </div>
    </body>
</html>