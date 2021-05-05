<!doctype html>
<html lang="en">
    <head>
        <title>HOME</title>
        <link rel="stylesheet" href="create.css" type="text/css">
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
                        <a href="code2.php">JOIN&nbsp;POLL</a>
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
            <form method="POST" action="code1.php">
                <label class="q" for="question">QUESTION</label>
                <br>
                <textarea cols="7" rows="1" name="question" class="question" maxlength="1000" placeholder="HOW MANY COLORS ARE PRESENT IN A RAINBOW?" required></textarea>
                <br>
                <label class="a" for="answer">OPTIONS</label>
                <p class="warning">NOTE: THE POLL SHOULD HAVE ATLEAST 2 OPTIONS AND ATMOST 10 OPTIONS.</p>
                <ul class="options">
                    <li>
                        a)
                        <input type="text" name="ans1" class="answer1" placeholder="1" maxlength="500">
                    </li>
                    <li>
                        b)
                        <input type="text" name="ans2" class="answer2" placeholder="2" maxlength="500">
                    </li>
                    <li>
                        c)
                        <input type="text" name="ans3" class="answer3" placeholder="3" maxlength="500">
                    </li>
                    <li>
                        d)
                        <input type="text" name="ans4" class="answer4" placeholder="4" maxlength="500">
                    </li>
                    <li>
                        e)
                        <input type="text" name="ans5" class="answer5" placeholder="5" maxlength="500">
                    </li>
                    <li>
                        f)
                        <input type="text" name="ans6" class="answer6" placeholder="6" maxlength="500">
                    </li>
                    <li>
                        g)
                        <input type="text" name="ans7" class="answer7" placeholder="7" maxlength="500">
                    </li>
                    <li>
                        h)
                        <input type="text" name="ans8" class="answer8" placeholder="8" maxlength="500">
                    </li>
                    <li>
                        i)
                        <input type="text" name="ans9" class="answer9" placeholder="NONE OF THE ABOVE" maxlength="500">
                    </li>
                    <li>
                        j)
                        <input type="text" name="ans10" class="answer10" placeholder="ALL OF THE ABOVE" maxlength="500">
                    </li>
                </ul>
                <button type="submit" name="createpoll" class="createpoll">CREATE POLL</button>
            </form>
        </div>
    </body>
</html>