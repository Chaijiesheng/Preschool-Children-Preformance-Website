<?php
$page = 'students';
if (isset($_POST['submit'])) {
  require '../includes/database.php';
  $studentname = $_POST['fullname'];
  $rollid = $_POST['rollid'];
  $gender = $_POST['gender'];
  $classid = $_POST['classes'];
  $parentphone = $_POST['parentphone'];
  $admissiondate = $_POST['admissiondate'];
  $birthdate = $_POST['birthdate'];
  $status = 1;




  $query = "insert into students(StudentName,RollID,Gender,Classes,Status,ParentPhone,AdmissionDate,BirthDate) 
  VALUES('$studentname','$rollid','$gender','$classid','$status','$parentphone','$admissiondate','$birthdate')";

  $run = mysqli_query($conn, $query) or die(mysqli_error($conn));

  if ($run) {
    echo "<script>alert('Data Inserted Successfully')</script>";
    // echo "<script>setTimeout(\"Location: ../Teacher2/addstudent.php';\",1500);</script>";
  } else {
    echo "Form not submitted";
  }

  echo "<script>setTimeout(\"location.href = '../Teacher2/addstudent.php';\",100);</script>";
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Student Admission</title>

</head>

<body>
  <!-- ========== TOP NAVBAR ========== -->
  <?php include('../includes/topbar.php'); ?>
  <!-- ========== LEFT SIDEBAR ========== -->
  <?php include('../includes/leftbar.php'); ?>
  <!-- /.left-sidebar -->

  <div class="main-page">
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row page-title-div">
          <h2 class="title">Student Admission</h2>
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
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Student</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add Student Info</li>
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
                <h4 class="card-title">Fill the Student info</h4>
              </div>

              <!-- ========== respond message ========== -->


              <form class="row g-3 align-items-center" method="post">

                <!-- ========== Full Name ========== -->
                <div class="row g-3 ">
                  <div class="col-lg-1">
                  </div>
                  <div class="col-lg-1">
                    <label for="default" class="col-form-label">Full Name</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" name="fullname" id="fullname" class="form-control" required="required" autocomplete="off">
                  </div>
                </div>



                <!-- ========== Roll Id ========== -->
                <div class="row g-4 align-items-center">
                  <div class="col-lg-1">
                  </div>
                  <div class="col-lg-1">
                    <label for="default" class="col-form-label">Roll Id</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" name="rollid" id="rollid" class="form-control" maxlength="8" required="required">
                  </div>
                </div>


                <!-- ========== Parent Phone ========== -->
                <div class="row g-4 align-items-center">
                  <div class="col-lg-1">
                  </div>
                  <div class="col-lg-1">
                    <label for="default" class="col-form-label">Parent Phone</label>
                  </div>
                  <div class="col-md-8">
                    <input type="tel" name="parentphone" id="parentphone" class="form-control" maxlength="14" pattern="[0-9]{3}-[0-9]{7}" required="required">
                  </div>
                </div>


                <!-- ========== Admission Date ========== -->
                <div class="row g-4 align-items-center">
                  <div class="col-lg-1">
                  </div>
                  <div class="col-lg-1">
                    <label for="default" class="col-form-label">Admission Date</label>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group date" id="datepicker">
                      <input type="text" class="form-control" id="date" name="admissiondate" value="2020-3-05" required="required" autocomplete="off" />
                      <span class="input-group-append">
                        <span class="input-group-text bg-light d-block">
                          <i class="fa fa-calendar"></i>
                        </span>
                      </span>
                    </div>
                  </div>
                </div>


                <!-- ========== Birth Date ========== -->
                <div class="row g-4 align-items-center">
                  <div class="col-lg-1">
                  </div>
                  <div class="col-lg-1">
                    <label for="default" class="col-form-label">Birth Date</label>
                  </div>
                  <div class="col-md-3">
                    <div class="input-group date" id="datepicker2">
                      <input type="text" class="form-control" id="date" name="birthdate" value="2016-3-05" required="required" autocomplete="off" />
                      <span class="input-group-append">
                        <span class="input-group-text bg-light d-block">
                          <i class="fa fa-calendar"></i>
                        </span>
                      </span>
                    </div>
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
                <div class="row g-3 align-items-center">
                  <div class="col-lg-1">
                  </div>
                  <div class="col-lg-1">
                    <label for="default" class="col-form-label">Class</label>
                  </div>

                  <select class="form-select" style="width:auto;" name="classes" aria-label="Default select example" required="required">
                    <option selected>Select Class</option>
                    <option value="Tasneem 4A">Tasneem 4 YEARS OLD</option>
                    <option value="Tasneem 5A">Tasneem 5 YEARS OLD</option>
                    <option value="Tasneem 6A">Tasneem 6 YEARS OLD</option>
                  </select>
                </div>



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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

  <script type="text/javascript">
    $(function() {
      $('#datepicker').datepicker();
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $('#datepicker2').datepicker();
    });
  </script>
</body>

</html>