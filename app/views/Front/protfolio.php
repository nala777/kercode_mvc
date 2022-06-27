<?php ob_start(); ?>
<div class="home">
    <div class="container">
        <h3 class="col-md-6">Kercode</h3>

        <h1 class="col-md-8 col-md-offset-2 text-center">WEB DEVELOPMENT CREATIVE SOLUTIONS</h1>
        <div class="social col-md-4 col-md-offset-4">
            <a href="" target="_blank"><img src="https://i.imgur.com/MNw8yAW.png"></a>
            <a href="" target="_blank"><img src="https://i.imgur.com/7WOBoX6.png"></a>
            <a href="" target="_blank"><img src="https://i.imgur.com/KtrEUYX.png"></a>
            <a href="" target="_blank"><img src="https://i.imgur.com/9dNLvu5.png"></a>
        </div>
        <a class="btn col-md-offset-6" href="#skill">&#8964;</a> </div> </div> <div class="skills" id="skill">
        <div class="container">
            <h2 class="text-center">SKILL</h2>
            <hr>
            <p class="text-center">This is programming languages and frameworks that I used in my projects.</p>
            <div class="html col-md-3 text-center">
                <h4>HTML5</h4>
                <hr>
                <p class="text-justify"><b>HyperText Markup Language</b>, commonly abbreviated as HTML, is the standard
                    markup language used to create web pages. Along with CSS, and JavaScript, HTML is a cornerstone
                    technology used to create web pages, as well as to create user interfaces for mobile and web
                    applications.</p>
            </div>
            <div class="css col-md-3 text-center">
                <h4>CSS3</h4>
                <hr>
                <p class="text-justify"><b>Cascading Style Sheets (CSS)</b> is a style sheet language used for
                    describing the presentation of a document written in a markup language. Although most often used to
                    set the visual style of web pages and user interfaces written in HTML, the language can be applied
                    to any XML document.</p>
            </div>
            <div class="js col-md-3 text-center">
                <h4>JAVASCRIPT</h4>
                <hr>
                <p class="text-justify"><b>JavaScript</b> is a high-level, dynamic, untyped, and interpreted programming
                    language. Alongside HTML and CSS, it is one of the three core technologies of World Wide Web content
                    production; the majority of websites employ it and it is supported by all modern Web browsers
                    without plug-ins.</p>
            </div>
            <div class="jquery col-md-3 text-center">
                <h4>PHP</h4>
                <hr>
                <p class="text-justify"><b>PHP</b> is a cross-platform JavaScript library designed to simplify the
                    client-side scripting of HTML. jQuery is the most popular JavaScript library in use today, with
                    installation on 65% of the top 10 million highest-trafficked sites on the Web. jQuery is free,
                    open-source software licensed under the MIT License.</p>
            </div>
        </div>
    </div>

    <?php $content = ob_get_clean(); ?>
    <?php require 'templates/template.php'; ?>