<?php require 'inc/header.php' ?>
<?php require 'inc/topbar.php' ?>

<div class="container">
  <h2>Tableau de bord</h2>
  <div class="row">
    <?php for($i=0;$i<$this->length;$i++): ?>
			<div class="col l3 m3 s12">
				<div class="card">
					<div class="card-content <?= $this->aColors[$i] ?> white-text">
						<span class="card-title"><?= $this->aTableName[$i] ?></span>
						<h4><?= $this->aInTable[$i][0] ?></h4>
					</div>
				</div>
			</div>
    <?php endfor ?>
  </div>

</div>
