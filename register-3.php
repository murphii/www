
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
	<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php include 'header.php';?>
<br>
<div class="container">
<div class="col-lg-12 well">
	<div class="row">
    	<ul class="nav nav-tabs">
 		<li role="presentation"><a href="register-1.php">ข้อมูลส่วนตัว</a></li>
  		<li role="presentation"><a href="register-2.php">ประวัติการศึกษา</a></li>
  		<li role="presentation" class="active"><a href="register-3.php">ประวัติการทำงาน</a></li>
        <li role="presentation"><a href="register-4.php">สายอาชีพที่ต้องการ</a></li>
        <li role="presentation"><a href="register-5.php">ความพิการและอุปกรณ์</a></li>
        <li role="presentation"><a href="register-6.php">รูปถ่าย</a></li>
		</ul>
		<br><br>
		<div class="col-sm-7 form-group">
        คุณเคยมีประสบการณ์ทำงานหรือไม่ :&nbsp;&nbsp;&nbsp;<input name="test" type="radio" value="1"> มี	&nbsp;&nbsp;&nbsp;<input name="test" type="radio" value="0"> ไม่มี
        <br><br>
        (ถ้ามี)
        <br><br>
	 	 องค์กร/บริษัทที่เคยทำงาน : <input name="" type="text">
         <br><br>
         ตำแหน่ง : <input name="" type="text">
         <br><br>
         ระยะเวลาที่ทำงาน :	&nbsp;&nbsp;&nbsp; เริ่มต้น <input name="" type="date">	&nbsp;&nbsp;&nbsp;สิ้นสุด <input name="" type="date">
         <br><br>
         
         <a href="register-4.php"><button type="submit">ถัดไป</button></a>
		 </div>
         <br><br><br><br><br>
         
</div>
</div>
</div>
</body>
</html>