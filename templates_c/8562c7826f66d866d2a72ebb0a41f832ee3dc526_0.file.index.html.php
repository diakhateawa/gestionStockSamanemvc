<?php
/* Smarty version 3.1.30, created on 2020-04-16 01:34:58
  from "C:\xampp\htdocs\mesprojets\gestionStockSamanemvc\view\accueil\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5e979a221024a2_46392288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8562c7826f66d866d2a72ebb0a41f832ee3dc526' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mesprojets\\gestionStockSamanemvc\\view\\accueil\\index.html',
      1 => 1523554098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e979a221024a2_46392288 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>page d'accueil</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<!-- integration de javascript dans le moteur de rendu de vue Smarty -->
		
			<?php echo '<script'; ?>
 language=javascript>
			 function load_design() {
			   document.getElementById("design_js").style.color = "#40007d";
			 }

			<?php echo '</script'; ?>
>
		
	</head>
	<body onload="load_design()">
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
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />
		
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:160px;">
			<div class="panel panel-info">
				<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="panel-body">
					<div class="alert alert-success" style="font-size:18px; text-align:justify;">
						Merci, l'équipe samanemvc vous remercie :) : 
						je vous ai préparé un CRUD qui marche, il suffit tout simplement d'importer
						la base de données qui se trouve dans le dossier view puis test (view/test);
						cette base s'appelle samane_test.sql et elle comporte une seule table nommée test.
						ça vous sera très utile j'espère.
						<br/>Et surtout noubliez pas de configurer votre base de données : ou? Dans le dossier config
						puis éditez le fichier database.php. Mettez à on l'etat de la base! Bon code!!!!  :)
					</div>
					<div id="design_js">MODELE DEVELOPPE PAR Ngor SECK ! <h1>Version 1.0.3</h1></div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php }
}
