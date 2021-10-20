<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>PHP - Entrainement</title>
</head>
<body>
    <div class="container">
        <!-- 
            1 - Instructions d'affichage
            2 - Variable : Types / Déclarations / Affectations
            3 - Concaténation 
            4 - Constante 
            5 - Conditions et opérateurs
            6 - Fonction prédéfinie
            7 - Fonction utilisateur
            8 - Boucles
            9 - Tableau de données (Array)
            10 - Classes et Objets
        -->
        <h2 class="display-5">Instructions d'affichage</h2>
        <p><?php echo "Hello World"; ?></p>
        <?php
        echo "<br>"; 
        echo "<h2 class='display-5'> Afficher une balise </h2>";

        // Documentation : https://www.php.net
        echo "<br>";
        echo "<h2 class='display-5'> Variable : Type / Déclaration / Affectation </h2>";

        // gettype() est une fonction prédéfinie qui retourne le type d'une valeur
        $a = 127;
        echo gettype($a);
        echo '<br>';

        $b = "une chaîne de caractères";
        echo gettype($b);
        echo '<br>';

        $c = 1.5;
        echo gettype($c);
        echo '<br>';

        $d = '127';
        echo gettype($d);
        echo '<br>';
        
        $de = true;
        echo gettype($d);
        echo '<br>';

        echo "<h2 class='display-5'> Les variables ( & concaténation )</h2>";
        
        $nom = "Nicolas";
        $nom .= " II de Russie";
        echo $nom; // Nicolas II de Russie

        echo "<h2 class='display-5'> Constantes et constantes magiques </h2>";
        // Une constante ne peut pas voir sa valeur modifiée durant l'éxécution du script (retourne une erreur)
        define("BIRTH_YEAR", 1868);
        echo $nom . " est né en " . BIRTH_YEAR;
        echo "<br>";

        // Les constantes magiques ont toujours une valeur, dans n'importe quel fichier
        echo "<br><b>Les constantes magiques</b>" . '<br>';
        echo __FILE__ . '<br>'; // Le chemin d'accès du fichier
        echo 'ligne ' . __LINE__ . '<br>'; // Le numéro de cette ligne
        // echo __FUNCTION__ . '<br>';
        echo __DIR__ . '<br>';
        // echo __METHOD__ . '<br>';
        // echo __NAMESPACE__ . '<br>';
        // echo __CLASS__ . '<br>';

        echo '<hr>';

        // EXERCICES
        echo "<h3 class='display-5 text-center'> Exercice </h3>";
        echo "<h4 class='display-6'> Exercice 1 </h3>";
        // EXO 1 :  Afficher vert-jaune-rouge (avec les tirets) en mettant chaque couleur dans une variable
        $vert = '#3a9d23';
        $jaune = '#ffe436';
        $rouge = '#f00020';
        ?>
        <p style="background-color: black;color:white;"><span style="color:<?php echo $vert; ?>">Vert</span>-<span style="color:<?php echo $jaune; ?>">Jaune</span>-<span style="color:<?php echo $rouge ?>">Rouge</span></p>
        <?php
        echo    "<p style='background-color:black;color:white;'>
        <span style='color:".$vert."'>Vert</span>
        -
        <span style='color:".$jaune."'>Jaune</span>
        -
        <span style='color:".$rouge."'>Rouge</span>
        </p>";
        
        
        $vert = "<span style='color:green'>Vert</span>";
        $jaune = "<span style='color:yellow'>Jaune</span>";
        $rouge = "<span style='color:red'>Rouge</span>";
        
        echo "<p style='background-color:black;color:white'>". $vert . '-' . $jaune . '-' . $rouge . '</p>';
        
        echo '<hr>';

        echo "<h2 class='display-5 text-center'> Les opérateurs arithmétiques </h3>";
        $a = 10;
        $b = 2;
        echo $a + $b . '<br>';
        echo $a - $b . '<br>';
        echo $a * $b . '<br>';
        echo $a / $b . '<br>';

        echo '<br>';
        // Opération / Affectation
        $a += $b;
        echo $a . '<br>';

        $a -= $b;
        echo $a . '<br>';

        $a *= $b;
        echo $a . '<br>';

        $a /= $b;
        echo $a . '<br>';
        
        echo "<h2 class='display-5 text-center'> Structure conditionnelle et opérateurs de comparaison </h3>";
        
        $var1 = 0;
        $var2 = "";

        // empty() définit si une variable contient 0, si elle est vide ou non définie.
        // empty() nous permettra plus tard de vérifier si les champs d'un formulaire sont renseignés ou non
        if(empty($var1)){
            echo "0, vide ou non défini" . '<br>';
        }
        
        // isset() teste l'existence d'une variable, si elle est définie ou non
        if(isset($var2)){
            echo "la variable est définie, elle est de type " . gettype($var2) . " et sa valeur est " . $var2;
            echo "isset teste l'existence d'une variable, si elle est définie ou non" . "<br>";
        }
        
        /*
            OPERATEURS DE COMPARAISON
            (les mêmes qu'en javascipt)
            (à l'exception de )
            !=      différent de  
            OR ||   si l'une des conditions est vraie
            xor     si l'une des conditions est vraie, mais pas les deux en même temps
        */
        $a = 10;
        $b = 5;
        $c = 2;
        
        if($a == 10 xor $b == 6) {
            echo "Ok condition exclusive" . "<br>";
        } else if ($a == 10 || $b ==6) {
            echo "l'une des deux conditions est vraie" . "<br>";
        }

        // Ecriture ternaire de la condition
        $var3 = ($a == 10) ? 'vrai' : 'faux';

        // SWITCH
        echo "<h2 class='display-5 text-center'> Condition SWITCH </h3>";

        $perso = 'Daisy';
        $couleur = "";

        switch($perso) {
            case 'Luigi':
                $couleur = 'green';
                break;
            case 'Mario':
                $couleur = 'red';
                break;
            case 'Daisy':
                $couleur = 'yellow';
                break;
            case 'Peach':
                $couleur = 'pink';
                break;
            default:
                echo "Vous n'avez pas choisi de personnage";
        }    
        // EXERCICE : Refaire la boucle switch ci-dessus sous la forme IF / ELSE IF / ELSE
        if($perso == 'Luigi') {
            $couleur = 'green';
        } else if ($perso == 'Mario') {
            $couleur = 'red';
        } else if ($perso == 'Daisy') {
            $couleur = 'yellow';
        } else if ($perso == 'Peach') {
            $couleur = 'pink';
        } else {
            echo "Vous n'avez pas choisi de personnage !";
        }
        echo "<p>Vous avez choisi <span style='font-weight:800;color:".$couleur."'>".$perso."</span> <b>!</b></p>";

        echo "<h2 class='display-5 text-center'> Fonction prédéfinie </h3>";
        
        // Une fonction prédéfinie permet de rélisation un traitement spécifique
        echo "Date: <strong>" . date('d/m/Y') . "</strong><hr>";
        
        // Lorsqu'on utilise une fonction prédéfinie, il faut toujours se demander quels arguments l'on doit lui envoyer et quel genre de valeurs elle retourne
        echo "<h2 class='display-6'> Traitement des chaînes (iconv_strlen, iconv_strpos, iconv_substr) </h2>";
        
        // strpos() : retourne la position d'un caractère sur une string
        echo 'strpos() : ';
        $email = 'jean.dupont@orange.fr';
        echo 'Le caractère @ se trouve à la position : <strong>' . strpos($email, '@') . '</strong><br>';
        // Succès : INT
        // Echec : BOOLEAN FALSE
        
        $string = "une chaîne";
        echo strpos($string, '@'); // Cette ligne ne sert pas à grand chose, pourtant il y a bien quelque chose à l'intérieur : FALSE !
        var_dump(strpos($string, '@')); // var_dump() est une instruction d'affichage que l'on utilise régulièrement en phase de développement (il existe aussi print_r())
        echo "<br>";
        // iconv_strlen() : retourne la longueur d'une string
        echo 'iconv_strlen() : ';
        $phrase = "Une chaîne de caractères";
        echo "La longueur de la chaîne est de <strong>".iconv_strlen($phrase)."</strong> caractères.";

        echo '<br>';
        // substr() : retourne une partie d'une string selon un index de départ et un index d'arrivée
        echo 'substr() : ';
        $texte = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam sed facilis pariatur at deleniti a. Totam eius veniam ipsa obcaecati eveniet, dolorem ut, laborum distinctio repellendus excepturi optio sit doloremque?';
        echo substr($texte, 0, 11); // Lorem ipsum
        // substr() est souvent utilisé pour afficher l'accroche d'une actualité sur internet, ou un extrait d'article 

        echo "<h2 class='display-5 text-center'> Les fonctions utilisateurs </h3>";
        // déclaration
        function exemple() {
            echo "chaine de caractères" . '<br>';
        }
        exemple(); // appel
        $qui = "Pierre";
        function bonjour($qui = 'Pierre') {
            // ($qui = 'Pierre') définit une valeur par défaut à la variable de réception $qui
            echo 'Bonjour ' . $qui . ' !' . '<br>';
        }
        bonjour(); // 'Bonjour Pierre !' // Pierre = valeur par défaut de l'argument ('la variable de réception') $qui de la fonction bonjour()
        bonjour('Gabriel'); // 'Bonjour Gabriel !'
        
        echo "<h2 class='display-5 text-center'> Exercice </h3>";
        echo '<b>Calculateur de TVA</b>' . '<br>';
        function appliqueTva($prixHT) {
            $prixTTC = $prixHT * 1.2;
            return 'Prix HT: '. $prixHT . ' € ; Prix TTC : ' . $prixTTC . ' €' . '<br>';
        }
        echo appliqueTva(150);


        // exercice : améliorer cette fonction afin que l'on puisse calculer un nombre avec les taux de notre choix
        function calculTva($prixHT, $taux) {
            $facteur = 1 + $taux / 100;
            $prixTTC = $prixHT * $facteur;
            return 'Prix HT: '. $prixHT . ' € ; TVA : '.$taux.' % ; Prix TTC : ' . $prixTTC . ' €' . '<br>';
        }
        echo calculTva(150,19.7);
        echo calculTva(300,5.5);
        
        echo '<hr>';

        function exoMeteo($saison, $temperature) {
            if($temperature < -1 || $temperature > 1)
                $degre = "degrés";
            else
                $degre = "degré";
            // ------------------------------------ // les accolades dans les IF / ELSE ne sont pas obligatoires
            if($saison == "printemps")
                $art = 'au';
            else
                $art = 'en';
            
            echo "Nous sommes $art $saison et il fait $temperature $degre <br>"; // Cette notation est possible si la string est entre double quotes
        }
        exoMeteo('été', 30);
        exoMeteo('printemps', 22);
        exoMeteo('hiver', 1);

        // Scope global et local
        function jourSemaine() {
            $jour = "lundi";
            return $jour;
            // return retourne le résultat de la fonction et à ce moment-là on quitte la fonction
            echo "ALLO"; // cette ligne ne sortira pas car il y a un 'retrun' avant
        }

        // echo $jour; /!\ ERREUR !!! NE FONCTIONNE PAS car cette variable n'est connu qu'à l'intérieur de la fonction jourSemaine()

        $recup = jourSemaine(); 
        echo $recup . '<hr>';

        // ------------------------------------------------------------------------------------------------------------

        $pays = "France"; // La variable se trouve dans l'espace global
        function affichagePays(){
            global $pays;
            //global permet d'importer une variable de l'espace global (espace par défault à l'extérieur d'une fonction) vers l'espace local
            echo $pays;
        }
        affichagePays();

        // Espace global : à l'extérieur d'une fonction
        // Espace local : à l'intéireur d'une fonction
        echo '<hr>';

        // PHP7 : on précise en amont le type obligatoire des valeurs entrantes dans les arguments
        function idendite(string $nom, int $age) {
            return "$nom a $age ans <hr>";
        }

        echo idendite('TEST', 33);

        echo "<h2 class='display-5'>8 - Boucles </h2>";

        // WHILE
        $i = 0;
        while($i <3) {
            echo "$i---";
            $i++; // Cec s'appelle incrémentation, c'est une forme contractée de : $i = $i + $i
        }

        //EXO : faites en sorte de ne pas les tirets à la fin : 0--1--2

        echo"<br>";

        $i = 0;
        while($i <3) {
            echo substr("$i---", 0, -3);
            $i++; // Cec s'appelle incrémentation, c'est une forme contractée de : $i = $i + $i
        }

        //correction

        $j =0;
        while($j < 3) {
            if($j == 2) // on rentre une foisle IF au dernier jour de boucle
            echo$j;
            else
            echo"$j--";
            $j++; // c'est une forme contractée de : $i = $i + 1
        }

        
        for($i =0; $i < 9; $i++) {
            echo $i . '<br>';
        }

        echo"<br>";

        // EXO: afficher un selecteur de 30 options via la boucle FOR
        //<select>
        //<option></option>
        //</select>

        echo '<hr>';

        echo '<select>';
        for($i =0; $i < 31; $i++) {
            echo '<option>' . $i . '</option> <br>';
        }

        echo'</select> <br> <br>';

         // une autre maniére pour inclure du html dans php mais complexe
         /*
         
            <select>
            <?php for ($i = 0; $i <= 30; i++;) ?>

                <option><?= $i ?></option>

            <?php endfor; ?>
            </select><br>
         
         */
        echo "<table class='table table-bordered text-center'><tr>";
        for($j = 0; $j < 10; $j++){
            echo "<td> $j </td>";
        }
         echo "</tr></table> <br>";

         echo '<hr> <br>';
        /*
            EXO : faire la même chose en allant de 0 à 99 sur plusieurs lignes sans faire 10 boucles
            for () {

                for() {

                }
            }
        
        
        */
        
        for ($j = 0; $j < 10; $j++) {
            echo "<table class='table table-bordered text-center'><tr>";
            for($K = 0; $K < 10; $K++){
            echo "<td> $j </td>";
            }
         echo "</tr></table>";
        }

        // correction
        $compteur = 0;
        echo "<table class='table table-bordered'>";

        // la première boucle tourne 10 fois pour créer 10 lignes de tableau
        for($ligne = 0; $ligne < 10; $ligne++) {
            echo "<tr>";

            // la 2ème tourne 10 fois pour créer 10 cellules par ligne
            for($cellule = 0; $cellule < 10; $cellule++) {
                // on stocke la valeur de 'compteur" dans chaque cellule en l'incrémentant de 1 par tour de boucle

                echo"<td>$compteur</td>";
                $compteur++; // incrémentation de la varaible à chaque tour de boucle
            }
            echo "<tr>";
        }

        echo "</table><hr>";


        echo "<h2 class='display-5'> Tableaux des données </h2>";
        
        // une variable permet de conserver une valeur, les ARRAY peuvent en conserver plusieurs, c'est-à-dire un ensemble de données
        // En règles générale, lorsqu'on réceptionne des données de la BDD, on les traite sous forme d'ARRAY

        $perso = array("Mario", "Luigi", "Yoshi", "Bowser");

        // echo $perso; /!\ ERREUR Il n'est pas possibe d'afficher le contenu d'un tableau ARRAY avec un simple echo

        echo '<pre>';
        print_r($perso); // print_r est une instruction d'affichage qui permet de voir le contenu d'un tableau array
        echo '</pre>';  // la balise '<pre></pre>' permet de formater le texte, de mettre en forme la sortie de print_r

        echo '<pre>';
        var_dump($perso); // var_dump() est une autre instruction d'affichage avec des options supllémentaire (taille, type) 
        echo '</pre>';


        echo "<h3 class='display-5'>Boucle FOREACH</h3>";

        // 2éme possibilité de déclaration d'un tableau ARRAY drâce aux crochets []

        $tab = ["France", "Espagne", "Italie", "Suisse"];

        // Dans ce cas, les indices [0] sont numériques

        echo '<pre>';
        print_r($tab);
        echo '</pre>';  

        // EXO: tenter d'afficher 'Espagne' en passant par le tableau et sans faire un 'echo Espage'

        echo $tab[1];

        echo '<br>';

        /*
            la boucle FOREACH sert à passer en revue un tableau ARRAY $value est une variable de récéption que l'on déclare dans la boucle FOREACH 
            et que l'on nomme commme on le souhaite 'as' fait partie du langage et est obligatoire
            Arguments : 
                1. $tab : le tableau ARRAY à parcourir
                2. $value : varialbe de récéption
        
        */
        foreach($tab as $value) {
            echo "$value<br>";
        }

        // il est possible de déclarer nos propres indices dans le tableau ARRAY
        $couleur = array("j" => "jaune", "r" => "rouge", "v" => "vert", "o" => "orange");
        // cela s'appelle un tableau ARRAY associatif, c'est-à-dire un indice associé à une valeur

        echo '<pre>';
        print_r($couleur);
        echo '</pre><br>';
        
        // Lorsqu'il y a deux variables déclarées dans la boucle FOREACH, la première ($key) parcourt la colonne
        // des indices du tableau ARRAY tandis que la seconde ($value) parcourt la colonne des valeurs du tableau ARRAY

        echo "<div class='alert alert-success col-md-4 mx-auto text-center'>";
        foreach($tab as $key => $value) {
            echo "$key : $value<br>";
            // on affiche successivement les indices et les valeurs associéés
        }
        echo "</div>";

        // EXO : afficher le contenu du tableau ARRAY '$couleur' via une boucle FOREACH (indice + valeur)

        echo "<div class='alert alert-warning col-md-4 mx-auto text-center'>";
        foreach($couleur as $key => $value) {
            echo "$key : $value<br>";
        }
        echo "</div>";

        echo "Taille du tableau ARRAY " . count($couleur) . "<br>";
        echo "Taille du tableau ARRAY " . sizeof($couleur) . "<br>";

        echo implode("-", $couleur);
        // la fonction prédéfinie implode() rassemble les éléments d'un tableau ARRAY en une chaîne de caractères (séparé par un symbole)
        // l'inverse : explode() voir https://www.php.net

        echo '<hr>';

        echo "<h3 class='display-5'>Tableau ARRAY multimdimensonnel</h3>";

        $multiTab = array(
            0 => array("prenom" => "Julien", "nom" => "Cottet"),
            1 => array("prenom" => "nicolas", "nom" => "Lafaye")
        );

        echo '<pre>';
        print_r($multiTab);
        echo '</pre><br>';

        // EXO: tenter de faire sortir 'Lafaye' en passant par le tableau multidimensionnel '&multiTab' sans faire un echo 'echo Lafaye'
        
       echo $multiTab[1]["nom"];

        // nous rentrons d'abord à l'indice [1] pour aller ensuite dans l'autre tableau à l'indice ['nom]

        for($m = 0; $m < count($multiTab); $m++) {
            echo "<div class='alert alert-primary col-md-4 mx-auto text-center'>";
            //1er tour : $multiTab[0]
            //2eme tour : $multiTab[1]
            foreach($multiTab[$m] as $idendite => $value) {
                echo "$idendite : $value <br>";

            }
            echo "</div>";
        }

        echo "<hr>";

        echo "<h3 class='display-5 text-center'>Superglobales</h3>";
        /*
          Les SUPERGLOBALES sont des vairables de type ARRAY prédéfinis accessibles 
          de partout dans le code, autant dans l'espace local (dans une fonction) 
          mais aussi dans l'espace global (espace par défaut). Elles sont chargées de véhiculer des données.

        */
        /*
            $_SERVER : permet de véhiculer des informations liées au serveur
            $_POST : permet de véhiculer des données saisies dans un formulaire 
            $_GET : permet de véhiculer des données transmises dans l'url
            $_COOKIE: permet de véhiculer les informations liées au fichire cookie. Utile pour conserver les information sur un internaute
            $_SESSION: permet de véhiculer des informations au fichier session, à la session en cours. Utile pour maintenir une connexion avec un internaute sur un site web

            Par convention, toutes les SUPERGLOBALES  s'écrivent comme ceci : $_NOM, execpt" $GLOBALS, qui contient toutes les variables disponibles.


        
        */


        echo '<pre>';
        print_r($_SERVER);
        echo '</pre><br>';
        echo '<hr>';


        echo "<h2 class='display-5 text-center'>Classe et objet</h2>";

        
        class Etudiant {
            // public permet de préciser que l'élément sera accessible de partout ( à l'inverse de 'protected' ou 'private)
            public $prenom = "Nicolas";
            public $age    = 34;
            public function pays()
            {
                return "France";
            }
        }

        // un objet est un conteneur symbolique, qui possède sa propre existance et incopore des informations et de smécanismes
        $objet = new Etudiant('');

        /*
         new est un mot-clé permettant d'instancier la classe 
         (consistant en la création de l'objet à partir de la classe) et d'en faire un objet.
         C'est ce qui nous permet de le déployer afin que l'on puisse s'en servir
        */

        echo '<pre>';
        var_dump($objet);
        echo '</pre><br>';

        echo '<pre>';
        print_r(get_class_methods($objet));
        echo '</pre><br>';

        echo $objet->prenom . '<br>';
        // Nous pouvons piocher dans un ARRAY avec des les crochets[], nous devions piocher dans un objet avec la dl flèche '->'
        echo $objet->age . '<br>';
        
        echo $objet->pays(); // appel d'une méthode (fonction);


















        ?>

    












    </div>
</body>
</html>