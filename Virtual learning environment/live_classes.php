<?php
include 'db_connect.php';
session_start();

$query = "SELECT * FROM classes";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Classes</title>
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
        <h1>Live Classes</h1>
        <table>
            <tr>
                <th>Class Name</th>
                <th>Date</th>
                <th>Time</th>
                <th>Join Link</th>
            </tr>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['class_name'] . "</td>";
                    echo "<td>" . $row['class_date'] . "</td>";
                    echo "<td>" . $row['class_time'] . "</td>";
                    echo "<td><a href='join_class.php?class_id=" . $row['id'] . "'>Join</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No classes available.</td></tr>";
            }
            ?>
        </table>
    </section>

    <footer>
        <p>&copy; 2024 Virtual Learning Environment. All Rights Reserved.</p>
    </footer>
</body>
</html>
