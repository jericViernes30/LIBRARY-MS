<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index1.css">
</head>
<body>
    <div class="circle"></div>
    <div class="display">
        <div class="login-container">
            <h3>SVCC LIBRARY</h3>


            <div class="login-form">
                <h3>LOGIN</h3>


                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="input">
                        <input type="text" name="username" required="required">
                        <span>Username</span>
                    </div>
                    <div class="input">
                        <input type="password" name="password" required="required">
                        <span>Password</span>
                    </div>
                    <button class="login-button" name="btn">LOGIN</button>
                </form>


            </div>



        </div>
        <div class="logo"><img src="img/svcc-logo.png" alt="SVCC Logo"></div>
    </div>
        
    <?php
        if(isset($_POST['btn'])) {
            echo $_POST['username'];
        }
    ?>
</body>
</html>