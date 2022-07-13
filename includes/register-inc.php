<?php

if (isset($_POST['submit'])) {
  //Add database connection
  require 'database.php';

  $username = $_POST['username'];
  $password = $_POST['password'];
  $confirmPass = $_POST['confirmPassword'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];

  if (empty($username) || empty($password) || empty($confirmPass)) {
    header("Location: ../register.php?error=emptyfields&username=" . $username);
    exit();
  } elseif (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
    //check whether the user name is the valid character 
    header("Location: ../register.php?error=invalidusername&username=" . $username);
    exit();
  } elseif ($password !== $confirmPass) {
    //check the password equal to confirm password 
    header("Location: ../register.php?error=passwordsdonotmatch&username=" . $username);
    exit();
  } else {
    $sql = "SELECT username FROM users WHERE username = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../register.php?error=sqlerror");
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $rowCount = mysqli_stmt_num_rows($stmt);

      if ($rowCount > 0) {
        header("Location: ../register.php?error=usernametaken");
        exit();
      } else {
        $sql = "INSERT INTO users (username, password, first_name ,last_name ,phone ,email) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../register.php?error=sqlerror");
          exit();
        } else {
          $hashedPass = password_hash($password, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($stmt, "ssssss", $username, $hashedPass, $first_name, $last_name, $phone, $email);
          mysqli_stmt_execute($stmt);
          // echo "<script>alert('User registration completed.')</script>";
          // header("Location: ../Teacher/teacherPanel.html?success=registered");

          echo "<script>alert('User registration completed.')</script>";
          echo "<script>setTimeout(\"location.href = '../Website/login.html';\",1500);</script>";
          exit();
        }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
