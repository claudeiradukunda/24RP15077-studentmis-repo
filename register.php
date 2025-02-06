<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER REGISTRATION</title>
   
</head>
<body>
    <div class="form-container">
        <h2>REGISTRATION FORM</h2>
        <form action="process_registration.php" method="POST">
            <label for="names">Full Name:</label>
            <input type="text" id="names" name="names" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Register</button>
        </form>
        <p><a href="index.php">Back to Home</a></p>
    </div>
</body>
</html>
