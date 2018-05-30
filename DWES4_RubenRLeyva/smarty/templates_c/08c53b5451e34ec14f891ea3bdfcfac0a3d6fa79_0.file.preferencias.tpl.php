<?php
/* Smarty version 3.1.30, created on 2018-03-21 13:24:19
  from "C:\Users\RubenRL\OneDrive\Curso17-18\DAW\DWES\Unidad 4\Rodriguez_Leyva_Ruben_DWES04_Tarea\smarty\templates\preferencias.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab24ef3127032_90629440',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08c53b5451e34ec14f891ea3bdfcfac0a3d6fa79' => 
    array (
      0 => 'C:\\Users\\RubenRL\\OneDrive\\Curso17-18\\DAW\\DWES\\Unidad 4\\Rodriguez_Leyva_Ruben_DWES04_Tarea\\smarty\\templates\\preferencias.tpl',
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
function content_5ab24ef3127032_90629440 (Smarty_Internal_Template $_smarty_tpl) {
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
