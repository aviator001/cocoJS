<?
    $target = "uploads/"; //make sure to create a folder named 'uploads' and put it in the same directory that upload.php (this script) is in
    $file_name = $_FILES['file']['name'];
    $tmp_dir = $_FILES['file']['tmp_name'];
    move_uploaded_file($tmp_dir, $target . $file_name);
