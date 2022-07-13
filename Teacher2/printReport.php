<?php
require '../includes/database.php';
$stid = "";
$page = 'report';
$class_code = "1";
$stid = intval($_GET['stid']);
$sql = "SELECT * FROM students where StudentId = $stid";
$result = $conn->query($sql);
if ($result->num_rows != 1) {
    die("id is not in db");
}
$data = $result->fetch_assoc();
$student_id = $data['RollID'];
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
                                        <li class="breadcrumb-item" aria-current="page">Report</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Print Report</li>
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
                                <h4 class="card-title">Report</h4>
                            </div>
                            <br>

                            <!-- ========== respond message ========== -->
                            <div class="row g-1 ">
                                <div class="row">
                                    <Strong>Student Name : <?= $data['StudentName'] ?></Strong>
                                </div>
                                <div class="row">
                                    <Strong>Roll ID : <?= $data['RollID'] ?></Strong>
                                </div>
                                <div class="row">
                                    <Strong>Classes : <?= $data['Classes'] ?></Strong>
                                </div>
                                <div class="row">
                                    <Strong>Parent Phone : <?= $data['ParentPhone'] ?></Strong>
                                </div>
                                <div class="row">
                                    <Strong>Admission Date : <?= $data['AdmissionDate'] ?></Strong>
                                </div>
                            </div>

                            <br>
                            <br>

                            <div class="container-fluid">
                                <table class="table table-bordered border-dark align-middle">
                                    <form method="post">
                                        
                                        <colgroup span="1" style="background: #ace4cf"></colgroup>
                                        <colgroup span="4" style="background: rgb(247, 243, 243)"></colgroup>
                                        <thead class="table-dark">
                                            <tr class="title">
                                                <td colspan="5">Bahasa Melayu</td>
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
                                            <tr>
                                                <?php
                                                require '../includes/database.php';
                                                $class_code = "1";
                                                $sql = "SELECT * FROM classa_pi where StudentId = $student_id and class_code = $class_code";
                                                $result = $conn->query($sql); 
                                                if ($result->num_rows != 1) {
                                                    die("id is not in db");
                                                }
                                                $data = $result->fetch_assoc();
                                                ?>
                                                <td rowspan="3">BM 1</td>
                                                <td>Listening and speaking skills</td>
                                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM1[]" value="1"  <?php if ($data['PI1']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                                <td>
                                                    <div class="input-group date" id="datepicker">
                                                        <input type="text" class="form-control" id="date" name="BM1_Date" value="<?= $data['PI1_Date'] ?>" required="required" autocomplete="off" />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text bg-light d-block">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>Boleh mendengar tetapi tidak memberi respons</td>
                                                
                                            </tr>
                                            <tr>
                                                <td style="background: #ddd">BM 1.1, BM 1.2</td>
                                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM1[]" value="2" <?php if ($data['PI1']== "2"|| $data['PI1']=="3"){ echo "Disabled checked checkbox";} else {echo "Disabled";} ?>></td>
                                                <td>
                                                    <div class="input-group date" id="datepicker1">
                                                        <input type="text" class="form-control" id="date" name="BM1_Date2" value="<?= $data['PI1_Date2'] ?>" required="required" autocomplete="off" />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text bg-light d-block">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>Boleh mendengar dan memberi respons</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM1[]" value="3" <?php if ($data['PI1']=="3"){ echo "Disabled checked checkbox";} else {echo "Disabled";} ?>></td>
                                                <td>
                                                    <div class="input-group date" id="datepicker2">
                                                        <input type="text" class="form-control" id="date" name="BM1_Date3" value="<?= $data['PI1_Date3'] ?>" required="required" autocomplete="off" />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text bg-light d-block">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>Boleh mendengar, memahami dan memberi pelbagai respon</td>
                                            </tr>

                                            <tr>
                                                <td rowspan="3">BM 2</td>
                                                <td>Berinteraksi menggunakan ayat mudah</td>
                                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM2[]" value="1" <?php if ($data['PI2']=="1" || $data['PI2']== "2" || $data['PI2']=="3"){ echo "Disabled checked checkbox";} else {echo "Disabled";}?>></td>
                                                <td>
                                                    <div class="input-group date" id="datepicker3">
                                                        <input type="text" class="form-control" id="date" name="BM2_Date" value="<?= $data['PI2_Date'] ?>" required="required" autocomplete="off" />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text bg-light d-block">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>Boleh berinteraksi tanpa menggunakan struktur ayat yang lengkap</td>

                                            </tr>
                                            <tr>
                                                <td style="background: #ddd">BM 1.4</td>
                                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM2[]" value="2" <?php if ($data['PI2']=="2" || $data['PI2']=="3"){ echo "Disabled checked checkbox";} else {echo "Disabled";}?>></td>
                                                <td>
                                                    <div class="input-group date" id="datepicker4">
                                                        <input type="text" class="form-control" id="date" name="BM2_Date2" value="<?= $data['PI2_Date2'] ?>" required="required" autocomplete="off" />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text bg-light d-block">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>Boleh berinteraksi menggunakan ayat yang sesuai</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM2[]" value="3" <?php if ($data['PI2']=="3"){ echo "Disabled checked checkbox";} ?>></td>
                                                <td>
                                                    <div class="input-group date" id="datepicker5">
                                                        <input type="text" class="form-control" id="date" name="BM2_Date3" value="<?= $data['PI2_Date3'] ?>" required="required" autocomplete="off" />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text bg-light d-block">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>Boleh berinteraksi mengikut situasi dengan menggunakan ayat yang sesuai dan sopan</td>
                                            </tr>

                                            <tr>
                                                <td rowspan="3">BM 3</td>
                                                <td>Listening and speaking skills</td>
                                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM3[]" value="1" <?php if ($data['PI3']== "1"||$data['PI3']=="2"||$data['PI3']=="3"){ echo "Disabled checked checkbox";} ?>></td>
                                                <td>
                                                    <div class="input-group date" id="datepicker6">
                                                        <input type="text" class="form-control" id="date" name="BM3_Date" value="<?= $data['PI3_Date'] ?>" required="required" autocomplete="off" />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text bg-light d-block">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>Hanya boleh menyebut abjad & bunyi huruf</td>

                                            </tr>
                                            <tr>
                                                <td style="background: #ddd">BM 2.2</td>
                                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM3[]" value="2" <?php if ($data['PI3']== "2"||$data['PI3']=="3"){ echo "Disabled checked checkbox";} ?>></td>
                                                <td>
                                                    <div class="input-group date" id="datepicker7">
                                                        <input type="text" class="form-control" id="date" name="BM3_Date2" value="<?= $data['PI3_Date2'] ?>" required="required" autocomplete="off" />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text bg-light d-block">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>Boleh mengecam dan menyebut sebahagian abjad & bunyi huruf</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM3[]" value="3" <?php if ($data['PI3']=="3"){ echo "Disabled checked checkbox";} ?>></td>
                                                <td>
                                                    <div class="input-group date" id="datepicker8">
                                                        <input type="text" class="form-control" id="date" name="BM3_Date3" value="<?= $data['PI3_Date3'] ?>" required="required" autocomplete="off" />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text bg-light d-block">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>Boleh mengecam dan menyebut sebahagian abjad & bunyi huruf</td>
                                            </tr>

                                            <tr>
                                                <td rowspan="3">BM 4</td>
                                                <td>Listening and speaking skills</td>
                                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM4[]" value="1" <?php if ($data['PI4']=="1"||$data['PI4']=="2"||$data['PI4']=="3"){ echo "Disabled checked checkbox";} else {echo "Disabled";} ?>></td>
                                                <td>
                                                    <div class="input-group date" id="datepicker9">
                                                        <input type="text" class="form-control" id="date" name="BM4_Date" value="<?= $data['PI4_Date'] ?>" required="required" autocomplete="off" />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text bg-light d-block">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>Boleh membunyikan suku kata terbuka</td>

                                            </tr>
                                            <tr>
                                                <td style="background: #ddd">BM 2.3 </td>
                                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM4[]" value="2" <?php if ($data['PI4']== "2" or $data['PI4']=="3"){ echo "Disabled checked checkbox";} else {echo "Disabled";} ?>></td>
                                                <td>
                                                    <div class="input-group date" id="datepicker10">
                                                        <input type="text" class="form-control" id="date" name="BM4_Date2" value="<?= $data['PI4_Date2'] ?>" required="required" autocomplete="off" />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text bg-light d-block">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>Boleh membaca perkataan dengan suku kata terbuka </td> 
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM4[]" value="3" <?php if ($data['PI4']=="3"){ echo "Disabled checked checkbox";} else {echo "Disabled";} ?>></td>
                                                <td>
                                                    <div class="input-group date" id="datepicker11">
                                                        <input type="text" class="form-control" id="date" name="BM4_Date3" value="<?= $data['PI4_Date3'] ?>" required="required" autocomplete="off" />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text bg-light d-block">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>Boleh membaca perkataan dengan suku kata terbuka dan tertutup dengan betul.</td>
                                            </tr>

                                            <tr>
                                                <td rowspan="3">BM 5</td>
                                                <td>Listening and speaking skills</td>
                                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM5[]" value="1" <?php if ($data['PI5'] == "1" || $data['PI5']== "2" || $data['PI5']== "3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                                <td>
                                                    <div class="input-group date" id="datepicker12">
                                                        <input type="text" class="form-control" id="date" name="BM5_Date" value="<?= $data['PI5_Date'] ?>" required="required" autocomplete="off" />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text bg-light d-block">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>Boleh membaca frasa</td>

                                            </tr>
                                            <tr>
                                                <td style="background: #ddd">BM 2.4, BM 2.5</td>
                                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM5[]" value="2" <?php if ($data['PI5']== "2" || $data['PI5']== "3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                                <td>
                                                    <div class="input-group date" id="datepicker13">
                                                        <input type="text" class="form-control" id="date" name="BM5_Date2" value="<?= $data['PI5_Date2'] ?>" required="required" autocomplete="off" />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text bg-light d-block">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>Boleh membaca dan memahami ayat mudah</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM5[]" value="3" <?php if ($data['PI5']== "3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                                <td>
                                                    <div class="input-group date" id="datepicker14">
                                                        <input type="text" class="form-control" id="date" name="BM5_Date3" value="<?= $data['PI5_Date3'] ?>" required="required" autocomplete="off" />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text bg-light d-block">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>Boleh membaca dan menceritakan semula apa yang dibaca secara beradab.</td>
                                            </tr>

                                            <tr>
                                                <td rowspan="3">BM 6</td>
                                                <td>Listening and speaking skills</td>
                                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM6[]" value="1" <?php if ($data['PI6'] == "1" || $data['PI6']== "2" || $data['PI6']== "3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                                <td>
                                                    <div class="input-group date" id="datepicker15">
                                                        <input type="text" class="form-control" id="date" name="BM6_Date" value="<?= $data['PI6_Date'] ?>" required="required" autocomplete="off" />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text bg-light d-block">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>Boleh menulis huruf dengan cara yang betul</td>

                                            </tr>
                                            <tr>
                                                <td style="background: #ddd">BM 3.2</td>
                                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM6[]" value="2" <?php if ($data['PI6']== "2" || $data['PI6']== "3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                                <td>
                                                    <div class="input-group date" id="datepicker16">
                                                        <input type="text" class="form-control" id="date" name="BM6_Date2" value="<?= $data['PI6_Date2'] ?>" required="required" autocomplete="off" />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text bg-light d-block">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>Boleh menulis perkataan dan frasa.</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM6[]" value="3" <?php if ($data['PI6']== "3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                                <td>
                                                    <div class="input-group date" id="datepicker17">
                                                        <input type="text" class="form-control" id="date" name="BM6_Date3" value="<?= $data['PI6_Date3'] ?>" required="required" autocomplete="off" />
                                                        <span class="input-group-append">
                                                            <span class="input-group-text bg-light d-block">
                                                                <i class="fa fa-calendar"></i>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>Boleh menulis ayat mudah dengan kemas.</td>
                                            </tr>

                                        </tbody>
                                    </form>
                                </table>
                            </div>
                            <div class="container-fluid">
                <table class="table table-bordered border-dark align-middle">
                    <form method="post">

                        <colgroup span="1" style="background: #ace4cf"></colgroup>
                        <colgroup span="4" style="background: rgb(247, 243, 243)"></colgroup>
                        <thead class="table-dark">
                            <tr class="title">
                                <td colspan="5">Bahasa Inggeris</td>
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
                            <tr>
                                <?php
                                require '../includes/database.php';
                                
                                $sql = "SELECT * FROM classa_pi where StudentId = $student_id and class_code = $class_code";
                                $result = $conn->query($sql);
                                if ($result->num_rows != 1) {
                                    die("id is not in db");
                                }
                                $data = $result->fetch_assoc();
                                ?>
                            <tr>
                                <td rowspan="3">BI 1</td>
                                <td>Listen to and respond appropriately</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM1[]" value="1" <?php if ($data['PI1']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Able to listen but cannot respond appropriately</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">BI 1.2</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM1[]" value="2" <?php if ($data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Able to follow simple instructions</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM1[]" value="3" <?php if ($data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Able to respond to stimulus appropriately</td>
                            </tr>

                            <tr>
                                <td rowspan="3">BI 2</td>
                                <td>Respond to conversations appropriately</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM2[]" value="1" <?php if ($data['PI1']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Able to understand instructions but cannot carry out simple conversation</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">BI 1.3</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM2[]" value="2" <?php if ($data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Able to carry out the simple conversations with prompting</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM2[]" value="3" <?php if ($data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Able to carry out the simple conversation in polite manners</td>
                            </tr>

                            <tr>
                                <td rowspan="3">BI 3</td>
                                <td>Read single syllable words</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM3[]" value="1" <?php if ($data['PI1']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Able to recognise letters of the names of the alphabet</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">BI 2.2</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM3[]" value="2" <?php if ($data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Able to recognise and sound out letters of the names of the alphabet</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM3[]" value="3" <?php if ($data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Able to read single syllable word correctly</td>
                            </tr>

                            <tr>
                                <td rowspan="3">BI 4</td>
                                <td>Listening and speaking skills</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM4[]" value="1" <?php if ($data['PI1']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker9">
                                        <input type="text" class="form-control" id="date" name="BM4_Date" value="2020-7-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Able to read words</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">BI 2.3</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM4[]" value="2" <?php if ($data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker10">
                                        <input type="text" class="form-control" id="date" name="BM4_Date2" value="2020-8-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Able to read words and phrases with understanding</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM4[]" value="3" <?php if ($data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker8">
                                        <input type="text" class="form-control" id="date" name="BM4_Date3" value="2020-9-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Able to read simple sentences with understanding</td>
                            </tr>

                            <tr>
                                <td rowspan="3">BI 5</td>
                                <td>Listening and speaking skills</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM5[]" value="1" <?php if ($data['PI1']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker9">
                                        <input type="text" class="form-control" id="date" name="BM5_Date" value="2020-10-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Able to copy recognisable words</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">BI 3.2</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM5[]" value="2" <?php if ($data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker10">
                                        <input type="text" class="form-control" id="date" name="BM5_Date2" value="2020-11-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Able to write words in legible print.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM5[]" value="3" <?php if ($data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker11">
                                        <input type="text" class="form-control" id="date" name="BM5_Date3" value="2020-12-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Able to write words and phrases neatly in legible print.</td>
                            </tr>

                        </tbody>

                    </form>
                </table>
            </div>
            <div class="container-fluid">
                <table class="table table-bordered border-dark align-middle">
                    <form method="post">

                        <colgroup span="1" style="background: #ace4cf"></colgroup>
                        <colgroup span="4" style="background: rgb(247, 243, 243)"></colgroup>
                        <thead class="table-dark">
                            <tr class="title">
                                <td colspan="5">Pendidikan Islam</td>
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
                            <tr>
                                <?php
                                require '../includes/database.php';

                                $sql = "SELECT * FROM classa_pi where StudentId = $student_id and class_code = $class_code";
                                $result = $conn->query($sql);
                                if ($result->num_rows != 1) {
                                    die("id is not in db");
                                }
                                $data = $result->fetch_assoc();
                                ?>
                            <tr>
                                <td rowspan="3">PI 1</td>
                                <td>Mengenal huruf hijaiyah</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM1[]" value="1"  <?php if ($data['PI1']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh menyebut huruf hijaiyah tunggal.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">PI 1.1</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM1[]" value="2"  <?php if ($data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh mengenal dan menyebut sebahagian huruf hijaiyah berbaris.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM1[]" value="3"  <?php if ($data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh mengenal dan menyebut semua huruf hijaiyah berbaris secara beradab.</td>
                            </tr>

                            <tr>
                                <td rowspan="3">PI 2</td>
                                <td>Mengetahui kalimah syahadah</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM2[]" value="1"  <?php if ($data['PI1']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh menyebut kalimah 'lailahaillallah'</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">PI 2.1</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM2[]" value="2"  <?php if ($data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh menyebut kalimah syahadah.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM2[]" value="3"  <?php if ($data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh menyebut kalimah syahadah dan menyatakan maksudnya dengan beradab.</td>
                            </tr>

                            <tr>
                                <td rowspan="3">PI 3</td>
                                <td>Mengetahui asas beriman kepada Allah</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM3[]" value="1"  <?php if ($data['PI1']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh menyebut kalimah Allah dengan betul.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">PI 2.2</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM3[]" value="2"  <?php if ($data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh memuji kebesaran Allah dengan rangsangan.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM3[]" value="3"  <?php if ($data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh memuji kebesaran Allah dengan lafaz yang betul dan beradab.</td>
                            </tr>

                            <tr>
                                <td rowspan="3">PI 4</td>
                                <td>Mengetahui Rukun Islam</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM4[]" value="1"  <?php if ($data['PI1']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker9">
                                        <input type="text" class="form-control" id="date" name="BM4_Date" value="2020-7-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menyebut sebahagian Rukun Iman.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">PI 2.4</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM4[]" value="2"  <?php if ($data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker10">
                                        <input type="text" class="form-control" id="date" name="BM4_Date2" value="2020-8-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menyebut Rukun Iman</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM4[]" value="3"  <?php if ($data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker8">
                                        <input type="text" class="form-control" id="date" name="BM4_Date3" value="2020-9-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh bercerita tentang Rukun Iman dengan betul.</td>
                            </tr>

                            <tr>
                                <td rowspan="3">PI 5</td>
                                <td>Mengetahui rukun Iman</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM5[]" value="1"  <?php if ($data['PI1']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker9">
                                        <input type="text" class="form-control" id="date" name="BM5_Date" value="2020-10-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menyebut sebahagian dari rukun Islam.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">PI 2.5</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM5[]" value="2"  <?php if ($data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker10">
                                        <input type="text" class="form-control" id="date" name="BM5_Date2" value="2020-11-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menyebut Rukun Islam secara tertib.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM5[]" value="3"  <?php if ($data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker11">
                                        <input type="text" class="form-control" id="date" name="BM5_Date3" value="2020-12-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh bercerita tentang amalan Rukun Islam dalam kehidupan. </td>
                            </tr>

                            <tr>
                                <td rowspan="3">PI 6</td>
                                <td>Melakukan wuduk</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM6[]" value="1"  <?php if ($data['PI1']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker12">
                                        <input type="text" class="form-control" id="date" name="BM6_Date" value="2020-1-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menyebut anggota wuduk.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">PI 3.2</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM6[]" value="2"  <?php if ($data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker13">
                                        <input type="text" class="form-control" id="date" name="BM6_Date2" value="2020-2-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh melafazkan niat wuduk dan maknanya dengan betul.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM6[]" value="3"  <?php if ($data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker14">
                                        <input type="text" class="form-control" id="date" name="BM6_Date3" value="2020-3-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh melakukan wuduk dengan tertib dan beradab.</td>
                            </tr>

                        </tbody>

                    </form>
                </table>
            </div>

            <div class="container-fluid">
                <table class="table table-bordered border-dark align-middle">
                    <form method="post">

                        <colgroup span="1" style="background: #ace4cf"></colgroup>
                        <colgroup span="4" style="background: rgb(247, 243, 243)"></colgroup>
                        <thead class="table-dark">
                            <tr class="title">
                                <td colspan="5">Tunjang Ketrampilan Diri</td>
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
                            <tr>
                                <?php
                                require '../includes/database.php';

                                $sql = "SELECT * FROM classa_pi where StudentId = $student_id and class_code = $class_code";
                                $result = $conn->query($sql);
                                if ($result->num_rows != 1) {
                                    die("id is not in db");
                                }
                                $data = $result->fetch_assoc();
                                ?>
                             <tr>
                                <td rowspan="3">KD 1</td>
                                <td>Kemahiran mengenal dan mengurus emosi sendiri</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM1[]" value="1"  <?php if ($data['PI1']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh menyatakan emosi sendiri</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">KD 1.1</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM1[]" value="2"  <?php if ($data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh menyatakan emosi sendiri mengikut situasi</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM1[]" value="3"  <?php if ($data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh mengurus emosi sendiri dalam pelbagai situasi</td>
                            </tr>

                            <tr>
                                <td rowspan="3">KD 2</td>
                                <td>Kemahiran mengenali emosi orang lain</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM2[]" value="1"  <?php if ($data['PI1']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh menyatakan emosi orang lain.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">KD 1.2</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM2[]" value="2"  <?php if ($data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh menyatakan emosi orang lain mengikut situasi.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM2[]" value="3"  <?php if ($data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh membezakan emosi antara individu dalam situasi yang tertentu.</td>
                            </tr>

                            <tr>
                                <td rowspan="3">KD 3</td>
                                <td>Kemahiran membina konsep kendiri yang positif</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM3[]" value="1"  <?php if ($data['PI1']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh menunjukkan sikap yang positif dengan ransangan.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">KD 2.1</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM3[]" value="2"  <?php if ($data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh menunjukkan sebahagian sikap yang positif.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM3[]" value="3"  <?php if ($data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh menunjukkan sikap yang positif dalam pelbagai situasi.</td>
                            </tr>

                            <tr>
                                <td rowspan="3">KD 4</td>
                                <td>Membina kebolehan mengawal diri</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM4[]" value="1"  <?php if ($data['PI1']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker9">
                                        <input type="text" class="form-control" id="date" name="BM4_Date" value="2020-7-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh mengawal emosi sendiri dengan bimbingan.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">KD 2.2</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM4[]" value="2"  <?php if ($data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker10">
                                        <input type="text" class="form-control" id="date" name="BM4_Date2" value="2020-8-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh mengawal diri dalam situasi tertentu.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM4[]" value="3"  <?php if ($data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker8">
                                        <input type="text" class="form-control" id="date" name="BM4_Date3" value="2020-9-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh mengawal diri dalam pelbagai situasi.</td>
                            </tr>

                            <tr>
                                <td rowspan="3">KD 5</td>
                                <td>Membina keyakinan untuk berkomunikasi</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM5[]" value="1"  <?php if ($data['PI1']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker9">
                                        <input type="text" class="form-control" id="date" name="BM5_Date" value="2020-10-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh berinteraksi dengan orang tertentu sahaja.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">KD 2.3</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM5[]" value="2"  <?php if ($data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker10">
                                        <input type="text" class="form-control" id="date" name="BM5_Date2" value="2020-11-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh berinteraksi dengan orang lain.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM5[]" value="3"  <?php if ($data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker11">
                                        <input type="text" class="form-control" id="date" name="BM5_Date3" value="2020-12-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh berinteraksi dan memberi pendapat dengan yakin dalam pelbagai situasi.</td>
                            </tr>

                            <tr>
                                <td rowspan="3">KD 6</td>
                                <td>Memahami keperluan, perasaan dan pandangan orang lain</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM6[]" value="1"  <?php if ($data['PI1']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker12">
                                        <input type="text" class="form-control" id="date" name="BM6_Date" value="2020-1-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh memahami keperluan orang lain dengan bimbingan.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">KD 3.1</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM6[]" value="2"  <?php if ($data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker13">
                                        <input type="text" class="form-control" id="date" name="BM6_Date2" value="2020-2-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh memahami perasaan orang lain berdasarkan gerak laku yang ditunjukkannya.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM6[]" value="3"  <?php if ($data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker14">
                                        <input type="text" class="form-control" id="date" name="BM6_Date3" value="2020-3-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menghormati perasaan dan pandangan orang lain dalam pelbagai situasi.</td>
                            </tr>

                        </tbody>

                    </form>
                </table>
            </div>

            <div class="container-fluid">
                <table class="table table-bordered border-dark align-middle">
                    <form method="post">

                        <colgroup span="1" style="background: #ace4cf"></colgroup>
                        <colgroup span="4" style="background: rgb(247, 243, 243)"></colgroup>
                        <thead class="table-dark">
                            <tr class="title">
                                <td colspan="5">Perkembangan Fizikal</td>
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
                            <tr>
                                <?php
                                require '../includes/database.php';

                                $sql = "SELECT * FROM classa_pi where StudentId = $student_id and class_code = $class_code";
                                $result = $conn->query($sql);
                                if ($result->num_rows != 1) {
                                    die("id is not in db");
                                }
                                $data = $result->fetch_assoc();
                                ?>
                             <tr>
                                <td rowspan="3">FK 1</td>
                                <td>Perkembangan Motor Halus</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM1[]" value="1" <?php if ($data['PI1']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh menjalankan aktiviti yang melibatkan kemahiran motor halus</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">FK 1.1</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM1[]" value="2" <?php if ($data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh melakukan kemahiran motor halus menggunakan alatan dengan cara yang betul</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM1[]" value="3" <?php if ($data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh melakukan kemahiran motor halus yang melibatkan pelbagai aktiviti yang lebih kompleks</td>
                            </tr>

                            <tr>
                                <td rowspan="3">FK 2</td>
                                <td>Perkembangan Motor Kasar-Lokomotor</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM2[]" value="1" <?php if ($data['PI2']== "1"|| $data['PI2']== "2"||$data['PI2']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh melakukan pergerakan lokomotor</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">BM 2.2</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM2[]" value="2" <?php if ($data['PI2']== "2"||$data['PI2']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh melakukan gabungan pergerakan lokomotor</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM2[]" value="3" <?php if ($data['PI2']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh melakukan pergerakan lokomotor dengan kesedaran ruang</td>
                            </tr>

                            <tr>
                                <td rowspan="3">FK 3</td>
                                <td>Perkembangan Motor Kasar- Bukan Lokomotor</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM3[]" value="1" <?php if ($data['PI3']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh melakukan sebahagian pergerakan bukan lokomotor</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">FK 2.3</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM3[]" value="2" <?php if ( $data['PI3']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh melakukan pergerakan bukan lokomotor</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM3[]" value="3" <?php if ($data['PI3']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh melakukan gabungan pergerakan bukan lokomotor</td>
                            </tr>

                            <tr>
                                <td rowspan="3">FK 4</td>
                                <td>Kemahiran manipulasi</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM4[]" value="1" <?php if ($data['PI4']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker9">
                                        <input type="text" class="form-control" id="date" name="BM4_Date" value="2020-7-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh melakukan satu kemahiran manipulasi</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">FK 3.1</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM4[]" value="2" <?php if ($data['PI4']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker10">
                                        <input type="text" class="form-control" id="date" name="BM4_Date2" value="2020-8-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh melakukan kemahiran manipulasi dalam situasi tertentu sahaja</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM4[]" value="3" <?php if ($data['PI4']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker8">
                                        <input type="text" class="form-control" id="date" name="BM4_Date3" value="2020-9-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh melakukan kemahiran manipulasi dalam pelbagai situasi</td>
                            </tr>

                            <tr>
                                <td rowspan="3">FK 5</td>
                                <td>Pergerakan berirama</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM5[]" value="1" <?php if ($data['PI5']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker9">
                                        <input type="text" class="form-control" id="date" name="BM5_Date" value="2020-10-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh melakukan pergerakan lokomotor mengikut muzik</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">FK 4.1</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM5[]" value="2" <?php if ($data['PI5']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker10">
                                        <input type="text" class="form-control" id="date" name="BM5_Date2" value="2020-11-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh melakukan pergerakan lokomotor dan bukan lokomotor mengikut muzik</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM5[]" value="3" <?php if ($data['PI5']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker11">
                                        <input type="text" class="form-control" id="date" name="BM5_Date3" value="2020-12-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh melakukan gabungan pergerakan lokomotor dn bukan lokomotor secara kreatif mengikut muzik</td>
                            </tr>

                            <tr>
                                <td rowspan="3">FK 6</td>
                                <td>Kesihatan diri dan reproduktif</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM6[]" value="1" <?php if ($data['PI6']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker12">
                                        <input type="text" class="form-control" id="date" name="BM6_Date" value="2020-1-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menjaga kesihatan diri dengan bimbingan</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">BM 5.1</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM6[]" value="2" <?php if ($data['PI6']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker13">
                                        <input type="text" class="form-control" id="date" name="BM6_Date2" value="2020-2-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menjaga kesihatan diri sendiri</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM6[]" value="3"  <?php if ($data['PI6']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker14">
                                        <input type="text" class="form-control" id="date" name="BM6_Date3" value="2020-3-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Mengamalkan penjagaan kesihatan diri dalam kehidupan</td>
                            </tr>
                        </tbody>
                    </form>
                </table>
            </div>
                        </div>
                        <br>
                        <div class="container-fluid">
                <table class="table table-bordered border-dark align-middle">
                    <form method="post">

                        <colgroup span="1" style="background: #ace4cf"></colgroup>
                        <colgroup span="4" style="background: rgb(247, 243, 243)"></colgroup>
                        <thead class="table-dark">
                            <tr class="title">
                                <td colspan="5">Sains Awal</td>
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
                            <tr>
                                <?php
                                require '../includes/database.php';

                                $sql = "SELECT * FROM classa_pi where StudentId = $student_id and class_code = $class_code";
                                $result = $conn->query($sql);
                                if ($result->num_rows != 1) {
                                    die("id is not in db");
                                }
                                $data = $result->fetch_assoc();
                                ?>
                             <tr>
                                <td rowspan="3">SA 1</td>
                                <td>Kemahiran membuat pemerhatian</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM1[]" value="1" <?php if ($data['PI1']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh membuat pemerhatian menggunakan satu deria sahaja.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">SA 2.1</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM1[]" value="2" <?php if ($data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh membuat pemerhatian menggunakan gabungan dua deria.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM1[]" value="3" <?php if ($data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh membuat pemerhatian menggunakan gabungan sekurang-kurangnya tiga deria.</td>
                            </tr>

                            <tr>
                                <td rowspan="3">SA 2</td>
                                <td>Kemahiran mengelas objek</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM2[]" value="1" <?php if ($data['PI2']== "1"|| $data['PI2']== "2"||$data['PI2']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh membanding dan membeza objek mengikut satu ciri.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">SA 2.2</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM2[]" value="2"  <?php if ($data['PI2']== "2"||$data['PI2']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh mengumpulkan objek mengikut dua ciri.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM2[]" value="3"  <?php if ($data['PI2']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh mengumpulkan objek dan menyatakan ciri sepunya bagi setiap pengelasan yang dibuat.</td>
                            </tr>

                            <tr>
                                <td rowspan="3">SA 3</td>
                                <td>Kemahiran membuat pengukuran</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM3[]" value="1"  <?php if ($data['PI3']== "1"|| $data['PI3']== "2"||$data['PI3']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh membanding ukuran objek.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">SA 2.3</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM3[]" value="2" <?php if ($data['PI3']== "2"||$data['PI3']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh membandingkan dan mengukur panjang atau tinggi objek menggunakan unit bukan piawai.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM3[]" value="3" <?php if ($data['PI3']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh mengukur panjang, menimbang onjek dan menyukat cecair menggunakan unit bukan piawai.</td>
                            </tr>

                            <tr>
                                <td rowspan="3">SA 4</td>
                                <td>Kemahiran membuat ramalan</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM4[]" value="1" <?php if ($data['PI4']== "1"|| $data['PI4']== "2"||$data['PI4']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker9">
                                        <input type="text" class="form-control" id="date" name="BM4_Date" value="2020-7-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh membuat ramalan dengan ransangan.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">SA 2.5</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM4[]" value="2" <?php if ($data['PI4']== "2"||$data['PI4']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker10">
                                        <input type="text" class="form-control" id="date" name="BM4_Date2" value="2020-8-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh membuat ramalan berdasarkan pengalaman yang lalu.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM4[]" value="3" <?php if ($data['PI4']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker8">
                                        <input type="text" class="form-control" id="date" name="BM4_Date3" value="2020-9-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh membuat ramalan berdasarkan pemerhatian dan aktiviti yang dijalankan.</td>
                            </tr>

                            <tr>
                                <td rowspan="3">SA 5</td>
                                <td>Kemahiran berkomunikasi</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM5[]" value="1" <?php if ($data['PI5']== "1"|| $data['PI5']== "2"||$data['PI5']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker9">
                                        <input type="text" class="form-control" id="date" name="BM5_Date" value="2020-10-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menyatakan pemerhatian secara lisan.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">SA 2.6</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM5[]" value="2" <?php if ($data['PI5']== "2"||$data['PI5']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker10">
                                        <input type="text" class="form-control" id="date" name="BM5_Date2" value="2020-11-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh merekod dan menerangkan pemerhatian melalui hasil kerja atau lisan.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM5[]" value="3" <?php if ($data['PI5']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker11">
                                        <input type="text" class="form-control" id="date" name="BM5_Date3" value="2020-12-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh merekod dan membuat kesimpulan berdasarkan pemerhatian melalui hasil kerja atau lisan. </td>
                            </tr>

                            <tr>
                                <td rowspan="3">SA 6</td>
                                <td>Kemahiran membuat penerokaan</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM6[]" value="1" <?php if ($data['PI6']== "1"|| $data['PI6']== "2"||$data['PI6']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker12">
                                        <input type="text" class="form-control" id="date" name="BM6_Date" value="2020-1-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menjalankan penerokaan dengan rangsangan.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">SA 3.1, SA 4.1, SA 5.1</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM6[]" value="2" <?php if ($data['PI6']== "2"||$data['PI6']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker13">
                                        <input type="text" class="form-control" id="date" name="BM6_Date2" value="2020-2-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menjalankan penerokaan berdasarkan aktiviti yang ditetapkan.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM6[]" value="3" <?php if ($data['PI6']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker14">
                                        <input type="text" class="form-control" id="date" name="BM6_Date3" value="2020-3-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menjalankan penerokaan dan merekod serta menceritakan proses yang berlaku.</td>
                            </tr>
                        </tbody>
                    </form>
                </table>
            </div>
            <div class="container-fluid">
                <table class="table table-bordered border-dark align-middle">
                    <form method="post">

                        <colgroup span="1" style="background: #ace4cf"></colgroup>
                        <colgroup span="4" style="background: rgb(247, 243, 243)"></colgroup>
                        <thead class="table-dark">
                            <tr class="title">
                                <td colspan="5">Matematik Awal</td>
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
                            <tr>
                                <?php
                                require '../includes/database.php';

                                $sql = "SELECT * FROM classa_pi where StudentId = $student_id and class_code = $class_code";
                                $result = $conn->query($sql);
                                if ($result->num_rows != 1) {
                                    die("id is not in db");
                                }
                                $data = $result->fetch_assoc();
                                
                                ?>
                                <tr>
                                <td rowspan="3">MA 1</td>
                                <td>Kemahiran memadankan objek</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM1[]" value="1" <?php if ($data['PI1']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh memadankan objek berpasangan yang sama.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">MA 1.1</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM1[]" value="2" <?php if ($data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh memadankan dua kumpulan objek yang mempunyai bilangan yang sama.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM1[]" value="3" <?php if ($data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh memadankan objek berdasarkan ciri-ciri tertentu.</td>
                            </tr>

                            <tr>
                                <td rowspan="3">MA 2</td>
                                <td>Kemahiran membandingkan kuantiti objek</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM2[]" value="1" <?php if ($data['PI2']== "1"|| $data['PI2']== "2"||$data['PI2']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh membandingkan kuantiti dua kumpulan objek dengan ransangan.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">MA 1.2</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM2[]" value="2" <?php if ($data['PI2']== "2"||$data['PI2']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh membandingkan kuantiti dua kumpulan objek.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM2[]" value="3" <?php if ($data['PI2']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh membandingkan kuantiti dua kumpulan objek yang berbeza dengan betul.</td>
                            </tr>

                            <tr>
                                <td rowspan="3">MA 3</td>
                                <td>Kemahiran membuat seriasi</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM3[]" value="1" <?php if ($data['PI3']== "1"|| $data['PI3']== "2"||$data['PI3']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh menyusun objek mengikut kriteria yang ditentukan dengan bimbingan.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">MA 1.3</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM3[]" value="2" <?php if ($data['PI3']== "2"||$data['PI3']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh menyusun objek mengikut satu kriteria sahaja.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM3[]" value="3" <?php if ($data['PI3']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh menyusun objek mengikut pelbagai kriteria yang ditentukan.</td>
                            </tr>

                            <tr>
                                <td rowspan="3">MA 4</td>
                                <td>Kemahiran menghasilkan pola</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM4[]" value="1" <?php if ($data['PI4']== "1"|| $data['PI4']== "2"||$data['PI4']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker9">
                                        <input type="text" class="form-control" id="date" name="BM4_Date" value="2020-7-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh meniru pola sahaja.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">MA 1.4</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM4[]" value="2" <?php if ($data['PI4']== "2"||$data['PI4']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker10">
                                        <input type="text" class="form-control" id="date" name="BM4_Date2" value="2020-8-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh melengkapkan pola yang diberikan.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM4[]" value="3" <?php if ($data['PI4']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker8">
                                        <input type="text" class="form-control" id="date" name="BM4_Date3" value="2020-9-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menghasilkan pola dengan kreativiti sendiri.</td>
                            </tr>

                            <tr>
                                <td rowspan="3">MA 5</td>
                                <td>Pemahaman tentang ketekalan</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM5[]" value="1" <?php if ($data['PI5']== "1"|| $data['PI5']== "2"||$data['PI5']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker9">
                                        <input type="text" class="form-control" id="date" name="BM5_Date" value="2020-10-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menyatakan konsep ketekalan dengan ransangan.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">MA 1.5</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM5[]" value="2"<?php if ($data['PI5']== "2"||$data['PI5']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?> ></td>
                                <td>
                                    <div class="input-group date" id="datepicker10">
                                        <input type="text" class="form-control" id="date" name="BM5_Date2" value="2020-11-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menjelaskan satu aspek ketekalan sahaja.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM5[]" value="3"<?php if ($data['PI5']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker11">
                                        <input type="text" class="form-control" id="date" name="BM5_Date3" value="2020-12-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menjelaskan satu aspek ketekalan dari aspek panjang, jisim dan isipadu. </td>
                            </tr>

                            <tr>
                                <td rowspan="3">MA 6</td>
                                <td>Pengetahuan tentang nombor</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM6[]" value="1" <?php if ($data['PI6']== "1"|| $data['PI6']== "2"||$data['PI6']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker12">
                                        <input type="text" class="form-control" id="date" name="BM6_Date" value="2020-1-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh membilang objek.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">MA 1.5</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM6[]" value="2" <?php if ($data['PI6']== "2"||$data['PI6']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker13">
                                        <input type="text" class="form-control" id="date" name="BM6_Date2" value="2020-2-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menggunakan bentuk untuk mewakili bilangan objek.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM6[]" value="3" <?php if ($data['PI6']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker14">
                                        <input type="text" class="form-control" id="date" name="BM6_Date3" value="2020-3-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh memadankan angka dengan bilangan objek 1-10</td>
                            </tr>
                        </tbody>
                    </form>
                </table>
            </div>

            <div class="container-fluid">
                <table class="table table-bordered border-dark align-middle">
                    <form method="post">

                        <colgroup span="1" style="background: #ace4cf"></colgroup>
                        <colgroup span="4" style="background: rgb(247, 243, 243)"></colgroup>
                        <thead class="table-dark">
                            <tr class="title">
                                <td colspan="5">Kreativiti Dan Estetika</td>
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
                            <tr>
                                <?php
                                require '../includes/database.php';

                                $sql = "SELECT * FROM classa_pi where StudentId = $student_id and class_code = $class_code";
                                $result = $conn->query($sql);
                                if ($result->num_rows != 1) {
                                    die("id is not in db");
                                }
                                $data = $result->fetch_assoc();
                                
                                ?>
                                <tr>
                                <td rowspan="3">KE 1</td>
                                <td>Menyanyikan lagu dari pelbagai repertoir</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM1[]" value="1" <?php if ($data['PI1']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM1[]" value="2" <?php if ($data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM1[]" value="3" <?php if ($data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM2[]" value="1" <?php if ($data['PI2']== "1"|| $data['PI2']== "2"||$data['PI2']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM2[]" value="2" <?php if ($data['PI2']== "2"||$data['PI2']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM2[]" value="3" <?php if ($data['PI2']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM3[]" value="1" <?php if ($data['PI3']== "1"|| $data['PI3']== "2"||$data['PI3']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM3[]" value="2" <?php if ($data['PI3']== "2"||$data['PI3']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM3[]" value="3" <?php if ($data['PI3']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                    </form>
                </table>
            </div>

            <div class="container-fluid">
                <table class="table table-bordered border-dark align-middle">
                    <form method="post">

                        <colgroup span="1" style="background: #ace4cf"></colgroup>
                        <colgroup span="4" style="background: rgb(247, 243, 243)"></colgroup>
                        <thead class="table-dark">
                            <tr class="title">
                                <td colspan="5">Tunjang Kemanusiaan</td>
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
                            <tr>
                                <?php
                                require '../includes/database.php';

                                $sql = "SELECT * FROM classa_pi where StudentId = $student_id and class_code = $class_code";
                                $result = $conn->query($sql);
                                if ($result->num_rows != 1) {
                                    die("id is not in db");
                                }
                                $data = $result->fetch_assoc();
                                
                                ?>
                                <tr>
                                <td rowspan="3">KM 1</td>
                                <td>Memahami diri dan hubungan dengan keluarga</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM1[]" value="1" <?php if ($data['PI1']== "1"|| $data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh memerihalkan tentang diri sendiri.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">KM 1.1</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM1[]" value="2" <?php if ($data['PI1']== "2"||$data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh memerihalkan tentang diri sendiri dan keluarga.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM1[]" value="3" <?php if ($data['PI1']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh memerihalkan tentang peranan dan tanggungjawab diri dan keluarga.</td>
                            </tr>

                            <tr>
                                <td rowspan="3">KM 2</td>
                                <td>Memahami hubungan dengan sekolah</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM2[]" value="1" <?php if ($data['PI2']== "1"|| $data['PI2']== "2"||$data['PI2']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh bercerita tentang kelas.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">KM 2.2</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM2[]" value="2" <?php if ($data['PI2']== "2"||$data['PI2']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh bercerita tentang sekolah.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM2[]" value="3" <?php if ($data['PI2']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Menunjukkan sikap bangga terhadap sekolah.</td>
                            </tr>

                            <tr>
                                <td rowspan="3">KM 3</td>
                                <td>Melaksanakan tanggungjawab menjaga kemudahan awam.</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM3[]" value="1" <?php if ($data['PI3']== "1"|| $data['PI3']== "2"||$data['PI3']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh mengenal simbol kemudahan awam.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">KM 2.3</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM3[]" value="2" <?php if ($data['PI3']== "2"||$data['PI3']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh menyatakan cara menggunakan kemudahan awam dengan betul.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM3[]" value="3" <?php if ($data['PI3']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
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
                                <td>Boleh menjaga kemudahan awam.</td>
                            </tr>

                            <tr>
                                <td rowspan="3">KM 4</td>
                                <td>Mengetahui negara Malaysia</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM4[]" value="1" <?php if ($data['PI4']== "1"|| $data['PI4']== "2"||$data['PI4']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker9">
                                        <input type="text" class="form-control" id="date" name="BM4_Date" value="2020-7-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Menyebut nama negeri tempat tinggal.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">KM 3.1</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM4[]" value="2" <?php if ($data['PI4']== "2"||$data['PI4']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker10">
                                        <input type="text" class="form-control" id="date" name="BM4_Date2" value="2020-8-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Bercerita tentang negeri tempat tinggal.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM4[]" value="3" <?php if ($data['PI4']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker8">
                                        <input type="text" class="form-control" id="date" name="BM4_Date3" value="2020-9-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Bercerita tentang negara Malaysia.</td>
                            </tr>

                            <tr>
                                <td rowspan="3">KM 5</td>
                                <td>Menunjuk sikap cinta akan negara</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM5[]" value="1" <?php if ($data['PI5']== "1"|| $data['PI5']== "2"||$data['PI5']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker9">
                                        <input type="text" class="form-control" id="date" name="BM5_Date" value="2020-10-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menyanyikan lagu negaraku</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">KM 3.2</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM5[]" value="2" <?php if ($data['PI5']== "2"||$data['PI5']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker10">
                                        <input type="text" class="form-control" id="date" name="BM5_Date2" value="2020-11-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menyanyikan Lagu kebangsaan dengan tertin dan menghormati Jalur gemilang</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM5[]" value="3" <?php if ($data['PI5']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker11">
                                        <input type="text" class="form-control" id="date" name="BM5_Date3" value="2020-12-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menunjukkan penghormatan terhadap lambang kebesaran dan identiti negara dalam pelbagai situasi.</td>
                            </tr>

                            <tr>
                                <td rowspan="3">KM 6</td>
                                <td>Menghargai warisan budaya masyarakat Malaysia</td>
                                <td class="text-center">Level 1 <input class="form-check-input" type="checkbox" name="BM6[]" value="1" <?php if ($data['PI6']== "1"|| $data['PI6']== "2"||$data['PI6']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker12">
                                        <input type="text" class="form-control" id="date" name="BM6_Date" value="2020-1-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh menyebut perayaan utama di Malaysia.</td>

                            </tr>
                            <tr>
                                <td style="background: #ddd">KM 4.1</td>
                                <td class="text-center">Level 2 <input class="form-check-input" type="checkbox" name="BM6[]" value="2" <?php if ( $data['PI6']== "2"||$data['PI6']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker13">
                                        <input type="text" class="form-control" id="date" name="BM6_Date2" value="2020-2-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Boleh bercerita tentang warisan budaya Malaysia.</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center">Level 3 <input class="form-check-input" type="checkbox" name="BM6[]" value="3"<?php if ($data['PI6']=="3"){ echo "Disabled checked checkbox";}else {echo "Disabled";} ?>></td>
                                <td>
                                    <div class="input-group date" id="datepicker14">
                                        <input type="text" class="form-control" id="date" name="BM6_Date3" value="2020-3-05" required="required" autocomplete="off" />
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-light d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                </td>
                                <td>Melibatkab diri dalam aktiviti warisan budaya Malaysia.</td>
                            </tr>
                        </tbody>
                    </form>
                </table>
            </div>

            <br>
            <br>
        </main>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script type="text/javascript">
        $(function() {
            $(".selector").datepicker("disable");
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $(".selector").datepicker("disable");
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('#datepicker2').datepicker("disable");
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $( ".selector" ).datepicker( "disable" )
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
    <script type="text/javascript">
        $(function() {
            $('#datepicker9').datepicker();
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('#datepicker10').datepicker();
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('#datepicker11').datepicker();
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('#datepicker12').datepicker();
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('#datepicker13').datepicker();
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('#datepicker14').datepicker();
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('#datepicker15').datepicker();
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('#datepicker16').datepicker();
        });
    </script>
    <script type="text/javascript">
        $(function() {
            $('#datepicker17').datepicker();
        });
    </script>
</body>

</html>