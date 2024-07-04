<!DOCTYPE html>
<html>
<head>
    <title>User Transactions</title>
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
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #7f8c8d;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #34495e;
        }
    </style>
</head>
<body>

<header class="text-center py-4">
    <h1>My Transactions</h1>
</header>

<div class="container mt-10">
    <div class="bg-gray-800 p-8 border border-gray-700 rounded-lg shadow-lg">
        <?php if (empty($transactions)) : ?>
            <p>No transactions found.</p>
        <?php else : ?>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Points</th>
                        <th>Cash Amount</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($transactions as $transaction) : ?>
                        <tr>
                            <td><?php echo $transaction->id; ?></td>
                            <td><?php echo $transaction->username; ?></td>
                            <td><?php echo $transaction->points; ?></td>
                            <td><?php echo $transaction->cash_amount; ?></td>
                            <td><?php echo $transaction->created_at; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>

<footer class="text-center py-4 mt-10">
    <p>&copy; 2024 WatchAndEarn All Rights Reserved</p>
</footer>

</body>
</html>
