<?php include "header.php"; ?>
    <div id="templatemo_content">
    	
         <!-- end of side column -->
        
        <div id="main_column">
        
            <div class="main_column_section">       
            <div class="side_column_box">
            
            	<h2><span></span>User Login</h2>
                
                <div class="side_column_box_content">

                    <form action="" method="post">
					

					<input type="text" maxlength="40" class="inputfield" name="uname" required placeholder='Username' /><br><br>
					<input type="password" maxlength="40" class="inputfield" name="upass" required placeholder='Password' /><br><br>
                        
						<div class="button_01"><input type="submit" name="login" value="Login" alt="Search"  /></div> 
						
                        
                    </form>
                    
                    <div class="cleaner"></div>
                </div>
                
                <div class="bottom"></div>
            </div>

              <div class="cleaner"></div>
                <div class="bottom"></div>
            </div>
            
            
        
        	
            <div class="cleaner"></div>
        </div> <!-- end of main column -->
    
    	<div class="cleaner"></div>
    </div> <!-- end of content -->
	<?php
if(isset($_POST['login']))
{
$uname=$_POST['uname'];
$upass=$_POST['upass'];
$q=mysql_query("select * from  user where uname='$uname' and upass='$upass' and status!='0'")or die(mysql_error());
$n=mysql_num_rows($q);
if($n>0)
{
$r=mysql_fetch_array($q);
$_SESSION['uid']=$stid=$r['uid'];
$_SESSION['uname']=$uname=$r['uname'];
echo "<script type='text/javascript'>alert('User logged in successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=upload_file.php">';
}
else
{
echo "<script type='text/javascript'>alert('Please contact administrator, your account may be blocked by admin for irrelavant content posted');</script>";
}
}
?>

<?php include "footer.php"; ?>