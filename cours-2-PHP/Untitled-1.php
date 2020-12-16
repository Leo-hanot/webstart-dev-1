<pre>
<?php

var_dump($_POST);

?>
</pre>

<form method="POST">
    <select name="civilite">
        <option value="Madame">Madame</option>
        <option value="Monsieur">Monsieur</option>
    </select>
    <input type="text" name="pseudo" />
    <textarea name="contenu"></textarea>
    <input type="email" name="email" />
    <button type="submit">Envoyer</button> // Bouton pour envoyer le formulaire
</form>
