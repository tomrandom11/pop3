<?php //echo $_GET['id']; 
    require_once("dbcon.php");//เรียกใช้กconn
    $sql = "SELECT * FROM student WHERE student_id ='{$_GET['id']}'"; //สร้างเก้บ
    $result = $conn->query($sql);//ดึงข้อมูล
    if ($result->num_rows > 0) {//มีข้อมูลรึเปล่า
       $row = $result->fetch_assoc();//เอาแค่ข้อมูล
      // echo $row['student_id'].'<br>';
      // echo $row['student_fname'].'<br>';
      // echo $row['student_lname'].'<br>';
      // echo $row['student_bday'].'<br>';
     //  echo $row['student_pin'].'<br>';
    }
 ?>
<h3>แก้ไขนักศึกษา <small><a href=".">ย้อนกลับ</a></small></h3>



<!-- การระบุเพื่อไปใช้ -->
<form action="update.php" method="post">
    <label for="student_id">รหัสนักศึกษา</label>
    <?php echo $row['student_id']; ?>
    <input type="hidden" name="student_id" id="student_id" value="<?php echo $row['student_id'] ?>">

    <br><br>
    <label for="student_fname">ชื่อ</label>
    <input type="text" name="student_fname" id="student_fname" value="<?php echo $row['student_fname'] ?>">
    <br><br>
    <label for="student_lname">นามสกุล</label>
    <input type="text" name="student_lname" id="student_lname" value="<?php echo $row['student_lname'] ?>">
    <br><br>
    <label for="student_bday">วัน/เดือน/ปี</label>
    <input type="date" name="student_bday" id="student_bday" value="<?php echo $row['student_bday'] ?>">
    <br><br>
    <label for="student_pin">PIN</label>
    <input type="text" name="student_pin" id="student_pin" value="<?php echo $row['student_pin'] ?>">

    <!-- ปุ่ม -->
    <br><br>
    <button type="submit">ยืนยัน</button>
    <button type="reset">ล้างข้อมูล</button>
</form>