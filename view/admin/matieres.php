<!DOCTYPE html>
<?php
include "controllers/classes/Users.php";
require 'controllers/classes/ConnexionDB.php';
require 'controllers/classes/ActionsDB.php';

$conn_db = new ConnexionDB();
$base_donnees = new ActionsDB($conn_db);
$reponse = $base_donnees->getAllmatieres();
?>

<html>
  
  <body onload="creanauMenu('prof')"></body>

	<div class="details">
		<?php include_once('model/assets/sass/snow.html'); ?>
		
		<div class="recentOrders">
			<div class="cardHeader">

				<h1>Affichage Matiere</h1>
				<h2>Affichage Matiere</h2>
				<table class="scrolldown">
					<thead>
							<tr>
									<th>Enseignement</th>
									<th>Classe</th>
									<th>Matière</th>
									<th>Supprimer</th>
									<th>MAJ</th>
							</tr>
					</thead>
					<tbody>
						<?php
							/*
							$donnees recupere ligne par ligne les
							informations qui sont dans la vue $reponse.
							fetch() recupere une ligne à la fois.
							*/
							while ($donnees = $reponse->fetch()) {
								if ($donnees["id_enseignement"] == 1) $enseignement = "COLLEGE";
								else if ($donnees["id_enseignement"] == 2) $enseignement = "LUCÉE";
								else $enseignement = "BTS"
								?>
									<tr>
											<td><?php echo $enseignement ?></td>
											<td><?php echo $donnees["libelle_classe"] ?></td>
											<td><?php echo $donnees["libelle_matiere"] ?></td>
											<td align="center">
												<a href="controllers/requetes.php?OperaPPE=4441524b2045434e454c4953&operation=deleteTab&tabID=<?php echo $donnees["id_matiere"] ?>&tab=1">
													<i class="fas fa-trash-alt"></i>
												</a>
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
													?>">
														--> <i class="fas fa-edit"></i> <!--
													</a> -->
											</td>
									</tr>
					<?php } ?>
					</tbody>
				</table>


			
				<div class="button">
					<a href="index.php?OperaPPE=admin&Action=menu"><input type="button" value='Retour'></a>
					<a href="index.php?OperaPPE=admin&Action=ajoutBD&Option=matiere"><input type="submit" value="Ajouter"></a>
				</div>

			</div>
		</div>
	</div>
</html>