<?php

// Where the file is going to be placed 
$target_path = "uploads/";

/* Add the original filename to our target path.  
Result is "uploads/filename.extension" */
$target_path = $target_path . basename( $_FILES['mylukealike']['name']); 



if(move_uploaded_file($_FILES['mylukealike']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['mylukealike']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}

?>