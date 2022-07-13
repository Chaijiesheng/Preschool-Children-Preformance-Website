<?php 

// DB credentials.
define('DB_HOST','localhost:3307');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','pcpwbs');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}

?>

<?php
  session_start();
  error_reporting(0);
  include('../includes/config.php');
  require '../includes/database.php';
  if(isset($_POST['submit'])) {
      $studentname = $_POST['fullname'];
      $rollid = $_POST['rollid'];
      $gender = $_POST['gender'];
      $classid = $_POST['classes'];
      $status = 1;
      $sql = "INSERT INTO students(StudentName,RollId,Gender,Classes,Status) VALUES(:studentname,:rollid,:gender,:classid,:status)";
      $query = $dbh->prepare($sql);
      $query->bindParam(':studentname', $studentname, PDO::PARAM_STR);
      $query->bindParam(':rollid', $rollid, PDO::PARAM_STR);
      $query->bindParam(':gender', $gender, PDO::PARAM_STR);
      $query->bindParam(':classid', $classid, PDO::PARAM_STR);
      $query->bindParam(':status', $status, PDO::PARAM_STR);
      $query->execute();
      $lastInsertId = $dbh->lastInsertId();
      if ($lastInsertId) {
          $msg = "Student info added successfully";
      } else {
          $error = "Something went wrong. Please try again";
      }
    }
?>

<?php if ($msg) { ?>
              <div class="alert alert-success left-icon-alert" role="alert">
                  <strong>Well done!</strong><?php echo htmlentities($msg); ?>
              </div><?php } else if ($error) { ?>
              <div class="alert alert-danger left-icon-alert" role="alert">
                  <strong>Oh snap!</strong> <?php echo htmlentities($error); ?>
              </div>
          <?php } ?>
