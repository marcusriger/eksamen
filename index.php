<?php session_start();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Lise Efternavn</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://use.fontawesome.com/50a72b3c2e.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> </head>

    <body>
        <!-- Lidt selvhjælp -->
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
                        <!-- Hvis brugeren er logget ind -->
                        <?php
                    if(isset($_SESSION['username']) && !empty($_SESSION['username'])){ ?>
                            <p>Hej&nbsp</p>
                            <p>
                                <?php echo $_SESSION['username']; ?>
                            </p>
                            <li><a href="logout.php?logout=true">Log ud</a></li>
                            <?php 
                    } else {
                    ?>
                                <!-- Hvis brugeren ikke er logget ind -->
                                <li><a class="logind">Log ind</a></li>
                                <?php } ?>
                    </ul>
                </nav>
                <!-- Javascript -->
                <div class="loginBox slidedown col-md-12">
                    <div class="panel-info">
                        <div>
                            <form action="checkUser.php" method="post">
                                <div>
                                    <label for="user">Brugernavn:</label>
                                    <input type="text" class="form-control" id="user" placeholder="Brugernavn" name="formUsername"> </div>
                                <div>
                                    <label for="pass">Password:</label>
                                    <input type="password" class="form-control" id="pass" placeholder="Password" name="formPassword"> </div> <a href="login.php">Nyt vindue</a>
                                <input type="submit" class="btn btn-default text-center col-md-12" value="Log ind"> </form>
                        </div>
                    </div>
                </div>
                <!-- Selvhjælp -->
                <div class="main">
                    <!-- Information -->
                    <div class="aboutMe"> <img alt="Lise" title="Lise Efternavn" src="frk_overspringshandling.jpg">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem accusamus odio placeat sapiente id minus obcaecati alias nulla numquam dicta sunt inventore totam, nobis, explicabo sed quae nam optio culpa!</p>
                        <!-- Logo'er --><a href="instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a> <a href="facebook.com"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href=""><i class="fa fa-flickr" aria-hidden="true"></i></a> <a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> </div>
                    <!-- Selvhjælp -->
                    <div class="articles">
                        <!-- Create article -->
                        <?php
                    if(isset($_SESSION['username']) && !empty($_SESSION['username']) ){ ?>
                            <div class="container col-md-12">
                                <h1 class="">Create Article</h1>
                                <form action="insert.php" method="get" class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="text" name="heading" id="heading" class="form-control" placeholder=""> </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Image</label>
                                        <input type="text" name="imgSrc" id="imgSrc" class="form-control" id="" placeholder=""> </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Alt-text</label>
                                        <input type="text" name="imgAlt" id="imgAlt" class="form-control" placeholder=""> </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Date</label>
                                        <input type="text" name="time" id="imgAlt" class="form-control" placeholder=""> </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Content</label>
                                        <textarea name="articleText" id="articleText" class="form-control" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                            </div>
                            <?php } ?>
                                <div class="moveUp">
                                    <!-- Artikler PHP -->
                                    <?php include "fetchDb.php"; ?>
                                </div>
                    </div>
                </div>
                <!-- Footer -->
                <footer> &copy 2017 - Wilderness </footer>
            </div>
            <script src="js/jquery-3.1.1.js"></script>
            <script src="js/script.js"></script>
    </body>

    </html>