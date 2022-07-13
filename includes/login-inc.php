<?php
// $email = "";
// $name = "";
session_start();
// $errors = array();


if (isset($_POST['submit'])) {

    require 'database.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $position = $_POST['position'];
    // $name = mysqli_real_escape_string($con, $_POST['name']);
    // $email = mysqli_real_escape_string($con, $_POST['email']);
    // $password = mysqli_real_escape_string($con, $_POST['password']);
    // $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);


    if ($position == "parent") {
        if (empty($username) || empty($password)) {
            //check whether username and password is empty or not
            
            header("Location: ../login.html?error=emptyfields");
            exit();
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
                        $_SESSION['errors'] = 'wrongpass';
                        header("Location: ../Website/login.php");
                        echo "<script>alert('Entered wrong password.')</script>";
                        exit();
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
                        header("Location: ../login.php?$errors = 'Incorrect email or password!'");
                        exit();
                    }
                } else {
                    header("Location: ../login.html?error=nouser");
                    exit();
                }
            }
        }
    } else {
        if (empty($username) || empty($password)) {
            //check whether username and password is empty or not
            header("Location: ../login.html?error=emptyfields");
            exit();
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
                        header("Location: ../Website/login.html?error=wrongpass");
                        echo "<script>alert('Entered wrong password.')</script>";
                        exit();
                    } else if ($passCheck == true) {
                        // session_start();
                        // $_SESSION['sessionId'] = $row['id'];
                        // $_SESSION['sessionUser'] = $row['username'];
                        // header("Location: ../Teacher/teacherPanel.html?success=loggedin");

                        echo "<script>alert('Welcome,Teacher $username!')</script>";
                        echo "<script>setTimeout(\"location.href = '../Teacher2/home.php';\",1500);</script>";
                        exit();
                    } else {
                        header("Location: ../login.html?error=wrongpass");
                        exit();
                    }
                } else {
                    header("Location: ../login.html?error=nouser,$position");
                    exit();
                }
            }
        }
    }
} else {
    header("Location: ../login.html?error=accessforbidden");
    exit();
}
