<h1><?php e($_ENV['SITE_NAME']); ?></h1>
<p>
    <a href="<?php print $_ENV['SITE_URL']; ?>">Home</a> /
    <?php
    $user=isAuth();
    if($user){
        ?>
        Olá <b><?php e($user['name']); ?></b>
        (<a href="<?php print $_ENV['SITE_URL']; ?>logout">Sair</a>)
        <?php
    }else{
        ?>

        <a href="<?php print $_ENV['SITE_URL']; ?>signup">Criar conta</a> /
        <a href="<?php print $_ENV['SITE_URL']; ?>signin">Entrar</a>
        <?php
    }
    ?>
</p>
