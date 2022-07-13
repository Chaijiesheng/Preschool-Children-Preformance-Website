  <!-- Navbar container -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  	<div class="container-fluid">

  		<a class="navbar-brand" data-bs-toggle="offcanvas.show" data-bs-target="#sidebar" aria-controls="offcanvasExample">

  			<img src="../Img/TasneemLogo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
  			WBS-PCP | Admin
  		</a>
  		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  			<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
  			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
  				<li class="nav-item">
  					<a class="nav-link <?php if($page=='home'){echo'active';}?>" aria-current="page" href="../Teacher2/home.php">Home</a>

  				</li>
  				<li class="nav-item">
  					<a class="nav-link <?php if($page=='curriculum'){echo'active';}?>" href="../Teacher2/curriculum.php">Curriculum</a>
  				</li>
  				<li class="nav-item dropdown">
  					<a class="nav-link <?php if($page=='report'){echo'active';}?> dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
  						Report
  					</a>
  					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
  						<li><a class="dropdown-item" href="../Teacher2/academicReport.php">Generate Academic Report</a></li>
  						<li><a class="dropdown-item" href="../Teacher2/studentReport.php">Generate Student  Report</a></li>
  						<!-- <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li> -->
  					</ul>
  				</li>
  				<li class="nav-item dropdown">
  					<a class="nav-link <?php if($page=='students'){echo'active';}?> dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
  						Student Information
  					</a>
  					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
  						<li><a class="dropdown-item" href="../Teacher2/addStudent.php">Add Student Information</a></li>
  						<li><a class="dropdown-item" href="../Teacher2/manageStudent.php">Manage Student Information</a></li>
  						<!-- <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li> -->
  					</ul>
  				</li>
  				<li class="nav-item dropdown">
  					<a class="nav-link dropdown-toggle <?php if($page=='parent'){echo'active';}?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
  						Parent Information
  					</a>
  					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
  						<li><a class="dropdown-item" href="../Teacher2/addParent.php">Add Parent Information</a></li>
  						<li><a class="dropdown-item" href="../Teacher2/manageParent.php">Manage Parent Information</a></li>
  						<!-- <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li> -->
  					</ul>
  				<li class="nav-item">
  					<a class="nav-link <?php if($page=='feedback'){echo'active';}?>" href="../Teacher2/feedback.php">Manage Feedback</a>
  				</li>
  				</li>
  			</ul>
  			<!-- <form class="d-flex">
  				<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
  				<button class="btn btn-outline-success" type="submit">Search</button>
  			</form> -->
  		</div>
  	</div>

  </nav>
  <!-- Navbar container -->