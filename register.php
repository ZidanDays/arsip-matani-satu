<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="registration-container">
        <h2>Register</h2>
        <form action="registration_process.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Name:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <div class="form-group">
                <label for="foto">Photo:</label>
                <input type="file" id="foto" name="foto" required>
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>

</html>