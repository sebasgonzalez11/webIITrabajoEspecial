<?php /* Smarty version 3.1.24, created on 2015-11-18 01:36:03
         compiled from "./templates/contacto.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1298042491564bc7f332a646_75157124%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17d78304023c9278079273a8ff763f18c03382b6' => 
    array (
      0 => './templates/contacto.tpl',
      1 => 1447806959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1298042491564bc7f332a646_75157124',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_564bc7f33483b2_05878658',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564bc7f33483b2_05878658')) {
function content_564bc7f33483b2_05878658 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1298042491564bc7f332a646_75157124';
?>

<section class="col-sm-*">
	<div class="contacto"><p>En <span>DADANT</span> nos interesa mucho tu opinión.
		Déjanos sugerencias o comentarios a través de nuestro formulario de contacto.</p>
	</div>
	<form class="form-horizontal" action=”contacto.php” method=”post”>
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputEmail3" name="nombre"placeholder="John Snow">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">eMail</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="inputPassword3" name="email" placeholder="js-lordcommander@nights-watch.com">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Comentarios</label>
			<div class="col-sm-10">
				<input type="text" class="form-control comentarios" name="mensaje" placeholder="Winter is Coming...">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default botoncontacto">Enviar</button>
			</div>

		</div>
	</form>
</section>
<div class="imgcontacto">
	<img src="image/mail.png" alt="Abeja"/>
</div>
<?php }
}
?>