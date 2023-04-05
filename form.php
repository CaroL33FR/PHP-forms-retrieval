<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil de formulaires PHP - Récupération</title>
</head>

<body>
    <h1>Formulaire de contact pour QUEST PHP Advanced</h1>
    <h2>Les formulaires : récupération</h2>

    <form  action="thanks.php"  method="post">
        <div>
            <label  for="nom">Nom :</label>
            <input  type="text"  id="nom"  name="user_name">
        </div>
        <div>
            <label  for="prénom">Prénom :</label>
            <input  type="text"  id="prénom"  name="user_firstname">
        </div>
        <div>
            <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email">
        </div>
        <div>
            <label  for="telephone">Téléphone :</label>
            <input  type="tel"  id="telephone"  name="user_telephone">
        </div>
        <div>
            <label for="sujet">Sujet :</label>
            <select id="sujet"  name="user_subject">
                <option value="intro_message" name="intro_message">Sélectionnez l'option appropriée</option>
                <option value="Problème technique" name="tech_problem">Problème technique</option>
                <option value="Demande d'informations" name="info_request">Demande d'informations</option>
                <option value="Plainte" name="complaint">Plainte</option>
                <option value="Satisfaction" name="satisfaction">Satisfaction</option>
            </select>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message" rows="5" cols="40"></textarea>
        </div>
        <div  class="button">
            <button  type="submit">Envoyez votre message</button>
        </div>
      
    </form>
  
</body>
</html>


