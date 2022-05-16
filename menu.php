<?php
session_start();
if (isset($_SESSION['admin'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css">
        <title>Menú Prinicpal LDAP</title>
        <style>
            .d-flex {
                gap: 28px;
            }

            svg {
                width: 150px;
                height: 150px;
            }

            a {
                text-decoration: none;
                color: black;
            }

            .verd:hover {
                color: #43a047;
            }

            .groc:hover {
                color: #fdd835;
            }

            .vermell:hover {
                color: #e53935;
            }
        </style>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="http://zend-emruhi/ldap/menu.php"><i class="bi bi-house-door-fill"></i> Inici </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://zend-emruhi/ldap/tancarsessio.php"><i class="bi bi-power"></i> Tancar Sessió </a>
                    </li>
            </div>
        </nav>
        <div class="container">
            <div class="d-flex p-2 justify-content-center bd-highlight">
                <h1>Programa De Gestió De LDAP</h1>
            </div>
            <div class="d-flex p-2 justify-content-center bd-highlight">
                <a href="http://zend-emruhi/ldap/buscarUsuari.php" class="verd">
                    <div>
                        <center>
                            <h4>Buscar Usuari</h4>
                        </center>
                    </div>
                </a>
                <a href="http://zend-emruhi/ldap/afegirUsuari.php" class="verd">
                    <div>
                        <center>
                            <h4>Afegir Usuari</h4>
                        </center>
                    </div>
                </a>
                <a href="http://zend-emruhi/ldap/modificarUsuari.php" class="groc">
                    <div>
                        <center>
                            <h4>Modificar Usuari</h4>
                        </center>
                    </div>
                </a>
                <a href="http://zend-emruhi/ldap/esborrarUsuari.php" class="vermell">
                    <div>
                        <center>
                            <h4>Esborrar Usuari</h4>
                        </center>
                    </div>
                </a>
            </div>
        </div>
        <!-- Boostrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

    </html>

<?php
} else {
    header("Location: http://zend-emruhi/ldap/");
}
?>