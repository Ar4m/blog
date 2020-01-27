<?php if(!empty($_SESSION['is_admin'])): ?>

  <a href="<?=ROOT_URL?>admin_editPost_<?=$oPost->id?>.html"><button>Modifier</button></a>
  <a href="<?=ROOT_URL?>admin_delete_<?=$oPost->id?>.html"><button>Supprimer</button></a>

<?php endif ?>
