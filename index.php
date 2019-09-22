<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Ceci est un commentaire :
       les informations misent dans l'entête sont destinées 
       aux navigateurs et aux moteurs de recherches...  -->
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta charset="utf-8"><!-- A préciser pour utiliser les caractères accentués... -->
    
    <title>Bonjour PHP</title><!-- A personnaliser -->
    
    <meta name="author" content="Eric MADEC"><!-- A personnaliser -->
    
    <link rel="stylesheet" href="public/style.css"><!-- lien vers une feuille de style en css -->
    
    <script src="public/script.js"></script><!-- lien vers un programme en JavaScript -->
  
</head>

<body>
    <!-- Les informations misent dans le corps s'afficheront
         sur l'écran à l'exception des commentaires...  -->
    
    <h1>Ceci est un titre principal</h1>
    <p>Ceci est un paragraphe écrit par...</p>
    <p>Ceci est un autre paragraphe <br>avec un retour à la ligne.</p>
    <ul>
    	Voici la liste non ordonnée des ...
    	<li>
    		item 1
    	</li>
    	<li>
    		item 2
    	</li>
    	<li>
    		...
    	</li>

    </ul>
    <ol>
    	Voici la liste ordonnée des ...
    	<li>
    		item
    	</li>
    	<li>
    		item
    	</li>
    	<li>
    		...
    	</li>

    </ol>
    <hr>
    <h2>Un peu de PHP :</h2>
    <?php
        $prenom = 'Toto';
        $nom = 'MDC';
        $note1 = 6 ;
        $note2 = 8 ;
        $moyenne = ($note1 + $note2)/2 ;
        echo "Bonjour $prenom $nom vous avez eu $moyenne de moyenne<br>" ;
        $repeat = 1 ;
        while ($repeat <= $moyenne){
            echo "$moyenne<br>" ;
            $repeat++ ;
        }
        phpinfo(); 
    ?>
    <hr>
    <br><!-- Un saut de ligne pour introduire un espace vertical -->
    <img src="" alt="Bientôt ici il y aura une image de..." height="150" >
    <br>
    <a href="" >Et bientôt ici il y aura un lien hypertexte pour naviguer vers...</a>
  </body>

</html>