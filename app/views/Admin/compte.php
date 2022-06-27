<?php ob_start(); ?>
<?php $name = $newCompte ?>

<div align="center">
    <form action="indexAdmin.php?action=newCompte&id=<?= $_SESSION['id'] ?>" method="post">


        <label for="name">Nom Prénom</label></td>
        <input type="text" placeholder="Nom Prénom" name="firstname" id="name" value="<?= $name['firstname'] ?>">

        <label for="nom">email :</label>
        <input type="text" placeholder="votre email" name="mail" id="mail" value="<?= $name['mail'] ?>">

        <button name="submit" type="submit">Envoyer</button>

    </form>
</div>

<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>