<?php 
error_reporting(0);
include "header.php"; ?>
    <div id="templatemo_content">
    	
         <!-- end of side column -->
        
        <div id="main_column">
        
            <div class="main_column_section">       
            <div class="side_column_box">
            
            	<h2><span></span>View file</h2>
                
                <div class="side_column_box_content">
<form action="" method="post" >
	
	Start Date : 
				<input type="date" name="adate" value="<?php echo date("Y-m-d"); ?>" class="inputfield"  /><br><br>

				EndDate : 
				<input type="date" name="edate" value="<?php echo date("Y-m-d"); ?>" class="inputfield" /><br><br>
				<div class="button_01"><input type="submit" name="search" value="Search" /></div><br><br><br>
				
                    <table align="left" cellpadding="10" cellspacing="0" border="1" width="100%">
			<tr><td>User</td><td>Title</td><td>comment</td><td>File Download</td><td>File Access Key</td><td>Date</td></tr>
			<?php
			
			$uname=$_SESSION['uname'];
			if($uname!='')
			{
			 if(isset($_POST['search']))
		 {
		 $adate=$_POST['adate'];
		$edate=$_POST['edate'];
		$g=mysql_query("select * from upfile where uname='$uname' and rdate between '$adate' and '$edate'");
		 }
		else
		{
$g=mysql_query("select * from upfile where uname='$uname'");
				}
				
			
			}
			else
			{
			$g=mysql_query("select * from upfile");
			}

		
			while($t=mysql_fetch_array($g))
			{
			$title=$t['title'];
			$comment=$t['comment'];
			$pimg=$t['pimg'];
			$uname=$t['uname'];
			$cid=$t['cid'];
			$akey=$t['akey'];
			$rdate=$t['rdate'];
			//
			

			echo "<tr><td>$uname</td><td>$title</td><td>$comment</td><td>$pimg</td><td>$akey</td><td>$rdate</td></tr>";
			
			
			}
			
			?>
			</table>
                    
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
	

<?php include "footer.php"; ?>