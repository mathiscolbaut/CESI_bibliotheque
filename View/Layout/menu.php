<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <!-- Bouton de menu hamburger pour mobile -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <!-- Icône de menu hamburger -->
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu principal -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?= URL ?>accueil">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= URL ?>login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= URL ?>register">Register</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="<?= URL ?>livre">Livre</a>

        </li>
      </ul>
    </div>
  </div>
</nav>
