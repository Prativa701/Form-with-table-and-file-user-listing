<?php

/*echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	*/

//receiving the form data and listing into file content

$file_name = "file-listing.json";



if(isset($_POST) && !empty($_POST)){

	$form_data = $_POST; //receiving data in a variable

	$to_write = array();

	if(file_exists($file_name)){
		//when file exists
		$old_data = file_get_contents($file_name); //receiving old data 
		$old_data = json_decode($old_data,true); //json to array
		if(count($old_data)<=0){
			//file exists but empty file
			$to_write[] = $form_data;
		}else{
			//file exists,data also exists
			$old_data[] = $form_data;   //add new dat ato previous content of file.
			$to_write = $old_data;
		}

	}else{
		//when file does not exist
		$to_write[] = $form_data; //pusing array and keeping in 0 index
	}

	/*echo "<pre>";
	print_r($form_data);
	print_r($to_write);
	echo "</pre>";
	exit;*/

	//$string_json = json_encode($form_data);

	//converting the above rcvd. data into string
	$string_json = json_encode($to_write); 

	$success = file_put_contents($file_name, $string_json);
	if ($success) {
		@header("location:table-list.php");
		exit;
	}else{
		@header("location:bootstrap_form.php");
		exit;
	}

}else{
	@header("location:bootstrap_form.php");
	exit;
}

?>