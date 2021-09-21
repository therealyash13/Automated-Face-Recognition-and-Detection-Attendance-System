<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/easySlider1.5.js"></script>
<script type="text/javascript" charset="utf-8">
// <![CDATA[
$(document).ready(function(){	
	$("#slider").easySlider({
		controlsBefore:	'<p id="controls">',
		controlsAfter:	'</p>',
		auto: true, 
		continuous: true
	});	
});
// ]]>
</script>
<style type="text/css">
#slider {
	margin:0;
	padding:0;
	list-style:none;
}
#slider ul, #slider li {
	margin:0;
	padding:0;
	list-style:none;
}
/* 
    define width and height of list item (slide)
    entire slider area will adjust according to the parameters provided here
*/
#slider li {
	width:966px;
	height:348px;
	overflow:hidden;
}
p#controls {
	margin:0;
	position:relative;
}
#prevBtn, #nextBtn {
	display:block;
	margin:0;
	overflow:hidden;
	width:13px;
	height:28px;
	position:absolute;
	left: -13px;
	top:-210px;
}
#nextBtn {
	left:966px;
}
#prevBtn a {
	display:block;
	width:13px;
	height:28px;
	background:url(images/l_arrow.gif) no-repeat 0 0;
}
#nextBtn a {
	display:block;
	width:13px;
	height:28px;
	background:url(images/r_arrow.gif) no-repeat 0 0;
}
</style>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="block_header">
      <div class="logo"><b style="color:#FC0"></b><b style="color:#FFF">Student TimeTable </b></div>
      <div class="Twitter">Follow us on Twitter</div>
      <div class="clr"></div>
      <div class="menu">
        <ul>
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="adminlog.php">Admin</a></li>
        <li><a href="studlog.php">Student</a></li>
        <li><a href="staff.php">Staff</a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="slider">
    <div class="slice1">
      <div class="slice2" id="slider">
        <ul>
          <li>
            <div>
              <p class="img"><img src="images/slide_1.jpg" alt="" width="539" height="292" /></p>
              <h2>Student TimeTable<br />
                </h2>
              <p>user to easily search for herbs and fruits that will be good for the health of the user depending on any health issue  <a href="#"></a></p>
              <p><a href="#">more information...</a></p>
            </div>
          </li>
          <li>
            <div>
              <p class="img"><img src="images/slide_2.jpg" alt="" width="539" height="292" /></p>
              <h2>Student TimeTable<br />
              <p>user to easily search for herbs and fruits that will be good for the health of the user depending on any health issue. <a href="#"></a></p>
              <p><a href="#">more information...</a></p>
            </div>
          </li>
          <li>
            <div>
              <p class="img"><img src="images/slide_3.jpg" alt="" width="539" height="292" /></p>
              <h2>Student TimeTable<br />
              <p> <a href="#">Student Attendance is a Timelabs attendance management software module. It is designed to handle the various attendance requirements of public and private schools of all sizes. From almost effortlessly recording attendance, to producing daily attendance bulletins, absentee record and letters and documents</a></p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="clr"></div>
  <div class="body">
    <div class="topi">
      <div class="clr"></div>
    </div>
    <div class="body_resize">
      <div class="Welcome">
        <h2>Welcome to Student TimeTable</h2>
        <p>&nbsp;</p>
        <div class="bg"></div>
        <div>
          <p>Exam Hall Seating Allotment System is developed for the college to simplify examination hall allotment and seating arrangement. The purpose of developing exam hall seating allotment system is to computerized the traditional way of conducting exams. Another purpose for developing this software is to generate the seating arrangement report automatically during exams The scope of the project is the system on which the software is installed, i.e. the project is developed as a web based application, and it will work for a particular institute. Mostly students are facing many problem for finding the exam hall and their seats respectively</p>
          <p>n today’s world, everybody has a unique
identity, which is their face. The face or as in facial features
cannot be copied or replicated. In schools and colleges, time
is of the essence. Teachers and professors cannot waste their
time in taking attendance as they can be doing something
productive in that time. One period is of usually 50 minutes
to 1 hour, where 10 to 15 minutes are wasted in the process
of taking attendance. In the traditional method, a teacher
manually takes attendance, which takes up a lot of time as
human interaction is required at both ends. For every tutor,
this is a wastage of time. So to avoid these drawbacks, an
automatic process will be used in this project, which is based
on image processing. In this project, face detection and
recognition are used in a group to save time. Face detection
is used to locate human faces in a group, and face
recognition is used to recognize their faces. The attendance
of all the students in the class is stored in a database. When
the front face of the individual student matches one of the
faces stored in the database, then the attendance is marked,
present for all available students in the class, and absent in
other cases</p>
        </div>
        .
         <div class="bg"></div>
      </div>
      <div class="clr"></div>
    </div>
    <div class="clr"></div>
  </div>
  <div class="footer">
    <div class="resize">
      <div></div>
    </div>
    </div>
</div>
</body>
</html>
