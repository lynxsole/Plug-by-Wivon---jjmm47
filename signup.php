<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: main.php");
  }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="assets/css/Ac.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plug | create account</title>
</head>
<body>
    <div class="titleBx">
        <h1 class="title">Plug</h1>
    </div>

    <div class="loginBx">

        <form action="#" class="form signup">
            <div class="fields">
                <div class="email field">
                    <input type="text" name="email" class="email input" placeholder="email" required>
                </div>
                <div class="pseudo field">
                    <input type="text" name="fname" class="pseudo input" placeholder="Pseudo" required>
                </div>
                
                <div class="password field">
                    <input type="password" name="password" class="password input" placeholder="mot de passe" required>
                </div>
                <div class="confirmpassword field">
                    <input type="password" name="psswrd" class="confpsswrd input" placeholder="Confirme mots de passe" required>
                </div>
                <div class="img field">
                <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                </div>
            </div>
            <input type="submit" value="créer" class="continueBtn" required>
            <div class="errorTxt"></div>
        </form>

             
    
    </div>

    <script src="assets/js/main.js"></script>
    <script src="assets/js/signup.js"></script>

</body>
</html>