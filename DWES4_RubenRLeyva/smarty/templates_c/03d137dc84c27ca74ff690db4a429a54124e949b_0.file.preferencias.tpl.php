<?php
/* Smarty version 3.1.30, created on 2018-03-21 12:23:44
  from "C:\Users\RubenRL\OneDrive\Curso17-18\DAW\DWES\Unidad 4\TareaBuena1\smarty\templates\preferencias.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab240c08cdab9_08006834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03d137dc84c27ca74ff690db4a429a54124e949b' => 
    array (
      0 => 'C:\\Users\\RubenRL\\OneDrive\\Curso17-18\\DAW\\DWES\\Unidad 4\\TareaBuena1\\smarty\\templates\\preferencias.tpl',
      1 => 1521631418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:smarty/templates/banca.tpl' => 1,
    'file:smarty/templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ab240c08cdab9_08006834 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Menú principal del Cliente/Usuario -->
<?php $_smarty_tpl->_subTemplateRender("file:smarty/templates/banca.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<fieldset>
    <legend align="center">Preferencias</legend>
        <form action='preferencias.php' method='post'>
            <div>
                <label for='color' >Color: </label>
                <input type='color' name='color' id='color'  value='<?php if ($_smarty_tpl->tpl_vars['color']->value) {
echo $_smarty_tpl->tpl_vars['color']->value;
}?>' /><br/>
                <input type='submit' class=button name='eleccion' value='Guardar' />
                <input type='submit' class=button name='eleccion' value='Eliminar' />
            </div>
        </form> 
</fieldset>
   
<!-- Footer -->    
<?php $_smarty_tpl->_subTemplateRender("file:smarty/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       
    <?php }
}
