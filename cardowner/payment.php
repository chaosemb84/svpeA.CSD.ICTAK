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
          <li ><a href="../cardowner/availablecommodity.php" ><span>available commodity</span></a></li>
          <li class="active"><a href="payment.php"><span> payment</span></a></li>
          <li><a href="cardcomplaints.php"><span>complaints</span></a></li>
        </ul>
      </div>
	</div>
  </div>
</div>
<section id="qty_list">
	<div class="container">
		<table align="center">
		<form method="POST" action="availablecommodity.php">
		<tr style="color:#ffffff">
		<th>Enter Card Number:</th>
		<td><input type="number" name="cardno" placeholder="Card Number" required/>
		</td>
		<td colspan="5"><input type="submit" name="submit" value="Submit"/></td>
		</tr>
		</form>
		<table align="center" bgcolor="#000" width="960px" height="auto" cellspacing="15px" >		
			<tr style="color:#fff">
				<th>NO</th>
				<th>ITEM NAME</th>
				<th>QUANTITY(in kg/lr)</th>
			</tr>
		</table>
		</table>
<?php
$product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
if (!empty($product_array)) { 
foreach($product_array as $key=>$value){
?>
<div class="product-item">
	<form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
	<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
	<div><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
	<div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
	<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
	</form>
</div>
<?php }} ?>

