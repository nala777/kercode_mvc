<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/public/Front/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css"
        integrity="sha512-98RDZg4fCzeqQfuL8fx1uo+Wh3cSp9TVKWDiBL2nJ3XJahJtAaJyYtmBd2mmj6NChONautL3XCJ8WQTliMcMhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Kercode</title>
</head>

<body>
    <header>

        <div class="menu-wrapper menu-gold">
            <ul class="menu">
                <li><a href="/"><i class="fas fa-home"></i> Accueil</a></li>
                <li><a href=""><i class="fas fa-project-diagram"></i> Projet</a></li>
                <li><a href="index.php?action=portfolio"><i class="fas fa-info-circle"></i> Portfolio</a></li>
                <li><a href=""><i class="fas fa-building"></i>Formation</a></li>
                <li><a href="index.php?action=contact"><i class="fas fa-question"></i>Contact</a></li>
            </ul>
        </div>
    </header>


    <?= $content ?>

    <section class="contact-area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 offset-lg-3">
                    <div class="contact-content text-center">
                        <div class="contact-social">
                            <ul>
                                <li><a class="hover-target" href=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="hover-target" href=""><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =============== 1.9 Contact Area End ====================-->
    <!-- =============== 1.9 Footer Area Start ====================-->
    <footer>
        <p>Copyright &copy; 2022 -Kercode- Tous droits réservés.</p>
    </footer>

    <script src="app/public/Front/js/script.js"></script>
</body>

</html>