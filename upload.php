<?php
$target_dir = "images/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if (isset($_POST['logout'])) 
    {
        header("location: index.php");
        session_destroy();
        exit();
    }
    
if(isset($_POST["submit"]))
{
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if(!$check) 
    {
        echo "File is not an image."; 
        exit();
    }
}

if ($_FILES["fileToUpload"]["size"] > 204800) 
{
    echo "File should not be greater than 200kb";
    exit();
}

if($imageFileType != "jpg" && $imageFileType != "jpeg" ) 
{
    echo "Sorry, only JPG, JPEG files are allowed.";
    exit();
}

$dir = "images/*.*";
$images = glob($dir);
$size=sizeof($images);
if ($size > 10) 
{
    echo "10 image limit reached";
    exit();
}

else 
{
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    echo "Image successfully uploaded";
    exit();
}

?>