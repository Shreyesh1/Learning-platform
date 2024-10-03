<?php
include 'db_connect.php';
session_start();

$query = "SELECT * FROM resources";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shared Resources</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <img src="online-school-logo-learning-logo-design-vector_567288-21.avif" alt="Virtual Learning Logo" class="logo">
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="live_classes.php">Live Classes</a></li>
                <li><a href="view_resources.php">Resources</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h1>Available Resources</h1>
        <ul>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<li><a href='" . $row['file_path'] . "'>" . $row['title'] . "</a></li>";
                }
            } else {
                echo "<li>No resources available.</li>";
            }
            ?>
        </ul>
    </section>

    <footer>
        <p>&copy; 2024 Virtual Learning Environment. All Rights Reserved.</p>
    </footer>
</body>
</html>
