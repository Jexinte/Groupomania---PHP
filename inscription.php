<?php 

include('./config/db_config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/png" href="./img//logos/logo_main.png" />

  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- CSS -->
  <link rel="stylesheet" href="./css/main.css">
  <title>Inscription</title>
</head>

<body>
  <!-- HEADER -->
  <header>
    <nav>

      <a href="#">Connexion</a>

    </nav>
  </header>

  <div class="inscription-container">
    <h1>Inscription</h1>
    <form>
      <!-- USER -->
      <label for="user">
        Utilisateur*
        <input type="text" name="user" id="user">
      </label>
      <span id="user_error"></span>

      <!-- PERSONAL QUOTE -->
      <label for="personal_quote">
        Citation personnelle*
        <input type="text" name="personal_quote" id="quote">
      </label>
      <span id="quote_error"></span>

      <!-- PROFILE IMAGE -->
      <label for="profile_image">
        Image de profil*
        <input type="file" name="profile_image" id="profile_image">
      </label>
      <span id="profile_error"></span>

      <!-- EMAIL -->
      <label for="mail">
        Adresse électronique*
        <input type="mail" name="mail" id="mail">
      </label>
      <span id="email_error"></span>


      <!-- PASSWORD -->
      <label for="password">
        Mot de passe*
        <input type="password" name="password" id="password">
      </label>
      <span id="password_error"></span>

      <!-- CONFIRMATION PASSWORD -->
      <label for="confirmation_password">
        Confirmez votre mot de passe*
        <input type="password" name="confirmation_password" id="confirmation_password">
      </label>
      <span id="confirmation_password_error"></span>

      <input type="submit" class="submit" name="submitButton" value="Envoyer">
    </form>
  </div>

  <footer>
    <p>© Copyright 2023 - Tous droits réservés</p>
    <a href="#" onclick="switchToDarkMode()"><i class="fa-solid fa-moon"></i></a>
  </footer>
  <script src="./js/dark_mode.js"></script>
</body>

</html>
