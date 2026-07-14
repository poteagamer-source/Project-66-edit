<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

    <style>#success_message{ display: none;}
    {
        legend{
            text-align: center;
        }
    }

</style>
</head>
<body>


    
<div class="container">
<form class="well form-horizontal" action="check-exam.php" method="post"  id="contact_form" enctype="multipart/form-data">
<a href="index.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
<script>
        function updateOptions() {
            var select1 = document.getElementById("select1").value;
            var select2 = document.getElementById("select2");

            // Reset select2 options
            select2.innerHTML = ""; // Remove previous options

            if (select1 == "ประกาศนียบัตรวิชาชีพ (ปวช.)") {
                // If Select 1 equals "ประกาศนียบัตรวิชาชีพ (ปวช.)"
                var options = ["ช่างยนต์/ยานยนต์", "ช่างยนต์/จักรยานยนต์และเครื่องยนต์เล็กอเนกประสงค์", "ช่างกลโรงงาน/เครื่องมือกล", "ช่างเชื่อมโลหะ/ผลิตภัณฑ์", "ช่างไฟฟ้ากำลัง/ไฟฟ้ากำลัง", "ช่างอิเล็กทรอนิกส์/อิเล็กทรอนิกส์", "ช่างก่อสร้าง/ก่อสร้าง", "เครื่องเรือนและตกแต่งภายใน", "สถาปัตยกรรม", "สำรวจ", "โยธา", "ช่างเมคคาทรอนิกส์/เมคคาทรอนิกส์", "ช่างเทคนิคคอมพิวเตอร์/เทคนิคคอมพิวเตอร์", "โลจิสติกส์/โลจิสติกส์", "เทคโนโลยีสารสนเทศ/การโปรแกรมคอมพิวเตอร์ เว็บ และอุปกรณ์เคลื่อนที่", "เทคโนโลยีสารสนเทศ/คอมพิวเตอร์กราฟิก เกม และแอนิเมชัน",]; // Add more options as needed
            } else if (select1 == "ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)") {
                // If Select 1 equals "ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)"
                var options = ["เทคนิคยานยนต์(ม.6)", "เทคโนโลยีงานเชื่อมโครงสร้างโลหะ(ม.6)", "ไฟฟ้ากำลัง(ภาคสมทบ)", "เทคนิคยานยนต์ไฟฟ้า(ม.6)", "ก่อสร้าง(ม.6)", "งานเฟอร์นิเจอร์และตกแต่งภายใน(ม.6)", "เทคนิคสถาปัตยกรรม(ม.6)", "โยธา(ม.6)", "โยธา(ภาคสมทบ)", "เครื่องทำความเย็นและปรับอากาศ(ม.6)", "การจัดการโลจิสติกส์และซัพพลายเชน(ม.6)", "เทคโนโลยีสารสนเทศ/นักพัฒนาซอฟแวร์คอมพิวเตอร์(ม.6)", "เทคโนโลยีสารสนเทศ/นักพัฒนาคอมพิวเตอร์กราฟฟิกฯ(ม6)", "เทคนิคการจัดการพลังงาน(สมทบ)", "เมคคาทรอนิกส์และหุ่นยนต์(ม.6,ทวิภาคี)"]; // Add more options as needed
            } else if (select1 == "ปริญญาตรี") {
                // If Select 1 equals "ปริญญาตรี"
                var options = ["เทคโนโลยียานยนต์", "เทคโนโลยีการผลิต", "เทคโนโลยีไฟฟ้า", "เทคโนโลยีพลังงาน", "เทคโนโลยีสารสนเทศ	"]; // Add more options as needed
            } else {
                var options = []; // Default empty options
            }

            // Populate select2 with options
            for (var i = 0; i < options.length; i++) {
                var option = document.createElement("option");
                option.text = options[i];
                select2.add(option);
            }
        }
    </script>
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>แบบฟอร์มรับสมัครนักเรียน</b></h2></center></legend><br>
<div class="form-group"> 
<label class="col-md-4 control-label">ระดับการศึกษา</label>
<div class="col-md-4 selectContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
   
<select id="select1"name="grade_level" required class="form-control selectpicker" onchange="updateOptions()">
<option value="" >ระดับการศึกษาที่จะศึกษาต่อ</option>
  <option>ประกาศนียบัตรวิชาชีพ (ปวช.)</option>
  <option>ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</option>
  <option >ปริญญาตรี</option>

</select>
</div>
</div>
</div>

<div class="form-group"> 
<label class="col-md-4 control-label">สาขา</label>
<div class="col-md-4 selectContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
<select id="select2"name="department" required class="form-control selectpicker">

</select>
</div>
</div>
</div>
<legend><center><h3>ข้อมูลนักเรียน-นักศึกษา</h3></center></legend><br>
<div class="form-group"> 
<label class="col-md-4 control-label">คำนำหน้า</label>
<div class="col-md-4 selectContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
<select required name="pre_name" class="form-control selectpicker">
<option>นาย</option>
<option>นางสาว</option>

</select>
</div>
</div>
</div>
<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">ชื่อ</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  required name="first_name" placeholder="First Name" class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label" >นามสกุล</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input required name="last_name" placeholder="Last Name" class="form-control"  type="text">
</div>
</div>
</div>



<!-- -->
<div class="form-group">
<label class="col-md-4 control-label">รหัสประจำตัวประชาชน 13 หลัก</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  required name="id_card" placeholder="รหัสประจำตัวประชาชน 13 หลัก" class="form-control"  type="text">
</div>
</div>
</div>


<div class="form-group">
    <label class="col-md-4 control-label">วันเกิด</label>  
    <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            <input required name="birthdate" class="form-control" type="date">
        </div>
    </div>
</div>




<!-- Text input-->
   <div class="form-group">
<label class="col-md-4 control-label">E-Mail</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input required name="email" placeholder="E-Mail Address" class="form-control"  type="text">
</div>
</div>
</div>


<!-- Text input-->
   
<div class="form-group">
<label class="col-md-4 control-label">เบอร์โทรศัพท์</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<input required name="tel" placeholder="(66)" class="form-control" type="text">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" >สัญชาติ</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input required name="nationality" placeholder="สัญชาติ" class="form-control"  type="text">
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-4 control-label" >ศาสนา</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  required name="religion" placeholder="ศาสนา" class="form-control"  type="text">
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-4 control-label" >ที่อยู่</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input required name="ads" placeholder="ที่อยู่" class="form-control"  type="text">
</div>
</div>
</div>
<legend><center><h3>ข้อมูลผู้ปกครอง</h3></center></legend><br>

<div class="form-group">
<label class="col-md-4 control-label" >ชื่อ-นามสกุล บิดา</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input required name="dad_name" placeholder="Last Name" class="form-control"  type="text">
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-4 control-label">เบอร์โทรศัพท์</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<input required name="dad_tel" placeholder="(66)" class="form-control" type="text">
</div>
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label" >ชื่อ-นามสกุล มารดา</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input required name="mom_name" placeholder="ชื่อ-นามสกุล มารดา" class="form-control"  type="text">
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-4 control-label">เบอร์โทรศัพท์</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<input required name="mom_tel" placeholder="(66)" class="form-control" type="text">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label" >ชื่อ-นามสกุล ผู้ปกครอง</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="parents_name" placeholder="(กรณีอาศัยกับผู้อื่นที่ไม่ใช่บิดา มารดา)" class="form-control"  type="text">
</div>
</div>
</div>

<div class="form-group">
<label class="col-md-4 control-label">เบอร์โทรศัพท์</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<input name="parents_tel" placeholder="(66)" class="form-control" type="text">
</div>
</div>
</div>

<legend><center><h3>ข้อมูลการศึกษาที่ใช้ลงทะเบียน</h3></center></legend><br>
<div class="form-group">
<label class="col-md-4 control-label" >สถานศึกษาเดิม</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input required name="school" placeholder="" class="form-control"  type="text">
</div>
</div>
</div>
<div class="form-group">
<label class="col-md-4 control-label" >เกรดเฉลี่ยสะสม(GPA)</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input required name="GPA" placeholder="" class="form-control"  type="text">
</div>
</div>
</div>


<div class="form-group">
<label class="col-md-4 control-label" >แทรกรูปถ่ายหน้าตรง 1 นิ้ว</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="fileToUpload" id="image" placeholder="อัปโหลดไฟล์ jpg,jpeg,png,pdf" class="form-control"  type="file" accept='image/*'>
</div>
</div>
</div>
</form>



<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4"><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-success" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspลงทะเบียน<span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
</div>
</div>

</fieldset>
</form>
</div>
</div><!-- /.container -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js">  
</body>
</html>