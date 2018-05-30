<?php
/* Smarty version 3.1.30, created on 2018-03-21 13:24:14
  from "C:\Users\RubenRL\OneDrive\Curso17-18\DAW\DWES\Unidad 4\Rodriguez_Leyva_Ruben_DWES04_Tarea\smarty\templates\ingresardinero.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab24eee419648_44940189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f1f9913f53559888591ea2b9b7efffabbb5e8ad' => 
    array (
      0 => 'C:\\Users\\RubenRL\\OneDrive\\Curso17-18\\DAW\\DWES\\Unidad 4\\Rodriguez_Leyva_Ruben_DWES04_Tarea\\smarty\\templates\\ingresardinero.tpl',
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
function content_5ab24eee419648_44940189 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Menú principal del Cliente/Usuario -->
<?php $_smarty_tpl->_subTemplateRender("file:smarty/templates/banca.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


   
    
    <fieldset>
    <legend align="center">Ingreso Dinero</legend>
        <form action='ingresardinero.php' method='post'>
            <table id="movimientos">
                <?php if (isset($_smarty_tpl->tpl_vars['ingresarDinero']->value)) {?>
                <tr><td colspan=2><b><?php echo $_smarty_tpl->tpl_vars['ingresarDinero']->value;?>
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
                <tr><td colspan="2"><input type=submit class=button name=ingresar value='Ingresar' /></td>
            </table> 
        </form>  
    </fieldset>
                
<!-- Footer -->      
<?php $_smarty_tpl->_subTemplateRender("file:smarty/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
