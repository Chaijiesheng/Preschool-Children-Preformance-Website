<?php
    if(isset($_POST['delete'])){
        
        require '../includes/database.php';
        $RollID = $_POST['RollID'];
        // $RollID = "88110099";
        $query = "DELETE FROM students WHERE RollID ='$RollID'";
        $query_run = mysqli_query($conn, $query);

        if($query_run)
        {
            echo '<script> alert("Data Deleted Successfully"); </script>';
            echo "<script>setTimeout(\"location.href = '../Teacher2/manageStudent.php';\",100);</script>";
            exit();
        }
        else
        {
            echo '<script> alert("Data Not Deleted"); </script>';
        }
    }
?>