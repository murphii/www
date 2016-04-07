
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
  		<li role="presentation"><a href="register-3.php">ประวัติการทำงาน</a></li>
        <li role="presentation"><a href="register-4.php">สายอาชีพที่ต้องการ</a></li>
        <li role="presentation" class="active"><a href="register-5.php">ความพิการและอุปกรณ์</a></li>
        <li role="presentation"><a href="register-6.php">รูปถ่าย</a></li>
		</ul>
		<br><br>
		<div class="col-sm-7 form-group">
        เลขที่บัตรประจำตัวผู้พิการ : <input name="" type="number">                                                                                                                            
        <br><br>
	 	ประเภทความพิการ : <select name="">
        				<option>เลือกประเภทความพิการ</option>
                        <option>พิการทางการเห็น</option>
                      	<option>พิการทางการได้ยินหรือสื่อความหมาย</option>
                        <option>พิการทางร่างกายหรือการเคลื่อนไหว</option>
                        <option>พิการทางจิตใจหรือพฤติกรรม</option>
                        <option>พิการทางสติปัญญา</option>
                        <option>พิการทางการเรียนรู้</option>
                        <option>พิการทางออทิสติก</option>
        			</select>
         <br><br>
         ลักษณะความพิการ : <select name="">  <!-- จะมีลักษณะความพิการของแต่ละประเภทอีก คือถ้าเลือกพิการประเภท1(พิการทางการเห็น) จะให้ขึ้นลักษณะ2อันให้เลือกอัตโนมัติ (ตาเลือนราง,ตาบอด) -->
        				<option>เลือกลักษณะความพิการ</option>
        			</select>
         <br><br>
         อธิบายรายละเอียด : <input name="" type="text">
         <br><br>
         อุปกรณ์ช่วยความพิการ : <input name="" type="text">
         <br><br>

         
         
         <a href="register-6.php"><button type="submit">ถัดไป</button></a>
		 </div>
         <br><br><br><br><br>
         
</div>
</div>
</div>
</body>
</html>