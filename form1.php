<?php 
include("config.php");

if(isset($_POST['register'])) {
    $title = $_POST["title"];
    $name = $_POST["name"];
    $image = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];
    echo $title , $name , $image;
    die();

    if (!empty($title) && !empty($name) && !empty($image)) {
        $insert = "INSERT INTO `bgimage` (`title`, `name`, `image`) VALUES ('$title', '$name', '$image')";
        
        // Use prepared statements to prevent SQL injection
        $result = mysqli_query($connection, $insert);
      
        move_uploaded_file($tmp_name, 'admin/upload/' . $image);

        // Check if the query was successful
        if ($result) {
            echo 'Product added successfully';
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    }
}
?>
