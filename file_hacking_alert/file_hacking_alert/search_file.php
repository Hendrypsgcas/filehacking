<?php 
error_reporting(0);
include "header.php"; ?>
    <div id="templatemo_content">
    	
         <!-- end of side column -->
        
        <div id="main_column">
        
            <div class="main_column_section">       
            <div class="side_column_box">
            
            	<h2><span></span>Search file</h2>
                
                <div class="side_column_box_content">
<form action="" method="post" >
	
	Access Key : 
				<input type="text" name="akey" value="" class="inputfield"  /><br><br>

				File : 
				<select name='pimg' class="inputfield" >
				<option value=''>Select</option>
				<?php
				$uname=$_SESSION['uname'];
				$g=mysql_query("select * from upfile");
				while($t=mysql_fetch_array($g))
					{
					$pimg=$t['pimg'];
					echo "<option value='$pimg'>$pimg</option>";
					}
						?>
				</select>
<br><br>
				<div class="button_01"><input type="submit" name="search" value="Search" /></div><br><br><br>
				
                   
<?php
if(isset($_POST['search']))
{

$uname= $_SESSION['uname'];

$pimg=$_POST['pimg'];
$akey=$_POST['akey'];
$rdate=date("Y-m-d");
$q=mysql_query("select * from upfile where pimg='$pimg' and akey='$akey'")or die(mysql_error());
$n=mysql_num_rows($q);
if($n>0)
{
echo "<a href='upload/$pimg' target='_blank'>Download file</a>";
}
else
{
	echo "<a href='upload/secure.txt' target='_blank'>Download file</a>";
mysql_query("insert into wrongkey(uname,pimg,rdate,akey)values('$uname','$pimg','$rdate','$akey')");
}
}
?>
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