<?php

if (isset($_POST['submit'])) {
  require '../includes/database.php';
  $studentname = $_POST['fullname'];
  $rollid = $_POST['rollid'];
  $gender = $_POST['gender'];
  $classid = $_POST['classes'];
  $status = 1;

  $query = "insert into students(StudentName,RollID,Gender,Classes,Status) 
  VALUES('$studentname','$rollid','$gender','$classid','$status')";

  $run = mysqli_query($conn, $query) or die(mysqli_error($conn));

  if ($run) {
    $msg = "Student info added successfully";
  } else {
    $error = "Something went wrong. Please try again";
  }
} else {
  echo "all fields required";
}
?>

<div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
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
                                    $result = $conn ->query($sql);

                                    if(!$result){
                                        die("invalid query:".$connection->error);
                                    }

                                    while($row = $result->fetch_assoc()){
                                        echo "<tr>
                                        <td>".$row["StudentId"]."</td>
                                        <td>".$row["StudentName"]."</td>
                                        <td>".$row["RollID"]."</td>
                                        <td>".$row["Classes"]."</td>
                                        <td>".$row["Status"]."</td>
                                        <td>
                                            <a class='btn btn-primary btn-sm' href='update'>Update</a>
                                            <a class='btn btn-primary btn-sm' href='delete'>Delete</a>
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