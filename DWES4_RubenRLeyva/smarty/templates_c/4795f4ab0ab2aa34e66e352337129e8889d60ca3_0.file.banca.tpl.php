<?php
/* Smarty version 3.1.30, created on 2018-03-21 13:23:55
  from "C:\Users\RubenRL\OneDrive\Curso17-18\DAW\DWES\Unidad 4\Rodriguez_Leyva_Ruben_DWES04_Tarea\smarty\templates\banca.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab24edb3728b8_89551267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4795f4ab0ab2aa34e66e352337129e8889d60ca3' => 
    array (
      0 => 'C:\\Users\\RubenRL\\OneDrive\\Curso17-18\\DAW\\DWES\\Unidad 4\\Rodriguez_Leyva_Ruben_DWES04_Tarea\\smarty\\templates\\banca.tpl',
      1 => 1521619878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:smarty/templates/header.tpl' => 1,
    'file:smarty/templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ab24edb3728b8_89551267 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Cabecera-->
<?php $_smarty_tpl->_subTemplateRender("file:smarty/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Menú principal del Cliente/Usuario -->
<div>
    <fieldset>
        <?php if (isset($_smarty_tpl->tpl_vars['nombre']->value)) {?><legend align="center">Bienvenido <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
, última sesión iniciada a las <?php echo $_smarty_tpl->tpl_vars['hora']->value;?>
</legend><?php }?>
        <a href="ultimosmovimientos.php" class="button">Ultimos Movimientos</a>
        <a href="ingresardinero.php" class="button">Ingresar Dinero</a>
        <a href="pagarecibo.php" class="button">Pagar Recibo</a>
        <a href="devolverrecibo.php" class="button">Devolver Recibo</a>
        <a href="preferencias.php" class="button">Preferencias</a>
        <a href="salir.php" class="button">Salir</a>
    </fieldset>
</div>                 
    
<!-- Footer -->    
<?php if (isset($_smarty_tpl->tpl_vars['esta']->value)) {
$_smarty_tpl->_subTemplateRender("file:smarty/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?> <?php }
}
