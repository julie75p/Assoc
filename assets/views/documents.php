<!doctype html>
<html >
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
				<a href="#!" class="brand-logo  hide-on-med-and-down">
					<h3>Intranet Enfance et Partage</h3>
					<!-- <img class="logoHeader" src= "<?= isset($nav) ? $nav : "" ?>assets/img/enfanceEtPartageLogo.png"> -->
				</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i><h3>Intranet Enfance et Partage</h3></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="articles.php">Fil d'actualité</a></li>
					<li><a href="panel.php">Panel Administrations</a></li>
					<li><a href="documents.php">Documents Administratifs</a></li>
					<li class="btn_deco"><a href="../../index.php">Se Deconnecter</a></li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="articles.php">Fil d'actualité</a></li>
					<li><a href="panel.php">Panel Administrations</a></li>
					<li><a href="documents.php">Documents Administratifs</a></li>
					<li class="btn_deco"><a href="../index.php">Se Deconnecter</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<main>
		<div class="row">

			<div class="col s0 m2 l2 menu_left hide-on-med-and-down">
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

			<!-- Page Layout here -->
			<div class="row">

				<div class=" col s10 content_right">
					<div class="col s12 m12 l8 document_list">
						<h2>Documents Administratifs</h2>
						<div class="space">
							<ul class="buttons_menu">
								<li>	
									<form>
										<div class="input-field input_search searchbar_content s5">
											<input id="search" placeholder="Rechercher"class="searchbar" type="search" required>
											<label for="search"><i class="material-icons">search</i></label>
											<i class="material-icons">close</i>
										</div>
									</form>
								</li>
								<li>
									<a class="waves-effect waves-light btn btn_panel modal-trigger" href="#modal4"> <i class="material-icons left">add</i>Ajouter un document</a>
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
				</div>
			</div>

			<!-- Modal Structure -->
			<div id="modal4" class="modal">
				<div class="modal-content">
					<h3>Ajouter un document</h3>
					<div class="row">
						<form class="col s12">
							<div class="row">
								<div class="input-field input_form col s4">
									<h5 class="blueTitle"> Choisir </h5>
									<a class='dropdown-button btn dropdown_perso' href='#' data-activates='dropdown1'>Catégorie qui existe déjà<i class="material-icons right">arrow_drop_down</i></a>
								</div>
								<div class="input-field input_form col s1">
								<p class="choice">ou</p>
							</div>
								<div class="input-field input_form col s4 category">
									<input  id="name" type="text" class="validate">
									<label for="name">Créer un nouvelle Catégorie</label>
								</div>

								<div class="input-field input_form col s12">
									<div class="file-field input-field">
										<div class="btn">
											<span>File</span>
											<input type="file" multiple>
										</div>
										<div class="file-path-wrapper">
											<input class="file-path validate" type="text" placeholder="Upload one or more files">
										</div>
									</div>
								</div>

								<div class="modal-footer">
									<button class="btn waves-effect waves-light btn_submit" type="submit" name="action">Ajouter
										<i class="material-icons right">send</i>
									</button>
								</div>
							</form>
						</div>
					</div>
					<ul id='dropdown1' class='dropdown-content'>
						<li><a href="#!">Secrétariat</a></li>
						<li><a href="#!">Avocats</a></li>
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