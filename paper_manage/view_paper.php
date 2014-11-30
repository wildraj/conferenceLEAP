<?php
//One of the functions that fulfills editor's task: view any submitted paper
//Grabs the paper by reference and have the editor view it
//However it is not viewed on new tab, but on the current one
function viewPaper($reference){
		//Fetches the file
		error_reporting(E_ALL);
		ini_set('display_errors',1);

		$file = $reference;

		//check sanity and give meaning error messages
		// (also, handle errors more gracefully here, you don't want to emit details about your
		//  filesystem in production code)
		if (! file_exists($file)) die("$file does not exist!");
		if (! is_readable($file)) die("$file is unreadable!");

		//dump the file
		header('Cache-Control: public'); 
		header('Content-Type: application/pdf');
		//header('Content-Disposition: attachment; filename="some-file.pdf"');
		header('Content-Length: '.filesize($file));

		readfile($file);
}
?>