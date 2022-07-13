<?php
$page = 'list_of_subjects';
$class_code = "5";
$student_id = intval($_GET['rollid']);
$rollid = $student_id;
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
    <?php include('../includes/parent_topbar.php'); ?>
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
                                <h1 class="title">Perkembangan Fizikal</h2>
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
                                        <li class="breadcrumb-item"><a href="../Parent/home.php">Home</a></li>
                                        <li class="breadcrumb-item" aria-current="page">Curriculum</li>
                                        <li class="breadcrumb-item active" aria-current="page">Perkembangan Fizikal</li>
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
        </main>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>