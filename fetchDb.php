<?php
require_once "connect.php";

$statement = $dbh->prepare("SELECT * FROM articles");
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC)){ ?>
    <article>
        <h3><?php echo $row['heading'] ?></h3><div class="img"><img alt="<?php echo $row['imgAlt']?>" src="<?php echo $row['imgSrc'] ?>"></div>
         <span><?php echo $row['time'] ?></span>
        <p><?php echo $row['articleText'] ?></p>
    </article>
    <?php
}
?>