<?php require 'inc/header.php' ?>
<?php require 'inc/topbar.php' ?>

<main>
    <div class="container">

        <!-- Article -->

        <?php if (empty($this->oPost)): ?>
            <h1>cet article n'existe pas !</h1>
        <?php else: ?>

            <article>
                <time datetime="<?=$this->oPost->createdDate?>" pubdate="pubdate"></time>

                <h1><?=htmlspecialchars($this->oPost->title)?></h1>
                <p><?=nl2br($this->oPost->body)?></p>
            </article>
            <hr>
            <p><em>Posté le <?=date('d/m/Y à H:i', strtotime($this->oPost->createdDate));?></em></p>
            <br>
        <?php endif ?>
    </div>
</main>
<?php require 'inc/footer.php' ?>
