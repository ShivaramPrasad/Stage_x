<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Stage X - Suivi</title>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="css/master.css" media="screen" title="no title">
</head>
<body>

  <?php require_once('require/header.php') ?>

  <div class="container">
    <main>
      <div class="row">
        <div class="col s6">
          <h4>Accueil</h4>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <div class="stats">
            <ul>
                <li>Statistique 1<span class="percent v70">70 %</span></li>
                <li>Statistique 2<span class="percent v30">30 %</span></li>
                <li>Statistique 3<span class="percent v100">100 %</span></li>
            </ul>
          </div>
          <span>Statistique 4</span>
          <div class="pie"></div>
        </div>
      </div>
    </main>
  </div>

    <?php require_once('require/footer.php') ?>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript">
  $('.button-collapse').sideNav({
    closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
    draggable: true // Choose whether you can drag to open on touch screens
  }
  );
  </script>
</body>
</html>
