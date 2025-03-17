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



                    <table align="left" cellpadding="10" cellspacing="0" border="1" width="100%">
			<tr><td>User</td><td>File Download</td><td>Original Key </td><td>Wrong Key </td><td>Block User</td><td>Date</td></tr>
			<?php
			
			$g=mysql_query("select * from wrongkey");


		
			while($t=mysql_fetch_array($g))
			{
			$pimg=$t['pimg'];
			$uname=$t['uname'];
			$cid=$t['cid'];
			$akey=$t['akey'];
			$rdate=$t['rdate'];
			
			$g=mysql_fetch_array(mysql_query("select * from upfile where pimg='$pimg'"));
			
			$rakey=$g['akey'];
			

			echo "<tr><td>$uname</td><td>$pimg</td><td>$rakey</td><td>$akey</td><td><a href='block.php?uname=$uname'>Block</a></td></td><td>$rdate</td></tr>";
			
			
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
	<?php
if($_GET['uname']!='')
{
$uname=$_GET['uname'];
mysql_query("update user set status='0' where uname='$uname'");
echo "<script type='text/javascript'>alert('User account blocked successfully');</script>";
}
if($_GET['cid']!='')
{
$cid=$_GET['cid'];
mysql_query("delete from upfile where cid='$cid'");
echo "<script type='text/javascript'>alert('User upfile deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=block.php">';
}

?>

<?php include "footer.php"; ?>