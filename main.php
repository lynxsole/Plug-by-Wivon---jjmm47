<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="stylesheet" href="assets/css/home.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plug | Home</title>
</head>

<body>

    <?php
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
    }
    ?>

    <div class="nav-serveur">

        <div class="case-setting">

            <div class="user-info">
                <div class="imgBx">
                    <img src="php/images/<?php echo $row['img']; ?>" class="logo">
                </div>
                <div class="details">
                    <h2 class="username"><?php echo $row['fname']; ?></h2>
                    <h2 class="user-status"><?php echo $row['status']; ?></h2>
                </div>
            </div>

        </div>

    </div>

    <div class="friends-list">
    </div>

    <div class="coob">
    </div>

    <script src="assets/js/users.js"></script>
</body>

</html>