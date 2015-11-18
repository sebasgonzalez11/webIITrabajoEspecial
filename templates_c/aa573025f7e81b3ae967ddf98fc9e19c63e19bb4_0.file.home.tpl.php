<?php /* Smarty version 3.1.24, created on 2015-11-18 01:27:51
         compiled from "./templates/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1942403864564bc607796f52_53300720%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa573025f7e81b3ae967ddf98fc9e19c63e19bb4' => 
    array (
      0 => './templates/home.tpl',
      1 => 1446064665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1942403864564bc607796f52_53300720',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_564bc60779f617_86921617',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564bc60779f617_86921617')) {
function content_564bc60779f617_86921617 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1942403864564bc607796f52_53300720';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div id="contenedor">
  <!--Carousel-->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="photoSlider" src="image/fotoportada.jpg" alt="DADANT">
        <div class="container">
          <div class="carousel-caption">
          </div>
        </div>
      </div>
      <div class="item">
        <img class="photoSlider" src="image/logoPortada.jpg" alt="DADANT">
        <div class="container">
          <div class="carousel-caption">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-*">
    <p class="textoportada">Dadant S.A. logró expandirse rápidamente en los últimos años, no sólo por la imagen de responsabilidad y profesionalismo
      de nuestros productos sino también gracias a nuestro permanente compromiso de servicio y calidad.</p>
    </div>
    <div class="col-sm-* box">
      <h3 class="titulo">Beneficios Nutricionales de nuestra Miel</h3>
      <ul class="beneficios">
        <li>Es un <span>edulcorante totalmente natural</span>. en la antigüedad era el único.</li>
        <li>Es un alimento de alto poder energético que proporciona más de 3000 cal/gr.</li>
        <li>Posee mayor poder edulcorante que el azúcar, con <span>un 40% menos de calorías</span> a iguales cantidades.</li>
        <li>Es de fácil asimilación debido a que posee hidratos de carbono de cadenas cortas. Es una <span>fuente
          de energía rápida.</span></li>
          <li>Mejora el rendimiento físico, especialmente, en los deportistas.</li>
          <li>Facilita la digestión y metabolización de otros alimentos: en el caso de los niños <span>facilita la metabolización
            de calcio y magnesio.</span></li>
          </ul>
        </div>
      </div>
      <?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>