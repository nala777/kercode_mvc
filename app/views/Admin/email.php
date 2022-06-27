<?php ob_start(); ?>
<?php $mail = $mailOne ?>
<div class="row">
    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class=" col-xs-12 col-sm-12">
            <h3><?= $mail['lastname'] ?> <?= $mail['firstname'] ?></h3>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-6">
        <h3><?= $mail['mail'] ?></h3>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-6">
        <h3><?= $mail['phone'] ?></h3>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-6">
        <h3><?= $mail['objet'] ?></h3>
        </div>

        <div class="col-xs-12 col-sm-8 col-md-5">
            <P><?= $mail['content'] ?></P>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>