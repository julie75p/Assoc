<!doctype html>
<html class="background-color">
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
	<?php 
	$nav = "../../";
	include("navbar.php"); ?>
	<main>
		<!-- Page Layout here -->
		<div class="row">

		

			<div class="col s8 document_list">
				
					<h2>Documents Administratifs</h2>
					<ul class="buttons_menu">
						<li>
							<a class="waves-effect waves-light btn btn_panel"> <i class="material-icons left">add</i>Ajouter un document</a>
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
					<ul class="List_doc">
						<li class="li_doc">Documents secrétariat</li>
						<li class="li_doc">Documents pôle 2</li>
						<li class="li_doc">Documents pôle 3</li>
						<li></li>
					</ul>	
				
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

	</main>

	<script src="../../librairies/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="../../librairies/materialize/js/materialize.min.js"></script>
	<script type="text/javascript" src="../../assets/js/initialize.js"></script>
</body>
</html>