
<header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="<?=  URL.WEBSITE_LOGO ?>" width="70" height="50" alt="<?=  WEBSITE_TITLE ?>">
      </a>

      <nav class="navbar" data-navbar>

        <div class="wrapper">
          <a href="#" class="logo">
            <img src="<?=  URL.WEBSITE_LOGO ?>" width="162" height="50" alt="<?=  WEBSITE_TITLE ?>">
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link" data-nav-link>Accueil</a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link" data-nav-link>A propos</a>
          </li>

          <li class="navbar-item">
            <a href="#plan" class="navbar-link" data-nav-link>Plans D'acompagnements</a>
          </li>

          <li class="navbar-item">
            <a href="#temoignages" class="navbar-link" data-nav-link>Témoignages</a>
          </li>

          <li class="navbar-item">
            <a href="#contact" class="navbar-link" data-nav-link>Contact</a>
          </li>

        </ul>

      </nav>

      <div class="header-actions">


        <a href="#" class="btn has-before">
          <span class="span">Voir Nos Offres</span>
          <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
        </a>

        <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
          <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
        </button>

      </div>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>
