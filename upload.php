<?php
if(!empty($_FILES)) {
if(is_uploaded_file($_FILES['upad_any_item_1']['tmp_name'])) {
$sourcePath = $_FILES['upad_any_item_1']['tmp_name'];
$targetPath = "uploads/".$_FILES['upad_any_item_1']['name'];

if(move_uploaded_file($sourcePath,$targetPath)) {
	
$targetPath_new = basename($targetPath);
$file_exte_fir_fu = pathinfo($targetPath_new, PATHINFO_EXTENSION);
$targetPath_new =  'uploads/'.strtotime(date('Y-m-d H:i:s')).'.'.pathinfo($targetPath_new, PATHINFO_EXTENSION);
 if(rename($targetPath , $targetPath_new)) {
	
?>


	<?php
		switch(strtolower($file_exte_fir_fu))  {
			case 'jpg':
			 		?>

  <div class="" style="display: inline-block;"><img class='div_les_edu454445' src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/tech_teach/uploads/'.basename($targetPath_new); ?>" style=" max-width: 100px; max-height: 100px; width: auto; height: auto;"/><div><span class="glyphicon glyphicon-camera" aria-hidden="true" style="position: absolute;top: 279px; background-color: white;"></span><span class="glyphicon glyphicon-remove remove_me_54985" aria-hidden="true" style="top: -30px;left: 85px; background-color: white;"></span></div></div>
			<?php 
			break;
			case 'png':
					?>

  <div class="" style="display: inline-block;"><img class='div_les_edu454445'  src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/tech_teach/uploads/'.basename($targetPath_new); ?>" style=" max-width: 100px; max-height: 100px; width: auto; height: auto;"/><div><span class="glyphicon glyphicon-camera" aria-hidden="true" style="position: absolute;top: 279px; background-color: white;"></span><span class="glyphicon glyphicon-remove remove_me_54985" aria-hidden="true" style="top: -30px;left: 85px; background-color: white;"></span></div></div>
			<?php 
			break;
			case 'jpeg':
					?>

  <div class="" style="display: inline-block;"><img  class='div_les_edu454445' src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/tech_teach/uploads/'.basename($targetPath_new); ?>" style=" max-width: 100px; max-height: 100px; width: auto; height: auto;"/><div><span class="glyphicon glyphicon-camera" aria-hidden="true" style="position: absolute;top: 279px; background-color: white;"></span><span class="glyphicon glyphicon-remove remove_me_54985" aria-hidden="true" style="top: -30px;left: 85px; background-color: white;"></span></div></div>
			<?php 
			break;
			case 'gif':
			
			break;		?>

  <div class="" style="display: inline-block;"><img  class='div_les_edu454445' src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/tech_teach/uploads/'.basename($targetPath_new); ?>" style=" max-width: 100px; max-height: 100px; width: auto; height: auto;"/><div><span class="glyphicon glyphicon-camera" aria-hidden="true" style="position: absolute;top: 279px; background-color: white;"></span><span class="glyphicon glyphicon-remove remove_me_54985" aria-hidden="true" style="top: -30px;left: 85px; background-color: white;"></span></div></div>
			<?php 
			case 'mp4':
				?>

  <div class="" style="display: inline-block;"><video class='div_les_edu454445'  src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/tech_teach/uploads/'.basename($targetPath_new); ?>" width="100px" height="100px"></video><div><span class="glyphicon glyphicon-facetime-video" aria-hidden="true" style="position: absolute;top: 279px;"></span><span class="glyphicon glyphicon-remove remove_me_54985" aria-hidden="true" style="top: -30px;left: 85px;"></span></div></div>

	<?php
			break;
			case '3gp':
			?>
  <div class="" style="display: inline-block;"><video class='div_les_edu454445'  src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/tech_teach/uploads/'.basename($targetPath_new); ?>" width="100px" height="100px"></video><div><span class="glyphicon glyphicon-facetime-video" aria-hidden="true" style="position: absolute;top: 279px;"><span class="glyphicon glyphicon-remove remove_me_54985" aria-hidden="true" style="top: -30px;left: 85px;"></span></span></div></div>

	<?php
			break;
			case 'mkv':
			?>
  <div class="" style="display: inline-block;"><video class='div_les_edu454445'  src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/tech_teach/uploads/'.basename($targetPath_new); ?>" width="100px" height="100px"></video><div><span class="glyphicon glyphicon-facetime-video" aria-hidden="true" style="position: absolute;top: 279px;"><span class="glyphicon glyphicon-remove remove_me_54985" aria-hidden="true" style="top: -30px;left: 85px;"></span></span></div></div>

	<?php
			break;
			case 'avi':
			?>
  <div class="" style="display: inline-block;"><video class='div_les_edu454445'  src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/tech_teach/uploads/'.basename($targetPath_new); ?>" width="100px" height="100px"></video><div><span class="glyphicon glyphicon-facetime-video" aria-hidden="true" style="position: absolute;top: 279px;"><span class="glyphicon glyphicon-remove remove_me_54985" aria-hidden="true" style="top: -30px;left: 85px;"></span></span></div></div>

	<?php
			break;
			case 'mov':
			?>
  <div class="" style="display: inline-block;"><video class='div_les_edu454445'  src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/tech_teach/uploads/'.basename($targetPath_new); ?>" width="100px" height="100px"></video><div><span class="glyphicon glyphicon-facetime-video" aria-hidden="true" style="position: absolute;top: 279px;"><span class="glyphicon glyphicon-remove remove_me_54985" aria-hidden="true" style="top: -30px;left: 85px;"></span></span></div></div>

	<?php
			break;
			case 'docx':
				?>
                

  <div class="" style="display: inline-block;"><object  class='div_les_edu454445' src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/tech_teach/uploads/'.basename($targetPath_new); ?>" style=" max-width: 100px; max-height: 100px; width: auto; height: auto;"/><div><span class="glyphicon glyphicon-book" aria-hidden="true" style="position: absolute;top: 279px; background-color: white;"></span><span class="glyphicon glyphicon-remove remove_me_54985" aria-hidden="true" style="top: -30px;left: 85px; background-color: white;"></span></div></div>

	<?php
			break;
			case 'pdf':
				?>

  <div class="" style="display: inline-block;"><embed  class='div_les_edu454445' src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/tech_teach/uploads/'.basename($targetPath_new); ?>" style=" max-width: 100px; max-height: 100px; width: auto; height: auto;"/><div><span class="glyphicon glyphicon-book" aria-hidden="true" style="position: absolute;top: 279px; background-color: white;"></span><span class="glyphicon glyphicon-remove remove_me_54985" aria-hidden="true" style="top: -30px;left: 85px; background-color: white;"></span></div></div>
	<?php
			
			break;
			case 'ppt':
				?>
                


  <div class="" style="display: inline-block;"><object  class='div_les_edu454445' src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/tech_teach/uploads/'.basename($targetPath_new); ?>" style=" max-width: 100px; max-height: 100px; width: auto; height: auto;"/><div><span class="glyphicon glyphicon-book" aria-hidden="true" style="position: absolute;top: 279px; background-color: white;"></span><span class="glyphicon glyphicon-remove remove_me_54985" aria-hidden="true" style="top: -30px;left: 85px; background-color: white;"></span></div></div>
	<?php
			break;
			default :
				?>
                


  <div class="" style="display: inline-block;"><object  class='div_les_edu454445' src="<?php echo 'http://'.$_SERVER['SERVER_NAME'].'/tech_teach/uploads/'.basename($targetPath_new); ?>" style=" max-width: 100px; max-height: 100px; width: auto; height: auto; background-image: url('../assets/images/files.png')"/><div><span class="glyphicon glyphicon-file" aria-hidden="true" style="position: absolute;top: 279px; background-color: white;"></span><span class="glyphicon glyphicon-remove remove_me_54985" aria-hidden="true" style="top: -30px;left: 85px; background-color: white;"></span></div></div>
	<?php
	
		}
		
		
	
	
	?>



<?php 
 } else {
	 echo "";
 }
}
}
}
?>