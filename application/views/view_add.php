<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Insert</title>
    <link rel = "stylesheet" type = "text/css" 
    href = "<?php echo base_url(); ?>css/style.css"> 
    <!--using FontAwesome-->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */ 
.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */
</style>
</head>
<body>
<center><h1 class="regh1">ข้อมูลการเดินทาง</h1></center>
<center><form method="post" action="../train/insert">
    <table class="data">
    <tr>
    <td>ขบวน</td>
    <td><input name="T_ID" type="text" id="T_ID" size="20" maxlength="3"/></td>
  </tr>
  <tr>
    <td>หมายเหตุ</td>
    <td><input name="n_type" type="text" maxlength="50"/></td>
  </tr>
  <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
  <center><th>สถานีต้นทาง</th></center>
  <tr><td></td></tr><tr><td></td></tr>
  <tr>
    <td>สถานี</td>
    <td><input name="e_station" type="text"  size="20" maxlength="50"/></td>
  </tr>
  <tr>
    <td>เวลาออก</td>
    <td><input type="text" name="e_time_out"  /></td>
  </tr>
  <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
  <center><th>สถานีห้วยราช</th></center>
  <tr><td></td></tr><tr><td></td></tr>
  <tr>
    <td>ถึง</td>
    <td><input name="p_time_in" type="text" maxlength="5" /></td>
  </tr>
  <tr>
    <td>ออก</td>
    <td><input name="p_time_out" type="text" maxlength="5" /></td>
  </tr>
  <tr><td></td></tr><tr><td></td></tr><tr><td></td></tr><tr><td></td></tr>
  <center><th>สถานีปลายทาง</th></center>
  <tr><td></td></tr><tr><td></td></tr>
  <tr>
    <td>สถานี</td>
    <td><input name="t_station" type="text"  size="20" maxlength="50"/></td>
  </tr>
  <tr>
    <td>ถึงเวลา</td>
    <td><input name="t_time_in" type="text" maxlength="5" /></td>
  </tr>
</table>
</br></br>
  <div class="reg_button">
  <a class="button button2" href="../train/showall">ย้อนกลับ </a>
      <input class="button" name="submit" type="submit" value="เพิ่มข้อมูล" />
        &nbsp;
  </div>
</form></center>
<br>
</body>
</html>
