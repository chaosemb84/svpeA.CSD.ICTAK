<?php
	session_start();
	if(isset($_SESSION['uid'])&&($_SESSION["roll"]=="admin"))
	{
		header('location:admin/admindash.php');
	}
	if(isset($_SESSION['uid'])&&($_SESSION["roll"]=="dippo"))
	{
		header('location:dippo/dippodash.php');
	}
	if(isset($_SESSION['uid'])&&($_SESSION["roll"]=="godown"))
	{
		header('location:godown/godowndash.php');
	}
	if(isset($_SESSION['uid'])&&($_SESSION["roll"]=="shopowner"))
	{
		header('location:shopowner/shopownerdash.php');
	}
	if(isset($_SESSION['uid'])&&($_SESSION["roll"]=="cardowner"))
	{
		header('location:cardowner/cardownerdash.php');
	}
	if(isset($_SESSION['uid'])&&($_SESSION["roll"]=="applicant"))
	{
		header('location:applicant/applicantdash.php');
	}
	
?>
<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>civil supply department kerala</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-times.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="searchform">
        <form id="formsearch" name="formsearch" method="post" action="#">
          <span>
          <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
          </span>
          <input name="button_search" src="images/search.gif" class="button_search" type="image" />
        </form>
      </div>
      <div class="logo">
        <h1><a href="index.html">CIVIL SUPPLY DEPARTMENT <small>KERALA</small></a></h1>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li ><a href="index.php"><span>Home Page</span></a></li>
          <li class="active"><a href="login.php"><span>Login</span></a></li>
          <li><a href=""><span>complaints</span></a></li>
          <li><a href=""><span>news</span></a></li>
          <li><a href=""><span>apply</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/slide1.jpg" width="920" height="360" alt="" /><span><big>Civil Supply Department Kerala</big><br />
          The Food and Civil Supplies Department is a department of the Government Secretariat, in the state of Kerala, India. The field department, that is, the operational wing of this administrative department, is the Civil Supplies Department of Kerala.</span></a> <a href="#"><img src="images/slide2.jpg" width="920" height="360" alt="" /><span><big>CIVIL SUPPLY DEPARTMENT</big><br />
          The Food and Civil Supplies Department is a department of the Government Secretariat, in the state of Kerala, India. The field department, that is, the operational wing of this administrative department, is the Civil Supplies Department of Kerala</span></a> <a href="#"><img src="images/slide3.jpg" width="920" height="360" alt="" /><span><big>CIVIL SUPPLY DEPARTMENT KERALA</big><br />
          The Food and Civil Supplies Department is a department of the Government Secretariat, in the state of Kerala, India. The field department, that is, the operational wing of this administrative department, is the Civil Supplies Department of Kerala</span></a> </div>
        <div class="clr"></div>
      </div>
    </div>
	</div>
	<div>
		<form method="POST" action="login.php">
			<table style="width:980px;" align="center" border="0" bgcolor="black">
				
				<tr>
					<td align="center" style="font-size:20px;margin-top:15px;line-height:50px;color:#fff;">USERNAME:</td>
						<td>
							<input align="center" type="text" name="uname" required>
						</td>
				</tr>
				<tr>
					<td align="center" style="font-size:20px;margin-top:15px;line-height:50px;color:#fff;">PASSWORD:</td>
						<td>
							<input align="center" type="password" name="pass" required>
						</td>
				</tr>
				<tr>
						<td colspan="2" align="center" style="font-size:20px;margin-top:15px;">
							<input align="center" type="submit" name="login" value="LOGIN" style="font-size:20px;margin-top:15px;">
						</td>
				</tr>
			</table>
		</form>
	</div>
	
	</body>
	</html>
	
	<?php
	include('dbcon.php');
	if(isset($_POST['login']))
	{
		$username=$_POST['uname'];
		$password=$_POST['pass'];
		$qry="SELECT * FROM `login` WHERE username='$username' AND password='$password'";
		$run=mysqli_query($con,$qry);
		$row=mysqli_num_rows($run);
		if($row<1)
		{
?>
			<script>
				alert('username or password is incorrect!!!');
				window.open('login.php','_self');
			</script>
<?php
		}
		else
		{
	
			$data=mysqli_fetch_assoc($run);
			$id=$data['id'];
			$roll=$data['roll'];
			$_SESSION['pass']=$password;
			$_SESSION['name']=$username;
			if($roll=="admin")
			{
				$_SESSION['uid']=$id;
				$_SESSION['roll']=$roll;
				
				header('location:admin/admindash.php');
			}
			if($roll=="dippo")
			{
				$_SESSION['uid']=$id;
				$_SESSION['roll']=$roll;
				header('location:dippo/dippodash.php');
			}
			if($roll=="godown")
			{
				$_SESSION['uid']=$id;
				$_SESSION['roll']=$roll;
				header('location:godown/godowndash.php');
			}
			if($roll=="shopowner")
			{
				$_SESSION['uid']=$id;
				$_SESSION['roll']=$roll;
				header('location:shopowner/shopownerdash.php');
			}
			if($roll=="cardowner")
			{
				$_SESSION['uid']=$id;
				$_SESSION['roll']=$roll;
				header('location:cardowner/cardownerdash.php');
			}
			if($roll=="applicant")
			{
				$_SESSION['uid']=$id;
				$_SESSION['roll']=$roll;
				header('location:applicant/applicantdash.php');
			}
		}
	}
?>
