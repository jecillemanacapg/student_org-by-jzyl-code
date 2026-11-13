<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION['organization'] = [
        'fullname' => $_POST['fullname'],
        'email' => $_POST['email'],
        'gender' => $_POST['gender'],
        'course' => $_POST['course']
    ];

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>

<head>
    <title>Registration Page</title>

    <link rel="icon" type="image/x-icon" href="bcc.jpg">
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <header>
        <img src="som.png" alt="Banner Image">
    </header>

    <main>
        <section>
            <h2>SIGN IN HERE</h2>

            <form id="regForm" action="login.php" method="POST">

                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="">Select</option>
                    <option>Female</option>
                    <option>Male</option>
                    <option>Other</option>
                </select>

                <label for="course">Select Year Level:</label>
                <select id="course" name="course" required>
                    <option value="">Select</option>
                    <option>First Year</option>
                    <option>Second Year</option>
                    <option>Third Year</option>
                    <option>Fourth Year</option>
                </select>

                <button type="submit" class="submit-btn">
                    Submit
                </button>

            </form>
        </section>
    </main>

    <script>
        window.onload = function () {
            alert("Welcome to STUDENT ORGANIZATION MANAGEMENT SYSTEM");
        };
    </script>

</body>

</html>