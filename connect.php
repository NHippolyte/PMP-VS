

<?php 

$dsn="mysql:dbname=pmp"; 
    try{
      $connexion=new PDO($dsn,"root","");
    }
    catch(PDOException $e){
      printf("Échec de la connexion : %s\n", $e->getMessage());
      exit();
    }

    $code_client ="1234567";
    $email = "kich@yahoo.fr";
    $tel = "0783152184";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>info</title>
</head>
<body>

<p>Nom : <?=$code_client; ?></p>
<p>email : <?=$email; ?></p>
<p>tel :<?=$tel; ?></p>
    
</body>
</html>
