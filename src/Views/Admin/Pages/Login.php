<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="../../../../public/Admin/Author/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>

<body>
<div class="wrapper">
    <header>Login</header>
    <form action="<?= ROOT_URL ?>/admin/handleLogin" method="post">
        <div class="field email">
            <div class="input-area">
                <input type="text" placeholder="Email" name="email">
                <i class="icon fas fa-envelope"></i>
            </div>
            <div style="color: red; float: left ; : 20px 0px "><?php if (isset($_SESSION['errorEmail'])) {
                    foreach ($_SESSION['errorEmail'] as $emailError) {
                        echo $emailError;
                    }
                } ?>
            </div>
        </div>

        <div class="field password" style="margin-top: 40px;">
            <div class="input-area">
                <input type="password" placeholder="Mật khẩu" name="password">
                <i class="icon fas fa-lock"></i>
            </div>
            <div style="color: red; float: left ; : 20px 0px "><?php if (isset($_SESSION['errorPassword'])) {
                    foreach ($_SESSION['errorPassword'] as $passError) {
                        echo $passError;
                    }
                } ?>
            </div>
        </div>
        <input type="submit" value="Đăng nhập" name="login">

        <div class= "" > <a href="<?= ROOT_URL ?>/admin/emailForgot">  Forgot Password   </a> </div>
    </form>
</div>


</body>

</html>