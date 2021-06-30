<!doctype html>
<html lang="en">
    <head>
        <title>ABOUT</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="about.css">
    </head>
    <body>
        <?php
        // $servername = "localhost";
        // $un = "root";
        // $pw = "";
        // $db = "todo";
        $server = "sql109.epizy.com";
        $db = "epiz_28945870_dbms";
        $un = "epiz_28945870";
        $password = "L8CvHw8E7sckv";

        // CONNECT TO NEW DATABASE
        $conn = new mysqli($servername, $un, $pw, $db);
        if($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
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
            <div class="section">GET IN TOUCH</div>
            <form action="val.php" method="GET">
                REMARKS/QUERIES/COMMENTS:
                &nbsp;&nbsp;&nbsp;&nbsp;
                <textarea name="remarks" class="remarks" id="remarks" cols="100" rows="2"></textarea>
                <button type="submit" name="add_query" class="add-query" id="add-query">SUBMIT</button>
            </form>
        </div>
    </body>
</html>