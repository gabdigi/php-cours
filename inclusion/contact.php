<?php
include_once('include/header.php');
require_once('include/nav.php');
?>

<!--
    Il n'y a quasiment pas de différence entre include et require, ces fonctions permettent
    d'inclure des fichiers dans d'autres fichiers. la seule différence est en cas d'erreur sur l'appel du fichier :
        - include génère une erreur mais continue l'exécution du script
        - require génère une erreur et stoppe l'exécution du script

    le 'once vérifie si le fichier à déjà été inclus. Si c'est le cas, 
    il ne le ré-inclut pas l'avantage ici dans notre cas, si nous voulons 
    modifier la 'nav', nous aurons besoin de modifier seulement 1 fichier.
-->

<section class="text-center p-3" style="min-height: 528px">
    voici le contenu de la page accueil<br>
    voici le contenu de la page accueil<br>
    voici le contenu de la page accueil<br>
    voici le contenu de la page accueil<br>
    voici le contenu de la page accueil<br>
</section>

<?php
include_once('include/footer.php');