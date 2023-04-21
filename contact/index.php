<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link href="/img/logo 64x64.png" rel="icon">
        <link href="index.css" rel="stylesheet">
        <script src="verif.js"></script>
        <title>Chemin des nuages</title>
       </head>
    <body>
        <div class="en-tete">
            <table style="min-width: 100%;">
                <tr>
                    <td style="width: 33%; text-align: left;"><h2>Chemin des nuages</h2></td>
                    <td style="width: 33%; text-align: center;"><a href="/"><img src="/img/logo 1024x1024.png" alt="Logo chemin des nuages" width="70"/></a></td>
                    <td style="width: 33%; text-align: right;"><a href="https://www.youtube.com/channel/UCmm72KX-LVSnjqDd4-_j9wQ" target="_blank"><img src="/img/YouTube.png" alt="Chaîne YouTube" title="Aller à la chaîne YouTube de l'autrice" width="70"></a></td>
                </tr>
            </table>
        </div>
        <br>
        <form method="post" action="sendEmail.php" >    
            <input class="input" type="text" id="nom" name="nom" required autocomplete="on" placeholder="Nom" onkeypress="verifierNom(event); return false;">   
            <input class="input" type="text" id="prenom" name="prenom" required autocomplete="on" placeholder="Prénom"><br><br>

            <input class="input" type="email" id="email" name="email" required autocomplete="on" placeholder="E-mail"><br><br>
    
            <textarea type="text" id="message" name="message" required autocomplete="off" placeholder="Message"></textarea><br><br>
    
            <input type="submit" value="Envoyer le message">
            <?php 
            if ($_GET['statutMail'] == '1') {
                echo('<p>Le mail a été envoyé avec succès ! L\'autrice vous répondra dès que possible.</p>');
            }
            if ($_GET['statutMail'] == '0') {
                echo('<p>Une erreur est survenue ! Veuillez réessayer plus tard.</p>');
            }
            ?>
        </form>
        <br>
        <br>
        <footer>
            <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank"><img alt="Licence Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a>
        </footer>
    </body>
</html>