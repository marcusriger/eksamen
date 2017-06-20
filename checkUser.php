<?php 
$formUsername =$_POST['formUsername'];
$formPassword =$_POST['formPassword'];

require_once "connect.php";
$statement = $dbh->prepare("SELECT * FROM users WHERE dbUsername=?");
$statement->bindParam(1, $formUsername);
$statement->execute();

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
if(empty($rows)){
    echo "Kan ikke finde bruger!";
    header("Refresh:3; url=index.php");
}
    else{
        //Der findes brugere med det brugernavn, nu skal PW testes...
        //Et loop bliver kørt der tester hver række om dbPassword matcher formPassword
        foreach($rows as $row){
            if($row['dbPassword'] == $formPassword){
                //Sørg for at brugeren er logget ind og har tilladelser
                
                session_start();
                $_SESSION['username'] = $formUsername;
                header("location: index.php"); }
            }
        echo "Ikke korekt password!";
        header("Refresh:3; url=index.php");
        }
$dbh = null;
?>