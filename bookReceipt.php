<?php
session_start();
require('connection.php');

// Example: get by last CIN or email — adjust as needed
$stmt = $pdo->prepare("SELECT * FROM appointment ORDER BY id DESC LIMIT 1");
$stmt->execute();
$data = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$data) {
    echo "No appointment found.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Appointment Receipt</title>
    <style>
              body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        
        .receipt-container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 30px;
            margin-bottom: 20px;
        }
        
        .header {
            text-align: center;
            border-bottom: 2px solid #007bff;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        
        .header h1 {
            color: #007bff;
            margin: 0;
            font-size: 2em;
        }
        
        .receipt-id {
            color: #666;
            font-size: 0.9em;
            margin-top: 5px;
        }
        
        .details-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .detail-group {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 6px;
            border-left: 4px solid #007bff;
        }
        
        .detail-group h3 {
            margin: 0 0 15px 0;
            color: #333;
            font-size: 1.1em;
        }
        
        .detail-item {
            margin-bottom: 10px;
        }
        
        .detail-label {
            font-weight: bold;
            color: #555;
            display: inline-block;
            min-width: 80px;
        }
        
        .detail-value {
            color: #333;
        }
        
        .travel-details {
            background: #e8f4ff;
            padding: 15px;
            border-radius: 6px;
            margin: 20px 0;
            border-left: 4px solid #007bff;
        }
        
        .actions {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        
        .btn {
            background: #007bff;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            margin: 5px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s;
        }
        
        .btn:hover {
            background: #0056b3;
        }
        
        .btn-secondary {
            background: #6c757d;
        }
        
        .btn-secondary:hover {
            background: #545b62;
        }
        
        .error {
            background: #f8d7da;
            color: #721c24;
            padding: 15px;
            border-radius: 6px;
            border: 1px solid #f5c6cb;
            margin: 20px 0;
        }
        
        @media print {
            body {
                background: white;
                margin: 0;
                padding: 0;
            }
            
            .receipt-container {
                box-shadow: none;
                border: 1px solid #ddd;
            }
            
            .actions {
                display: none;
            }
        }
        
        @media (max-width: 600px) {
            .details-grid {
                grid-template-columns: 1fr;
            }
            
            body {
                padding: 10px;
            }
            
            .receipt-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
   <h2>Appointment Receipt</h2>
<table border="1" cellpadding="8" cellspacing="0">
    <tr>
        <th>Name</th>
        <td><?= htmlspecialchars($data['firstName'] . ' ' . $data['lastName']) ?></td>
    </tr>
    <tr>
        <th>Age</th>
        <td><?= $data['age'] ?></td>
    </tr>
    <tr>
        <th>CIN</th>
        <td><?= $data['cin'] ?></td>
    </tr>
    <tr>
        <th>Gender</th>
        <td><?= $data['gender'] ?></td>
    </tr>
    <tr>
        <th>From</th>
        <td><?= $data['destinationFrom'] ?></td>
    </tr>
    <tr>
        <th>To</th>
        <td><?= $data['destinationTo'] ?></td>
    </tr>
    <tr>
        <th>Details</th>
        <td><?= nl2br($data['travelDetails']) ?></td>
    </tr>
    <tr>
        <th>Date</th>
        <td><?= $data['rdvDate'] ?></td>
    </tr>
    <tr>
        <th>Time</th>
        <td><?= $data['rdvTime'] ?></td>
    </tr>
    <tr>
        <th>Phone</th>
        <td><?= $data['phone'] ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?= $data['email'] ?></td>
    </tr>
</table>


    <!-- PDF download button -->
    <form action="downloadReceipt.php" method="post" target="_blank">
        <?php foreach ($data as $key => $value): ?>
            <input type="hidden" name="<?= htmlspecialchars($key) ?>" value="<?= htmlspecialchars($value) ?>">
        <?php endforeach; ?>
        <button type="submit">Download PDF</button>
    </form>
</body>
</html>
