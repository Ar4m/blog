
<header>
	<nav class="light-blue">
		<div class="container">
			<div class="nav-wrapper">

				<a href="<?=ROOT_URL?>blog_index.html" class="brand-logo">Blog</a>

				<ul class="right hide-on-med-and-down">

					<li class="<?php echo ($_GET['a']=="index")?"active" : ""; ?>"><a href="<?=ROOT_URL?>blog_index.html">Accueil</a></li>
					<li class="<?php echo ($_GET['a']=="test")?"active" : ""; ?>"><a href="<?=ROOT_URL?>blog_index.html">Catégories</a></li>

					<?php if (empty($_SESSION['is_admin']) && empty($_SESSION['is_user'])): ?>
					<li><a href="<?=ROOT_URL?>blog_login.html" class="btn green waves-effect waves-light">Connexion</a></li>
					<?php endif ?>

					<?php if (!empty($_SESSION['is_admin'])): ?>
					<li class="<?php echo ($_GET['a']=="dashboard")?"active" : ""; ?>"><a href="<?=ROOT_URL?>admin_dashboard.html"><i class="material-icons">dashboard</i></a></li>
					<?php endif ?>

					<?php if (!empty($_SESSION['is_admin'])): ?>
					<li class="<?php echo ($_GET['a']=="edit")?"active" : ""; ?>"><a href="<?=ROOT_URL?>admin_edit.html"><i class="material-icons">edit</i></a></li>
					<?php endif ?>

					<?php if (!empty($_SESSION['is_admin']) || !empty($_SESSION['is_user'])): ?>
					<li><a href="<?=ROOT_URL?>?p=blog&amp;a=logout" class="btn red waves-effect waves-light">Déconnexion</a></li>
					<?php endif ?>
				</ul>

			</div>
		</div>
	</nav>
</header>
