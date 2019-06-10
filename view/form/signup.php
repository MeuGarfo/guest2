<?php
if(isset($_GET['erro'])){
    ?>
    <div class="alert alert-error">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4>Erro</h4>
        Digite os dados corretamente
    </div>
    <?php
}
?>
<form class="" action="signup" method="post" id="signup">
    <fieldset>
        <legend><?php e($title); ?></legend>
        <label for="signupName">Nome</label>
        <input type="text" name="name" value="" class="input-block-level" id="signupName">
        <label for="signupEmail">Email</label>
        <input type="email" name="email" class="input-block-level" id="signupEmail">
        <label for="signupPassword">Senha</label>
        <input type="password" name="password" class="input-block-level" id="signupPassword">
        <button class="btn" type="submit"><?php e($title); ?></button>
    </fieldset>
</form>
