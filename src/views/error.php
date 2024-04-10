<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Error Page</title>
    <link href="<?= ROOT ?>/src/views/css/dashboad.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body class="loggedin">

    <div class="content">
        <h1>Error:</h1>
        <p>
            <span>Status code: </span><?= (isset($errcode)) ? $errcode : "Bad Request" ?>
        </p>

</body>

</html>