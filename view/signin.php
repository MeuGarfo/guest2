<?php
view('inc/header',$data);
?>
<div class="container">
    <div class="row">
        <div class="offset3 span6">
            <?php view("inc/topo",$data); ?>
            <?php view('form/signin',$data); ?>
        </div>
    </div>
</div>
