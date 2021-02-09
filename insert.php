<h5>das</h5>

<?php 
    /*echo $_POST['student_id'] . '<br>';
    echo $_POST['student_fname']. '<br>';
    echo $_POST['student_lname']. '<br>';
    echo $_POST['student_bday']. '<br>';
    echo $_POST['student_pin']. '<br>';*/
    require_once("dbcon.php");
    $sql = "INSERT INTO student (student_id, student_fname, student_lname,student_bday,student_pin) 
    VALUES ('{$_POST['student_id']}', '{$_POST['student_fname']}','{$_POST['student_lname']}', '{$_POST['student_bday']}','{$_POST['student_pin']}')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
 ?>