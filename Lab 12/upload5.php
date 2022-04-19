<?php
if(isset($_POST['submit'])){
$allowed_types = array('jpg', 'txt');

if(!empty(array_filter($_FILES['ff']['name']))) {

foreach ($_FILES['ff']['tmp_name'] as $key => $value) {
             
            $file_tmpname = $_FILES['ff']['tmp_name'][$key];
            $file_name = $_FILES['ff']['name'][$key];
            $file_size = $_FILES['ff']['size'][$key];
	    $file_type = $_FILES['ff']['type'][$key];
	    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
	    $filepath = "C:/xampp/htdocs/uploads/".$file_name;

	    if(in_array(strtolower($file_ext), $allowed_types)) {
		if( move_uploaded_file($file_tmpname, $filepath)) {
                        echo "{$file_name} successfully uploaded <br />";
                    }
                    else {                    
                        echo "Error uploading {$file_name} <br />";
                    }
	    }
}
}
else {
                echo "Error uploading ";
}}
else {
        echo "No files selected.";
}



?>