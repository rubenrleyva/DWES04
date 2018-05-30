<!-- Cabecera-->
{include file="smarty/templates/header.tpl"}

<!-- Menú principal del Cliente/Usuario -->
<div>
    <fieldset>
        {if isset($nombre)}<legend align="center">Bienvenido {$nombre}, última sesión iniciada a las {$hora}</legend>{/if}
        <a href="ultimosmovimientos.php" class="button">Ultimos Movimientos</a>
        <a href="ingresardinero.php" class="button">Ingresar Dinero</a>
        <a href="pagarecibo.php" class="button">Pagar Recibo</a>
        <a href="devolverrecibo.php" class="button">Devolver Recibo</a>
        <a href="preferencias.php" class="button">Preferencias</a>
        <a href="salir.php" class="button">Salir</a>
    </fieldset>
</div>                 
    
<!-- Footer -->    
{if isset($esta)}{include file="smarty/templates/footer.tpl"}{/if} 