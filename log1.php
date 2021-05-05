<!doctype html>
<html lang="en">
    <head>
        <title>LOG IN</title>
        <link rel="stylesheet" href="log1.css" type="text/css">
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
        $server = "localhost";
        $db = "dbms";
        $un = "root";
        $password = "";
        $conn = new mysqli($server, $un, $password, $db);
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        ?>
        <div class="header">
            <div class="logo">
                <img src="media/cross.png" class="logo1" width="40" height="40">
                <img src="media/square.png" class="logo2" width="40" height="40">
                <img src="media/plus.png" class="logo3" width="40" height="40">
                <a href="home1.php" class="sitename">POLLHIVE</a>
            </div>
            <div class="pages">
                <ul class="list">
                    <li class="home">
                        <a href="home1.php">HOME</a>
                    </li>
                    <li class="create">
                        <a href="signup1.php">CREATE POLL</a>
                    </li>
                    <li class="join">
                        <a href="signup1.php">JOIN POLL</a>
                    </li>
                    <li class="about">
                        <a href="about1.php">ABOUT</a>
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
            <div class="section">LOG IN</div>
            <form method="POST" action="validation1.php">
                <ul class="cred">
                    <li class="email">
                        EMAIL:
                        <input type="email" name="email" required>
                    </li>
                    <li class="password">
                        PASSWORD:
                        <input type="password" name="pw" maxlength="20" minlength="8" required>
                    </li>
                    <input type="checkbox" class="check">
                    &nbsp;&nbsp;
                    <label class="line">Keep me signed in.</label>
                    <br>
                    <br>
                    <button type="submit" name="login1" class="submit">LOG IN</button>
                    <br>
                    <br>
                    <p class="exists">
                        Don't have an account?
                        <a href="signup1.php">Sign up</a>
                    </p>
                </ul>
            </form>
        </div>
    </body>
</html>