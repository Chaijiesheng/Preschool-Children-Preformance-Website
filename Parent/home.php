<?php
    $page='home';
    require '../includes/database.php';
        
        if(isset($_GET['username'])){
            
                $username = $_GET['username'];
                $sql = "SELECT * FROM users where username = '".$username."' ";
                $result = $conn->query($sql);
                if ($result->num_rows != 1) {
                    die("id is not in db");
                }
                
                $data = $result->fetch_assoc();
                $rollid = $data["RollId"];      
            
        }
        if(isset($_GET['rollid'])){
            
                $rollid = intval($_GET['rollid']);
                $sql = "SELECT * FROM students where RollID = $rollid ";
                $result = $conn->query($sql);
                if ($result->num_rows != 1) {
                    die("id is not in db");
                }
                $data = $result->fetch_assoc();
                $rollid = $data["RollID"];
            
        }
        // if(isset($username)){
        //     $username = $_GET['username'];
        //     $sql = "SELECT * FROM users where username = '".$username."' ";
        //     $result = $conn->query($sql);
        //     if ($result->num_rows != 1) {
        //         die("id is not in db");
        //     }
            
        //     $data = $result->fetch_assoc();
        //     $rollid = $data["RollId"];
        // }elseif($_GET['rollid']){
        //     $rollid = intval($_GET['rollid']);
        //     $sql = "SELECT * FROM students where RollID = $rollid ";
        //     $result = $conn->query($sql);
        //     if ($result->num_rows != 1) {
        //         die("id is not in db");
        //     }
        //     $data = $result->fetch_assoc();
        //     $rollid = $data["RollID"];
        // }

        // if (preg_match('~[0-9]+~', $_GET['username'])) {
        //     $username = $_GET['username'];
        //     $current_username = $username;
        // }else{
        //     $rollid = intval($_GET['rollid']);
        // }
    
    // if($username ==  $current_username){
    //     echo $username;
    //     echo $current_username;
    //     $sql = "SELECT * FROM users where username = '".$username."' ";
    // }else{
    //     $sql = "SELECT * FROM students where RollID = $rollid ";
    // }
    
    // $result = $conn->query($sql);
    // if ($result->num_rows != 1) {
    //     die("id is not in db");
    // }
    
    // $data = $result->fetch_assoc();

    // $rollid = $data["RollId"];
    // $current_rollid = $rollid;

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
    <link rel="stylesheet" href="home.css" />
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
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="mt-4 mb-4">Home</h2>
                            
                            
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <!-- Bootstrap 5 card box -->
                            <div class="card-box">
                                <div class="card-thumbnail">
                                    <img src="../Img2/3-4.png" class="img-fluid" alt="">
                                </div>
                                <h3><a href="#" class="mt-2 text-danger">TADIKA TASNEEM 4 TAHUN</a></h3>
                                <p class="text-secondary">Tadika 4 Tahun termasuk subject Bahasa Melayu, Bahasa Inggeris, Pendidikan Islam, Tunjang Ketrampilan Diri, Perkembangan Fizikal, Sains Awal, Matematik Awal, Kreativiti dan Estetika dan Tunjang Kemanusiaan</p>
                                <a href="#" class="btn btn-sm btn-danger float-right">Enrolled >></a>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <!-- Bootstrap 5 card box -->
                            <div class="card-box">
                                <div class="card-thumbnail">
                                    <img src="../Img2/4-5.png" class="img-fluid" alt="">
                                </div>
                                <h3><a href="#" class="mt-2 text-danger">TADIKA TASNEEM 5 TAHUN</a></h3>
                                <p class="text-secondary">Tadika 5 Tahun termasuk subject Bahasa Melayu, Bahasa Inggeris, Pendidikan Islam, Tunjang Ketrampilan Diri, Perkembangan Fizikal, Sains Awal, Matematik Awal, Kreativiti dan Estetika dan Tunjang Kemanusiaan</p>
                                <a href="#" class="btn btn-sm btn-danger float-right">Enrolled >></a>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <!-- Bootstrap 5 card box -->
                            <div class="card-box">
                                <div class="card-thumbnail">
                                    <img src="../Img2/6.png" class="img-fluid" alt="">
                                </div>
                                <h3><a href="#" class="mt-2 text-danger">TADIKA TASNEEM 6 TAHUN</a></h3>
                                    <p class="text-secondary">Tadika 6 Tahun termasuk subject Bahasa Melayu, Bahasa Inggeris, Pendidikan Islam, Tunjang Ketrampilan Diri, Perkembangan Fizikal, Sains Awal, Matematik Awal, Kreativiti dan Estetika dan Tunjang Kemanusiaan</p>
                                    <a href="#" class="btn btn-sm btn-danger float-right">Enrolled >></a>
                                </div>
                            </div>
<!-- 
                            <div class="col-md-6 col-lg-4">
                                
                                <div class="card-box">
                                    <div class="card-thumbnail">
                                        <img src="images/office-image-four.jpg" class="img-fluid" alt="">
                                    </div>
                                    <h3><a href="#" class="mt-2 text-danger">Where can I get some?</a></h3>
                                    <p class="text-secondary">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                                    <a href="#" class="btn btn-sm btn-danger float-right">Read more >></a>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                
                                <div class="card-box">
                                    <div class="card-thumbnail">
                                        <img src="images/office-image-five.jpg" class="img-fluid" alt="">
                                    </div>
                                    <h3><a href="#" class="mt-2 text-danger">Standard Lorem Ipsum passage</a></h3>
                                    <p class="text-secondary">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                                    <a href="#" class="btn btn-sm btn-danger float-right">Read more >></a>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                
                                <div class="card-box">
                                    <div class="card-thumbnail">
                                        <img src="images/office-image-six.jpg" class="img-fluid" alt="">
                                    </div>
                                    <h3><a href="#" class="mt-2 text-danger">What is Lorem Ipsum?</a></h3>
                                    <p class="text-secondary">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                                    <a href="#" class="btn btn-sm btn-danger float-right">Read more >></a>
                                </div>
                            </div> -->
                        </div>
                    </div>
        </main>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>