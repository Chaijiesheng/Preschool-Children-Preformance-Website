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
    <!-- ========== datatable ========== -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- ========== datatable ========== -->
    <link rel="stylesheet" href="../css/style.css" />
    
    <title>Academic Report</title>
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
                <div class="bg-light mt-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0 py-2">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item" aria-current="page">Curriculum</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add Curriculum</li>
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
                    <div class="col-md-6 mb-3">
                        <div class="card h-100">
                            <div class="card-header">
                                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                                Average Student Grade
                            </div>
                            <div class="card-body">
                                    <?php 
                                    for ($x = 1; $x <= 10; $x++) {

                                        require "../includes/database.php";
                                        $sql = "SELECT * FROM classa_pi  where class_code = $x";
                                    
                                        $result = $conn->query($sql);
                                        if (!$result) {
                                            die("invalid query:" . $connection->error);
                                        }
                                        $data = $result->fetch_assoc();

                                        if($x == 1){
                                            foreach($result as $data){

                                                $BM1[] = $data['PI1'];
                                                $BM2[] = $data['PI2'];
                                                $BM3[] = $data['PI3'];
                                                $BM4[] = $data['PI4'];
                                                $BM5[] = $data['PI5'];
                                                $BM6[] = $data['PI6'];
                                            }

                                            
                                            $BM1 = array_filter($BM1);
                                            $average = array_sum($BM1)/count($BM1);
                                            $BMAVG[0]=$average;

                                            $BM2 = array_filter($BM2);
                                            $average = array_sum($BM2)/count($BM2);
                                            $BMAVG[1]=$average;

                                            $BM3 = array_filter($BM3);
                                            $average = array_sum($BM3)/count($BM3);
                                            $BMAVG[2]=$average;

                                            $BM4 = array_filter($BM4);
                                            $average = array_sum($BM4)/count($BM4);
                                            $BMAVG[3]=$average;

                                            $BM5 = array_filter($BM5);
                                            $average = array_sum($BM5)/count($BM5);
                                            $BMAVG[4]=$average;

                                            $BM6 = array_filter($BM6);
                                            $average = array_sum($BM6)/count($BM6);
                                            $BMAVG[5]=$average;
                                            
                                            
                                        }if($x == 2){
                                            foreach($result as $data){
                                            $BI1[] = $data['PI1'];
                                            $BI2[] = $data['PI2'];
                                            $BI3[] = $data['PI3'];
                                            $BI4[] = $data['PI4'];
                                            $BI5[] = $data['PI5'];
                                            $BI6[] = $data['PI6'];
                                            }
                                            $BI1 = array_filter($BI1);
                                            $average = array_sum($BI1)/count($BI1);
                                            $BIAVG[0]=$average;

                                            $BI2 = array_filter($BI2);
                                            $average = array_sum($BI2)/count($BI2);
                                            $BIAVG[1]=$average;

                                            $BI3 = array_filter($BI3);
                                            $average = array_sum($BI3)/count($BI3);
                                            $BIAVG[2]=$average;

                                            $BI4 = array_filter($BI4);
                                            $average = array_sum($BI4)/count($BI4);
                                            $BIAVG[3]=$average;

                                            $BI5 = array_filter($BI5);
                                            $average = array_sum($BI5)/count($BI5);
                                            $BIAVG[4]=$average;

                                            if($BI6[0] != 0){
                                                $BI6 = array_filter($BI6);
                                                $average = array_sum($BI6)/count($BI6);
                                                $BIAVG[5]=$average;
                                            }else{
                                                $BIAVG[5]=0;
                                            }
                                            

                                        }if($x == 3){
                                            foreach($result as $data){
                                            $PI1[] = $data['PI1'];
                                            $PI2[] = $data['PI2'];
                                            $PI3[] = $data['PI3'];
                                            $PI4[] = $data['PI4'];
                                            $PI5[] = $data['PI5'];
                                            $PI6[] = $data['PI6'];
                                            }
                                            $PI1 = array_filter($PI1);
                                            $average = array_sum($PI1)/count($PI1);
                                            $PIAVG[0]=$average;

                                            $PI2 = array_filter($PI2);
                                            $average = array_sum($PI2)/count($PI2);
                                            $PIAVG[1]=$average;

                                            $PI3 = array_filter($PI3);
                                            $average = array_sum($PI3)/count($PI3);
                                            $PIAVG[2]=$average;

                                            $PI4 = array_filter($PI4);
                                            $average = array_sum($PI4)/count($PI4);
                                            $PIAVG[3]=$average;

                                            $PI5 = array_filter($PI5);
                                            $average = array_sum($PI5)/count($PI5);
                                            $PIAVG[4]=$average;

                                            $PI6 = array_filter($PI6);
                                            $average = array_sum($PI6)/count($PI6);
                                            $PIAVG[5]=$average;
                                            

                                        }if($x == 4){
                                            foreach($result as $data){
                                            $TKD1[] = $data['PI1'];
                                            $TKD2[] = $data['PI2'];
                                            $TKD3[] = $data['PI3'];
                                            $TKD4[] = $data['PI4'];
                                            $TKD5[] = $data['PI5'];
                                            $TKD6[] = $data['PI6'];
                                            }
                                            $TKD1 = array_filter($TKD1);
                                            $average = array_sum($TKD1)/count($TKD1);
                                            $TKDAVG[0]=$average;

                                            $TKD2 = array_filter($TKD2);
                                            $average = array_sum($TKD2)/count($TKD2);
                                            $TKDAVG[1]=$average;

                                            $TKD3 = array_filter($TKD3);
                                            $average = array_sum($TKD3)/count($TKD3);
                                            $TKDAVG[2]=$average;

                                            $TKD4 = array_filter($TKD4);
                                            $average = array_sum($TKD4)/count($TKD4);
                                            $TKDAVG[3]=$average;

                                            $TKD5 = array_filter($TKD5);
                                            $average = array_sum($TKD5)/count($TKD5);
                                            $TKDAVG[4]=$average;

                                            $TKD6 = array_filter($TKD6);
                                            $average = array_sum($TKD6)/count($TKD6);
                                            $TKDAVG[5]=$average;
                                            

                                        }if($x == 5){
                                            foreach($result as $data){
                                            $PF1[] = $data['PI1'];
                                            $PF2[] = $data['PI2'];
                                            $PF3[] = $data['PI3'];
                                            $PF4[] = $data['PI4'];
                                            $PF5[] = $data['PI5'];
                                            $PF6[] = $data['PI6'];
                                            }
                                            $PF1 = array_filter($PF1);
                                            $average = array_sum($PF1)/count($PF1);
                                            $PFAVG[0]=$average;

                                            $PF2 = array_filter($PF2);
                                            $average = array_sum($PF2)/count($PF2);
                                            $PFAVG[1]=$average;

                                            $PF3 = array_filter($PF3);
                                            $average = array_sum($PF3)/count($PF3);
                                            $PFAVG[2]=$average;

                                            $PF4 = array_filter($PF4);
                                            $average = array_sum($PF4)/count($PF4);
                                            $PFAVG[3]=$average;

                                            $PF5 = array_filter($PF5);
                                            $average = array_sum($PF5)/count($PF5);
                                            $PFAVG[4]=$average;

                                            $PF6 = array_filter($PF6);
                                            $average = array_sum($PF6)/count($PF6);
                                            $PFAVG[5]=$average;
                                            
                                        }
                                    }                
                                        // $BB[] = array($PI1[0],$PI2[0],$PI3[0],$PI4[0],$PI5[0],$PI6[0]);
                                        // $BM[] =  [$BM1[0],$BM2[0],$BM3[0],$BM4[0],$BM5[0],$BM6[0]];
                                        // $BI[] =  [$PI1[1],$PI2[1],$PI3[1],$PI4[1],$PI5[1],$PI6[1]];
                                        // $PI[] =  [$PI1[2],$PI2[2],$PI3[2],$PI4[2],$PI5[2],$PI6[2]];
                                        // $TKD[] =  [$PI1[3],$PI2[3],$PI3[3],$PI4[3],$PI5[3],$PI6[3]];
                                        // $PF[] = [$PI1[4],$PI2[4],$PI3[4],$PI4[4],$PI5[4],$PI6[4]];
                                        // $SA[] =  [$PI1[5],$PI2[5],$PI3[5],$PI4[5],$PI5[5],$PI6[5]];
                                        // $MA[] =  [$PI1[6],$PI2[6],$PI3[6],$PI4[6],$PI5[6],$PI6[6]];
                                        // $KDE[] =  [$PI1[7],$PI2[7],$PI3[7],$PI4[7],$PI5[7],$PI6[7]];
                                        // $TK[] = [$PI1[8],$PI2[8],$PI3[8],$PI4[8],$PI5[8],$PI6[8]];
                                        // $BM1[] = array_merge(array($PI1[0]),array($PI2[0]),array($PI3[0]),array($PI4[0]),array($PI5[0]),array($PI6[0]));
                                        // $BM_Sum[] = $PI1[8]+$PI2[8]+$PI3[8]+$PI4[8]+$PI5[8]+$PI6[8];
                                        // $AVGBM = array_sum($BM);
                                        // foreach ($BM as $i){
                                        //     $AVGBM = $BM[$i]+$AVGBM;
                                        // }
                                        
                                    ?>

                                <div style="width: 500px;">
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="card h-100">
                        <form method="post">
                            <div class="card-header">
                                <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                                Student Curriculum
                                
                                <select id="name" name="StudentName" onchange="namelselect();" style="margin: 0; text-align: justify; width: 40%; height: 20px ">
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
                                <select  id="subject" name="subject" onchange="namelselect();" style="margin: 0; text-align: justify; width: 10%; height: 20px ">
                                    <option value="BM" selected>BM</option>
                                    <option value="BI" >BI</option>
                                    <option value="PI" >PI</option>
                                    <option value="TKD" >TKD</option>
                                    <option value="PF" >PF</option>
                                    <option value="SA" >SA</option>
                                    <option value="MA" >MA</option>
                                    <option value="KDE" >KDE</option>
                                    <option value="TK" >TK</option>

                                </select>
                                <button class="btn" name="submit" type="submit" value="submit" style="width:40px;height:20px;font-size:15px; float: right;"><i class="bi bi-check"></i></button>
                                
                            </div>
                        </form>
                             <?php
                                require "../includes/database.php";
                                $StudentId = 88110001;
                                $subject = "BM";
                                $trial = 0;
                                $sql = "SELECT * FROM classa_pi  where StudentId = $StudentId ";
                        
                                if ($trial == 0){
                                    $result = $conn->query($sql);
                                    if (!$result) {
                                        die("invalid query:" . $connection->error);
                                    }
                                    $data = $result->fetch_assoc();
                                
                                    foreach ($result as $data) {
                                        $PI1_line[] = $data['PI1']; 
                                        $PI2_line[] = $data['PI2'];
                                        $PI3_line[] = $data['PI3'];
                                        $PI4_line[] = $data['PI4'];
                                        $PI5_line[] = $data['PI5'];
                                        $PI6_line[] = $data['PI6'];
                                    }

                                    if($subject=="BM" && $trial==0){   

                                        $final_result[0] = $PI1_line[0];
                                        $final_result[1] = $PI2_line[0];
                                        $final_result[2] = $PI3_line[0];
                                        $final_result[3] = $PI4_line[0];
                                        $final_result[4] = $PI5_line[0];
                                        $final_result[5] = $PI6_line[0];
                            
                                    }
                                }
                            ?> 
                            <?php
                                    if (isset($_POST['submit'])) {

                                        require "../includes/database.php";
                                        $StudentName = $_POST['StudentName'];
                                        $subject = $_POST['subject'];
                                        $trial = 1;
                                        $final_result = array();
                                        $data = array();

                                        $sql = "SELECT * FROM classa_pi  where StudentName = '$StudentName' ";

                                        $result = $conn->query($sql);
                                        if (!$result) {
                                            die("invalid query:" . $connection->error);
                                        }
                                        $data = $result->fetch_assoc();

                                        foreach ($result as $data) {
                                            $PI1_line2[] = $data['PI1']; 
                                            $PI2_line2[] = $data['PI2'];
                                            $PI3_line2[] = $data['PI3'];
                                            $PI4_line2[] = $data['PI4'];
                                            $PI5_line2[] = $data['PI5'];
                                            $PI6_line2[] = $data['PI6'];
                                        }

                                        if($subject=="BM"){   
                                            $final_result[0] = $PI1_line2[0];
                                            $final_result[1] = $PI2_line2[0];
                                            $final_result[2] = $PI3_line2[0];
                                            $final_result[3] = $PI4_line2[0];
                                            $final_result[4] = $PI5_line2[0];
                                            $final_result[5] = $PI6_line2[0];
                                        }elseif($subject=="BI"){
                                            $final_result[0] = $PI1_line2[1];
                                            $final_result[1] = $PI2_line2[1];
                                            $final_result[2] = $PI3_line2[1];
                                            $final_result[3] = $PI4_line2[1];
                                            $final_result[4] = $PI5_line2[1];
                                            $final_result[5] = $PI6_line2[1];
                                        }elseif($subject=="PI"){
                                            $final_result[0] = $PI1_line2[2];
                                            $final_result[1] = $PI2_line2[2];
                                            $final_result[2] = $PI3_line2[2];
                                            $final_result[3] = $PI4_line2[2];
                                            $final_result[4] = $PI5_line2[2];
                                            $final_result[5] = $PI6_line2[2];
                                        }elseif($subject=="TKD"){
                                            $final_result[0] = $PI1_line2[3];
                                            $final_result[1] = $PI2_line2[3];
                                            $final_result[2] = $PI3_line2[3];
                                            $final_result[3] = $PI4_line2[3];
                                            $final_result[4] = $PI5_line2[3];
                                            $final_result[5] = $PI6_line2[3];
                                        }elseif($subject=="PF"){
                                            $final_result[0] = $PI1_line2[4];
                                            $final_result[1] = $PI2_line2[4];
                                            $final_result[2] = $PI3_line2[4];
                                            $final_result[3] = $PI4_line2[4];
                                            $final_result[4] = $PI5_line2[4];
                                            $final_result[5] = $PI6_line2[4];
                                        }elseif($subject=="SA"){
                                            $final_result[0] = $PI1_line2[5];
                                            $final_result[1] = $PI2_line2[5];
                                            $final_result[2] = $PI3_line2[5];
                                            $final_result[3] = $PI4_line2[5];
                                            $final_result[4] = $PI5_line2[5];
                                            $final_result[5] = $PI6_line2[5];
                                        }elseif($subject=="MA"){
                                            $final_result[0] = $PI1_line2[6];
                                            $final_result[1] = $PI2_line2[6];
                                            $final_result[2] = $PI3_line2[6];
                                            $final_result[3] = $PI4_line2[6];
                                            $final_result[4] = $PI5_line2[6];
                                            $final_result[5] = $PI6_line2[6];
                                        }elseif($subject=="KDE"){
                                            $final_result[0] = $PI1_line2[7];
                                            $final_result[1] = $PI2_line2[7];
                                            $final_result[2] = $PI3_line2[7];
                                            $final_result[3] = $PI4_line2[7];
                                            $final_result[4] = $PI5_line2[7];
                                            $final_result[5] = $PI6_line2[7];
                                        }elseif($subject=="TK"){
                                            $final_result[0] = $PI1_line2[8];
                                            $final_result[1] = $PI2_line2[8];
                                            $final_result[2] = $PI3_line2[8];
                                            $final_result[3] = $PI4_line2[8];
                                            $final_result[4] = $PI5_line2[8];
                                            $final_result[5] = $PI6_line2[8];
                                        }

                                    }
                            ?>
                            <div class="card-body">
                                <div style="width: 500px;" >
                                    <canvas id="myChart2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    


    <script>
                $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <script>
        // === include 'setup' then 'config' above ===
        const labels = [
    'Level 1',
    'Level 2',
    'Level 3',
    'Level 4',
    'Level 5',
    'Level 6',
  ];
        
        const data = {
            labels: labels,
            datasets: [{
                label: 'Bahasa Melayu',
                data: 
                <?php 
                echo json_encode($BMAVG) ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            },{
                label: 'Bahasa English',
                data: 
                <?php 
                echo json_encode($BIAVG) ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            },{
                label: 'Pendidikan Islam',
                data: 
                <?php 
                echo json_encode($PIAVG) ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            },{
                label: 'Tunjang Ketrampilan Diri',
                data: 
                <?php 
                echo json_encode($TKDAVG) ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            },{
                label: 'Perkembangan Fizikal',
                data: 
                <?php 
                echo json_encode($PFAVG) ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                borderWidth: 1
            },
        ]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {
            scales: {
                y: {
                beginAtZero: true
                }
            }
            },
        };

        var myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>

    <script>
        const ctx = document.getElementById('myChart2').getContext('2d');
        const myChart2 = new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?php 
                    if($subject=="BM"){
                        echo"['BM 1', 'BM 2', 'BM 3', 'BM 4', 'BM 5', 'BM 6']";
                    }elseif($subject=="BI"){
                        echo"['BI 1', 'BI 2', 'BI 3', 'BI 4', 'BI 5', 'BI 6']";
                    }elseif($subject=="PI"){
                        echo"['PI 1', 'PI 2', 'PI 3', 'PI 4', 'PI 5', 'PI 6']";
                    }elseif($subject=="TKD"){
                        echo"['TKD 1', 'TKD 2', 'TKD 3', 'TKD 4', 'TKD 5', 'TKD 6']";
                    }elseif($subject=="PF"){
                        echo"['PF 1', 'PF 2', 'PF 3', 'PF 4', 'PF 5', 'PF 6']";
                    }elseif($subject=="SA"){
                        echo"['SA 1', 'SA 2', 'SA 3', 'SA 4', 'SA 5', 'SA 6']";
                    }elseif($subject=="MA"){
                        echo"['MA 1', 'MA 2', 'MA 3', 'MA 4', 'MA 5', 'MA 6']";
                    }elseif($subject=="KDE"){
                        echo"['KDE 1', 'KDE 2', 'KDE 3', 'KDE 4', 'KDE 5', 'KDE 6']";
                    }elseif($subject=="TK"){
                        echo"['TK 1', 'TK 2', 'TK 3', 'TK 4', 'TK 5', 'TK 6']";
                    }
                        ?>,
                datasets: [{
                    label: 'Subject',
                    
                    data: <?php  echo json_encode($final_result) ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>

<!-- 
                                    // foreach ($result as $data) {                          
                                    //     $final_result[0] =  [$PI1[0],$PI2[0],$PI3[0],$PI4[0],$PI5[0],$PI6[0]];
                                    //     } -->


                                    <!-- // $BB[] = array($PI1[0],$PI2[0],$PI3[0],$PI4[0],$PI5[0],$PI6[0]);
        // $BM[] =  [$PI1[0],$PI2[0],$PI3[0],$PI4[0],$PI5[0],$PI6[0]];
        // $BI[] =  [$PI1[1],$PI2[1],$PI3[1],$PI4[1],$PI5[1],$PI6[1]];
        // $PI[] =  [$PI1[2],$PI2[2],$PI3[2],$PI4[2],$PI5[2],$PI6[2]];
        // $TKD[] =  [$PI1[3],$PI2[3],$PI3[3],$PI4[3],$PI5[3],$PI6[3]];
        // $PF[] = [$PI1[4],$PI2[4],$PI3[4],$PI4[4],$PI5[4],$PI6[4]];
        // $SA[] =  [$PI1[5],$PI2[5],$PI3[5],$PI4[5],$PI5[5],$PI6[5]];
        // $MA[] =  [$PI1[6],$PI2[6],$PI3[6],$PI4[6],$PI5[6],$PI6[6]];
        // $KDE[] =  [$PI1[7],$PI2[7],$PI3[7],$PI4[7],$PI5[7],$PI6[7]];
        // $TK[] = [$PI1[8],$PI2[8],$PI3[8],$PI4[8],$PI5[8],$PI6[8]]; -->