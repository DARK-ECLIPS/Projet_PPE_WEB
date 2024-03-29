<!DOCTYPE html>
<?php
include "controllers/classes/Users.php";
require 'controllers/classes/ConnexionDB.php';
require 'controllers/classes/ActionsDB.php';

$conn_db = new ConnexionDB();
$base_donnees = new ActionsDB($conn_db);
$reponse = $base_donnees->getAllUsers();
?>
<!-- echo ($_SESSION['userInfo']['nom']) -->
<html>

  <div class="details">
    
    <?php include_once('model/assets/sass/snow.html'); ?>
    
    <div class="recentOrders">
      <div class="cardHeader">
        <?php
          if (isset($_GET['OperaPPE2'])) {
            if ($_GET['OperaPPE2'] == "4441524b2045434e454c4953") {
              if (isset($_GET['operation']) && $_GET['operation'] == 'utilisateur') {
        ?>
                <form method="post" action="controllers/adminRequete.php?OperaPPE=4441524b2045434e454c4953">
                  <h1>Modification d'utilisateur</h1>

                  <div class="content">
                    <input type="hidden" name="OperaPPE" value="utilisateur">
                    <input type="hidden" name="userID" value="<?php echo $_GET["id"] ?>">

                    <div class="row">
                      <div class="select">
                        <label>Nom : </label>
                        <input type='text' name='nom' value="<?php echo $_GET["nom"] ?>" required />
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="select">
                        <label>Prénom : </label>
                        <input type='text' name='prenom' value="<?php echo $_GET["prenom"] ?>" required />
                      </div>
                    </div>

                    <div class="row">
                      <div class="select">
                        <label>Mot de passe : </label>
                        <input type='password' name='mdp' value="<?php echo $_GET["mdp"] ?>" required />              
                      </div>  
                    </div>


                    <div class="row">
                      <div class="select">
                        <label>Mail : </label>
                        <input type='email' name='mail' value="<?php echo $_GET["mail"] ?>" required />
                      </div>  
                    </div>

                    <div class="row">
                      <div class="select">
                        <label>Sexe: </label>
                        <select name="sexe">
                          <option value="NON-DEFINI" selected>Non-Defini</option>
                          <option value="HOMME">Homme</option>
                          <option value="FEMME">Femme</option>
                        </select>
                      </div>  
                    </div>

                  </div>
                  
                  <div class="button">
                    <a href="index.php?OperaPPE=admin&Action=utilisateurs.php"><input type="button" name="time" value='Annulé'></a>
                    <input type="submit" value="Valider">
                  </div>

                </form>

                
        <?php
              }
              
              if (isset($_GET['operation']) && $_GET['operation'] == 'classe') {
                ?>
                  <form method="post" action="controllers/adminRequete.php?OperaPPE=4441524b2045434e454c4953">
                    <h1>Modification de la classe</h1>

                    <div class="content">
                      <input type="hidden" name="OperaPPE" value="classe">
                      <input type="hidden" name="oldData" value="<?php echo $_GET["libelle_classe"] ?>">
                      <input type="hidden" name="userID" value="<?php echo $_GET["id"] ?>">
                              
                      <div class="row">
                        <div class="checkbox">
                          <div>
                            <input type="radio" id="case1" name="enseignement" value="COLLEGE" onchange="matiereMenu('checkbox', this)" <?php if ($_GET["id_enseignement"] == 1) echo "checked" ?>>
                            <label for="case1">Collège</label>
                          </div>
                          <div>
                            <input type="radio" id="case2" name="enseignement" value="LYCEE" onchange="matiereMenu('checkbox', this)" <?php if ($_GET["id_enseignement"] == 2) echo "checked" ?>>
                            <label for="case2">Lycée</label>
                          </div>
                          <div>
                            <input type="radio" id="case3" name="enseignement" value="BTS" onchange="matiereMenu('checkbox', this)" <?php if ($_GET["id_enseignement"] == 3) echo "checked" ?>>
                            <label for="case3">BTS</label>
                          </div>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="select">
                          <label>Classe : </label>
                          <input type='text' name='classe' value="<?php echo $_GET["libelle_classe"] ?>" required />
                        </div>
                      </div>

                      <div class="row">
                        <div class="select">
                          <label>Mot de passe : </label>
                          <input type='number' name='nbr_eleve' value="<?php echo $_GET["nbr_eleve"] ?>" min="0" required />              
                        </div>  
                      </div>

                    </div>
                    
                    <div class="button">
                      <a href="index.php?OperaPPE=admin&Action=classes.php"><input type="button" name="time" value='Annulé'></a>
                      <input type="submit" value="Valider">
                    </div>

                  </form>
    
                        
                <?php
                      }
            }
          }
        ?>

      </div>
    </div>
  </div>
</html>