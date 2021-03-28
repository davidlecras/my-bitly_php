<?php
if (!empty($_POST['urlBitly'])) {
    $url = $_POST['urlBitly'];
}

// Vérification ldu champs lors de l'envoi:
// Verifier si hasBeenAlreadySend:

var_dump($url);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public//css/style.css">
    <link rel="icon" type="image/png" href="./public/images/favico.png" />
    <title>Mon bitly</title>
</head>

<body>
    <main role="main">
        <!-- Section hello -->
        <section id="hello">
            <div class="container">
                <header><img src="./public/images/logo.png" alt="logo bitly" id="logo"></header>
                <h1>Une URL longue? Racourcicez-la</h1>
                <h2>Largement meilleur et plus court que les autres.</h2>
                <form action="index.php" method="post">
                    <input type="url" name="urlBitly" id="myUrl" placeholder="URL à racourcir">
                    <input type="submit" value="Racourcir">
                </form>
            </div>
        </section>
        <!-- section brandq -->
        <section id="brands">
            <!-- container -->
            <div class="container">
                <h3>Ces entreprises qui nous font confiance</h3>
                <img src="./public//images/1.png" alt="brands" class="picture">
                <img src="./public/images/2.png" alt="brands" class="picture">
                <img src="./public/images/3.png" alt="brands" class="picture">
                <img src="./public/images/4.png" alt="brands" class="picture">
            </div>

        </section>
        <footer class="container">
            <div id="footer">
                <img src="./public/images/logo2.png" alt="logo bitly" id="logo2">
                <p>Bilty ® 2021</p>
                <a href="#">Contact</a> - <a href="#">À propos</a>
            </div>
        </footer>
    </main>

</body>

</html>