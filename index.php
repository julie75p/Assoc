<!doctype html>
<html>
<head>
  <title></title>
  <meta charset="utf-8" />

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link type="text/css" rel="stylesheet" href="librairies/materialize/css/materialize.min.css"  media="screen,projection"/>
  <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
 <?php include("assets/views/navbar.php"); ?>
  <main>
    <div class="row">
      <!-- Textfield with Floating Label -->
      <div class="connect col s12 m12 l3">

        <form class="connection" autocomplete="off">
          <div class="row">
            <div class="input-field input_connect col s12">
              <input  id="identifiant" type="text" class="validate" autocomplete="off">
              <label for="identifiant">Identifiant</label>
            </div>
            <div class="input-field input_connect col  s12">
              <input id="password" type="password" class="validate" autocomplete="off">
              <label for="password">Mot de passe</label>
            </div>
            <button class="btn waves-effect waves-light button_connexion" type="submit" name="action">se connecter
            </button>
            <div class="links col s12">
              <a href="https://www.facebook.com/EnfanceEtPartage/?fref=nf"  target="_blank" class="col s12"><i class="material-icons">trending_flat</i>Page Officiel Facebook</a>
              <a href="http://www.enfance-et-partage.org/" target="_blank" class="col s12"><i class="material-icons">trending_flat</i>Site Officiel</a>
            </div>
          </div>
        </form>
      </div>

      <div class="carousel col s12 m7 l8">
        <a class="carousel-item" href="#five!"><img src="assets/img/9.jpg"></a>
        <a class="carousel-item" href="#four!"><img src="assets/img/8.jpg"></a>
        <a class="carousel-item" href="#three!"><img src="assets/img/7.jpg"></a>
        <a class="carousel-item" href="#one!"><img src="assets/img/5.jpg"></a>
        <a class="carousel-item" href="#two!"><img src="assets/img/6.jpg"></a>
      </div>
    </div>
  </main>
  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">

        </div>
        <div class="col l4 offset-l2 s12">

        </div>
      </div>
    </div>
    <div class="footer-copyright col s12">
      <div class="container">
        &copy; 2016 Copyright Samsung Campus
        <a class="grey-text text-lighten-4 right" href="#!">Contactez-Nous</a>
      </div>
    </div>
  </footer>

  <script src="librairies/jquery-2.2.3.min.js"></script>
  <script type="text/javascript" src="librairies/materialize/js/materialize.min.js"></script>
  <script type="text/javascript" src="assets/js/initialize.js"></script>
</body>
</html>