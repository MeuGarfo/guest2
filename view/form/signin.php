<?php
if(isset($_GET['erro'])){
    ?>
    <div class="alert alert-error">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4>Erro</h4>
        Digite uma mensagem válida
    </div>
    <?php
}
?>
<form class="" action="signin" method="post" id="signin">
    <fieldset>
        <legend><?php e($title); ?></legend>
        <label for="signinEmail">Email</label>
        <input type="email" name="email" class="input-block-level" id="signinEmail">
        <label for="signinPassword">Senha</label>
        <input type="password" name="password" class="input-block-level" id="signinPassword">
        <button class="btn" type="submit"><?php e($title); ?></button>
    </fieldset>
</form>
