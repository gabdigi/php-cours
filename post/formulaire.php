<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>03-POST - Formulaire</title>
</head>
<body>
    <div class="container">

        <h1 class="display-4 text-center">03-POST - Formulaire</h1>

        <?php
        
        if($_POST){
            /*
                En PHP, les données saisies dans un formulaire vont se stocker automatiquement dans la superglobale
                $_POST, le tableau ARRAY a pour indice les attributs 'name' déclarés dans le formulaire HTML
            */
            
            echo "<div class='alert alert-primary col-md-4 mx-auto text-center'>";

            echo $_POST["pseudo"] . " " . $_POST["mdp"];

            echo "</div>";

            /*
                EXO: Afficher sur la page web les données saisies dans le formulaire en pensant par la superglobale
                $_POST avec un affichage conventionnel (echo)
            */
        }



        
        ?>




        <form method="POST" action="" class="col-md-6 mx-auto">
        <!-- method: comment vont circuler les données | action : URL de destination des données saisies dans le formulaire -->
            <div class="form-group">
                <label for="pseudo">Pseudo</label>
                <input type="text" name="pseudo" id="pseudo" class="form-control"> <br>
                <!-- il ne faut SURTOUT PAS oublier les attributs 'name' qui deviennent les indices du tableau ARRAY $_POST -->
            </div>
            <div class="form-group">
                <label for="mdp">Mot de passe</label>
                <input type="password" name="mdp" id="mdp" class="form-control" maxlength= "10" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-5">Connexion</button>
            </div>

        </form>

    </div>
</body>
</html>