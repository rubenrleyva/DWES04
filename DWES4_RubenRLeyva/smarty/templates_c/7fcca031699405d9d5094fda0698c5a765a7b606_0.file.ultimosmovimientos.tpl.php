<?php
/* Smarty version 3.1.30, created on 2018-03-21 13:24:13
  from "C:\Users\RubenRL\OneDrive\Curso17-18\DAW\DWES\Unidad 4\Rodriguez_Leyva_Ruben_DWES04_Tarea\smarty\templates\ultimosmovimientos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab24eed8c1c47_25283715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fcca031699405d9d5094fda0698c5a765a7b606' => 
    array (
      0 => 'C:\\Users\\RubenRL\\OneDrive\\Curso17-18\\DAW\\DWES\\Unidad 4\\Rodriguez_Leyva_Ruben_DWES04_Tarea\\smarty\\templates\\ultimosmovimientos.tpl',
      1 => 1521619595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:smarty/templates/banca.tpl' => 1,
    'file:smarty/templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ab24eed8c1c47_25283715 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Menú principal del Cliente/Usuario -->
<?php $_smarty_tpl->_subTemplateRender("file:smarty/templates/banca.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    
   
<fieldset>
<legend align="center">Últimos Movimientos</legend>

     
    <?php if (count($_smarty_tpl->tpl_vars['ultimoMovimientos']->value) > 0) {?>
    <table>         
        <tr>
            <th>Fecha</th>
            <th>Concepto</th>
            <th>Cantidad</th>
            <th>Saldo contable</th>
        </tr>
    
    <?php $_smarty_tpl->_assignInScope('saldoContable', 0);
?>

    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ultimoMovimientos']->value, 'movimiento', false, 'indice');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['indice']->value => $_smarty_tpl->tpl_vars['movimiento']->value) {
?>
        <?php $_smarty_tpl->_assignInScope('ultimosCuatro', (count($_smarty_tpl->tpl_vars['ultimoMovimientos']->value)-4));
?> 
        <?php $_smarty_tpl->_assignInScope('saldoContable', $_smarty_tpl->tpl_vars['saldoContable']->value+$_smarty_tpl->tpl_vars['movimiento']->value->getCantidad());
?>
        <?php if ($_smarty_tpl->tpl_vars['indice']->value >= $_smarty_tpl->tpl_vars['ultimosCuatro']->value) {?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['movimiento']->value->getFecha();?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['movimiento']->value->getConcepto();?>
</td>
            <?php if ($_smarty_tpl->tpl_vars['movimiento']->value->getCantidad() > 0) {?>
                <td><font color=blue><?php echo round($_smarty_tpl->tpl_vars['movimiento']->value->getCantidad(),2);?>
&#8364</td>
            <?php } else { ?>
                <td><font color=red><?php echo round($_smarty_tpl->tpl_vars['movimiento']->value->getCantidad(),2);?>
&#8364</td>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['saldoContable']->value > 0) {?>
                <td><font color=blue><?php echo round($_smarty_tpl->tpl_vars['saldoContable']->value,2);?>
&#8364</td>
            <?php } else { ?>
                <td><font color=red><?php echo round($_smarty_tpl->tpl_vars['saldoContable']->value,2);?>
&#8364</td>
            <?php }?>
        </tr>
        <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>
    <?php } else { ?>
        <p>NO HAY MOVIMIENTOS</p>
    <?php }?>
</fieldset>
            
<?php $_smarty_tpl->_subTemplateRender("file:smarty/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
