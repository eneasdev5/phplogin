<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="src/views/css/home.css" rel="stylesheet" type="text/css">
    <style>
        .message {
            text-indent: 50px;
            border-bottom: rgb(0, 0, 0);
        }

        .background-yellow {
            background-color: yellow;
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="login">
        <h1>Login</h1>
        <div class="">
            <?= (isset($message)) ? "<p class='background-yellow message'>$message</p>" : '' ?>
        </div>
        <form action="<?= uri('user-auth') ?>" method="post">
            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username" placeholder="Username" id="username" required>
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Password" id="password" required>

            <input type="submit" value="Login">

        </form>
    </div>
</body>

</html>