<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Log ind</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css"> </head>

<body>
    <div class="parent">
        <div class="wrapper">
            <!-- Headeren -->
            <header>
                <a href="index.php"><img src="header_img.png"></a>
            </header>
            <!-- Navbar -->
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Planter</a></li>
                    <li><a href="#">Indretning</a></li>
                </ul>
                <ul>
                    <li><a href="login.php">Log ind</a></li>
                </ul>
            </nav>
            <div class="loginBox col-md-12">
                <div class="panel-info">
                    <div>
                        <form action="checkUser.php" method="post">
                            <div>
                                <label for="user">Brugernavn:</label>
                                <input type="text" class="form-control" id="user" placeholder="Brugernavn" name="formUsername"> </div>
                            <div>
                                <label for="pass">Password:</label>
                                <input type="password" class="form-control" id="pass" placeholder="Password" name="formPassword"> </div>
                            <input type="submit" class="btn btn-default text-center col-md-12" value="Log ind">
                            <footer>
                                &copy 2017 - Wilderness
                            </footer>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
    </div>
</body>

</html>