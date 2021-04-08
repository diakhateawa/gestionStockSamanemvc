<?php
/* Smarty version 3.1.30, created on 2018-04-12 19:58:39
  from "C:\xampp\htdocs\gestionStockSamanemvc\view\produit\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acf9e4fda0627_15159886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eaf52360c1515c9b5c3972d6a55fded6ea24a7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gestionStockSamanemvc\\view\\produit\\edit.html',
      1 => 1523555908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acf9e4fda0627_15159886 (Smarty_Internal_Template $_smarty_tpl) {
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
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Produit/update">
						<div class="form-group">
							<label class="control-label">ID du Produit</label>
							<input class="form-control" type="text" name="idP" id="idP" value="<?php if (isset($_smarty_tpl->tpl_vars['produit']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['produit']->value['idP'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Libele</label>
							<input class="form-control" type="text" name="libP" id="libP" value="<?php if (isset($_smarty_tpl->tpl_vars['produit']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['produit']->value['libP'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Quantite</label>
							<input class="form-control" type="text" name="qtStock" id="qtStock" value="<?php if (isset($_smarty_tpl->tpl_vars['produit']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['produit']->value['qtStock'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="modifier" value="Modifier"/>
							<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Produit/liste">Retour</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
