<!-- Menú principal del Cliente/Usuario -->
{include file="smarty/templates/banca.tpl"}

<fieldset>
    <legend align="center">Devolver Recibo</legend>
    {if count($devolverrecibo) > 0}
    <form action='devolverrecibo.php' method='post'> 
        <table id="movimientos">
            <tr>
                <th>Fecha</th>
                <th>Concepto</th>
                <th>Cantidad</th>
                <th>Pulsa para borrar</th>
            </tr>
            {* Lo utilizamos para recorrer el array de ultimosMovimientos *}
                {foreach $devolverrecibo as $indice => $movimiento}
                    <tr>
                        <td>{$movimiento->getFecha()}</td>
                        <td>{$movimiento->getConcepto()}</td>
                        <td><font color=red>{round($movimiento->getCantidad(), 2)}&#8364</td>
                        <td><input type="submit" name="codigoMov" value='{if isset($movimiento)}{$movimiento->getCodigoMov()}{/if}' class="button"/></td>
                        <input type='hidden' name='devolver' value='Devolver'/>
                    </tr>
                {/foreach}
        </table>
    </form>
    {else}
        <p>NO HAY MOVIMIENTOS QUE SE PUEDAN DEVOLVER</p>
    {/if}       
</fieldset>

<!-- Footer -->      
{include file="smarty/templates/footer.tpl"}       
    