<!doctype html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />

	<link rel="stylesheet" href="../../assets/css/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link type="text/css" rel="stylesheet" href="../../librairies/materialize/css/materialize.min.css"  media="screen,projection"/>
	<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<header>
		<nav class="navindex">
			<div class="nav-wrapper">
				<a href="#!" class="brand-logo">
					<h3>Intranet Enfance et Partage</h3>
					<!-- <img class="logoHeader" src= "<?= isset($nav) ? $nav : "" ?>assets/img/enfanceEtPartageLogo.png"> -->
				</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="articles.php">Fil d'actualité</a></li>
					<li><a href="panel.php">Panel Administrations</a></li>
					<li><a href="documents.php">Documents Administratifs</a></li>
					<li class="btn_deco"><a href="../index.php">Se Deconnecter</a></li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="articles.php">Fil d'actualité</a></li>
					<li><a href="panel.php">Panel Administrations</a></li>
					<li><a href="documents.php">Documents Administratifs</a></li>
					<li class="btn_deco"><a href="../../index.php">Se Deconnecter</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<main>
		<!-- Page Layout here -->
		<div class="row">

			<div class="col s2 menu_left hide-on-med-and-down">
				<div class="menu_left_un">
					<div class="col s5 content_img_profil">
						<img src="../img/default.jpg" alt="" class="circle responsive-img img_profil"> <!-- notice the "circle" class -->
					</div>
					<div class="col s7 fiche_profil">
						<h5 class="name_profil">
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
							Poste : Développeur Front-End
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

			<div class="col s10 content_right" >
				<div class="membersList">
					<h2>Listes de Membres</h2>
					<ul class="buttons_menu">
						<li>
							<a class="waves-effect waves-light btn btn_panel modal-trigger" href="#modal1"> <i class="material-icons left">add</i>Ajouter un membre</a>
						</li>
						<li>
							<a class="waves-effect waves-light btn btn_panel modal-trigger" href="#modal3"> <i class="material-icons left">add</i>Créer un groupe</a>
						</li>
						<li>	
							<form>
								<div class="input-field input_search searchbar_content">
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
								<th data-field="price"><a class="btn-floating btn_floating_perso "><i class="material-icons">mode_edit</i></a></th>

							</tr>
							<tr>
								<td>Secrétariat</td>
								<td>DRH</td>
								<td>Céline Rufert</td>
								<td>Employé Asso</td>
								<th data-field="price"><a class="btn-floating btn_floating_perso"><i class="material-icons">mode_edit</i></a></th>
							</tr>
							<tr>
								<td>Informatique</td>
								<td>Developpeur</td>
								<td>Julie Planque</td>
								<td>Employé Asso</td>
								<th data-field="price"><a class="btn-floating btn_floating_perso"><i class="material-icons">mode_edit</i></a></th>
							</tr>
							<tr>
								<td>Justice</td>
								<td>Avocat</td>
								<td>Roger Trucmuche</td>
								<td>Cabinet Montfleur</td>
								<th data-field="price"><a class="btn-floating btn_floating_perso"><i class="material-icons">mode_edit</i></a></th>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- Modal Structure -->
		<div id="modal1" class="modal">
			<div class="modal-content">
				<h3>Ajouter un membre</h3>
				<div class="row">
					<form class="col s12">
						<div class="row">
							<div class="input-field input_form col s4">
								<input  id="name" type="text" class="validate">
								<label for="name">Nom et Prénom</label>
							</div>
							<div class="input-field  input_form col s4">
								<input id="naissance" type="date" class="validate">
								<label for="naissance"></label>
							</div>


							<div class="input-field input_form col s4">
								<input id="adresse" type="text" class="validate">
								<label for="adresse">Adresse</label>
							</div>
							<div class="input-field input_form col s4">
								<input id="poste" type="text" class="validate">
								<label for="poste">Poste Occupé</label>
							</div>
							<div class="input-field input_form col s4">
								<input id="email" type="email" class="validate">
								<label for="email">Email</label>
							</div>

							<div class="input-field input_form col s4">
								<input id="tel" type="text" class="validate">
								<label for="tel">Tel</label>
							</div>

							<div class="input-field input_form col s4">
								<input id="entreprise" type="text" class="validate">
								<label for="entreprise">Entreprise</label>
							</div>
							<div class="input-field input_form col s4">
								<a class='dropdown-button btn dropdown_perso' href='#' data-activates='dropdown1'>Groupe<i class="material-icons right">arrow_drop_down</i></a>
							</div>


							<div class="input-field input_form col s4">
								<input id="password" type="password" class="validate">
								<label for="password">Password</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<textarea id="textarea1" class="materialize-textarea"></textarea>
								<label for="textarea1">Commentaires</label>
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn waves-effect waves-light btn_submit" type="submit" name="action">enregistrer
								<i class="material-icons right">send</i>
							</button>
						</div>
					</form>
				</div>
			</div>
			<ul id='dropdown1' class='dropdown-content'>
				<li><a href="#!">one</a></li>
				<li><a href="#!">two</a></li>
				<li class="divider"></li>
				<li><a href="#!">three</a></li>
			</ul>
		</div>
		<!-- Modal Structure -->
		<div id="modal3" class="modal">
			<div class="modal-content">
				<h3>Ajouter un groupe</h3>
				<div class="row">
					<form class="col s12">
						<div class="row">
							<div class="input-field input_form col s4">
								<input  id="name" type="text" class="validate">
								<label for="name">Nom du groupe</label>
							</div>
							<div class="input-field  input_form col s4">
								<!-- Switch -->
								<div class="switch">
									<label>
										Off
										<input type="checkbox">
										<span class="lever"></span>
										On - Ajout/Modification articles 
									</label>
								</div>
							</div>


							<div class="input-field input_form col s4">
								<!-- Switch -->
								<div class="switch">
									<label>
										Off
										<input type="checkbox">
										<span class="lever"></span>
										On - Ajout documents admin
									</label>
								</div>
							</div>
							<div class="input-field input_form col s6">
								<!-- Switch -->
								<div class="switch">
									<label>
										Off
										<input type="checkbox">
										<span class="lever"></span>
										On - Ajout de membre/ modification profil
									</label>
								</div>
							</div>
						
						</div>
						<div class="row">
							<div class="input-field col s12">
								<textarea id="textarea1" class="materialize-textarea"></textarea>
								<label for="textarea1">Commentaires</label>
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn waves-effect waves-light btn_submit" type="submit" name="action">enregistrer
								<i class="material-icons right">send</i>
							</button>
						</div>
					</form>
				</div>
			</div>
			<ul id='dropdown1' class='dropdown-content'>
				<li><a href="#!">one</a></li>
				<li><a href="#!">two</a></li>
				<li class="divider"></li>
				<li><a href="#!">three</a></li>
			</ul>
		</div>

	</main>

	<script src="../../librairies/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="../../librairies/materialize/js/materialize.min.js"></script>
	<script type="text/javascript" src="../../assets/js/initialize.js"></script>
</body>
</html>