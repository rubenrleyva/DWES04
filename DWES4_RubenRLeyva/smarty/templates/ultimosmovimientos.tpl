<!-- Menú principal del Cliente/Usuario -->
{include file="smarty/templates/banca.tpl"}
                    
{* Lo utilizamos para ver los últimos movimientos en caso de que existan *}   
<fieldset>
<legend align="center">Últimos Movimientos</legend>

    {* Contamos el array para comprobar que hay datos en el mismo*} 
    {if count($ultimoMovimientos) > 0}
    <table>         
        <tr>
            <th>Fecha</th>
            <th>Concepto</th>
            <th>Cantidad</th>
            <th>Saldo contable</th>
        </tr>
    {* Creamos el saldo contable que al que le sumaremos saldo*}
    {$saldoContable = 0}

    {* Lo utilizamos para recorrer el array de ultimosMovimientos *}
    {foreach $ultimoMovimientos as $indice => $movimiento}
        {$ultimosCuatro = (count($ultimoMovimientos) - 4)} 
        {$saldoContable = $saldoContable + $movimiento->getCantidad()}
        {if $indice >= $ultimosCuatro}
        <tr>
            <td>{$movimiento->getFecha()}</td>
            <td>{$movimiento->getConcepto()}</td>
            {if $movimiento->getCantidad() > 0}
                <td><font color=blue>{round($movimiento->getCantidad(), 2)}&#8364</td>
            {else}
                <td><font color=red>{round($movimiento->getCantidad(), 2)}&#8364</td>
            {/if}
            {if $saldoContable > 0}
                <td><font color=blue>{round($saldoContable, 2)}&#8364</td>
            {else}
                <td><font color=red>{round($saldoContable, 2)}&#8364</td>
            {/if}
        </tr>
        {/if}
    {/foreach}
    </table>
    {else}
        <p>NO HAY MOVIMIENTOS</p>
    {/if}
</fieldset>
            
{include file="smarty/templates/footer.tpl"}
