<?php
session_start();
$error = '';
$username = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    $mysqli = new mysqli("localhost", "root", "", "registerform");
    if ($mysqli->connect_errno) {
        $error = "Connection failed: " . $mysqli->connect_error;
    } else {
        $stmt = $mysqli->prepare("SELECT password FROM registrations WHERE username = ?");
        if ($stmt) {
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->store_result();
            if ($stmt->num_rows > 0) {
                $stmt->bind_result($stored_password);
                $stmt->fetch();
                if ((function_exists('password_verify') && password_verify($password, $stored_password)) || $password === $stored_password) {
                    $_SESSION['username'] = $username;
                    $stmt->close();
                    $mysqli->close();
                    header("Location: home.php");
                    exit();
                } else {
                    $error = 'Invalid password.';
                }
            } else {
                $error = 'Username not found.';
            }
            $stmt->close();
        } else {
            $error = 'Database error: failed to prepare statement.';
        }
        $mysqli->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-image: url(./image/cup-tea.jpg);
        background-size: cover;
         background-position: center;
background-attachment: fixed;
background-repeat: no-repeat;
             color: white;
              font-family: 'Inter', sans-serif; }
        .login-title {
            max-width: 400px;
             margin: 150px auto;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            padding: 50px;
             border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .login-title h3 {
            margin-bottom: 30px;
            font-weight: bold;
            color: #fbbf24;
        }
        .btn-yellow { background: #f59e0b;
             color: black; 
             font-weight: bold; }
        .btn-yellow:hover { background: #d97706; }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-title">
            <h3 class="text-center mb-4">Admin Login</h3>
            <?php if (!empty($error)): ?>
                <div class="alert alert-danger text-center" role="alert"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>
            <form  method="POST">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" required value="<?php echo htmlspecialchars($username); ?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-yellow w-100 mt-3">Sign In</button>
            </form>
        </div>
    </div>
</body>
</html>