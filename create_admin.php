<?php
// Database connection details
$hostname = 'localhost';
$username = 'root';
$password = 'root';
$database = 'dbwatchandearn';

// Database connection
$db = new mysqli($hostname, $username, $password, $database);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Helper function to hash the password
function hash_password($password) {
    return password_hash($password, PASSWORD_BCRYPT);
}

// Admin user details
$admin_username = 'admin';
$admin_password = 'admin';
$hashed_password = hash_password($admin_password);
$role = 'admin';

// Check if the admin user already exists
$query = "SELECT * FROM users WHERE username = 'admin'";
$result = $db->query($query);

if ($result->num_rows > 0) {
    echo "Admin user already exists.";
} else {
    // Insert admin user into the database
    $stmt = $db->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $admin_username, $hashed_password, $role);

    if ($stmt->execute()) {
        echo "Admin user created successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$db->close();
?>
