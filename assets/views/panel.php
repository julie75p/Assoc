<!doctype html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />

	<link rel="stylesheet" href="../../assets/css/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link type="text/css" rel="stylesheet" href="../../librairies/materialize/css/materialize.min.css"  media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<?php 
	$nav = "../../";
	include("navbar.php"); ?>
	<main>
		<!-- Page Layout here -->
		<div class="row">

			<div class="col s2">
				<div class="menu_left">
					<div class="col s4 content_img_profil">
						<img src="../img/default.jpg" alt="" class="circle responsive-img img_profil"> <!-- notice the "circle" class -->
					</div>
					<div class="col s8 fiche_profil">
						<h5>
							Julie Planque
						</h5>
						<p>
							01/05/1992
						</p>
						<p>
							10B rue du partage
						</p>
						<p>75018 Paris</p>
					</div>
					<div class="col s12 content_profil">
						<p>
							Groupe : Développeur Front-End
						</p>
						<p>
							Tel pro : 0150485978
						</p>
						<p>
							@ : julie.planque@partage.org
						</p>
						<a href="">modifier profil</a>
					</div>
				</div>
			</div>

			<div class="col s8">
				<div class="membersList">
					<h2>Listes de Membres</h2>
					<ul class="buttons_menu">
					<li>
						<a class="waves-effect waves-light btn btn_panel"> <i class="material-icons left">add</i>Ajouter un membre</a>
					</li>
					<li>
						<a class="waves-effect waves-light btn btn_panel"> <i class="material-icons left">add</i>Créer un groupe</a>
					</li>
					<li>	
					<form>
						<div class="input-field searchbar_content">
							<input id="search" placeholder="Rechercher"class="searchbar" type="search" required>
							<label for="search"><i class="material-icons">search</i></label>
							<i class="material-icons">close</i>
						</div>
					</form>
					</li>
					</ul>
					<table class="striped">
						<thead>
							<tr>
								<th data-field="id">Groupe</th>
								<th data-field="name">Poste</th>
								<th data-field="price">Nom/Prénom</th>
								<th data-field="price">Entreprise</th>
								<th data-field="price">Modifier</th>
								
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>Secrétariat</td>
								<td>Secrétaire</td>
								<td>Ashley Azerty</td>
								<td>Employé Asso</td>
								<th data-field="price"><a class="btn-floating "><i class="material-icons">mode_edit</i></a></th>

							</tr>
							<tr>
								<td>Secrétariat</td>
								<td>DRH</td>
								<td>Céline Rufert</td>
								<td>Employé Asso</td>
								<th data-field="price"><a class="btn-floating "><i class="material-icons">mode_edit</i></a></th>
							</tr>
							<tr>
								<td>Informatique</td>
								<td>Developpeur</td>
								<td>Julie Planque</td>
								<td>Employé Asso</td>
								<th data-field="price"><a class="btn-floating "><i class="material-icons">mode_edit</i></a></th>
							</tr>
							<tr>
								<td>Justice</td>
								<td>Avocat</td>
								<td>Roger Trucmuche</td>
								<td>Cabinet Montfleur</td>
								<th data-field="price"><a class="btn-floating "><i class="material-icons">mode_edit</i></a></th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

		</div>
		
	</main>

	<script src="../../librairies/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="../../librairies/materialize/js/materialize.min.js"></script>
	<script type="text/javascript" src="../../assets/js/initialize.js"></script>
</body>
</html>