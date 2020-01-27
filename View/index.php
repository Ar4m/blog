<?php require 'inc/header.php' ?>
<?php require 'inc/topbar.php' ?>

<main>
  <div class="container">
    <?php if (empty($this->oPosts)): ?>
        <h1>Il n'y a aucun article.</h1>
        <p><button type="button" onclick="window.location='<?=ROOT_URL?>admin_add.html'" class="btn waves-effect waves-light">Ajoutez votre premier article!</button></p>
    <?php else: ?>
    <h1 class="page-title">Articles</h1>
    <div class="row">

      <!-- ARTICLES -->
      <?php foreach ($this->oPosts as $oPost): ?>
        <div class="col l6 m6 s12">
          <div class="card hoverable">
            <div class="card-content">
              <h5><a class="grey-text text-darken-2" href="<?=ROOT_URL?>blog_post_<?=$oPost->id?>.html"><?=htmlspecialchars($oPost->title)?></a></h5>
              <h6 class="grey-text">Le <?=date('d/m/Y à H:i', strtotime($oPost->createdDate));?></h6>
            </div>
            <div class="card-content">
              <?= preg_replace("/<img[^>]+\>/i", "", nl2br(mb_strimwidth($oPost->body, 0, 110, '...'))); ?>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</main>
<?php endif ?>
<?php require 'inc/footer.php' ?>
