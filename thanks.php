<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks Page</title>
</head>

<body>
    <p>Merci <?php echo $_POST['user_name']?> <?php echo $_POST ['user_firstname']?> de nous avoir contacté à propos de "<?php echo $_POST['user_subject'] ?>".</p>
    <p>Un de nos conseillers vous contactera soit à l'adresse <?php echo $_POST['user_email']?> ou par téléphone
         au <?php echo $_POST['user_telephone']?> dans les plus brefs délais pour traiter votre demande :
         "<?php echo $_POST['user_message']?>"
    </p>
   
</body>
</html>
