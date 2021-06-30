<!doctype html>
<html lang="en">
    <head>
        <title>SIGN UP</title>
        <link rel="stylesheet" href="signup1.css" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Modak&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rye&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
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
        $message = "";
        // IF SIGN UP BUTTON IS CLICKED
        if (isset($_POST["signup1"]))
        {
            // GET ALL INPUT FIELD VALUES
            $fname = $_POST["fname"];
            $dob = $_POST["dob"];
            $email = $_POST["email"];
            $pw = $_POST["pw"];
            $phone = $_POST["phone"];
            // GET ALL VALUES FROM DATABASE
            $sql = "SELECT * FROM dbms";
            $result = $conn->query($sql);
            // IF NO USER EXISTS
            if ($result->num_rows == 0)
            {
                // APPEND NEW USER
                $sql = "INSERT INTO dbms(fname, dob, email, pw, phone, stat) VALUES ('$fname', '$dob', '$email', '$pw', '$phone', 0)";
                if ($conn->query($sql) !== TRUE)
                {
                    echo "Error inserting values: " . $conn->error;
                }
                //echo "NEW USER CREATION SUCCESSFUL.&nbsp;&nbsp;&nbsp;&nbsp;<a href='log1.php'>LOG IN</a>";
            }
            // IF SOME USERS EXIST
            else
            {
                // GETTING NUMBER OF EXISTING USERS
                $users = $result->num_rows;
                $count = 0;
                // CHECK IF EMAIL IS REPEATED
                while ($row = $result->fetch_assoc())
                {
                    // IF EMAIL IS REPEATED
                    if ($row["email"] == $email)
                    {
                        $message = "USER ALREADY EXISTS.&nbsp;<a href='log1.php'>LOG IN</a>";
                        break;
                    }
                    // IF CURRENT EMAIL IS NOT REPEATED BUT LIST OF EMAIL IS NOT EMPTY
                    else
                    {
                        $count = $count + 1;
                        // IF LIST OF USERS ENDS AND NO EMAIL MATCHES EMAIL OF NEW USER
                        if ($count == $users)
                        {
                            // APPENDING NEW USER
                            $sql = "INSERT INTO dbms(fname, dob, email, pw, phone, stat) VALUES ('$fname', '$dob', '$email', '$pw', '$phone', 0)";
                            if ($conn->query($sql) !== TRUE)
                            {
                                echo "Error inserting values: " . $conn->error;
                            }
                            $message = "NEW USER CREATION SUCCESSFUL.&nbsp;<a href='log1.php'>LOG IN</a>";
                        }
                    }
                }
            }
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
                        <a href="signup1.php">CREATE POLL</a>
                    </li>
                    <li class="join">
                        <a href="signup1.php">JOIN POLL</a>
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
            <div class="section">SIGN UP</div>
            <?php
                echo $message;
            ?>
            <form method="POST" action="signup1.php">
                <ul class="cred">
                    <li class="fname">
                        NAME:
                        <input type="text" name="fname" maxlength="50" pattern="[A-Z]{1}[a-z]{1,}" required>
                    </li>
                    <li class="dob">
                        DOB:
                        <input type="date" name="dob" required>
                    </li>
                    <li class="email">
                        EMAIL:
                        <input type="email" name="email" required>
                    </li>
                    <li class="pw">
                        PASSWORD:
                        <input type="password" name="pw" maxlength="20" minlength="8" pattern="[a-z]{8, 20}" required>
                    </li>
                    <li class="phone">
                        PHONE:
                        <input type="text" name="phone" maxlength="10" minlength="10" pattern="[0-9]{10}" required>
                    </li>
                    <br>
                    <p class="exists">
                        Already have an account?
                        <a href="log1.php">Log in</a>
                    </p>
                    <button type="submit" name="signup1" class="submit">SIGN UP</button>
                </ul>
            </form>
        </div>
    </body>
</html>