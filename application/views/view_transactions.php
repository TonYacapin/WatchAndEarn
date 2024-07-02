<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Transactions</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #2c3e50;
            color: #ecf0f1;
        }
        header, footer {
            background-color: #34495e;
            color: #ecf0f1;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            font-size: 32px;
            font-weight: bold;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #7f8c8d;
        }
        th {
            background-color: #34495e;
        }
        .alert-success, .alert-error {
            padding: 10px;
            border-radius: 3px;
            margin-top: 20px;
        }
        .alert-success {
            background-color: #27ae60;
        }
        .alert-error {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

<header class="text-center py-4">
    <h1>Transactions</h1>
</header>

<div class="container mt-10">
    <div class="max-w-md mx-auto bg-gray-800 p-8 border border-gray-700 rounded-lg shadow-lg text-center">
        <h2>Your Transactions</h2>
        <table class="text-left">
            <thead>
                <tr>
                    <th>Points</th>
                    <th>Cash Amount</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($transactions)): ?>
                    <?php foreach($transactions as $transaction): ?>
                        <tr>
                            <td><?php echo $transaction->points; ?></td>
                            <td><?php echo $transaction->cash_amount; ?></td>
                            <td><?php echo date('Y-m-d', strtotime($transaction->created_at)); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3" class="text-center">No transactions found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<footer class="text-center py-4 mt-10">
    <p>&copy; 2024 WatchAndEarn All Rights Reserved</p>
</footer>

</body>
</html>
