<!DOCTYPE html>
<?php

include "controllers/classes/Users.php";
require 'controllers/classes/ConnexionDB.php';
require 'controllers/classes/ActionsDB.php';

$conn_db = new ConnexionDB();
$base_donnees = new ActionsDB($conn_db);
$reponse = $base_donnees->getAllCreneaux();
?>

<html>
  
  <body onload="creanauMenu('prof')"></body>

	<div class="details">
		<?php include_once('model/assets/sass/snow.html'); ?>
		
		<div class="recentOrders">
			<div class="cardHeader">

				<h1>Affichage Creneau</h1>
				<h2>Affichage Creneau</h2>

				<table class="scrolldown">
					<thead>
							<tr>
									<th>Professeur</th>
									<th>Classes</th>
									<th>Matiere</th>
									<th>Jour</th>
									<th>Horaire</th>
									<th>Salle</th>
									<th>Supprimer</th>
									<th>MAJ</th>
							</tr>
					</thead>
					<tbody>
						<?php
							while ($donnees = $reponse->fetch()) {
								?>
									<tr>
										<td><?php echo $base_donnees->getUser("id_utilisateur", $donnees["id_utilisateur"])->fetch()["pseudo"] ?></td>
										<td><?php echo $donnees["libelle_classe"] ?></td>
										<td><?php echo $base_donnees->getMatiere("id_matiere", $donnees["id_matiere"]) ->fetch()["libelle_matiere"] ?></td>
										<td><?php echo $donnees["edt_jour"] ?></td>
										<td><?php echo "$donnees[edt_heure_deb] - $donnees[edt_heure_fin]" ?></td>
										<td><?php echo "$donnees[salle_de_classe]" ?></td>
										<td align="center">
											<!-- <a href="controllers/requetes.php?OperaPPE=4441524b2045434e454c4953&operation=deleteUser&userID=<?php echo $donnees["id_utilisateur"] ?>"> -->
												<i class="fas fa-trash-alt"></i>
											<!-- </a> -->
										</td>
										<td align="center">
											<!-- <a href="./updateData.php?OperaPPE=4441524b2045434e454c4953&operation=updateUser<?php
												// echo '&pseudo='.$donnees["pseudo"]. 
												// 	'&nom='.$donnees["nom"].
												// 	'&prenom='.$donnees["prenom"].
												// 	'&sexe='.$donnees["sexe"].
												// 	'&mdp='.$donnees["password"].
												// 	'&mail='.$donnees["mail_utilisateur"].
												// 	'&id='.$donnees["id_utilisateur"]
												?>"> -->
												<i class="fas fa-edit"></i>
											</a>
										</td>
									</tr>
								<?php
							} ?>
					</tbody>
			</table>

			
			
			<div class="button">
				<a href="index.php?OperaPPE=admin&Action=menu"><input type="button" value='Retour'></a>
				<a href="index.php?OperaPPE=admin&Action=ajoutBD&Option=creneau"><input type="submit" value="Ajouter"></a>
			</div>

			</div>
		</div>
	</div>
</html>