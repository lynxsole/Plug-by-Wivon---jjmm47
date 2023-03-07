<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: main.php");
  }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plug | Login</title>
</head>

<body>
    
    <div class="loadscreen">
        <h2>Chargement en cours...</h2>
    </div>
    
    <div class="titleBx">
        <h1 class="title">Plug</h1>
    </div>
    <div class="loginBx">

        <form action="#" class="form loginform">
            <div class="fields">
                <div class="email field">
                    <input type="text" name="email" class="email input" placeholder="email">
                </div>
                <div class="psswrd field">
                    <input type="password" name="password" class="psswrd input" placeholder="mots de passe">
                </div>
            </div>
            <input type="submit" value="connection" class="continueBtn">
        </form>
        
        <a href="signup.php" class="title">Pas de compte ? Crée le ici !</a>

        <div class="errorTxt"></div>
        
    </div>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/login.js"></script>


</body>

</html>