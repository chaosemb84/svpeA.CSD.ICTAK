<?php
	session_start();
	if(isset($_SESSION['uid']))
	{
		echo "";
	}
	else
	{
		header('location:../login.php');
	}
?>
<?php
	include('../dbcon.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>civil supply department kerala</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../css/coin-slider.css" />
<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/cufon-times.js"></script>
<script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/coin-slider.min.js"></script>
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
          <input name="button_search" src="../images/search.gif" class="button_search" type="image" />
        </form>
      </div>
      <div class="logo">
        <h1><a>CIVIL SUPPLY DEPARTMENT</a> <small>KERALA</small></h1>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li ><a href="../logout.php"><span>LOGOUT</span></a></li>
          <li class="active"><a href="cardownerdash.php"><span>MY DATA</span></a></li>
          <li><a href="availablecommodity.php"><span>available commodity</span></a></li>
          <li><a href=""><span> payment</span></a></li>
          <li><a href="cardcomplaints.php"><span>complaints</span></a></li>
        </ul>
      </div>
	</div>
  </div>
</div>
<?php
		$name=$_SESSION["name"];
		$password=$_SESSION["pass"];
		$sql="SELECT *FROM `cardowner` WHERE name='$name' AND password='$password'";
		$run=mysqli_query($con,$sql);
		$data=mysqli_fetch_assoc($run);
		echo "hiiii";
		?>

	  <table align="center" bgcolor="#000" width="960px" height="auto" cellspacing="15px" >
		<tr>
			<td colspan="2" height="60px"><font color="#fff" size="5"><marquee direction="right" behavior="alternate" scrolldelay="10">WELOME</marquee></font></td>
		</tr>
		<tr align="center">
			<td colspan="4"><img src="../dataimg/<?php $data['image'];?>"style="max-width:50px;"></td>
		</tr>
		<tr align="center">
			<td align="left">
				<font color="#fff" size="3">CARD NO:
			</td>
			<td>
				<input type="text" name="cardno" readonly="true" value="<?php echo $data['cardno'];?>">
			</td>
			<td align="left">
				<font color="#fff" size="3">NAME:
			</td>
			<td>
				<input type="text" name="name" readonly="true" value="<?php echo $data['name'];?>">
			</td>
		</tr>
		<tr align="center">
			<td align="left">
				<font color="#fff" size="3">ADDRESS:
			</td>
			<td>
				<textarea name="address" readonly="true" value="<?php echo $data['address'];?>"></textarea>
			</td>
			<td align="left">
				<font color="#fff" size="3">PANJAYATH:
			</td>
			<td>
				<input type="text" name="panjayath" readonly="true" value="<?php echo $data['panjayath'];?>">
			</td>
		</tr>
		<tr align="center">
			<td align="left">
				<font color="#fff" size="3">WARD NO:
			</td>
			<td>
				<input type="text" name="wardno" readonly="true" value="<?php echo $data['wardno'];?>">
			</td>
			<td align="left">
				<font color="#fff" size="3">HOUSE NO:
			</td>
			<td>
				<input type="text" name="houseno" readonly="true" value="<?php echo $data['houseno'];?>">
			</td>
		</tr>
		<tr align="center">
			<td align="left">
				<font color="#fff" size="3">TALUK:
			</td>
			<td>
				<input type="text" name="taluk" readonly="true" value="<?php echo $data['taluk'];?>">
			</td>
			<td align="left">
				<font color="#fff" size="3">DISTRICT:
			</td>
			<td>
				<input type="text" name="district" readonly="true" value="<?php echo $data['district'];?>">
			</td>
		</tr>
		<tr align="center">
			<td align="left">
				<font color="#fff" size="3">STATE:
			</td>
			<td>
				<input type="text" name="state" readonly="true" value="<?php echo $data['state'];?>">
			</td>
			<td align="left">
				<font color="#fff" size="3">AADHAR NO:
			</td>
			<td>
				<input type="text" name="aadharno" readonly="true" value="<?php echo $data['aadharno'];?>">
			</td>
		</tr>
		<tr align="center">
			<td align="left">
				<font color="#fff" size="3">PHONE NO:
			</td>
			<td>
				<input type="text" name="phnno" readonly="true" value="<?php echo $data['phnno'];?>">
			</td>
			<td align="left">
				<font color="#fff" size="3">MEMBERS:
			</td>
			<td>
				<input type="text" name="members" readonly="true" value="<?php echo $data['members'];?>">
			</td>
		</tr>
		<tr align="center">
			<td align="left">
				<font color="#fff" size="3">GAS ONNETION:
			</td>
			<td>
				<input type="text" name="gas" readonly="true" value="<?php echo $data['gasconnection'];?>">
			</td>
			<td align="left">
				<font color="#fff" size="3">SHOP NO:
			</td>
			<td>
				<input type="text" name="name" readonly="true" value="<?php echo $data['shopno'];?>">
			</td>
		</tr>
		<tr align="center">
			<td align="left">
				<font color="#fff" size="3" value="<?php echo $data['name'];?>">AGE:
			</td>
			<td>
				<input type="text" name="age" readonly="true" value="<?php echo $data['age'];?>">
			</td>
			<td align="left">
				<font color="#fff" size="3">ANNUAL INOME:
			</td>
			<td>
				<input type="text" name="income" readonly="true" value="<?php echo $data['annualincome'];?>">
			</td>
		</tr>
		
	  </table>
     
	</body>
	</html>
	

	