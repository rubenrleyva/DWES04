<?php
/* Smarty version 3.1.30, created on 2018-03-21 09:11:22
  from "C:\Users\RubenRL\OneDrive\Curso17-18\DAW\DWES\Unidad 4\TareaBuena1\smarty\templates\banca.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab213aa2dcc83_52353317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fd7065b03db12d3a88bd361915bda7c347cccb7' => 
    array (
      0 => 'C:\\Users\\RubenRL\\OneDrive\\Curso17-18\\DAW\\DWES\\Unidad 4\\TareaBuena1\\smarty\\templates\\banca.tpl',
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
function content_5ab213aa2dcc83_52353317 (Smarty_Internal_Template $_smarty_tpl) {
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
