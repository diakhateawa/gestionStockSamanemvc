<?php
/* Smarty version 3.1.30, created on 2019-07-25 16:32:53
  from "C:\xampp\htdocs\htc\gestionStockSamanemvc\view\produit\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5d39bd958aea99_24844561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1225a74ce0f394577ba2327b34cdcf4f1be6c0b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\htc\\gestionStockSamanemvc\\view\\produit\\add.html',
      1 => 1523555469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d39bd958aea99_24844561 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>page get id</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<style>
			h1{ 
				color: #40007d;
			}
		</style>
	</head>
	<body>
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />
        <div class="nav navbar navbar-default navbar-fixed-top">
            <ul class="nav navbar-nav">
                <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
produit/liste">Produit</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
produit/getID/1">Entree</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
produit/liste">Sortie</a></li>
            </ul>
        </div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="panel-body">
					<?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
							<div class="alert alert-success">Données ajoutées!</div>
						<?php } else { ?>
							<div class="alert alert-danger">Erreur!</div>
						<?php }?>
					<?php }?>
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
produit/add">
						<div class="form-group">
							<label class="control-label">Libele</label>
							<input class="form-control" type="text" name="libP" id="libP"/>
						</div>
						<div class="form-group">
							<label class="control-label">Quantite</label>
							<input class="form-control" type="number" name="qtStock" id="qtStock"/>
						</div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="valider" value="ENvoyer"/>
							<input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
						</div>
					</form>
				</div>
                <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
produit/liste">Retour </a>
			</div>
		</div>
	</body>
</html><?php }
}
