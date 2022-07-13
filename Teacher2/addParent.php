<?php
$page = 'parent';
if (isset($_POST['submit'])) {

  require "../includes/database.php";
  $username = $_POST['username'];
  $password = $_POST['password'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $rollid = $_POST['rollid'];
  $email = $_POST['email'];
  $phonenumber = $_POST['phonenumber'];
  $gender = $_POST['gender'];

  $query = "INSERT INTO users(username,password,first_name,last_name,phone,email,RollId,Gender) VALUES ('$username','$password','$firstname','$lastname','$rollid','$email','$phonenumber','$gender')";

  $run = mysqli_query($conn, $query) or die(mysqli_error($conn));

  if ($run) {
  } else {
    echo "Form not submitted";
  }

  echo "<script>setTimeout(\"location.href = '../Teacher2/addParent.php';\",100);</script>";
  exit();
} else {
  echo "all fields required";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen">
  <title>Manage Student</title>
</head>

<body>

  <!-- ========== TOP NAVBAR ========== -->
  <?php include('../includes/topbar.php'); ?>
  <!-- ========== LEFT SIDEBAR ========== -->
  <?php include('../includes/leftbar.php'); ?>
  <!-- /.left-sidebar -->

  <div class="main-content">
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row page-title-div">
          <h2 class="title">Add Parent</h2>
        </div>
        <br>
      </div>

      <div class="container-fluid">
        <div class="bg-light mt-1">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 py-2">
                    <li class="breadcrumb-item"><a href="../Teacher2/home.php">Home</a></li>
                    <li class="breadcrumb-item ">Parent</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Parent Info</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <br>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header card-header-text">
                <h4 class="card-title">Fill the Parent info</h4>
              </div>

              <!-- ========== respond message ========== -->


              <form class="row g-3 align-items-center" method="post">

                <!-- ========== Full Name ========== -->
                <div class="row g-4 align-items-center ">
                  <div class="col-lg-1">
                  </div>
                  <div class="col-lg-1">
                    <label for="default" class="col-form-label">Username</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" name="username" id="fullname" class="form-control" required="required" autocomplete="off">
                  </div>
                </div>

                <div class="row g-4 align-items-center ">
                  <div class="col-lg-1">
                  </div>
                  <div class="col-lg-1">
                    <label for="default" class="col-form-label">Password</label>
                  </div>
                  <div class="col-md-8">
                    <input type="password" class="form-control" name="password" id="disabledTextInput" required="required" autocomplete="off" placeholder="Disabled input here...">
                  </div>
                </div>

                <div class="row g-4 align-items-center ">
                  <div class="col-lg-1">
                  </div>
                  <div class="col-lg-1">
                    <label for="default" class="col-form-label">First Name</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" name="firstname" id="fullname" class="form-control" required="required" autocomplete="off">
                  </div>
                </div>

                <div class="row g-4 align-items-center ">
                  <div class="col-lg-1">
                  </div>
                  <div class="col-lg-1">
                    <label for="default" class="col-form-label">Last Name</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" name="lastname" id="fullname" class="form-control" required="required" autocomplete="off">
                  </div>
                </div>

                <!-- ========== Roll Id ========== -->
                <div class="row g-4 align-items-center">
                  <div class="col-lg-1">
                  </div>
                  <div class="col-lg-1">
                    <label for="default" class="col-form-label">Student Roll Id</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" name="rollid" id="rollid" class="form-control" maxlength="8" required="required">
                  </div>
                </div>

                <!-- ========== Email ========== -->
                <div class="row g-4 align-items-center">
                  <div class="col-lg-1">
                  </div>
                  <div class="col-lg-1">
                    <label for="default" class="col-form-label">Email</label>
                  </div>
                  <div class="col-md-8">
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required="required">
                  </div>
                </div>

                <!-- ========== Parent Phone ========== -->
                <div class="row g-4 align-items-center">
                  <div class="col-lg-1">
                  </div>
                  <div class="col-lg-1">
                    <label for="default" class="col-form-label">Phone Number</label>
                  </div>
                  <div class="col-md-8">
                    <input type="tel" name="phonenumber" id="parentphone" class="form-control" maxlength="14" pattern="[0-9]{3}-[0-9]{7}" required="required">
                  </div>
                </div>


                <!-- ========== Gender ========== -->
                <div class="row g-3 align-items-center">
                  <div class="col-lg-1">
                  </div>
                  <div class="col-lg-1">
                    <label for="default" class="col-form-label">Gender</label>
                  </div>

                  <div class="form-check col-md-1 form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="Female" required="required">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Female
                    </label>
                  </div>
                  <div class="form-check col-md-2 form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="Male" required="required" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                      Male
                    </label>
                  </div>
                </div>


                <!-- ========== Class ========== -->




                <!-- ========== Button ========== -->
                <div class="row g-3 align-items-center">
                  <div class="col-lg-2">
                  </div>
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="submit" class="btn btn-primary">Add</button>
                  </div>
                </div>

                <div class="row g-3 align-items-center">
                  <div class="col-lg-1">
                  </div>
                </div>

              </form>
            </div>
            <br>

    </main>








  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>