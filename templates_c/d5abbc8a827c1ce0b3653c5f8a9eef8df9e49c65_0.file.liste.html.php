<?php
/* Smarty version 3.1.30, created on 2018-04-12 19:52:35
  from "C:\xampp\htdocs\gestionStockSamanemvc\view\produit\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acf9ce3e064c1_62572433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5abbc8a827c1ce0b3653c5f8a9eef8df9e49c65' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gestionStockSamanemvc\\view\\produit\\liste.html',
      1 => 1523555550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acf9ce3e064c1_62572433 (Smarty_Internal_Template $_smarty_tpl) {
?>
    ²²<html>
	<head>
		<meta charset="UTF-8">
		<title>page liste</title>
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
					<?php if (isset($_smarty_tpl->tpl_vars['produits']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['produits']->value != null) {?>
							<table class="table table-bordered table-stripped">
								<tr>
									<th>Identifiant</th>
									<th>Libele</th>
									<th>Quantite Stock</th>
									<th>Action</th>
									<th>Action</th>
								</tr>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['produits']->value, 'produit');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['produit']->value) {
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['produit']->value['idP'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['produit']->value['libP'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['produit']->value['qtStock'];?>
</td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
produit/delete/<?php echo $_smarty_tpl->tpl_vars['produit']->value['idP'];?>
">Supprimer</a></td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
produit/edit/<?php echo $_smarty_tpl->tpl_vars['produit']->value['idP'];?>
">Editer</a></td>
									</tr>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</table>
						<?php } else { ?>
							Liste vide
						<?php }?>
					<?php }?>
				</div>
				<a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
produit/add">Ajout d'un produit</a>
			</div>
		</div>
		
	</body>
</html>
<?php }
}
