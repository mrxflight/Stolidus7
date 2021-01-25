<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "/uploads/" . basename($_FILES["fileToUpload"]["name"]))){
    echo "File Upload succeded";
}
else {
    echo "File Upload failed";
    echo $_FILES['fileToUpload']['error'];
}
?>