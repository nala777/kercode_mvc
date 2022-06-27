<?php ob_start(); ?>
<div class="container_contact">  
  <form id="contact" action="index.php?action=contactPost" method="post">
    <h3>Contactez-nous</h3>
    <h4>Contactez-nous aujourd'hui et obtenez une réponse dans les 24 heures !</h4>
    <fieldset>
      <input placeholder="Votre nom" name="name" type="text" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Votre prénom" name="firstname" type="text" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Votre Adresse e-mail" name="mail" type="email" required>
    </fieldset>
    <fieldset>
      <input placeholder="Votre numéro de téléphone" name="phone" type="tel"  required>
    </fieldset>
    <fieldset>
      <input placeholder="Objet de votre demande" name="object" type="text" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Votre message" name="content" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit">Envoyer</button>
    </fieldset>
  </form>
 
  
</div>


<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>