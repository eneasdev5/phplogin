<?= $this->layout('template', ['title' => $title]) ?>

<?= $this->start('navbar') ?>
<nav class="navtop">
    <div>
        <h1>Website Title</h1>
        <a href="<?= uri('dashboard') ?>"><i class="fas fa-user-circle"></i>Dashboard</a>
        <a href="<?= uri("logout") ?>"><i class="fas fa-sign-out-alt"></i>Logout</a>
    </div>
</nav>

<?= $this->stop() ?>
<div class="content">
    <h2>Profile Page</h2>
    <div>
        <p>Your account details are below:</p>
        <table>
            <tr>
                <td>Username:</td>
                <td><?= htmlspecialchars($user->username, ENT_QUOTES) ?></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><?= htmlspecialchars($user->password, ENT_QUOTES) ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?= htmlspecialchars($user->email, ENT_QUOTES) ?></td>
            </tr>
        </table>
    </div>
</div>