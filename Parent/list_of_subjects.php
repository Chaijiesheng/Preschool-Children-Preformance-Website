<?php
    
    $page='list_of_subjects';
    $rollid = intval($_GET['rollid']);


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../Parent/curriculum.css" />
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
                            <div class="row page-title-div">
                                <h2 class="title">Curriculum</h2>
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
                                        <li class="breadcrumb-item"aria-current="page">Curriculum</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">View Curriculum</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>
            <section>
                <div class="container">
                    <div class="box">
                        <div class="icon">B.M</div>
                        <div class="content">
                            <a href="../subject/bm.php?rollid=<?php echo $rollid ?>">
                                <h3>BAHASA MELAYU</h3>
                            </a>
                        </div>
                    </div>

                    <div class="box">
                        <div class="icon">B.I</div>
                        <div class="content">
                            <a href="../Subject/bi.php?rollid=<?php echo $rollid ?>">
                                <h3>BAHASA INGGERIS</h3>
                            </a>
                        </div>
                    </div>

                    <div class="box">
                        <div class="icon">P.ISLAM</div>
                        <div class="content">
                            <a href="../Subject/pi.php?rollid=<?php echo $rollid ?>">
                                <h3>PENDIDIKAN ISLAM</h3>
                            </a>
                        </div>
                    </div>

                </div>
            </section>

            <section>
                <div class="container">
                    <div class="box2">
                        <div class="icon">T.K.D</div>
                        <div class="content">
                            <a href="../Subject/tkd.php?rollid=<?php echo $rollid ?>">
                                <h3>TUNJANG KETRAMPILAN DIRI</h3>
                            </a>
                        </div>
                    </div>

                    <div class="box2">
                        <div class="icon">P&F</div>
                        <div class="content">
                            <a href="../Subject/pf.php?rollid=<?php echo $rollid ?>">
                                <h3>PERKEMBANGAN FIZIKAL</h3>
                            </a>
                        </div>
                    </div>

                    <div class="box2">
                        <div class="icon">S.A</div>
                        <div class="content">
                            <a href="../Subject/sa.php?rollid=<?php echo $rollid ?>">
                                <h3>SAINS AWAL</h3>
                            </a>
                        </div>
                    </div>

                </div>
            </section>

            <section>
                <div class="container">
                    <div class="box3">
                        <div class="icon">M.A</div>
                        <div class="content">
                            <a href="../Subject/ma.php?rollid=<?php echo $rollid ?>">
                                <h3>MATEMATIK AWAL</h3>
                            </a>
                        </div>
                    </div>

                    <div class="box3">
                        <div class="icon">K.E</div>
                        <div class="content">
                            <a href="../Subject/kde.php?rollid=<?php echo $rollid ?>">
                                <h3>KREATIVITI DAN ESTETIKA</h3>
                            </a>
                        </div>
                    </div>

                    <div class="box3">
                        <div class="icon">T.K</div>
                        <div class="content">
                            <a href="../Subject/tk.php?rollid=<?php echo $rollid ?>">
                                <h3>TUNJANG KEMANUSIAAN</h3>
                            </a>
                        </div>
                    </div>

                </div>
            </section>
        </main>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>