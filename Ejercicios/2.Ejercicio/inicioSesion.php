<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/styles.css" rel="stylesheet">  
        <title>Login</title>
    </head>
    <body>
        <?php
        if (isset($_POST['email']) || isset($_POST['psw'])) {

            $email = $psw = "";
            $emailErr = $pswErr = "";

            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            if (empty($_POST['psw'])) {
                $pswErr = "Password is required";
            } else {
                $psw = test_input($_POST['psw']);
                if ($psw != '753159852') {
                    $pswErr = "Password is incorrect";
                }
            }

            if (empty($_POST['email'])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST['email']);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Invalid email format";
                }
            }


            if (isset($_POST['email']) || isset($_POST['psw'])) {
                if ($email == 'admin@gmail.com' && $psw == '753159852') {
                    header('Location: index.php');
                }
            }
        }
        ?>
        <div class="container">
            <div class="wrapper">
                <div class="title"><span>Login Form</span></div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="row">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Email" name="email" id="email" required>
                        <span class="error">* <?php echo $emailErr; ?></span>
                    </div>
                    <br><div class="row">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password"  name="psw" id="psw" required>
                        <span class="error">* <?php echo $pswErr; ?></span>
                    </div>
                    <br><div class="pass"><a href="#">Forgot password?</a></div>
                    <div class="row button">
                        <input type="submit" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
