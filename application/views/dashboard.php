<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?php echo $this->session->userdata('username'); ?>!</h2>
    <p><a href="<?php echo site_url('auth/logout'); ?>">Logout</a></p>
</body>
</html>
