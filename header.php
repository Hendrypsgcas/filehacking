<?php include "config.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>File Hacking Alert using Fog Computing</title>
<meta name="keywords" content="Green Black, Free CSS Templates, Web Design" />
<meta name="description" content="Green Black - Download free CSS templates from templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
  <body>    

<div id="templatemo_container_wrapper">
<div id="templatemo_container">
	<div id="templatemo_banner">
  <div id="site_title">
            <h1><a href="index.php" >File Hacking Alert using Fog Computing</span></a></h1>
      </div>
        
        <div id="templatemo_menu">
		<ul>
			
<?php
if(isset($_SESSION['uid']))
{
?>
<li><a href="upload_file.php">Upload file</a></li>
<li><a href="view_file.php">View file</a></li>
<li><a href="search_file.php">Search file</a></li>
<li><a href="logout.php">Logout</a></li>
<?php
}
else if(isset($_SESSION['aid']))
{
?>
<li><a href="dupload_file.php">Upload decoy</a></li>
<li><a href="dview_file.php">View decoy</a></li>
<li><a href="view_file.php">View file</a></li>

<li><a href="block.php">Block user</a></li>
<li><a href="logout.php">Logout</a></li>
<?php
}
else
{
?>
<li><a class="page-scroll" href="index.php">User Register</a></li>
<li><a class="page-scroll" href="login.php">User Login</a></li>
<li><a class="page-scroll" href="adminlogin.php">Admin Login</a></li>
                   
<?php
}
?>

			  </ul>
			  
            
		</div> <!-- end of menu -->
    
    </div> <!-- end of banner -->



