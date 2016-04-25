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
	<?php include("navbar.php"); ?>
	<main>
		<!-- Page Layout here -->
		<div class="row">

			<div class="col s3">
				<div class="menu_left">

					<div class="row valign-wrapper profil">
						<div class="col s3">
							<img src="../img/default.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
						</div>
						<div class="col s10">
							<p>
								Julie Planque
							</p>
							<p>
								Julie Planque
							</p>
							<p>
								Julie Planque
							</p>
						</div>
					</div>
				</div>


			</div>

			<div class="col s8">
				<div class="membersList">
					<h2>Listes de Membres</h2>
				<table class="striped">
					<thead>
						<tr>
							<th data-field="id">Groupe</th>
							<th data-field="name">Poste</th>
							<th data-field="price">Nom/Prénom</th>
							<th data-field="price">Entreprise</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td>Alvin</td>
							<td>Eclair</td>
							<td>$0.87</td>
							<td>$7.00</td>
						</tr>
						<tr>
							<td>Alan</td>
							<td>Jellybean</td>
							<td>$3.76</td>
							<td>$7.00</td>
						</tr>
						<tr>
							<td>Jonathan</td>
							<td>Lollipop</td>
							<td>$7.00</td>
							<td>$7.00</td>
						</tr>
						<tr>
							<td>Jonathan</td>
							<td>Lollipop</td>
							<td>$7.00</td>
							<td>$7.00</td>
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