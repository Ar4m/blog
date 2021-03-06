<?php require 'inc/header.php' ?>
<?php require 'inc/topbar.php' ?>
<main>
  <div class="container">
    <h1 class="page-title">Liste des articles</h1>
    <?php foreach ($this->oPosts as $oPost): ?>
      <div class="row">
        <hr>
  			<div class="col s12 m12 l12">
  				<h4><?= $oPost->title ?></h4>
  				<div class="row">
  					<div class="col s12 m6 l8">
              <!-- On affiche les premiers caractères et on affiche pas les images -->
  						<?= preg_replace("/<img[^>]+\>/i", "", nl2br(mb_strimwidth($oPost->body, 0, 400, '...'))); ?>
              <br><br>
              <?php require 'inc/control_buttons.php' ?>
  					</div>
  					<div class="col s12 m6 l4"><br/><br/>
  				  	<a class="btn light-blue waves-effect waves-light" href="<?=ROOT_URL?>blog_post_<?=$oPost->id?>.html">Lire l'article</a>
  					</div>
  				</div>
  			</div>
  		</div>
    <?php endforeach ?>
  </div>
</main>
<?php require 'inc/footer.php' ?>
