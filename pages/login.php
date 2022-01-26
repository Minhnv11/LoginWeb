<?php
    if(isset($_POST['btn_login'])){
        $error = array();
        if(empty($_POST['username'])){
            $error['username'] = "ユーザIDを入力してくださ。";
        }else{
            $username = $_POST['username'];
        }
        if(empty($_POST['password'])){
            $error['password'] = "パスワードを入力してください。" ;
        }else{
            $password = $_POST['password'];
        }
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(empty($error)){
            if(check_login($username, $password)){
                session_start();
                $_SESSION['is_login'] = true;
                $_SESSION['user_login'] = $username;
                redirect("?page:home");
            }else{
                $error['account'] = " ユーザID・パスワードが一致しません。"; 
                // print_r($error);
            }
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./pulic/Css/reset.css">
    <link rel="stylesheet" href="./pulic/Css/login.css">
    <title>login</title>
</head>
<body>
    <div class="login_form">
        <video class="bg_video" src="./pulic/Video/video.mp4" autoplay muted loop></video>  
        <div class="wrp_form">
            <div class="logo">M</div>
            <h1>Login</h1>
            <form action="" method="POST">
                    <input type="text" name="username" value="<?php if(isset($_POST['username']))  echo $username; ?>" placeholder="Username">
                    <p class="error"> <?php if(!empty($error['username'])) echo $error['username']; ?></p>
                    <input type="password" name="password" id="" placeholder="Password">
                    <p class="error"> 
                        <?php 
                        if(!empty($error['password'])) echo $error['password'];
                         if(!empty($error['account'])) echo $error['account']; ?>
                    </p>
                    <input type="submit" name="btn_login" value="Login">
            </form>
            <a href="">パスワード忘れ場合</a>
        </div>
    </div>
</body>
</html>