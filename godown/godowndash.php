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
        <h1>CIVIL SUPPLY DEPARTMENT <small>KERALA</small></h1>
      </div>
      <div class="clr"></div>
      <div class="menu_nav">
        <ul>
          <li ><a href="../index.php"><span>Home Page</span></a></li>
          <li class="active"><a href="../login.php"><span>Login</span></a></li>
          <li><a href=""><span>complaints</span></a></li>
          <li><a href=""><span>news</span></a></li>
          <li><a href=""><span>apply</span></a></li>
        </ul>
      </div>
	  </div>
	</div>
</div>
	  <div>
		<h1 align="center">WELOME GODOWN </h1>
	  </div>
     
	</body>
	</html>