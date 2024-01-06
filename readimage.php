<?php
// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Image upload handling
if (isset($_POST["submit"])) {
    $image = $_FILES['image']['tmp_name'];
    $imageContent = addslashes(file_get_contents($image));
    $sql = "INSERT INTO images (name, image_data) VALUES ('" . $_FILES['image']['name'] . "', '$imageContent')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Image uploaded successfully.";
    } else {
        echo "Error uploading image: " . $conn->error;
    }
}

// Retrieve image from the database and display 
$sql = "SELECT image_data FROM images WHERE id = 1"; // Change 'id' to the desired image ID
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    header("Content-type: image/*"); // Set appropriate content type based on image type 
    echo $row['image_data'];
} else {
    echo "Image not found.";
}

$conn->close();
?>

<!-- HTML form for image upload -->
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image" />
    <input type="submit" value="Upload" name="submit" />
</form>
