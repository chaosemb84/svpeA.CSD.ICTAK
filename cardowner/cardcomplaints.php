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
          <li><a href="../cardowner/cardownersdash.php"><span>MY DATA</span></a></li>
          <li><a href=""><span>available commodity</span></a></li>
          <li><a href=""><span> payment</span></a></li>
          <li class="active"><><a href="cardcomplaints.php"><span>complaints</span></a></li>
        </ul>
      </div>
	</div>
  </div>
</div>

<?php
		$name=$_SESSION["name"];
		$password=$_SESSION["pass"];
		$sql="SELECT * FROM `cardowner` WHERE name='$name' AND password='$password'";
		$run=mysqli_query($con,$sql);
		$data=mysqli_fetch_assoc($run);
?>

<form method="POST" action="cardcomplaints.php" enctype="multipart/form-data">
<table align="center" bgcolor="#000" width="960px" height="auto" cellspacing="15px" >
	<tr>
		
		<td align="left">
			<font color="#fff" size="3">TO:
		</td>
		<td>
			<select name="to">
				<option>ADMIN</option>
				<option>DIPPO</option>
			</select>
		</td>
		
	</tr>
	<tr>
		
		<td align="left">
			<font color="#fff" size="3">FROM:
		</td>
		<td>
			<input type="text" name="cardno" value="<?php echo $data['cardno'];?>">
		</td>
		
	</tr>
	<tr>
		
		<td align="left">
			<font color="#fff" size="3">COMPLAINT:
		</td>
		<td>
			<textarea name="complaints" rows="10" cols="89"></textarea>
		</td>
		
	</tr>
	<tr>
		
		<td align="left">
			<font color="#fff" size="3">ATTAGMENTS 1:
		</td>
		<td>
			<input type="file" name="attachment1">
		</td>
	</tr>
	<tr>
		
		<td align="left">
			<font color="#fff" size="3">ATTAGMENTS 2:
		</td>
		<td>
			<input type="file" name="attachment2">
		</td>
	</tr>
	<tr>
		
		<td align="left">
			<font color="#fff" size="3">ATTAGMENTS 3:
		</td>
		<td>
			<input type="file" name="attachment3" >
		</td>
	</tr>
	<tr align="center">
		<td>
			<input type="submit" value="SUBMIT" name="submit">
		</td>
	</tr>
</table>
</form>

<?php 
		if(isset($_POST['submit']))
		{
			include('../dbcon.php');
			$category="cardowner";
			$to=$_POST['to'];
			$complaints=$_POST['complaints'];
			$from=$_POST['from'];
			$imagename1=$_FILES['attachment1']['name'];
			$tempname1=$_FILES['attachment1']['temp_name'];
			move_uploaded_file($tempname1,"../dataimg/$imagename1");
			$imagename2=$_FILES['attachment2']['name'];
			$tempname2=$_FILES['attachment2']['temp_name'];
			move_uploaded_file($tempname2,"../dataimg/$imagename2");
			$imagename3=$_FILES['attachment3']['name'];
			$tempname3=$_FILES['attachment3']['temp_name'];
			move_uploaded_file($tempname3,"../dataimg/$imagename3");
			$qry="INSERT INTO `complaints`( `to`, `from`, `complaint`, `attachment1`, `attachment2`, `attachment3`,`category`) VALUES ('$to','$from','$complaints','$imagename1','$imagename2','$imagename3','$category')";
			$run=mysqli_query($con,$qry);
			if($run==true)
			{				
				?>
				<script>
					alert('Data inserted successfully');
				</script>
				<?php
			}
		
				
		}?>