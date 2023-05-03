<nav class="white" role="navigation">
    
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img class="" src="./imgs/BTECH.png" width="6%"></a>
      <?php if(isset($_GET['menu']) && ($_GET['menu'] != "login")): ?>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php?menu=dashboard">Dashboard</a></li>
        <li><a href="index.php?menu=list">Liste des articles</a></li>
        <li><a href="index.php?menu=write">Edition des articles</a></li>
        <li><a href="index.php?menu=category">Categories</a></li>
        <li><a href="index.php?menu=settings">Paramètres</a></li>
        <li><a href="index.php?menu=logout">Deconnexion</a></li>
        <li><a href="index.php?menu=exit">Quitter</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="index.php?menu=dashboard">Dashboard</a></li>
        <li><a href="index.php?menu=list">Liste des articles</a></li>
        <li><a href="index.php?menu=write">Edition des articles</a></li>
        <li><a href="index.php?menu=category">Categories</a></li>
        <li><a href="index.php?menu=settings">Paramètres</a></li>
        <li><a href="index.php?menu=logout">Deconnexion</a></li>
        <li><a href="index.php?menu=exit">Quitter</a></li>
      </ul>

      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <?php endif; ?>
    </div>
    
  </nav>