<?php
session_start();
require "database.php";
$email = "";
$name = "";
$errors = array();


    if (isset($_POST['submit'])) {

        require 'database.php';
        $username = $_POST['username'];
        $password = $_POST['password'];
        $position = $_POST['position'];


        if ($position == "parent") {
            if (empty($username) || empty($password)) {
                //check whether username and password is empty or not
                // header("Location: ../login.html?error=emptyfields");
                // exit();
                $errors['emptyFields'] = "Please fill in username and password";
            } else {
                $sql = "SELECT * FROM users WHERE username = ?";
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    //parpare the statement by running the SQL string inside the database to check the state got error or not also to avoid the SQL injection
                    header("Location: ../login.html?error=sqlerror");
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "s", $username);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    //grab the result and put it inside a new variable

                    if ($row = mysqli_fetch_assoc($result)) {
                        //check whether we get back our result
                        //set the result to a variable
                        $passCheck = password_verify($password, $row['password']);
                        if ($passCheck == false) {
                            $errors['wrongPass'] = "Incorrect email or password!";
                            // exit();
                        } else if ($passCheck == true) {
                            // session_start();
                            // $_SESSION['sessionId'] = $row['id'];
                            // $_SESSION['sessionUser'] = $row['username'];
                            // header("Location: ../Teacher/teacherPanel.html?success=loggedin");

                            // echo "<script>alert('Welcome,$username!')</script>";
                            // echo "<script>setTimeout(\"location.href = '../Parent/home.php?username=$username';\",1500);</script>";
                            header("Location: ../Parent/home.php?username=$username");
                            exit();
                        } else {
                            // header("Location: ../login.html?error=wrongpass");
                            // exit();
                            $errors['wrongPass'] = "Incorrect email or password!";
                        }
                    } else {
                        // header("Location: ../login.html?error=nouser");
                        // exit();
                        $errors['nouser'] = "Invalid username";
                    }
                }
            }
        } else {
            if (empty($username) || empty($password)) {
                //check whether username and password is empty or not
                // header("Location: ../login.html?error=emptyfields");
                // exit();
                $errors['emptyFields'] = "Please fill in username and password";
            } else {
                $sql = "SELECT * FROM admin WHERE username = ?";
                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    //parpare the statement by running the SQL string inside the database to check the state got error or not also to avoid the SQL injection
                    header("Location: ../login.html?error=sqlerror");
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "s", $username);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    //grab the result and put it inside a new variable

                    if ($row = mysqli_fetch_assoc($result)) {
                        //check whether we get back our result
                        //set the result to a variable
                        $passCheck = password_verify($password, $row['password']);
                        if ($passCheck == false) {
                            // header("Location: ../Website/login.html?error=wrongpass");
                            // echo "<script>alert('Entered wrong password.')</script>";
                            // exit();
                            $errors['wrongPass'] = "Incorrect email or password!";
                        } else if ($passCheck == true) {
                            // session_start();
                            // $_SESSION['sessionId'] = $row['id'];
                            // $_SESSION['sessionUser'] = $row['username'];
                            // header("Location: ../Teacher/teacherPanel.html?success=loggedin");

                            echo "<script>alert('Welcome,Teacher $username!')</script>";
                            echo "<script>setTimeout(\"location.href = '../Teacher2/home.php';\",1500);</script>";
                            exit();
                        } else {
                            $errors['wrongPass'] = "Incorrect email or password!";
                            // header("Location: ../login.html?error=wrongpass");
                            // exit();
                        }
                    } else {
                        // header("Location: ../login.html?error=nouser,$position");
                        // exit();
                        $errors['nouser'] = "Invalid username";
                    }
                }
            }
        }
    } else {
        // header("Location: ../login.php?error=accessforbidden");
        // exit();
    }



    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $check_email = "SELECT * FROM users WHERE email='$email'";
        $run_sql = mysqli_query($conn, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE users SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($conn, $insert_code);
            if($run_query){
                $subject = "Password Reset Code";
                $message = "Your password reset code is $code";
                $sender = "From: runniejackson@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "We've sent a passwrod reset otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: reset-code.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email address does not exist!";
        }
    }

        //if user click check reset otp button
        if(isset($_POST['check-reset-otp'])){
            $_SESSION['info'] = "";
            $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
            $check_code = "SELECT * FROM users WHERE code = $otp_code";
            $code_res = mysqli_query($conn, $check_code);
            if(mysqli_num_rows($code_res) > 0){
                $fetch_data = mysqli_fetch_assoc($code_res);
                $email = $fetch_data['email'];
                $_SESSION['email'] = $email;
                $info = "Please create a new password that you don't use on any other site.";
                $_SESSION['info'] = $info;
                header('location: new-password.php');
                exit();
            }else{
                $errors['otp-error'] = "You've entered incorrect code!";
            }
        }

            //if user click change password button
    if(isset($_POST['change-password'])){
        $_SESSION['info'] = "";
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            $encpass = password_hash($password, PASSWORD_DEFAULT);
            // $hashedPass = password_hash($password, PASSWORD_DEFAULT);

            $update_pass = "UPDATE `users` SET code = '$code', password = '$encpass' WHERE email = '$email'";
            $run_query = mysqli_query($conn, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                $_SESSION['info'] = $info;
                header('Location: password-changed.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }


    //if user click verification code submit button
    if(isset($_POST['check'])){
        $_SESSION['info'] = "";
        $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
        $check_code = "SELECT * FROM users WHERE code = $otp_code";
        $code_res = mysqli_query($conn, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $fetch_code = $fetch_data['code'];
            $email = $fetch_data['email'];
            $code = 0;
            $status = 'verified';
            $update_otp = "UPDATE users SET code = $code, status = '$status' WHERE code = $fetch_code";
            $update_res = mysqli_query($conn, $update_otp);
            if($update_res){
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                header('location: home.php');
                exit();
            }else{
                $errors['otp-error'] = "Failed while updating code!";
            }
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }

       //if login now button click
       if(isset($_POST['login-now'])){
        header('Location: login.php');
    }
?>