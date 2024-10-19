<?php
/* if($_FILES['FileUpload']){
    // print_r($_FILES['FileUpload']);
    $fileName = $_FILES['FileUpload']['name'];
    $pathName = $_FILES['FileUpload']['tmp_name'];

    echo $fileName;
    echo "</br>";
    echo $pathName;
} */
$pathIs = $_FILES['FileUpload']['name'];
$uploadPath = './Upload/'.$pathIs;

if(move_uploaded_file($_FILES['FileUpload']['tmp_name'], $uploadPath)){
    echo "File Upload";
}else{
    echo"File Upload Failed"; 
}
?>