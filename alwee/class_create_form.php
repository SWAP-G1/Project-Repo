<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>
    <link rel="stylesheet" href="alweestyles.css"> <!-- Link to your CSS file -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Nunito+Sans:wght@400&family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<body>

    <div class="navbar">
        <div class="navbar-brand">
            <img src="logo.png" alt="XYZ Polytechnic Logo" class="school-logo">
            <h1>XYZ Polytechnic Management</h1>
        </div>
        <nav>
            <a href="#">Home</a>
            <a href="#">Logout</a>
        </nav>
    </div>

    <div class="container">
        <div class="card">
            <h2>Class Management</h2>
            <p>Add, update, and organize class records.</p>
        </div>

        <div class="card">
            <h3>Class Details</h3>
            <form method="POST" action="class_create.php">
                <div class="form-group">
                    <label class="label" for="class_code">Class Code</label>
                    <input type="text" name="class_code" placeholder="Enter Class code" required>
                </div>
                <div class="form-group">
                    <label class="label" for="course_code">Course Code</label>
                    <input type="text" name="course_code" placeholder="Enter Course Code" required>
                </div>
                <div class="form-group">
                    <label class="label" for="class_type">Class Type</label>
                    <select name="class_type" required>
                        <option value="" disabled selected>Select a Class Type</option>
                        <option value="Semester">Semester</option>
                        <option value="Term">Term</option>
                    </select>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>

        <div class="card">
            <h3>Class Records</h3>
            <?php
            $con = mysqli_connect("localhost", "root", "", "xyz polytechnic"); // Connect to the database
            if (!$con) {
                die('Could not connect: ' . mysqli_connect_errno()); // Return error if connection fails
            }

            // Prepare the statement
            $stmt = $con->prepare("SELECT * FROM class");

            // Execute the statement
            $stmt->execute();

            // Obtain the result set
            $result = $stmt->get_result();

            echo '<table border="1" bgcolor="white" align="center">';
            echo '<tr><th>Class Code</th><th>Course Code</th><th>Class Type</th><th colspan="2">Operations</th></tr>';

            // Extract the data row by row
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['class_code'] . '</td>'; // Corrected column name
                echo '<td>' . $row['course_code'] . '</td>'; // Corrected column name
                echo '<td>' . $row['class_type'] . '</td>'; // Corrected column name
                echo '<td> <a href="class_update_form.php?class_code=' . $row['class_code'] . '">Edit</a> </td>';
                echo '<td> <a href="class_delete.php?class_code=' . $row['class_code'] . '">Delete</a> </td>';
                echo '</tr>';
            }

            echo '</table>';

            // Close the database connection
            $con->close();
            ?>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2024 XYZ Polytechnic Student Management System. All rights reserved.</p>
    </footer>

</body>
</html>
