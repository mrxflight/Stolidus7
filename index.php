<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar is-fixed-top is-dark">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
              <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
            </a>
        
            <span class="navbar-burger burger is-dark" data-target="NavMenu">
              <span class="is-dark"></span>
              <span class="is-dark"></span>
              <span class="is-dark"></span>
            </span>
          </div>
        <div class="navbar-menu" id="NavMenu">
            <div class="navbar-end">
            <a class="navbar-item is-dark">
                    Startseite
                </a>
                
                <a class="navbar-item is-dark">
                    Aktuelle Projekte
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link is-dark">
                    Mitglieder
                </a>                                  
                <div class="navbar-dropdown">
                    <a class="navbar-item">
                        Julius
                    </a>
                    <a class="navbar-item">
                        Julian
                    </a>
                    <a class="navbar-item">
                        Marlon
                    </a>
                </div>
                </div>
                <a class="navbar-item is-dark">
                    File Sharing
                </a>
                

                </div>
            </div>
        </div>
            </nav>
    <section class="section py-6 mt-6">
        <div class="container">
            <h1 class="title has-text-centered is-size-1">
                Stolidus 7
            </h1>   
        </div>
    </section>
    <section class="section has-background-white-ter">
        <div class="container">
            <h3 class="title is-size-3 has-text-centered has-text-weight-light">Herzlich Willkommen liebe Mitglieder auf der offiziellen Website der Stolidus 7 Gruppe</h3>
            <h5 class="title is-size-4 has-text-left has-text-weight-light">Hier findet ihr alle relevanten und nicht relevanten Informationen zu aktuellen Projekten oder der Mitgliederliste. Auch könnt ihr über die File Sharing Funktion ganz einfach Dateien miteinander teilen. Ich wünsche euch viel Spaß beim Erkunden dieser Seite.</h5>
        </div>
    </section>

    <script type="text/javascript">
    (function() {
        var burger = document.querySelector('.burger');
        var nav = document.querySelector('#' + burger.dataset.target);

        burger.addEventListener('click', function(){
            burger.classList.toggle('is-active');
            nav.classList.toggle('is-active');
        });
    })();
        
    </script>
</body>
</html>