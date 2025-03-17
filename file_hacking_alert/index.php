<?php include "header.php"; ?>
    <div id="templatemo_content">
    	
         <!-- end of side column -->
        
        <div id="main_column">
        
            <div class="main_column_section">       
            <div class="side_column_box">
            
            	<h2><span></span>User Register</h2>
                
                <div class="side_column_box_content">

                    <form action="" method="post">
					
					<input type="text" maxlength="40" class="inputfield" name="fname" required placeholder='Firstname' /><br><br>
					<input type="text" maxlength="40" class="inputfield" name="email" required placeholder='Email' /><br><br>
					<input type="text" maxlength="40" class="inputfield" name="phone" required placeholder='Phone' /><br><br>
					<input type="text" maxlength="40" class="inputfield" name="uname" required placeholder='Username' /><br><br>
					<input type="password" maxlength="40" class="inputfield" name="upass" required placeholder='Password' /><br><br>
					<input type="date" maxlength="40" class="inputfield" name="rdate" required placeholder='Date' /><br><br>
                        
						<div class="button_01"><input type="submit" name="register" value="Register" alt="Search"  /></div> 
						
                        
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
if(isset($_POST['register']))
{
$fname=$_POST['fname'];
$uname=$_POST['uname'];
$upass=$_POST['upass'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$rdate=$_POST['rdate'];


$q=mysql_query("select * from  user where uname='$uname' and upass='$upass'")or die(mysql_error());

$n=mysql_num_rows($q);
if($n>0)
{
echo "<script type='text/javascript'>alert('User account already exists');</script>";
}
else
{
mysql_query("insert into user(fname,email,uname,upass,phone,rdate)values('$fname','$email','$uname','$upass','$phone','$rdate')");
echo "<script type='text/javascript'>alert('User account registered successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=login.php">';
}

}
?>

<?php include "footer.php"; ?>