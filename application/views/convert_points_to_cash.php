<!-- application/views/auth/convert_points_to_cash.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert Points to Cash</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #2c3e50;
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
            color: #ecf0f1;
        }
        .form-input {
            background-color: #34495e;
            border: 1px solid #7f8c8d;
            padding: 10px;
            border-radius: 3px;
            margin-bottom: 10px;
            color: #ecf0f1;
            width: 100%;
        }
        .primary-btn {
            background-color: #1abc9c;
            color: #ecf0f1;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .primary-btn:hover {
            background-color: #16a085;
        }
        .info-box {
            background-color: #2980b9;
            color: #ecf0f1;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-10">
        <h1>Convert Points to Cash</h1>

        <?php
        // Calculate cash amount from points (example logic)
        $points = $user->points;
        $conversion_rate = 0.1; // Example conversion rate: 1 point = 0.1 cash
        $cash_amount = $points * $conversion_rate;
        ?>

        <!-- Display points and calculated cash amount -->
        <div class="info-box">
            <p>Available Points: <?php echo $points; ?></p>
            <p>Possible Cash: <?php echo $cash_amount; ?></p>
        </div>

        <form action="<?php echo site_url('auth/process_conversion'); ?>" method="post">
            <input type="hidden" id="points" name="points" value="<?php echo $points; ?>">
            <label for="account_number">UnionBank Account Number:</label>
            <input type="text" id="account_number" name="account_number" class="form-input" required>

            <button type="submit" class="primary-btn">Convert</button>
        </form>
    </div>
</body>
</html>
