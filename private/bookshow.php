<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: /ra7alat-agency-v3/signIn.php");
    exit;
}

require('connection.php'); // Assumes $pdo is defined here

try {
    $stmt = $pdo->query("SELECT * FROM appointment ORDER BY id DESC");
    $appointments = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error fetching appointments: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Appointments - RA7ALAT Agency</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="webpage icon" href="images/RA7ALAT.png">

    <style>
        body {
            padding: 40px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4">All Travel Appointments</h1>
        
        <?php if (count($appointments) > 0): ?>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Full Name</th>
                            <th>Age</th>
                            <th>CIN</th>
                            <th>Gender</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Details</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Phone</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($appointments as $index => $row): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= htmlspecialchars($row['firstName'] . ' ' . $row['lastName']) ?></td>
                            <td><?= htmlspecialchars($row['age']) ?></td>
                            <td><?= htmlspecialchars($row['cin']) ?></td>
                            <td><?= htmlspecialchars($row['gender']) ?></td>
                            <td><?= htmlspecialchars($row['destinationFrom']) ?></td>
                            <td><?= htmlspecialchars($row['destinationTo']) ?></td>
                            <td><?= nl2br(htmlspecialchars($row['travelDetails'])) ?></td>
                            <td><?= htmlspecialchars($row['rdvDate']) ?></td>
                            <td><?= htmlspecialchars($row['rdvTime']) ?></td>
                            <td><?= htmlspecialchars($row['phone']) ?></td>
                            <td><?= htmlspecialchars($row['email']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else: ?>
            <div class="alert alert-info">No appointments found.</div>
        <?php endif; ?>
    </div>
</body>
</html>
