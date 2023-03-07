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
    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
    } else {
        header("location: main.php");
    }

    $selfAccountSql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
    if (mysqli_num_rows($selfAccountSql) > 0) {
        $selfAccountRow = mysqli_fetch_assoc($selfAccountSql);
    }
    ?>

    <div class="nav-serveur">

        <div class="case-setting">

            <div class="user-info">
                <div class="imgBx">
                    <img src="php/images/<?php echo $selfAccountRow['img']; ?>" class="logo">  
                </div>
                <div class="details">
                    <h2 class="username"><?php echo $selfAccountRow['fname']; ?></h2>
                    <h2 class="user-status"><?php echo $selfAccountRow['status']; ?></h2>
                </div>
            </div>

        </div>

    </div>

    <div class="content">
        <div class="friends-list">
        </div>

        <div class="coob">
            <div class="chat-box">

            </div>
            <form action="#" class="typing-area">
                <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>

                <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">

                <button>></button>
            </form>
        </div>
    </div>

    <script src="assets/js/chat.js"></script>
    <script src="assets/js/users.js"></script>
</body>

</html>