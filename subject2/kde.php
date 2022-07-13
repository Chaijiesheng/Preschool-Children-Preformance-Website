<?php

if (isset($_POST['submit'])) {
    require '../includes/database.php';

    $StudentName = $_POST['StudentName'];
    $BM1 = $_POST['BM1'];

    $sql = "SELECT * FROM students where StudentName = '$StudentName' ";
    // $result = $conn->query($sql);
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows != 1) {
        die("id is not in db");
    }
    $data = $result->fetch_assoc();
    $StudentId = $data['RollID'];

    foreach ($_POST["BM1"] as $BM1) {
        if ($BM1 == 1 & $BM1 == 2 & $BM1 == 3) {
            $BM1 = 3;
        } elseif ($BM1 == 1 & $BM1 == 2) {
            $BM1 = 3;
        } elseif ($BM1 == 1) {
            $BM1 = 1;
        }
    }

    $BM1_Date = $_POST['BM1_Date'];
    $BM1_Date2 = $_POST['BM1_Date2'];
    $BM1_Date3 = $_POST['BM1_Date3'];
    $BM2 = $_POST['BM2'];

    foreach ($_POST["BM2"] as $BM2) {
        if ($BM2 == 1 & $BM2 == 2 & $BM2 == 3) {
            $BM2 = 3;
        } elseif ($BM2 == 1 & $BM2 == 2) {
            $BM2 = 3;
        } elseif ($BM2 == 1) {
            $BM2 = 1;
        }
    }

    $BM2_Date = $_POST['BM2_Date'];
    $BM2_Date2 = $_POST['BM2_Date2'];
    $BM2_Date3 = $_POST['BM2_Date3'];
    $BM3 = $_POST['BM3'];

    foreach ($_POST["BM3"] as $BM3) {
        if ($BM3 == 1 & $BM3 == 2 & $BM3 == 3) {
            $BM3 = 3;
        } elseif ($BM3 == 1 & $BM3 == 2) {
            $BM3 = 3;
        } elseif ($BM3 == 1) {
            $BM3 = 1;
        }
    }

    $BM3_Date = $_POST['BM3_Date'];
    $BM3_Date2 = $_POST['BM3_Date2'];
    $BM3_Date3 = $_POST['BM3_Date3'];
    $BM4 = $_POST['BM4'];

    foreach ($_POST["BM4"] as $BM4) {
        if ($BM4 == 1 & $BM4 == 2 & $BM4 == 3) {
            $BM4 = 3;
        } elseif ($BM4 == 1 & $BM4 == 2) {
            $BM4 = 3;
        } elseif ($BM4 == 1) {
            $BM4 = 1;
        }
    }

    $BM4_Date = $_POST['BM4_Date'];
    $BM4_Date2 = $_POST['BM4_Date2'];
    $BM4_Date3 = $_POST['BM4_Date3'];
    $BM5 = $_POST['BM5'];

    foreach ($_POST["BM5"] as $BM5) {
        if ($BM5 == 1 & $BM5 == 2 & $BM5 == 3) {
            $BM5 = 3;
        } elseif ($BM5 == 1 & $BM5 == 2) {
            $BM5 = 3;
        } elseif ($BM5 == 1) {
            $BM5 = 1;
        }
    }

    $BM5_Date = $_POST['BM5_Date'];
    $BM5_Date2 = $_POST['BM5_Date2'];
    $BM5_Date3 = $_POST['BM5_Date3'];
    $BM6 = $_POST['BM6'];

    foreach ($_POST["BM6"] as $BM6) {
        if ($BM6 == 1 & $BM6 == 2 & $BM6 == 3) {
            $BM6 = 3;
        } elseif ($BM6 == 1 & $BM6 == 2) {
            $BM6 = 3;
        } elseif ($BM6 == 1) {
            $BM6 = 1;
        }
    }

    $BM6_Date = $_POST['BM6_Date'];
    $BM6_Date2 = $_POST['BM6_Date2'];
    $BM6_Date3 = $_POST['BM6_Date3'];
    $class_code = 8;

    $query = "insert into classa_pi(StudentId,StudentName,PI1,PI1_Date,PI1_Date2,PI1_Date3,PI2,PI2_Date,PI2_Date2,PI2_Date3,PI3,PI3_Date,PI3_Date2,PI3_Date3,PI4,PI4_Date,PI4_Date2,PI4_Date3,PI5,PI5_Date,PI5_Date2,PI5_Date3,PI6,PI6_Date,PI6_Date2,PI6_Date3,class_code) 
    VALUES ('$StudentId','$StudentName','$BM1','$BM1_Date','$BM1_Date2','$BM1_Date3','$BM2','$BM2_Date','$BM2_Date2','$BM2_Date3','$BM3','$BM3_Date','$BM3_Date2','$BM3_Date3','$BM4','$BM4_Date','$BM4_Date2','$BM4_Date3','$BM5','$BM5_Date','$BM5_Date2','$BM5_Date3','$BM6','$BM6_Date','$BM6_Date2','$BM6_Date3','$class_code')";

    $run = mysqli_query($conn, $query) or die(mysqli_error($conn));


    if ($run) {
        echo "<script>alert('Data Inserted Successfully')</script>";
        // echo "<script>setTimeout(\"Location.href =' ../subject2/pi.php';\",1500);</script>";
        // exit();
    } else {
        echo "Form not submitted";
    }

    echo "<script>setTimeout(\"location.href = '../subject2/kde.php';\",100);</script>";
    exit();
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
    <!-- <link rel="stylesheet" href="../Teacher2/curriculum.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Curriculum</title>
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
                <div class="mt-2">
                    <div class="container">
                        <div class="row">
                            <div>
                                <h1 class="title">KREATIVITI DAN ESTETIKA</h2>
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
                                        <li class="breadcrumb-item" aria-current="page">Curriculum</li>
                                        <li class="breadcrumb-item active" aria-current="page">KREATIVITI DAN ESTETIKA</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>

            <div class="container-fluid">
                <table class="table table-bordered border-dark align-middle">
                    <form method="post">
                        <input type="hidden" class="form-control" type="text" placeholder="Default input" name="StudentId" value="<?php $data['StudentId'] ?>" aria-label="default input example">
                        <colgroup span="1" style="background: #ace4cf"></colgroup>
                        <colgroup span="4" style="background: rgb(247, 243, 243)"></colgroup>
                        <thead class="table-dark">
                            <tr class="title">
                                <td colspan="5">KREATIVITI DAN ESTETIKA</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-center" rowspan="2">CODE</th>
                                <th class="text-center" rowspan="2">CONSTRUCT</th>
                                <th class="text-center" rowspan="2">LEVEL OF MASTERY</th>
                                <th class="text-center" rowspan="2">DATE</th>
                                <th>ACHIEVEMENT STANDARDS</th>
                            </tr>
                            <tr>
                                <th>INTERPRETATION</th>
                            </tr>
                            <th>NAME:</th>
                            <td colspan="4">
                                <select id="name" name="StudentName" onchange="namelselect();" style="margin: 0; text-align: justify; width: 40%; height: 30px">
                                    <option selected="true" disabled>---Student Name---</option>
                                    <?php

                                    require_once '../includes/database.php';
                                    //read all row from database table
                                    $sql = "SELECT * FROM students";
                                    $result = $conn->query($sql);

                                    if (!$result) {
                                        die("invalid query:" . $connection->error);
                                    }

                                    while ($row = $result->fetch_assoc()) {
                                        $opt .= "<option value='{$row['StudentName']}'>{$row['StudentName']}</option>\n";
                                    }
                                    echo $opt;

                                    ?>
                                </select>
                                <?php
                                // require_once '../includes/database.php';
                                // $StudentName = $_POST['StudentName'];
                                // $sql = "SELECT * FROM students where StudentName = $StudentName";
                                // $result = $conn->query($sql);
                                // $result = mysqli_query($conn,$sql);
                                // if ($result->num_rows != 1) {
                                //     die("id is not in db");
                                // }
                                // $data = $result->fetch_assoc();
                                ?>
                            </td>
                            <tr>
                                <th>Class:</th>
                                <td colspan="4" style="background: #ddd">
                                    <input type="radio" name="classList" value="classA" /><label for="classA" style="margin: 5px 35px 5px 0"> A</label>
                                    <input type="radio" name="classList" value="classB" /><label for="classB" style="margin: 5px 35px 5px 0"> B</label>
                                    <input type="radio" name="classList" value="classC" /><label for="classC" style="margin: 5px 35px 5px 0"> C</label>
                                </td>
                            </tr>

                            <tr>
                                <td rowspan="3">KE 1</td>
                                <td>Menyanyikan lagu dari pelbagai repertoir</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM1[]" value="1"></td>
                                <td>
                                    <div class="input-group date" id="datepicker">
                                        <input type="text" class="form-control" id="date" name="BM1_Date" value="2020-1-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menyanyikan lagu dengan bimbingan</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">KM 1.1</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM1[]" value="2"></td>
                                <td>
                                    <div class="input-group date" id="datepicker1">
                                        <input type="text" class="form-control" id="date" name="BM1_Date2" value="2020-2-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menyanyikan lagu.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM1[]" value="3"></td>
                                <td>
                                    <div class="input-group date" id="datepicker2">
                                        <input type="text" class="form-control" id="date" name="BM1_Date3" value="2020-3-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menyanyikan lagu mengikut melodi dengan sebutan yang betul dan jelas.</td>
                            </tr>

                            <tr>
                                <td rowspan="3">KE 2</td>
                                <td>Memainkan alat muzik perkusi</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM2[]" value="1"></td>
                                <td>
                                    <div class="input-group date" id="datepicker3">
                                        <input type="text" class="form-control" id="date" name="BM2_Date" value="2020-4-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menghasilkan bunyi menggunakan alat muzik perkusi</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">KE 1.2</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM2[]" value="2"></td>
                                <td>
                                    <div class="input-group date" id="datepicker4">
                                        <input type="text" class="form-control" id="date" name="BM2_Date2" value="2020-5-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh memainkan alat muzik perkusi secara kreatif</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM2[]" value="3"></td>
                                <td>
                                    <div class="input-group date" id="datepicker5">
                                        <input type="text" class="form-control" id="date" name="BM2_Date3" value="2020-6-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh memainkan pelbagai alat muzik perkusi dan alat improvisasi secara kretif</td>
                            </tr>

                            <tr>
                                <td rowspan="3">KE 3</td>
                                <td>Membuat pergerakan mengikut muzik</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM3[]" value="1"></td>
                                <td>
                                    <div class="input-group date" id="datepicker6">
                                        <input type="text" class="form-control" id="date" name="BM3_Date" value="2020-4-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh membuat pergerakan berdasarkan lirik lagu.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">KE 1.3</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM3[]" value="2"></td>
                                <td>
                                    <div class="input-group date" id="datepicker7">
                                        <input type="text" class="form-control" id="date" name="BM3_Date2" value="2020-5-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh melakukan pergerakan mengikut tempo</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM3[]" value="3"></td>
                                <td>
                                    <div class="input-group date" id="datepicker8">
                                        <input type="text" class="form-control" id="date" name="BM3_Date3" value="2020-6-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh melakukan pergerakan mengikut tempo</td>
                            </tr>

                           
                        </tbody>

                        <tfoot>
                            <tr class="text-center" style="background: #7EC9AC">
                                <td>
                                </td>
                                <td colspan="4">
                                    <div class="d-grid gap-2 d-md-block">
                                        <button type="submit" name="submit" class="btn btn-success btn-rounded">Add</button>
                                        <button type="button" class="btn btn-success btn-rounded">Reset</button>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </form>
                </table>
            </div>

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
            $('#datepicker1').datepicker();
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('#datepicker2').datepicker();
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('#datepicker4').datepicker();
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('#datepicker5').datepicker();
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('#datepicker6').datepicker();
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('#datepicker7').datepicker();
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('#datepicker8').datepicker();
        });
    </script>
    

</body>

</html>