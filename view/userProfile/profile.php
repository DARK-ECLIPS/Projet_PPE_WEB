<!DOCTYPE html>
<?php
session_start();
include_once('../../model/controllers/CheckUp.php');
?>
<!-- echo ($_SESSION['userInfo']['nom']) -->
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboad</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" type="text/css" href="../../css/profile.css">
  </head>
  
  <body>
    <?php include_once('../model/navigation.php'); ?>

    <div class="main">

      <?php include_once('../model/topbar.php'); ?>
      

      <div class="details">
        <div class="recentOrders">
          <div class="cardHeader">
            <div class="user">
              <a">
                <img src="data:image/jpg;charset=ut8;base64,<?php echo base64_encode($_SESSION['userInfo']['avatar']); ?>" />
              </a>
              <a href="avatar">
                <span class="icon"><i class="fas fa-pencil-alt"></i></span>
              </a>
            </div>
            <div class="pass">
              <a href="password">
                <span class="icon"><i class="fas fa-unlock-alt"></i></span>
                <span class="title">Modifier le mot de passe</span>
              </a>
            </div>
          </div>
          <table>
            <thead>
              <tr>
                <td>Infos</td>
                <td><?php echo $_SESSION['userInfo']['matter']; ?></td>
                <td>Modifier</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Pseudo</td>
                <td><?php echo $_SESSION['userInfo']['pseudo']; ?></td>
                <td><span class="status edit"><i class="fas fa-pencil-alt"></i></span></td>
              </tr>
              <tr>
                <td>Nom</td>
                <td><?php echo $_SESSION['userInfo']['nom']; ?></td>
                <td><span class="status edit"><i class="fas fa-pencil-alt"></i></span></td>
              </tr>
              <tr>
                <td>Prénom</td>
                <td><?php echo $_SESSION['userInfo']['prenom']; ?></td>
                <td><span class="status edit"><i class="fas fa-pencil-alt"></i></span></td>
              </tr>
              <tr>
                <td>Téléphone</td>
                <td><?php echo $_SESSION['userInfo']['tel']; ?></td>
                <td><span class="status edit"><i class="fas fa-pencil-alt"></i></span></td>
              </tr>
              <tr>
                <td>Mail</td>
                <td><?php echo $_SESSION['userInfo']['email']; ?></td>
                <td><span class="status edit"><i class="fas fa-pencil-alt"></i></span></td>
              </tr>
              <tr>
                <td>Genre</td>
                <td><?php echo $_SESSION['userInfo']['sexe']; ?></td>
                <td><span class="status edit"><i class="fas fa-pencil-alt"></i></span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script>
      function toggleMenu() {
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main');
        toggle.classList.toggle('active')
        navigation.classList.toggle('active')
        main.classList.toggle('active')
      }
    </script>
  </body>
</html>