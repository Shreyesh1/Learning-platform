<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h1>Register</h1>
        <form action="register_process.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Register</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Virtual Learning Environment. All Rights Reserved.</p>
    </footer>
</body>
</html>
