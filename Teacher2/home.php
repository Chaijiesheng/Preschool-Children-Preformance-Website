<?php
    $page='home';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css" />
    <title>Home</title>
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
                <div class="mt-3">
                    <div class="container">
                        <div class="row">
                            <div>
                                <h1 class="title">Dashboard</h2>
                                    <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <!-- <div class="row">
                    <div class="mt-2">
                        <div class="container">
                            <div class="row">
                                <div>
                                    <h1 class="title">Dashboard</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="row g-3 mb-3">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card bg-primary shadow text-white h-100">
                            <div class="d-flex align-items-center px-2">
                                <i class="bi bi-person-check-fill" style="font-size: 3rem;" aria-hidden="true"></i>
                                <div class="card-body text-end">
                                    <h5 class="card-title">
                                        <?php
                                        require '../includes/database.php';
                                        $sql = "SELECT StudentId FROM students";
                                        $result = $conn->query($sql);
                                        if (!$result) {
                                            die("invalid query:" . $connection->error);
                                        }
                                        $totalStudents = $result->num_rows;
                                        echo "$totalStudents";
                                        ?>
                                    </h5>
                                    <p class="card-text">Students</p>
                                </div>
                            </div>
                            <a href="../Teacher2/addStudent.php" style="text-decoration:none">
                                <div class="card-footer bg-primary text-white h-100 d-flex">
                                    View Details
                                    <span class="ms-auto">
                                        <i class="bi bi-chevron-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card bg-warning text-white h-100">
                            <div class="d-flex align-items-center px-2">
                                <i class="bi bi-journals" style="font-size: 3rem;" aria-hidden="true"></i>
                                <div class="card-body text-end">
                                    <h5 class="card-title">9</h5>
                                    <p class="card-text">Subjects Listed</p>
                                </div>
                            </div>
                            <a href="../Teacher2/curriculum.php" style="text-decoration:none">
                                <div class="card-footer bg-warning text-white h-100 d-flex">
                                    View Details
                                    <span class="ms-auto">
                                        <i class="bi bi-chevron-right" href="../Teacher2/curriculum.php"></i>
                                    </span>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card bg-success text-white h-100">
                            <div class="d-flex align-items-center px-2">
                                <i class="bi bi-building float-start fa-3x py-auto" style="font-size: 3rem;" aria-hidden="true"></i>
                                <div class="card-body text-end">
                                    <h5 class="card-title">3</h5>
                                    <p class="card-text">Total classess listed</p>
                                </div>
                            </div>
                            <a href="../Teacher2/curriculum.php" style="text-decoration:none">
                                <div class="card-footer bg-success text-white h-100 d-flex">
                                    View Details
                                    <span class="ms-auto">
                                        <i class="bi bi-chevron-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card bg-danger text-white h-100">
                            <div class="d-flex align-items-center px-2">
                                <i class="bi bi-file-earmark-check-fill" style="font-size: 3rem;" aria-hidden="true"></i>
                                <div class="card-body text-end">
                                    <h5 class="card-title">
                                        <?php
                                        require '../includes/database.php';
                                        $sql = "SELECT StudentId FROM classa_pi";
                                        $result = $conn->query($sql);
                                        if (!$result) {
                                            die("invalid query:" . $connection->error);
                                        }
                                        $totalResult = $result->num_rows;
                                        echo "$totalResult";
                                        ?>
                                        </h5>
                                    <p class="card-text">Result Declared</p>
                                </div>
                            </div>
                            <a href="../Teacher2/academicReport.php" style="text-decoration:none">
                                <div class="card-footer bg-danger text-white h-100 d-flex">
                                    View Details
                                    <span class="ms-auto">
                                        <i class="bi bi-chevron-right"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>