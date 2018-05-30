<!-- Menú principal del Cliente/Usuario -->
{include file="smarty/templates/banca.tpl"}

<fieldset>
    <legend align="center">Preferencias</legend>
        <form action='preferencias.php' method='post'>
            <div>
                <label for='color' >Color: </label>
                <input type='color' name='color' id='color'  value='{if $color}{$color}{/if}' /><br/>
                <input type='submit' class=button name='eleccion' value='Guardar' />
                <input type='submit' class=button name='eleccion' value='Eliminar' />
            </div>
        </form> 
</fieldset>
   
<!-- Footer -->    
{include file="smarty/templates/footer.tpl"}       
    