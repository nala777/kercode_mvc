<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>

<body>

    <h1 align="center">Administrateur</h1>
    <div id="inscription">
        <div align="center">
            <form action="indexAdmin.php?action=creatAdmin" method="post">
                <table>
                <tr>
                        <td align="right"><label for="name">Nom Prénom</label></td>
                        <td><input type="text" placeholder="Nom Prénom" name="firstname" id="name"></td>
                    </tr>
                    <tr>
                        <td align="right"><label for="nom">email :</label></td>
                        <td><input type="text" placeholder="votre email" name="mail" id="pseudo"></td>
                    </tr>
                    <tr>
                        <td align="right"><label for="password">Mot de passe :</label></td>
                        <td><input type="password" placeholder="votre mot de passe" name="password" id="password"></td>
                    </tr>
                  
                    <tr>
                        <td></td>
                        <td align="center"><br><input type="submit"></td>
                    </tr>
                </table>
            </form>
            <a href="/">Retour à l'accueil</a>
        </div>
    </div>
</body>

</html>