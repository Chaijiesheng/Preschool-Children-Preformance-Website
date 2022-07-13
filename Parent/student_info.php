<?php
    $page = 'student_info';
    $rollid = intval($_GET['rollid']);
    require '../includes/database.php';

    $sql = "SELECT * FROM students where RollID = $rollid";
    $result = $conn->query($sql);
    // if ($result->num_rows != 1) {
    //     die("id is not in db");
    // }
    $data = $result->fetch_assoc();
    $Classes = $data['Classes'];
    $Status = $data['Status'];
    $AdmissionDate = $data['AdmissionDate'];

    if(isset($_POST['submit'])){

        $query = "UPDATE `students` SET StudentName='$_POST[fullname]',RollID='$rollid',Gender='$_POST[gender]',Classes='$Classes',Status='$Status', ParentPhone='$_POST[parentphone]', AdmissionDate='$AdmissionDate', BirthDate='$_POST[birthdate]' where RollID='$rollid' ";
        $query_run = mysqli_query($conn,$query);

        if($query_run){
            echo "<script>alert('Data Edited Successfully')</script>";
            echo "<script>setTimeout(\"location.href = '../Parent/student_info.php?rollid=$rollid';\",100);</script>";
            exit();
        }else{
            echo "Form not submitted";
        }
        // if ($run) {
        //     echo "<script>alert('Data Inserted Successfully')</script>";
        //     // echo "<script>setTimeout(\"Location: ../Teacher2/manageStudent.php';\",1500);</script>";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css" />
    <title>Home</title>

    <style>
        body {
            margin: 0;
            padding-top: 40px;
            color: #2e323c;
            background: #f5f6fa;
            position: relative;
            height: 100%;
        }

        .account-settings .user-profile {
            margin: 0 0 1rem 0;
            padding-bottom: 1rem;
            text-align: center;
        }

        .account-settings .user-profile .user-avatar {
            margin: 0 0 1rem 0;
        }

        .account-settings .user-profile .user-avatar img {
            width: 90px;
            height: 90px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
        }

        .account-settings .user-profile h5.user-name {
            margin: 0 0 0.5rem 0;
        }

        .account-settings .user-profile h6.user-email {
            margin: 0;
            font-size: 0.8rem;
            font-weight: 400;
            color: #9fa8b9;
        }

        .account-settings .about {
            margin: 2rem 0 0 0;
            text-align: center;
        }

        .account-settings .about h5 {
            margin: 0 0 15px 0;
            color: #007ae1;
        }

        .account-settings .about p {
            font-size: 0.825rem;
        }

        .form-control {
            border: 1px solid #cfd1d8;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            font-size: .825rem;
            background: #ffffff;
            color: #2e323c;
        }

        .card {
            background: #ffffff;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            border: 0;
            margin-bottom: 1rem;
        }
    </style>

</head>

<body>
    <!-- ========== TOP NAVBAR ========== -->
    <?php include('../includes/parent_topbar.php'); ?>
    <!-- ========== LEFT SIDEBAR ========== -->
    <?php include('../includes/leftbar.php'); ?>
    <!-- /.left-sidebar -->

    <div class="main-page">
        <main class="mt-5 pt-3">
            

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header card-header-text">
                                <h4 class="card-title">Student Details</h4>
                            </div>
                            <br>

                            <!-- ========== respond message ========== -->
                            <div class="container">
                                <div class="row gutters">
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <div class="account-settings">
                                                    <div class="user-profile">
                                                        <div class="user-avatar">
                                                            <img src="../Img2/profile.jpg" alt="Maxwell Admin" style="width:200px;height:200px;">
                                                        </div>
                                                        <h5 class="user-name"><?= $data['StudentName'] ?></h5>
                                                        <h6 class="user-email">yuki@Maxwell.com</h6>
                                                    </div>
                                                    <div class="about">
                                                        <h5>About</h5>
                                                        <p>Aktif, fokus, dan mengendalikan perubahan dengan mudah</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                        <div class="card h-100">
                                            <div class="card-body">
                                                <form method="post">
                                                    <div class="row gutters">
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                            <h6 class="mb-2 text-primary">Personal Details</h6>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <label for="fullName">Full Name</label>
                                                                <input type="text" class="form-control" id="fullName" name="fullname" placeholder="Enter full name" value="<?= $data['StudentName'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <label for="Birth Date">Birth Date</label>
                                                                <input type="text" class="form-control" id="zIp" name="birthdate" placeholder="Zip Code" value="<?= $data['BirthDate'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <label for="phone">Phone</label>
                                                                <input type="text" class="form-control" id="phone" name="parentphone" placeholder="Enter phone number" value="<?= $data['ParentPhone'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <label for="website">Gender</label>
                                                                <input type="text" class="form-control" id="gender" name="gender" placeholder="Website url" value="<?= $data['Gender'] ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row gutters">
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                            <h6 class="mt-3 mb-2 text-primary">Classes</h6>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <label for="Classes">Classes</label>
                                                                <input type="name" class="form-control" id="Street" placeholder="Enter Street" value="<?= $data['Classes'] ?>" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <label for="Status">Status</label>
                                                                <input type="name" class="form-control" id="ciTy" placeholder="Enter City" value="active" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <label for="Admission Date">Admission Date</label>
                                                                <input type="text" class="form-control" id="sTate" placeholder="Enter State" value="<?= $data['AdmissionDate'] ?>" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                                            <div class="form-group">
                                                                <label for="id">Roll ID</label>
                                                                <input type="id" class="form-control" id="eMail" placeholder="Enter email ID" value="<?= $data['RollID'] ?> " disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row gutters">
                                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                            <div class="text-right">
                                                                <button type="button" id="cancel" name="cancel" class="btn btn-secondary">Cancel</button>
                                                                <button type="submit" id="submit" name="submit" class="btn btn-primary">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <br>
                            <br>

                            
                            </div>
                        </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                        <div class="container-fluid border">
                                <div class="row">
                                    <div class="col">

                                    </div>

                                    <div class="col">
                                        <div style="width: 500px;">
                                            <?php
                                            require "../includes/database.php";

                                            $stid = "88110001";
                                            $sql = "SELECT * FROM classa_pi  where StudentId = $stid";

                                            $result = $conn->query($sql);
                                            if (!$result) {
                                                die("invalid query:" . $connection->error);
                                            }
                                            $data = $result->fetch_assoc();

                                            foreach ($result as $data) {
                                                $StudentName[] = $data['StudentName'];
                                                $PI1[] = $data['PI1'];
                                                $PI1_Date[] = $data['PI1_Date'];
                                                $PI1_Date2[] = $data['PI1_Date2'];
                                                $PI1_Date3[] = $data['PI1_Date3'];
                                                $PI2[] = $data['PI2'];
                                                $PI2_Date[]     = $data['PI2_Date'];
                                                $PI2_Date2[] = $data['PI2_Date2'];
                                                $PI2_Date3[] = $data['PI2_Date3'];
                                                $PI3[] = $data['PI3'];
                                                $PI3_Date[]     = $data['PI3_Date'];
                                                $PI3_Date2[] = $data['PI3_Date2'];
                                                $PI3_Date3[] = $data['PI3_Date3'];
                                                $PI4[] = $data['PI4'];
                                                $PI4_Date[]     = $data['PI4_Date'];
                                                $PI4_Date2[] = $data['PI4_Date2'];
                                                $PI4_Date3[] = $data['PI4_Date3'];
                                                $PI5[] = $data['PI5'];
                                                $PI5_Date[]     = $data['PI5_Date'];
                                                $PI5_Date2[] = $data['PI5_Date2'];
                                                $PI5_Date3[] = $data['PI5_Date3'];
                                                $PI6[] = $data['PI6'];
                                                $PI6_Date[]     = $data['PI6_Date'];
                                                $PI6_Date2[] = $data['PI6_Date2'];
                                                $PI6_Date3[] = $data['PI6_Date3'];
                                            }
                                            $BB[] = array($PI1[0],$PI2[0],$PI3[0],$PI4[0],$PI5[0],$PI6[0]);
                                            $BM[] =  [$PI1[0],$PI2[0],$PI3[0],$PI4[0],$PI5[0],$PI6[0]];
                                            $BI[] =  [$PI1[1],$PI2[1],$PI3[1],$PI4[1],$PI5[1],$PI6[1]];
                                            $PI[] =  [$PI1[2],$PI2[2],$PI3[2],$PI4[2],$PI5[2],$PI6[2]];
                                            $TKD[] =  [$PI1[3],$PI2[3],$PI3[3],$PI4[3],$PI5[3],$PI6[3]];
                                            $PF[] = [$PI1[4],$PI2[4],$PI3[4],$PI4[4],$PI5[4],$PI6[4]];
                                            $SA[] =  [$PI1[5],$PI2[5],$PI3[5],$PI4[5],$PI5[5],$PI6[5]];
                                            $MA[] =  [$PI1[6],$PI2[6],$PI3[6],$PI4[6],$PI5[6],$PI6[6]];
                                            $KDE[] =  [$PI1[7],$PI2[7],$PI3[7],$PI4[7],$PI5[7],$PI6[7]];
                                            $TK[] = [$PI1[8],$PI2[8],$PI3[8],$PI4[8],$PI5[8],$PI6[8]];
                                            $BM1[] = array_merge(array($PI1[0]),array($PI2[0]),array($PI3[0]),array($PI4[0]),array($PI5[0]),array($PI6[0]));
                                            $BM_Sum[] = $PI1[8]+$PI2[8]+$PI3[8]+$PI4[8]+$PI5[8]+$PI6[8];

                                            ?>
                                            
                                            <canvas id="myChart"></canvas>
                                            
                                            
                                        </div>
                                    </div>
                                    <div class="col">

                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
                <br>
        </main>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
                    label: 'BM',
                    data: <?php echo json_encode($BM[0]) ?>,
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
                }, {
                    label: 'BI',
                    data: <?php echo json_encode($BI[0]) ?>,
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
                }, {
                    label: 'Pendidikan Islam',
                    data: <?php echo json_encode($PI[0]) ?>,
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
                }, {
                    label: 'Tunjang Ketrampilan Diri',
                    data: <?php echo json_encode($PF[0]) ?>,
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
                }, {
                    label: 'Perkembangan Fizikal',
                    data: <?php echo json_encode($PF[0]) ?>,
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
                }, {
                    label: 'Sains Awal',
                    data: <?php echo json_encode($SA[0]) ?>,
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
                {
                    label: 'Matematik Awal',
                    data: <?php echo json_encode($MA[0]) ?>,
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
                {
                    label: 'Kreativiti dan Estetika',
                    data: <?php echo json_encode($KDE[0]) ?>,
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
                {
                    label: 'Tunjang Kemanusiaan',
                    data: <?php echo json_encode($TK[0]) ?>,
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
                }

            ]
        };

        const config = {
            type: 'radar',
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
</body>

</html>