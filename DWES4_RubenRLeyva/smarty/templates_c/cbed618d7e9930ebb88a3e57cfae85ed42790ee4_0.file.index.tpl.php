<?php
/* Smarty version 3.1.30, created on 2018-03-21 12:43:54
  from "C:\Users\RubenRL\OneDrive\Curso17-18\DAW\DWES\Unidad 4\TareaBuena1\smarty\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab2457a336ce1_44405463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbed618d7e9930ebb88a3e57cfae85ed42790ee4' => 
    array (
      0 => 'C:\\Users\\RubenRL\\OneDrive\\Curso17-18\\DAW\\DWES\\Unidad 4\\TareaBuena1\\smarty\\templates\\index.tpl',
      1 => 1521631487,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:smarty/templates/header.tpl' => 1,
    'file:smarty/templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ab2457a336ce1_44405463 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Menú principal del Cliente/Usuario -->
<?php $_smarty_tpl->_subTemplateRender("file:smarty/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div id='login'>
    <form action='index.php' method='post'>
        <fieldset >
            <legend align="center">Login</legend>
            <div><span class='error'><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span></div>
            <div class='campo'>
                <label for='login' >Usuario:</label><br/>
                <input type='text' name='login' id='usuario' maxlength="50" /><br/>
            </div>
            <div class='campo'>
                <label for='password' >Contraseña:</label><br/>
                <input type='password' name='password' id='password' maxlength="50" /><br/>
            </div>
            <br>
            <div class='campo'>
                <input type='submit' class='button' name='enviar' value='Enviar' />
            </div>
        </fieldset>
    </form>
</div>

<!-- Footer -->  
<?php $_smarty_tpl->_subTemplateRender("file:smarty/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
