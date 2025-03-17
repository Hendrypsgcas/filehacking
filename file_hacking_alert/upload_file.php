<?php include "header.php"; ?>
    <div id="templatemo_content">
    	
         <!-- end of side column -->
        
        <div id="main_column">
        
            <div class="main_column_section">       
            <div class="side_column_box">
            
            	<h2><span></span>Upload file</h2>
                
                <div class="side_column_box_content">
                    <?php 
                    function generateRandomString($length = 30) {
                        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!~@#$%^&*()_+{}|[]:?<>,.';
                        $charactersLength = strlen($characters);
                        $randomString = '';
                        for ($i = 0; $i < $length; $i++) {
                            $randomString .= $characters[rand(0, $charactersLength - 1)];
                        }
                        return $randomString;
                    }
                    ?>

                    <form action="" method="post" enctype="multipart/form-data">
					

					<input type="text" maxlength="40" class="inputfield" name="title" required placeholder='title' /><br><br>
					<input type="text" maxlength="40" class="inputfield" name="comment" required placeholder='Description' /><br><br>
					<input type="file" maxlength="40" id="email" name="pimg" required /><br><br>
					<input type="text" maxlength="40" class="inputfield" name="akey" value="<?php echo generateRandomString(); ?>" required placeholder='file access key' /><br><br>
					
					<input type="date" maxlength="40" class="inputfield" name="rdate" required placeholder='Date' /><br><br>
                        
						<div class="button_01"><input type="submit" name="login" value="Upload" alt="Search"  /></div> 
						
                        
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

$uname= $_SESSION['uname'];

$title=$_POST['title'];
$comment=$_POST['comment'];
$rdate=$_POST['rdate'];
$akey=$_POST['akey'];

$pimg=$_FILES['pimg']['name'];

$q=mysql_query("select * from upfile where uname='$uname' and title='$title'")or die(mysql_error());
$n=mysql_num_rows($q);
if($n>0)
{
echo "<script type='text/javascript'>alert('File already added');</script>";
}
else
{
move_uploaded_file($_FILES['pimg']['tmp_name'],"upload/$pimg");

mysql_query("insert into upfile(uname,title,comment,pimg,rdate,akey)values('$uname','$title','$comment','$pimg','$rdate','$akey')");
echo "<script type='text/javascript'>alert('File added successfully');</script>";
}
}
?>

<?php include "footer.php"; ?>