<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER REGISTRATION</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container d-flex flex-column justify-content-center align-items-center vh-100 text-center">
        <h2 class="text-primary">User Registration</h2>
        
        <div class="card shadow-sm p-4 w-50">
            <form action="process_registration.php" method="POST">
                <div class="mb-3">
                    <label for="names" class="form-label">Full Name:</label>
                    <input type="text" id="names" name="names" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>

        <p class="mt-3">
            <a href="index.php" class="btn btn-link">Back to Home</a>
        </p>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
