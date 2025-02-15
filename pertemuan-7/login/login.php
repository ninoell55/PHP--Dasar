<?php

if (isset($_POST["submit"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "admin123") {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
</head>

<body>

    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Password atau Username salah!</p>
    <?php endif; ?>

    <h1>Login Admin</h1>

    <ul>
        <form method="POST" action="">
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <button type="submit" name="submit">Login</button>
        </form>
    </ul>

</body>

</html>