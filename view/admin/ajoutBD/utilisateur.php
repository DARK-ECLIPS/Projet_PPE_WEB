<!DOCTYPE html>
<html>
  
  <body onload="creanauMenu('prof')"></body>
      
	<div class="details">
		<?php include_once('model/assets/sass/snow.html'); ?>
		
		<div class="recentOrders">
			<div class="cardHeader">
			<form method="post" action="controllers/requetes.php?OperaPPE=4441524b2045434e454c4953&Add=utilisateur">

				<h2>Ajout Utilisateur</h2>

				<div class="content">

					<div class="row">
						<div class="checkbox">
							<div>
								<input checked type="radio" id="case2" name="enseignement" value="PROF" onchange="creanauMenu('checkbox', this)">
								<label for="case2">Professeur</label>
							</div>
							<div>
								<input type="radio" id="case1" name="enseignement" value="RECEP" onchange="creanauMenu('checkbox', this)">
								<label for="case1">Receptionniste</label>
							</div>
							<div>
								<input type="radio" id="case3" name="enseignement" value="AUTRE" onchange="creanauMenu('checkbox', this)">
								<label for="case1">Autre</label>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="select">
							<label>N° Sécurité Sociale :</label>
							<input type='text' name='secue' required>
						</div>
					</div>

					
					<div class="row">
						<div class="select">
							<label>Nom :</label>
							<input type='text' name='nom' required />
						</div>
					</div>
					
					<div class="row">
						<div class="select">
							<label>Prenom :</label>
							<input type='text' name='prenom' required />
						</div>
					</div>
					
					<div class="row">
						<div class="select">
						<label>Genre: </label>
							<select name="sexe[]">
								<option value="HOMME" selected>Homme</option>
								<option value="FEMME">Femme</option>
							</select>
						</div>
					</div>
					
					<div class="row">
						<div class="select" required>
						<label>N° Téléphone:</label>
						<input type="tel" name="phone" placeholder="0690-453-678" pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" required>
						</div>
						<small>Format: 0690-123-456</small>
					</div>
					
					<div class="row">
						<div class="select">
							<label>Email :</label>
							<input type="email" name="email" pattern=".+@gmail\.com" required>
						</div>
					</div>
					
					<div class="row">
						<div class="select">
							<label>Password :</label>
							<input type="password" name="password" required>
						</div>
					</div>
				</div>

				<div class="button">
					<a href="index.php?OperaPPE=admin&Action=utilisateurs"><input type="button" name="time" value='Annulé'></a>
					<input type="submit" value="Valider">
				</div>

			</form>
			</div>
		</div>
	</div>
</html>