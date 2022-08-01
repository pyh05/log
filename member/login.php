<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="./style.css" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js" defer></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js" defer></script>
    <!------ Include the above in your HEAD tag ---------->
</head>

<body>
    <!-- <a href="#" data-toggle="modal" data-target="#login-modal">Login</a> -->
    <div class="loginmodal-container">
        <h1>로그인</h1><br>
        <?php
            if(isset($_SESSION["name"])){
                // header( 'Location: / member/loginok.php' );
                echo $_SESSION["name"]."님 로그인 되었습니다 <br>";
                echo "<a href= './logout.php'>로그아웃</a>";
            }else {
        ?>
        <form action="./loginok.php" method="post">
            <input type="text" name="user" placeholder="아이디">
            <input type="password" name="pass" placeholder="비밀번호">
            <input type="submit" name="login" class="login loginmodal-submit" value="로그인">
        </form>

        <div class="login-help">
            <a href="./register.html">회원가입</a>
        </div>
        <?php
            }
        ?>
    </div>
</body>

</html>