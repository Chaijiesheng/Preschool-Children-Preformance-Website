<?php
$page = 'curriculum';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../Teacher2/curriculum.css" />
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
                                        <li class="breadcrumb-item"><a href="../Teacher2/home.php">Home</a></li>
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
            <section>
                <div class="container">
                    <div class="box">
                        <div class="icon">B.M</div>
                        <div class="content">
                            <a href="../subject2/bm.php">
                                <h3>BAHASA MELAYU</h3>
                            </a>
                        </div>
                    </div>

                    <div class="box">
                        <div class="icon">B.I</div>
                        <div class="content">
                            <a href="../subject2/bi.php">
                                <h3>BAHASA INGGERIS</h3>
                            </a>
                        </div>
                    </div>

                    <div class="box">
                        <div class="icon">P.ISLAM</div>
                        <div class="content">
                            <a href="../subject2/pi.php">
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
                            <a href="../subject2/tkd.php">
                                <h3>TUNJANG KETRAMPILAN DIRI</h3>
                            </a>
                        </div>
                    </div>

                    <div class="box2">
                        <div class="icon">P&F</div>
                        <div class="content">
                            <a href="../subject2/pf.php">
                                <h3>PERKEMBANGAN FIZIKAL</h3>
                            </a>
                        </div>
                    </div>

                    <div class="box2">
                        <div class="icon">S.A</div>
                        <div class="content">
                            <a href="../subject2/sa.php">
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
                            <a href="../subject2/ma.php">
                                <h3>MATEMATIK AWAL</h3>
                            </a>
                        </div>
                    </div>

                    <div class="box3">
                        <div class="icon">K.E</div>
                        <div class="content">
                            <a href="../subject2/kde.php">
                                <h3>KREATIVITI DAN ESTETIKA</h3>
                            </a>
                        </div>
                    </div>

                    <div class="box3">
                        <div class="icon">T.K</div>
                        <div class="content">
                            <a href="../subject2/tk.php">
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