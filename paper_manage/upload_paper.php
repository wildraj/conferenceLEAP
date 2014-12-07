<?php
// There's two of this file: one in the conference management directory while the other is in the paper directory

require_once('insert_paper.php');

// This one uploads conference papers
uploadPaper($target_dir,$file_name,$htmlFileInputName,$title,$speaker_id,$conf_id){
	// Note: The directory name could be conference name with its id such as Conference12
	// File
	$target_file = $target_dir . basename($_FILES[$htmlFileInputName]["name"]);//$htmlFileInputName is name of file input element of html
	$uploadOk = 1;
	// The extension of the file
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	// Check if file already exists
	// ASK IF THE USER WANTS TO REPLACE EXISTED FILE WITH THE NEW ONE (RANDY)
	/*if (file_exists($target_file)) {
		echo "Sorry, file already exists.";
		$uploadOk = 0;
	}*/

	 // Check file size
	if ($_FILES[$htmlFileInputName]["size"] > 500000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}

	// Allow certain file formats
	if($imageFileType != "pdf" ) {
		echo "Sorry, only PDF files are allowed.";
		$uploadOk = 0;
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES[$htmlFileInputName]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES[$htmlFileInputName]["name"]). " has been uploaded.";
			//Insert new document information into the database
			insertPaper($file_name,$target_file,$speader_id,$conf_id);
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
}
?>