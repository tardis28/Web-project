<?php
session_start();
//connectivity
require('config.php');

if($_SESSION['user']=="")
{
	header('location:index.php');
}

?>
<html>
<head>
<title>Profile</title>    
    <style type="text/css" media="screen">
#horizontalmenu ul 
{
padding:1; margin:1; list-style:none;
}
#horizontalmenu li
{
float:left;
 position:relative;
 padding-right:89;
 display:block;
border:0px solid #CC55FF; 
border-style:inset;
margin-left:20px;
}
#horizontalmenu li ul
 {
display:none;
position:absolute;
}
#horizontalmenu li:hover ul{
    display:block;
    background:#C4C4C4;
height:auto; width:8em; 
}
#horizontalmenu li ul li
{
    clear:both;
border-style:none;}
</style>	
</head>
<table width="1050px" align="center"  border="1">
  <tbody>
    <tr>
      <th height="39" colspan="2" style="background-color:#4E4E4E"><div style="text-align:left;color:#FFFFFF"><b><font size="+3"><a href="index.php" style="text-decoration:none ; color:#FFFFFF">Jaypee Institute Of Information Technology</a></font></b><marquee direction="left" height="100%">
			Hostel Registration</marquee></div></th>
    </tr>
    <tr>
      <th height="317" colspan="2">
      <div id="wowslider-container1">
  <div class="ws_images"><ul>
<li><img src="data1/images/jaypee.jpg" alt="Multispeciality College Campus" title="Multispeciality College Campus" id="wows1_0"/></li>
</ul></div>
    
      </th>
    </tr>
    <tr>
      <td height="38" colspan="2" style="background-color:#6E68FF">
      	<div><a href="index.php" style="text-decoration:none ; color:#010101" id="horizontalmenu li"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HOME</b></a>
        <a href="profile.php?option=about" style="text-decoration:none ; color:#010101"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ABOUT</b></a>
        <a href="profile.php?option=tfees" style="text-decoration:none ; color:#010101"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TUTION FEES</b></a>
        <a href="profile.php?option=hfees" style="text-decoration:none ; color:#010101"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HOSTEL FEES</b></a>
  <a href="logout.php" style="text-decoration:none;margin-left:150px;"><input type="submit" value="Logout" name="logout"></a></td>
    </tr>
    <tr>
      <td width="974" height="647" bgcolor="#D9D9D9" style="vertical-align:text-top">
      	<?php
	@$opt = $_GET['option'];
	if($opt=="")
	{
	?>
    <html>
	<h1><center>Welcome <?php echo $_SESSION['user']; ?></center></h1>
    </html>
	<?php
    error_reporting(1);
	}
	else{
	switch($opt)
	{
		case 'regs':
		include('registration.php')	;
		break;
		case 'login':
		include('login.php');
		break;
        case 'about':
		include('about.php');
		break;
		case 'contact':
		include('contact.php');
		break;
		case 'gallery':
		include('gallery.php');
		break;
		case 'course':
		include ('course.php');
		break;
		case 'tfees':
		include('tfees.php');
		break;
		case 'hfees':
		include('hfees.php');
		break;
		
	}}

	?>
	
      
      </td>
      <td width="343" style="background-color:#468EFF">
      <center><font size="+2"><b style="color:#191B7E"><div style="background-color:#969BFB">College Updates</div><br></b></font></center>
      	<marquee direction="up" height="100%" onMouseOver="this.stop();" onMouseOut="this.start();">
			<center><a href="" style="text-decoration:none"><font size="+1"><b>Campus Drive</b></font></a></center><br>
            <center><a href="" style="text-decoration:none"><font size="+1"><b>News</b></font></a></center><br>
            <center><a href="" style="text-decoration:none"><font size="+1"><b>JYC Week</b></font></a></center><br>
            <center><a href="" style="text-decoration:none"><font size="+1"><b>Quiz Competition</b></font></a></center><br>
            <center><a href="" style="text-decoration:none"><font size="+1"><b>Admission 2019</b></font></a></center><br>
            <center><a href="" style="text-decoration:none"><font size="+1"><b>Placement List</b></font></a></center><br>
            <center><a href="" style="text-decoration:none"><font size="+1"><b>Weekend Events</b></font></a></center><br>
            <center><a href="" style="text-decoration:none"><font size="+1"><b>Notice Board</b></font></a></center><br>
            <center><a href="" style="text-decoration:none"><font size="+1"><b>Vacation</b></font></a></center><br>
            <center><a href="" style="text-decoration:none"><font size="+1"><b>Summer Training</b></font></a></center><br>
            <center><a href="index.php?option=course" style="text-decoration:none"><font size="+1"><b>Courses Offered</b></font></a></center><br>
            <center><a href="index.php?option=gallery" style="text-decoration:none"><font size="+1"><b>Gallery</b></font></a></center><br>
		</marquee>
      </td>
    </tr>
    <tr>
      <td height="25" colspan="2" style="background-color:#B8AFFF"><center><b>&copy; 2019 by Ayush Dwivedi | Managed by Ayush Dwivedi</b></center></td>
    </tr>
  </tbody>
</table>
</html>