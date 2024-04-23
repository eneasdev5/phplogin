<?= $this->layout('template', ['title' => $title]) ?>

<div class="content">
    <h1>Error:</h1>
    <p>
        <span>Status code: </span><?= (isset($errcode)) ? $errcode : "Bad Request" ?>
    </p>
</div>