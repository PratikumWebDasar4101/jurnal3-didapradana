<?php  

$target_dir = "gmbr/"; 
$target_file = $target_dir . basename($_FILES["UploadFile"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


    if (move_uploaded_file($_FILES["UploadFile"]["tmp_name"], $target_file)) {
        echo "File : ". basename( $_FILES["UploadFile"]["name"]). " berhasil di upload.";
        $nama_file = basename( $_FILES["UploadFile"]["name"]);
    } else {
        echo "Maaf Error saat Upload";
    }


?>
<br><br>
<img src="gmbr/<?php echo"$nama_file"; ?>">
