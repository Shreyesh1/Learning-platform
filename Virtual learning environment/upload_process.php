<?php
include 'db_connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $title = $_POST['title'];
    $uploaded_by = $_SESSION['user_id'];

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $valid_filetypes = array("pdf", "doc", "docx", "ppt", "pptx", "txt");
    if (!in_array($fileType, $valid_filetypes)) {
        echo "Sorry, only PDF, DOC, DOCX, PPT, PPTX, TXT files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 1 && move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        $query = "INSERT INTO resources (title, file_path, uploaded_by) VALUES ('$title', '$target_file', '$uploaded_by')";
        if (mysqli_query($conn, $query)) {
            echo "The file ". htmlspecialchars(basename($_FILES["file"]["name"])). " has been uploaded.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
