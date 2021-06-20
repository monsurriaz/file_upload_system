<?php

if (isset($_POST['submit'])) {
    $file = $_FILES['files'];
    $name = $_FILES['files']['name'];            // find name
    $temp_name = $_FILES['files']['tmp_name'];   // temp location
    $size = $_FILES['files']['size'];            // find file size
    $error = $_FILES['files']['error'];          // find error


    $tempExtension = explode('.', $name);
    $fileExtension = strtolower(end($tempExtension));
    $isAllowedFileType = array('jpg', 'jpeg', 'png', 'pdf');


    if (in_array($fileExtension, $isAllowedFileType)) {
        if ($error === 0) {
            if ($size < 2670500) {
                $newFileName = uniqid("", true) . "." . $fileExtension;
                $folder = "upload/" . $newFileName;
                move_uploaded_file($temp_name, $folder);
                echo "Success!";
                header("Location: files.php?uploadedsuccess");
            } else {
                echo "Your file size too big. Upload less than 2.5 Mb";
            }
        } else {
            echo "Sorry, there was an error, Please try again";
        }
    } else {
        echo "Your file type is not accepted. Please attach jpg, jpeg, png or pdf";
    }
}