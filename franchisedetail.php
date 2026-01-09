<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
<?php
// Simple admin panel to list all franchise (student_details) records

$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'form';

$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset('utf8');

$sql = "SELECT id, name, email, phone, city, budget, worth, message FROM franchise";
$result = $conn->query($sql);
?>

<div style="max-width:1000px;margin:20px auto;font-family:Arial,Helvetica,sans-serif;">
    <h2 style="text-align:center;">Franchise / Enquiry Details (Admin)</h2>
    <?php if ($result && $result->num_rows > 0): ?>
        <table border="1" cellpadding="8" cellspacing="0" style="width:100%;border-collapse:collapse;">
            <thead style="background:#f2f2f2;">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>Budget</th>
                    <th>Worth</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['id']); ?></td>
                    <td><?php echo htmlspecialchars($row['name']); ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo htmlspecialchars($row['phone']); ?></td>
                    <td><?php echo htmlspecialchars($row['city']); ?></td>
                    <td><?php echo htmlspecialchars($row['budget']); ?></td>
                    <td><?php echo htmlspecialchars($row['worth']); ?></td>
                    <td><?php echo htmlspecialchars($row['message']); ?></td>
                </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p style="text-align:center;padding:20px;background:#fff6f0;border:1px solid #ffd1b3;">No records found.</p>
    <?php endif; ?>

    <p style="text-align:center;margin-top:12px;"><a href="home.php">Back to site</a></p>
</div>

<?php
$conn->close();
?>
</body>
</html>