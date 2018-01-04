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
          <li class="active" name="avail_com"><a href="../cardowner/availablecommodity.php" ><span>available commodity</span></a></li>
          <li><a href="payment.php"><span> payment</span></a></li>
          <li><a href="cardcomplaints.php"><span>complaints</span></a></li>
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
<table align="center">
<table align="center" bgcolor="#000" width="960px" height="auto" cellspacing="15px" >		
			<tr style="color:#fff">
				<th>NO</th>
				<th>ITEM NAME</th>
				<th>QUANTITY(in kg/lr)</th>
				<th>Action</th>
			</tr>
			<?php
			if(isset($_POST['submit']))
			{
			$cardno=$_POST['cardno'];
			$sql="SELECT *FROM `available_commodity` WHERE cardno='$cardno'";
			//$count=0;
			if($run=mysqli_query($con,$sql))
			{
				$rowcount=mysqli_num_rows($run);
			}
			if($rowcount<1)
			{
				echo "<tr><td colspan='5'>No Records Found</td></tr>";
			}
			else
			{
				$count=0;
				while($data=mysqli_fetch_assoc($run))
				{
					$count++;
					?>
					<tr align="center" style="color:#fff">
						<td> <?php echo $count;?></td>
						<td><?php echo $data['itemname'];?></td>
						<td><?php echo $data['quantity'];?></td>
						<td><a href="https://test.instamojo.com/ratish_jayemb/rice/" rel="im-checkout" data-behaviour="remote" data-style="light" data-text="Select"></a>
						<script src="https://js.instamojo.com/v1/button.js"></script></td>
					</tr>
					<?php	
				}
			}
				
			}
?>
</table>
</body>
</html>	