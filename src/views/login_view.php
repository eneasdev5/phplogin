<?= $this->layout('template', ['title' => $title]) ?>

<?= $this->start('navbar') ?>


<?= $this->stop() ?>


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