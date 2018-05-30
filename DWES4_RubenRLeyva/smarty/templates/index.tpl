<!-- Menú principal del Cliente/Usuario -->
{include file="smarty/templates/header.tpl"}

<div id='login'>
    <form action='index.php' method='post'>
        <fieldset >
            <legend align="center">Login</legend>
            <div><span class='error'>{$error}</span></div>
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
{include file="smarty/templates/footer.tpl"}