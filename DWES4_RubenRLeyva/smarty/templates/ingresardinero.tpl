<!-- Menú principal del Cliente/Usuario -->
{include file="smarty/templates/banca.tpl"}

   
    {* Lo utilizamos para realizar los ingresos *}
    <fieldset>
    <legend align="center">Ingreso Dinero</legend>
        <form action='ingresardinero.php' method='post'>
            <table id="movimientos">
                {if isset($ingresarDinero)}
                <tr><td colspan=2><b>{$ingresarDinero}</b><br></td></tr>
                {/if}          
                <tr><td>Concepto:</td><td><input type=text name=concepto value='{if isset($concepto)}{$concepto}{/if}' size=25 maxlength=50></td></tr>
                <tr><td>Cantidad:</td><td><input type=text name=cantidad value='{if isset($cantidad)}{$cantidad}{/if}'size=25></td></tr>
                <tr><td>Fecha:</td><td><input type=date name=fecha  value='' size=10 maxlength=10></td></tr>   
                <tr><td colspan=2><i>Por favor, ingrese los datos solicitados y haga clic en el botón ingresar. Todos los campos son obligatorios.</i></td></tr>
                <tr><td colspan="2"><input type=submit class=button name=ingresar value='Ingresar' /></td>
            </table> 
        </form>  
    </fieldset>
                
<!-- Footer -->      
{include file="smarty/templates/footer.tpl"}
