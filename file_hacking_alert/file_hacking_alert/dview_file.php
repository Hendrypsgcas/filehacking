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
	
                    <table align="left" cellpadding="10" cellspacing="0" border="1" width="100%">
			<tr><td>Title</td><td>Description</td><td>File name</td><td>Date</td></tr>
			<?php
				
			$g=mysql_query("select * from decoy");
		
			while($t=mysql_fetch_array($g))
			{
			$title=$t['title'];
			$comment=$t['comment'];
			$pimg=$t['pimg'];
			$cid=$t['cid'];
			$rdate=$t['rdate'];
			//
			
			echo "<tr><td>$title</td><td>$comment</td><td>$pimg</td><td>$rdate</td></tr>";
			
			
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