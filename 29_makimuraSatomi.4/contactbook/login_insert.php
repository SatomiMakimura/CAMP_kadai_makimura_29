
<?php
    // セッション開始
    session_start();
    // 既にログインしている場合にはメインページに遷移
    if (isset($_SESSION["login"])) {
        header('Location: main.php');
        exit;
    }
    $db['host'] = 'localhost';
    $db['user'] = 'root';
    $db['pass'] = 'root';
    $db['dbname'] = 'contactbook';
    $error = '';

    // ログイン実行
    if (isset($_POST['login'])) {
        if (empty($_POST['login_email'])) {
            $error = 'メールアドレスが未入力です。';
            } else if (empty($_POST['login_password'])) {
            $error = 'パスワードが未入力です。';
            }
        if (!empty($_POST['login_email']) && !empty($_POST['login_password'])) {
            $loginemail = $_POST['login_email'];
            $dsn = sprintf('mysql: host=%s; dbname=%s; charset=utf8', $db['host'], $db['dbname']);
            try {
            $pdo = new PDO($dsn, $db['user'], $db['pass'], array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            $stmt = $pdo->prepare('SELECT * FROM user_table  WHERE name = ?');
            $stmt->execute(array($loginemail));

            $loginpassword = $_POST['login_password'];
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if (password_verify($loginpassword, $result['login_password'])) {
            $_SESSION['login_email'] = $loginemail;
            header('Location: main.php');
            exit();
            } else {
            $error = 'ユーザーIDあるいはパスワードに誤りがあります。';
            }
            } catch (PDOException $e) {
            echo $e->getMessage();
            }
        }
    }
        ?>