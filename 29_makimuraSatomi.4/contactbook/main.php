<?php
include'header.php';
?>

<?php
    session_start();

    // ログイン状態チェック
    if (!isset($_SESSION["login_email"])) {
        header("Location: login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>連絡事項</title>
    </head>
    <body>
        <main>
            <p>園でのようす</p>


            <a href="logout.php">ログアウト</a>
        </main>
    </body>
</html>

<?php
include'footer.php';
?>