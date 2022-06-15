<div class="container">
			
<?php 

	if(isset($_GET['trangchu']))
	{
		$tam = $_GET['trangchu'];
		
		
	}
	else
	{
		$tam= '';
		

	}
	if($tam=='support')
	{
		include("container/submit_support.php");
	}
	else if($tam=='banner')
	{
		include("container/banner_content.php");
	}
	else
	{
		include("container/slider.php");
		include("container/content.php");
		include("container/support.php");
		
	}
 ?>
			
</div>