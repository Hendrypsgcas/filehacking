<?php include "header.php"; ?>
    <div id="templatemo_content">
    	
         <!-- end of side column -->
        
        <div id="main_column">
        
            <div class="main_column_section">       
            <div class="side_column_box">
            
            	<h2><span></span>Upload decoy file</h2>
                
                <div class="side_column_box_content">

                    <form action="" method="post" enctype="multipart/form-data">
					

					<input type="text" maxlength="40" class="inputfield" name="title" required placeholder='title' /><br><br>
					<input type="text" maxlength="40" class="inputfield" name="comment" required placeholder='Description' /><br><br>
					<input type="file" maxlength="40" id="email" name="pimg" required /><br><br>
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

$title=$_POST['title'];
$comment=$_POST['comment'];
$rdate=$_POST['rdate'];
$pimg=$_FILES['pimg']['name'];

$q=mysql_query("select * from decoy where title='$title'")or die(mysql_error());
$n=mysql_num_rows($q);
if($n>0)
{
echo "<script type='text/javascript'>alert('decoy file already added');</script>";
}
else
{
move_uploaded_file($_FILES['pimg']['tmp_name'],"upload/$pimg");

mysql_query("insert into decoy(title,comment,pimg,relavance,rdate)values($title','$comment','$pimg','relavant','$rdate')");
echo "<script type='text/javascript'>alert('decoy file added successfully');</script>";
}
}
?>

<?php include "footer.php"; ?>