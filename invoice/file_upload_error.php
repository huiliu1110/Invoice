<?php 

	if($_FILES['uploadfile']['error'] != UPLOAD_ERR_OK)
	{
    	switch($_FILES['uploadfile']['error'])
    	{
        	case UPLOAD_ERR_INI_SIZE: 
            	die('The upload file exceeds the upload_max_filesize directive in php.ini');
        	break;
        	case UPLOAD_ERR_FORM_SIZE:
            	die('The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.');
	        break;
	        case UPLOAD_ERR_PARTIAL: 
	            die('The uploaded file was only partially uploaded.');
	        break;
	        case UPLOAD_ERR_NO_FILE: 
	            die('No file was uploaded.');
	        break;
	        case UPLOAD_ERR_NO_TMP_DIR:
	            die('The server is missing a temporary folder.');
	        break;
	        case UPLOAD_ERR_CANT_WRITE:
	            die('The server failed to write the uploaded file to disk.');
	        break;
	        case UPLOAD_ERR_EXTENSION: 
	            die('File upload stopped by extension.');
	        break;
	    }
	}
?>