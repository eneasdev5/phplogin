<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link href="src/views/css/home.css" rel="stylesheet" type="text/css">
    <link href="<?= ROOT ?>/src/views/css/dashboad.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">

</head>

<body class="loggedin">
    <?php if ($this->section('navbar')) : ?>
        <?= $this->section('navbar') ?>
    <?php else : ?>
        <nav class="navtop">
            <div>
                <h1>Website Title</h1>
                <a href="<?= uri('dashboard/profile') ?>"><i class="fas fa-user-circle"></i>Profile</a>
                <a href="<?= uri("logout") ?>"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
        </nav>
    <?php endif; ?>

    <?= $this->section('content') ?>

</body>

</html>