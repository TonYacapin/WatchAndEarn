<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php echo validation_errors(); ?>
    <?php echo form_open('auth/login'); ?>
        <label for="username">Username:</label>
        <input type="text" name="username" value="<?php echo set_value('username'); ?>" /><br />
        <label for="password">Password:</label>
        <input type="password" name="password" /><br />
        <button type="submit">Login</button>
    <?php echo form_close(); ?>
    
    <p>Don't have an account? <a href="<?php echo site_url('auth/register'); ?>">Register here</a></p>
    
    <?php if($this->session->flashdata('error')): ?>
        <p><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>
</body>
</html>
