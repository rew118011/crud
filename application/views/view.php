<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ตารางเวลารถไฟ</title>
  <link rel = "stylesheet" type = "text/css" 
		 href = "<?php echo base_url(); ?>css/profileMe.css"> 
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
  <style>

td, th {
    text-align: left;
    padding: 8px;
    border: 1px solid black;
    border-collapse: collapse;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

</head>
<body>
</br></br></br></br></br>
  <center>
<table border = "1">
        <tr>
            <th rowspan = "2" colspan = "1">ขบวน</th>
            <th colspan = "2">ต้นทาง</th>
            <th colspan = "2">ห้วยราช</th>
            <th colspan = "2">ปลายทาง</th>
            <th rowspan = "2" colspan = "1">หมายเหตุ</th>
        </tr>
        <tr>
            <td>สถานี</td>
            <td>เวลาออก</td>
            <td>ถึง</td>
            <td>ออก</td>
            <td>สถานี</td>
            <td>ถึงเวลา</td>
        </tr>
        <?php
            foreach($tn as $row){
        ?>
        <tr>
            <td colspan = "1"><?=$row->T_ID;?></td>
            <td colspan = "1"><?=$row->e_station;?></td>
            <td colspan = "1"><?=$row->e_time_out;?></td>
            <td colspan = "1"><?=$row->p_time_in;?></td>
            <td colspan = "1"><?=$row->p_time_out;?></td>
            <td colspan = "1"><?=$row->t_station;?></td>
            <td colspan = "1"><?=$row->t_time_in;?></td>
            <td colspan = "1"><?=$row->n_type;?></td>
        </tr>
        <?php
            }
        ?>
      </table> 
          </br></br>
          <a class="button button4" href="../train/add">เพิ่มข้อมูล </a>
          </center>
</body>
</html>