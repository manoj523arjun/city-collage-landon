<?php
	$labels = json_decode($_POST["labels"]);
	$array = get_object_vars($labels);
	$courseName = $_POST["courseName"];
	$folderName = $_POST["mobile"];
	$fName = $_POST["firstName"];

	$to = "manoj523arjun@gmail.com";
    $subject = "Online Form Submission of $fName";

	$errors= array();
	$success = array();

	$extensions= array("jpeg","jpg","png", "doc", "docx");

	if (!is_dir('./online-forms/'.$folderName)) {
	    mkdir('./online-forms/'.$folderName);
	    $isCreated = true;
	} else {
		$isCreated = true;
	}

	$message = "<table>";

	foreach ($_POST as $key => $value) {
		# code...
		if ($key !== "labels" && $key !== "courseName" && $key !== "agreement") {
			if ($key === "courses") $value = $courseName;
			$message .= "<tr><td>$array[$key]</td><td>:</td><td>$value</td></tr>";
		}
	}

	if ($isCreated === true) {
		foreach ($_FILES as $key => $value) {
			# code...
			$fileName = $value["name"];
			$fileSize = $value["size"];
			$fileType = $value["type"];
			$fileTempName = $value["tmp_name"];

			if ($fileName !== '') {
				$tempFile = explode('.', $fileName);
				$file_ext = end($tempFile);

				$location = "online-forms/".$folderName."/".$fileName;

				if(in_array($file_ext,$extensions) === false){
			    	$errors[]="extension not allowed, please choose ".implode(", ", $extensions)." file extensions.";
			    }
			      
			    if($fileSize > 2097152) {
					$errors[]='File size must be excately 2 MB';
			    }

				if(empty($errors)==true) {
				 	move_uploaded_file($fileTempName, $location);
				 	$success[]='Files uploaded successfully';
				} else {
				 	die(json_encode(array('message' => $errors, 'type' => 'error')));
				}
			}
		}
	}

	$message .= "</table>";

	$header = "From:manoj523arjun@gmail.com \r\n";
	// $header .= "Cc:afgh@somedomain.com \r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html\r\n";
	$header .= "Access-Control-Allow-Origin: *\r\n";

	$retval = mail ($to,$subject,$message,$header);

	if( $retval == true ) {
	$success[]="email sent";
	echo json_encode(array('message' => $success, 'type' => 'success'));
	}else {
	die(json_encode(array('message' => "not sent", 'type' => 'error')));
	}
?>
