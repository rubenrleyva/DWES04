<?php
/* Smarty version 3.1.30, created on 2018-03-21 13:06:30
  from "C:\Users\RubenRL\OneDrive\Curso17-18\DAW\DWES\Unidad 4\TareaBuena1\smarty\templates\devolverrecibo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab24ac674c269_09848712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98248c4d4089236799488bea50b33173c131f4f4' => 
    array (
      0 => 'C:\\Users\\RubenRL\\OneDrive\\Curso17-18\\DAW\\DWES\\Unidad 4\\TareaBuena1\\smarty\\templates\\devolverrecibo.tpl',
      1 => 1521631499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:smarty/templates/banca.tpl' => 1,
    'file:smarty/templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ab24ac674c269_09848712 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Menú principal del Cliente/Usuario -->
<?php $_smarty_tpl->_subTemplateRender("file:smarty/templates/banca.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<fieldset>
    <legend align="center">Devolver Recibo</legend>
    <?php if (count($_smarty_tpl->tpl_vars['devolverrecibo']->value) > 0) {?>
    <form action='devolverrecibo.php' method='post'> 
        <table id="movimientos">
            <tr>
                <th>Fecha</th>
                <th>Concepto</th>
                <th>Cantidad</th>
                <th>Pulsa para borrar</th>
            </tr>
            
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['devolverrecibo']->value, 'movimiento', false, 'indice');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['indice']->value => $_smarty_tpl->tpl_vars['movimiento']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['movimiento']->value->getFecha();?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['movimiento']->value->getConcepto();?>
</td>
                        <td><font color=red><?php echo round($_smarty_tpl->tpl_vars['movimiento']->value->getCantidad(),2);?>
&#8364</td>
                        <td><input type="submit" name="codigoMov" value='<?php if (isset($_smarty_tpl->tpl_vars['movimiento']->value)) {
echo $_smarty_tpl->tpl_vars['movimiento']->value->getCodigoMov();
}?>' class="button"/></td>
                        <input type='hidden' name='devolver' value='Devolver'/>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>
    </form>
    <?php } else { ?>
        <p>NO HAY MOVIMIENTOS QUE SE PUEDAN DEVOLVER</p>
    <?php }?>       
</fieldset>

<!-- Footer -->      
<?php $_smarty_tpl->_subTemplateRender("file:smarty/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       
    <?php }
}
