<?php
    require '../includes/database.php';
    $stid = "1";
    $page = 'parent';
    $stid = intval($_GET['stid']);
    $sql = "SELECT * FROM users where id = $stid";
    $result = $conn->query($sql);
    if ($result->num_rows != 1) {
        die("id is not in db");
    }
    $data = $result->fetch_assoc();

    if(isset($_POST['submit'])){

        $query = "UPDATE `users` SET username='$_POST[username]',first_name='$_POST[firstname]',last_name='$_POST[lastname]',phone='$_POST[phonenumber]',email='$_POST[email]', RollId='$_POST[rollid]', Gender='$_POST[gender]' where id='$stid' ";
        $query_run = mysqli_query($conn,$query);

        if($query_run){
            echo "<script>alert('Data Edited Successfully')</script>";
            echo "<script>setTimeout(\"location.href = '../Teacher2/manageParent.php';\",100);</script>";
            exit();
        }else{
            echo "Form not submitted";
        }
        // if ($run) {
        //     echo "<script>alert('Data Inserted Successfully')</script>";
            
        //     // echo "<script>setTimeout(\"Location: ../Teacher2/addstudent.php';\",1500);</script>";
        // } else {
        //     echo "Form not submitted";
        // }
          
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
    <!-- ========== datatable ========== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <!-- ========== datatable ========== -->
    <title>ManageStudentInfo</title>
</head>

<body>

    <!-- ========== TOP NAVBAR ========== -->
    <?php include('../includes/topbar.php'); ?>
    <!-- ========== LEFT SIDEBAR ========== -->
    <?php include('../includes/leftbar.php'); ?>



    <div class="main-content">
        <main class="mt-5 pt-3">
            <div class="container-fluid">
                <div class="mt-2">
                    <div class="container">
                        <div class="row">
                            <div class="row page-title-div">
                                <h2 class="title">Add Parent</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="bg-light mt-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0 py-2">
                                        <li class="breadcrumb-item"><a href="../Teacher2/home.php">Home</a></li>
                                        <li class="breadcrumb-item" aria-current="page">Parent</a></li>
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

                            <div class="card-content">
                                <form class="row g-3 align-items-center" method="post">

                                    <!-- ========== Full Name ========== -->
                                    <div class="row g-4 align-items-center ">
                                        <div class="col-lg-1">
                                        </div>
                                        <div class="col-lg-1">
                                            <label for="default" class="col-form-label">Username</label>
                                        </div>
                                        <div class="col-md-8" >
                                            <input type="text" name="username" id="fullname" class="form-control" value="<?= $data['username'] ?>" required="required" autocomplete="off" >
                                        </div>
                                    </div>

                                    <div class="row g-4 align-items-center ">
                                        <div class="col-lg-1">
                                        </div>
                                        <div class="col-lg-1">
                                            <label for="default" class="col-form-label">Password</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="password" id="disabledTextInput"  placeholder="***********"disabled>
                                        </div>
                                    </div>

                                    <div class="row g-4 align-items-center ">
                                        <div class="col-lg-1">
                                        </div>
                                        <div class="col-lg-1">
                                            <label for="default" class="col-form-label">First Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="firstname" id="fullname" class="form-control" value="<?= $data['first_name'] ?>"required="required" autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="row g-4 align-items-center ">
                                        <div class="col-lg-1">
                                        </div>
                                        <div class="col-lg-1">
                                            <label for="default" class="col-form-label">Last Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="lastname" id="fullname" class="form-control" value="<?= $data['last_name'] ?>"required="required" autocomplete="off">
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
                                            <input type="text" name="rollid" id="rollid" class="form-control" value="<?= $data['RollId'] ?>" required="required">
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
                                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="<?= $data['email'] ?>" aria-describedby="emailHelp" required="required">
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
                                            <input type="tel" name="phonenumber" id="parentphone" class="form-control" maxlength="14" value="<?= $data['phone'] ?>" pattern="[0-9]{3}-[0-9]{7}" required="required">
                                        </div>
                                    </div>


                                    <!-- ========== Gender ========== -->
                                    <div class="row g-3 align-items-center">
                                        <div class="col-lg-1">
                                        </div>
                                        <div class="col-lg-1">
                                            <label for="default" class="col-form-label">Gender</label>
                                        </div>

                                        <?php
                                        $gndr = $data['Gender'];
                                        if ($gndr == "Male") {
                                        ?>
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

                                        <?php
                                        }
                                        if ($gndr == "Female") {
                                        ?>
                                            <div class="form-check col-md-1 form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="gender" value="Female" required="required" checked>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Female
                                                </label>
                                            </div>
                                            <div class="form-check col-md-2 form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender" id="gender" value="Male" required="required">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Male
                                                </label>
                                            </div>
                                        <?php } ?>
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
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <br>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
</body>

</html>


<!-- nashrin
$2a$12$Tlj83188oRG4.J/oa8/FPe/VDrM3U7MHA.FZXZPY3AT...
Nashrah Sobirin
Shamsuddin
010-8975109
kvello@hotmail.com
88110007
Female -->