<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card p-4 shadow-lg">
            <h1 class="text-center">Welcome, <?php echo $_SESSION['username']; ?>!</h1>
            <div class="text-center mt-3">
                <a href="./index.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
