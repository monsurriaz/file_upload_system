<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        // if (isset($_POST['submit'])) {
        //     echo $name = $_FILES['files']['name'] . "<br>"; // superglobal is a associative array. so we need to pass array key to echo value. here files is a key.
        //     echo $name = $_FILES['files']['type'] . "<br>";
        //     echo $tem_location = $_FILES['files']['tmp_name'] . "<br>";
        //     echo $error = $_FILES['files']['error'] . "<br>";
        // }

    ?>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>