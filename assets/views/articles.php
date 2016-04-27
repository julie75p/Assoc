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

			<div class="col s10 content_right">
				<h2>Fil d'Actualité</h2>
				<ul class="buttons_menu">
					<li>
						<a class="waves-effect waves-light btn btn_panel modal-trigger" href="#modal2"> <i class="material-icons left">add</i>Ajouter un article</a>
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
				<div class="row">
					<article class="col s9">
						<div class="head_article">
							<div class="fixed-action-btn horizontal click-to-toggle btn_article" style="bottom: 45px; right: 24px;">
								<a class="btn-floating btn-large red">
									<i class="material-icons">menu</i>
								</a>
								<ul>
									<li><a class="btn-floating red"><i class="material-icons">delete</i></a></li>
									<li><a class="btn-floating blue"><i class="material-icons">mode_edit</i></a></li>
								</ul>
							</div>
							<h2>Name article</h2>
						</div>

						<img src="../img/9.jpg">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat vestibulum euismod. Quisque et aliquet lectus. Donec varius ornare pretium. Mauris fringilla metus nec tortor sollicitudin tempor. Praesent dui sem, vestibulum eget felis et, ultrices suscipit sem. Nunc in odio ac tortor tempor ullamcorper. Quisque at enim at risus ullamcorper iaculis. In hac habitasse platea dictumst.

							Curabitur id metus sed mi dictum euismod quis at purus. Nullam mattis maximus sapien, eu condimentum ipsum blandit eget. Proin nec pharetra augue. Aliquam egestas lacus semper magna hendrerit, sed pulvinar dolor mattis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas convallis feugiat posuere. In luctus sodales turpis, non tempus massa porta posuere. Integer pellentesque mi sapien, ut sollicitudin metus consectetur at. Proin porta eleifend lorem, sed ultricies enim aliquet id. Fusce lacinia finibus consequat. In et ornare augue, sit amet ullamcorper tellus. Morbi feugiat cursus quam tempor condimentum. Curabitur blandit, lorem id vestibulum pretium, ipsum eros tempor nisi, sit amet malesuada nibh dui nec ante. Donec id pharetra risus.

							In lacinia dui in convallis malesuada. Nam posuere arcu at risus bibendum tempor. Sed aliquam lorem orci, vel tempus diam condimentum vitae. Etiam eget velit suscipit, efficitur metus et, luctus augue. Vivamus ut auctor metus. Curabitur ut enim dignissim, fringilla purus non, luctus tortor. Phasellus nibh nunc, pulvinar sagittis massa eu, eleifend pharetra sem. Nam tempus neque ex.

							Maecenas ut ipsum ut odio consequat maximus viverra sed neque. Suspendisse aliquam molestie quam. Vestibulum metus elit, pulvinar eu pellentesque at, pharetra in nisl. Praesent tempus, lectus ut imperdiet fringilla, nibh odio ultricies lorem, in pretium orci elit id magna. Nunc pharetra nibh id magna hendrerit, sit amet aliquet nisl vehicula. Quisque id nisi massa. Quisque et sagittis orci, a pulvinar lectus. Etiam quis mi felis. Aliquam blandit eros at leo rutrum ultricies. Suspendisse imperdiet mauris ac lorem pharetra finibus. Cras viverra elementum augue, vel laoreet lacus luctus non. Ut at tempor ligula. Nam ut varius urna. Suspendisse eget aliquam orci. Nunc eget malesuada nisl, nec vestibulum sapien. Cras pellentesque massa at elit laoreet, a pharetra est finibus.

							Cras rutrum finibus pulvinar. Ut et dolor finibus, egestas mauris ut, scelerisque dui. Praesent nec tincidunt leo, a dictum quam. Nulla ut sem felis. Fusce a augue in ex dignissim dapibus. Nulla facilisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam hendrerit, nisl eget congue consectetur, velit arcu ultricies turpis, vel dictum nibh lectus aliquam quam. Cras at tincidunt nulla. Integer sit amet egestas felis. Praesent vel sem quis odio ullamcorper pharetra sed in lorem. Integer elementum elementum diam, et tristique felis posuere a. Donec quis iaculis velit. Proin sit amet tempor mi.</p>
							<p class="date_article">Le 11/05/2016<span class="name"> par Julie Planque</span></p>
						</article>	
					</div>
					<br>

					<div class="row">
						<article class="col s9">
							<div class="head_article">
								<div class="fixed-action-btn horizontal click-to-toggle btn_article" style="bottom: 45px; right: 24px;">
									<a class="btn-floating btn-large red">
										<i class="material-icons">menu</i>
									</a>
									<ul>
										<li><a class="btn-floating red"><i class="material-icons">delete</i></a></li>
										<li><a class="btn-floating blue"><i class="material-icons">mode_edit</i></a></li>
									</ul>
								</div>
								<h2>Name article</h2>
							</div>


							<img src="../img/9.jpg">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat vestibulum euismod. Quisque et aliquet lectus. Donec varius ornare pretium. Mauris fringilla metus nec tortor sollicitudin tempor. Praesent dui sem, vestibulum eget felis et, ultrices suscipit sem. Nunc in odio ac tortor tempor ullamcorper. Quisque at enim at risus ullamcorper iaculis. In hac habitasse platea dictumst.

								Curabitur id metus sed mi dictum euismod quis at purus. Nullam mattis maximus sapien, eu condimentum ipsum blandit eget. Proin nec pharetra augue. Aliquam egestas lacus semper magna hendrerit, sed pulvinar dolor mattis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas convallis feugiat posuere. In luctus sodales turpis, non tempus massa porta posuere. Integer pellentesque mi sapien, ut sollicitudin metus consectetur at. Proin porta eleifend lorem, sed ultricies enim aliquet id. Fusce lacinia finibus consequat. In et ornare augue, sit amet ullamcorper tellus. Morbi feugiat cursus quam tempor condimentum. Curabitur blandit, lorem id vestibulum pretium, ipsum eros tempor nisi, sit amet malesuada nibh dui nec ante. Donec id pharetra risus.

								In lacinia dui in convallis malesuada. Nam posuere arcu at risus bibendum tempor. Sed aliquam lorem orci, vel tempus diam condimentum vitae. Etiam eget velit suscipit, efficitur metus et, luctus augue. Vivamus ut auctor metus. Curabitur ut enim dignissim, fringilla purus non, luctus tortor. Phasellus nibh nunc, pulvinar sagittis massa eu, eleifend pharetra sem. Nam tempus neque ex.

								Maecenas ut ipsum ut odio consequat maximus viverra sed neque. Suspendisse aliquam molestie quam. Vestibulum metus elit, pulvinar eu pellentesque at, pharetra in nisl. Praesent tempus, lectus ut imperdiet fringilla, nibh odio ultricies lorem, in pretium orci elit id magna. Nunc pharetra nibh id magna hendrerit, sit amet aliquet nisl vehicula. Quisque id nisi massa. Quisque et sagittis orci, a pulvinar lectus. Etiam quis mi felis. Aliquam blandit eros at leo rutrum ultricies. Suspendisse imperdiet mauris ac lorem pharetra finibus. Cras viverra elementum augue, vel laoreet lacus luctus non. Ut at tempor ligula. Nam ut varius urna. Suspendisse eget aliquam orci. Nunc eget malesuada nisl, nec vestibulum sapien. Cras pellentesque massa at elit laoreet, a pharetra est finibus.

								Cras rutrum finibus pulvinar. Ut et dolor finibus, egestas mauris ut, scelerisque dui. Praesent nec tincidunt leo, a dictum quam. Nulla ut sem felis. Fusce a augue in ex dignissim dapibus. Nulla facilisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam hendrerit, nisl eget congue consectetur, velit arcu ultricies turpis, vel dictum nibh lectus aliquam quam. Cras at tincidunt nulla. Integer sit amet egestas felis. Praesent vel sem quis odio ullamcorper pharetra sed in lorem. Integer elementum elementum diam, et tristique felis posuere a. Donec quis iaculis velit. Proin sit amet tempor mi.</p>
								<p class="date_article">Le 11/05/2016<span class="name"> par Julie Planque</span></p>
							</article>	
						</div>


					</div>
				</div>

				<!-- Modal Structure -->
				<div id="modal2" class="modal">
					<div class="modal-content">
						<h3>Ajouter un article</h3>
						<div class="row">
							<form class="col s12">
								<div class="row">
									<div class="input-field input_form col s4">
										<input  id="name" type="text" class="validate">
										<label for="name">Nom de l'article</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<textarea id="textarea1" class="materialize-textarea"></textarea>
										<label for="textarea1">Contenu de l'article</label>
									</div>
								</div>
								<div class="modal-footer">
									<button class="btn waves-effect waves-light btn_submit" type="submit" name="action">Publier
										<i class="material-icons right">send</i>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</main>

			<script src="../../librairies/jquery-2.2.3.min.js"></script>
			<script type="text/javascript" src="../../librairies/materialize/js/materialize.min.js"></script>
			<script type="text/javascript" src="../../assets/js/initialize.js"></script>
		</body>
		</html>