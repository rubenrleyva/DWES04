<?php
/* Smarty version 3.1.30, created on 2018-03-21 13:06:06
  from "C:\Users\RubenRL\OneDrive\Curso17-18\DAW\DWES\Unidad 4\TareaBuena1\smarty\templates\pagarrecibo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab24aae877aa8_23146995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de9ba01884a177f5e17fd8d92b10eb8aa19813e5' => 
    array (
      0 => 'C:\\Users\\RubenRL\\OneDrive\\Curso17-18\\DAW\\DWES\\Unidad 4\\TareaBuena1\\smarty\\templates\\pagarrecibo.tpl',
      1 => 1521631487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:smarty/templates/banca.tpl' => 1,
    'file:smarty/templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ab24aae877aa8_23146995 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Menú principal del Cliente/Usuario -->
<?php $_smarty_tpl->_subTemplateRender("file:smarty/templates/banca.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                     
    
    <fieldset>
        <legend align="center">Pagar Recibo</legend>
        <form action='pagarecibo.php' method='post'>
            <table id="movimientos">
                <?php if (isset($_smarty_tpl->tpl_vars['pagarRecibo']->value)) {?>
                    <tr><td colspan=2><b><?php echo $_smarty_tpl->tpl_vars['pagarRecibo']->value;?>
</b><br></td></tr>
                <?php }?>          
                <tr><td>Concepto:</td><td><input type=text name=concepto value='<?php if (isset($_smarty_tpl->tpl_vars['concepto']->value)) {
echo $_smarty_tpl->tpl_vars['concepto']->value;
}?>' size=25 maxlength=50></td></tr>
                <tr><td>Cantidad:</td><td><input type=text name=cantidad value='<?php if (isset($_smarty_tpl->tpl_vars['cantidad']->value)) {
echo $_smarty_tpl->tpl_vars['cantidad']->value;
}?>'size=25></td></tr>
                <tr><td>Fecha:</td><td><input type=date name=fecha  value='' size=10 maxlength=10></td></tr>
                <tr><td colspan=2><i>Por favor, ingrese los datos solicitados y haga clic en el botón ingresar. Todos los campos son obligatorios.</i></td></tr>
                <tr><td colspan=2><input type=submit  class=button name=pagar value='Pagar' /></td>
            </table> 
        </form>
    </fieldset>
                
<!-- Footer -->     
<?php $_smarty_tpl->_subTemplateRender("file:smarty/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
