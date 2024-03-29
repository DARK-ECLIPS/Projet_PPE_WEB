<!DOCTYPE html>
<html>

  <div class="details">

    <?php include_once('model/assets/sass/snow.html'); ?>

    <div class="recentOrders">
      <div class="cardHeader"> 
        <h2>Réservation d'équipement</h2>
        
        <div class= "reserv-container">
          <div class="row">
            <div class="select">
              Professeur :
              <a><?php echo "".$_SESSION['userInfo']['nom']." ".$_SESSION['userInfo']['prenom']." "; ?></a>
            </div>
          </div>

          
          <div class="row">
            <div class="select">
              <label for="date">Date de réservation : </label>
              <input type="date" id="date" />
            </div>
          </div>

          
          
          <div class="row">
            <div class="select">
              <label for="classe">Classe : </label>
              <select name="classe" id="classe">
                  <option value="">--Veuillez choisir une option--</option>
              </select> 
            </div>
          </div>



          <div class="row">
            <div class="select">
              <label for=" H-reservation ">Heure de réservation : </label>
              <input type="time" id=" H-reservation " />
            </div>
          </div>


          <div class="row">
            <div class="select">
              <label for="equipement">Equipement : </label>
              <select name="equipement" id="equipement">
                  <option value="">--Veuillez choisir une option--</option>
                  <option value="">--Vidéo Projecteur--</option>
                  <option value="">--Multiprise--</option>
                  <option value="">--Ordinateur--</option>
              </select> 
            </div>
          </div>


        </div>
          
        <div class="button">
          <a href="index.php?OperaPPE=menu"><input type="button" value='Annulé'></a>
          <input type="submit" value="Valider">
        </div>
        
      </div>
    </div>
  </div>
</html>