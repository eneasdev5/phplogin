<?= $this->layout('template', ['title' => $title]) ?>

<div class="content">
    <h2>Home Page</h2>
    <p>Welcome back, <?= htmlspecialchars($_SESSION['name'], ENT_QUOTES) ?>!</p>
</div>