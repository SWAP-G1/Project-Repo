<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> <!-- Link to the CSS file -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Nunito+Sans:wght@400&family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Student Dashboard</title>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-brand">
            <img src="logo.png" alt="XYZ Polytechnic Logo" class="school-logo">
            <h1>Polytechnic Management</h1>
        </div>
        <div class="logout-button">
            <a href="logout.php">Logout</a>
        </div>
    </nav>

    <!-- Student Dashboard Content -->
    <div class="card-grid-container">
    <!-- User Management Widget -->
    <a href="user_management.php" class="widget-card">
        <h2>My Profile</h2>
        <p>View my personal details here.</p>
    </a>

    <!-- Course Management Widget -->
    <a href="course_management.php" class="widget-card">
        <h2>Course Details</h2>
        <p>View my courses and their details here.</p>
    </a>

    <!-- Grades Management Widget -->
    <a href="grades_management.php" class="widget-card">
        <h2>Grades</h2>
        <p>View my grades here.</p>
    </a>
</div>

    <!-- Footer -->
<footer class="footer">
    <p>&copy; 2024 Polytechnic Management. All Rights Reserved.</p>
</footer>
</body>
</html>