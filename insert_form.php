<h3>เพิ่มนักศึกษา <small><a href=".">ย้อนกลับ</a></small></h3>



<!-- การระบุเพื่อไปใช้ -->
<form action="insert.php" method="post">
    <label for="student_id">รหัสนักศึกษา</label>
    <input type="text" name="student_id" id="student_id">
    <br><br>
    <label for="student_fname">ชื่อ</label>
    <input type="text" name="student_fname" id="student_fname">
    <br><br>
    <label for="student_lname">นามสกุล</label>
    <input type="text" name="student_lname" id="student_lname">
    <br><br>
    <label for="student_bday">วัน/เดือน/ปี</label>
    <input type="date" name="student_bday" id="student_bday">
    <br><br>
    <label for="student_pin">PIN</label>
    <input type="text" name="student_pin" id="student_pin">

    <!-- ปุ่ม -->
    <br><br>
    <button type="submit">ยืนยัน</button>
    <button type="reset">ล้างข้อมูล</button>
</form>