<?php
$page = 'report';
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
    <!-- ========== datatable ========== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <!-- ========== datatable ========== -->
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

                <div class="container">
                    <div class="row">
                        <div class="row page-title-div">
                            <h2 class="title">Student Report</h2>
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
                                        <li class="breadcrumb-item" aria-current="page">Student</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Manage Student Report</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <main class="mt-5 pt-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="card">
                            <div class="card-header">
                                <span><i class="bi bi-table me-2 "></i></span> Manage Report Info
                            </div>
                            <div class="card-body">
                                <div class="table-responsive ">
                                    <table id="example" class="table table-striped data-table table-bordered border-light" style="width: 100%">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Student Name</th>
                                                <th scope="col">Roll Id</th>
                                                <th scope="col">Class</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <th scope="row">1</th> -->
                                            <?php

                                            require '../includes/database.php';
                                            //read all row from database table
                                            $sql = "SELECT * FROM students";
                                            $result = $conn->query($sql);


                                            if (!$result) {
                                                die("invalid query:" . $connection->error);
                                            }
                                            while ($row = $result->fetch_assoc()) {
                                                $StudentId = $row["StudentId"];
                                                echo "<tr>
                                            <td>" . $row["StudentId"] . "</td>
                                            <td>" . $row["StudentName"] . "</td>
                                            <td>" . $row["RollID"] . "</td>
                                            <td>" . $row["Classes"] . "</td>
                                            <td>" . $row["Status"] . "</td>
                                            <td>
                                                <a class='btn btn-primary btn-sm' href='manageStudentInfo.php?stid=$StudentId'>Update</a>
                                                <a class='btn btn-primary btn-sm' href='printReport.php?stid=$StudentId'>Print</a>
                                                
                                            </td>
                                            </tr>";
                                            }
                                            ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Student Name</th>
                                                <th scope="col">Roll Id</th>
                                                <th scope="col">Class</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>

</html>