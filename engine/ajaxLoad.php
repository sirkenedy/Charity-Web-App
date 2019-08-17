<?php   
	session_start();
    // echo $_SERVER['REQUEST_URI'];
	require("action.php");
	require("function.php");

	if (isset($_POST['fetchSlider'])) {

		$sliders = $obj->fetch_record_with_limit("slider",[0,3]);

		foreach ($sliders as $slider) {
	 		
		echo "<tr>
	<td><img style=\"width: 150px;height: 150px;\" src=\"../assets/images/slider/".$slider['image']."\"></td>
    <td>".$slider['title'] ."</td>
    <td>".$slider['subtitle'] ."</td>
    <td><i class=\"glyphicon glyphicon-pencil text-success\" onclick=\"editSliderModal('".$slider['id']."',' ".$slider['title'] ."','".$slider['subtitle'] ."','".$slider['image']."')\"></i><i class=\"glyphicon glyphicon-remove text-danger\"></i>
     </td>
</tr>"; 	 
		}
	}
?>

<?php  
	if (isset($_POST['slider_title'])) {
		$errors = array();
		$maxsize = 1024 * 100;
		$acceptable = array(
				'application/pdf',
				'image/jpeg',
				'image/jpg',
				'image/gif',
				'image/png'
		);
		$sli_id = $_POST['slider_id'];
	 	$filename =$_FILES['slider_image']['name'];
	 	$file_path =  time().$_SESSION['id'].$filename;

	 	if (empty($filename)) {
	 		// echo "yes";
	 		$where = array("id"=>$sli_id);
			$myarray = array(
				"title" => $_POST['slider_title'],
				"subtitle" => $_POST['slider_subtitle']
			);

			if ($obj->update_record("slider",$where, $myarray)) {
				echo "<p style='color:green;'>successfully updated</p>";
				}
	 	}else{
	 		if (($_FILES['slider_image']['size'] >= $maxsize) || ($_FILES['slider_image']['size'] == 0)) {
	 			$errors[] = 'File too large. File must be less than 100kb';
	 		}
	 		if ((!in_array($_FILES['slider_image']['type'], $acceptable)) && (!empty($_FILES['slider_image']['type']))) {
	 			$errors[] = 'Invalid file type. Only PDF, JPG, GIF, and PNG types are accepted.';
	 		}

	 		if (count($errors) === 0) {
	 		
		 		if(move_uploaded_file($_FILES["slider_image"]["tmp_name"],  "../assets/images/slider/".$file_path)){

		 			$where = array("id"=>$sli_id);
					$myarray = array(
						"title" => $_POST['slider_title'],
						"subtitle" => $_POST['slider_subtitle'],
						"image" => $file_path
					);

					if ($obj->update_record("slider",$where, $myarray)) {
						echo "<p style='color:green;'>successfully updated</p>";
						}

		 		}
		 	}else{
		 		foreach ($errors as $error) {
		 			echo '<script> alert("'.$error.'");</script>';
		 		}
		 	}
	 	}

		
	}
?>