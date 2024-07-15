
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Signup</title>
</head>
<body>
    <form action="signup.php" method="post">
        <h2>SIGN UP</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo htmlspecialchars($_GET['error']); ?></p>
        <?php } ?>
        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo htmlspecialchars($_GET['success']); ?></p>
        <?php } ?>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="User Name"><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>
        <label>Confirm Password</label>
        <input type="password" name="re_password" placeholder="Confirm Password"><br>
        <br>
        <button type="submit">Signup</button>
        <a href="index.php" class="ca">Already have an account?</a>
    </form>
</body>
</html>
