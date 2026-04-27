<link rel="stylesheet" href="/header.css">

<nav class="nav-container" id="navbar">

  <div class="logo">
    <a href="/index.php">
      <img src="/images/Logo_Nemoxia_blanc.png" alt="Logo Nemoxia">
    </a>
  </div>

  <ul class="nav-links">
    <li><a href="/index.php">Accueil</a></li>
    <li><a href="/Infogerance/Infogerance.php">Infogérance & Maintenance</a></li>
    <li><a href="/Cybersecurite/Cybersecurite.php">Cybersécurité & Protection</a></li>
    <li><a href="/Informatique/informatique.php">Infrastructure & Cloud</a></li>
    <li><a href="/Telephonie/Telephonie.php">Téléphonie IP & Internet</a></li>
    
  </ul>

  <div class="nav-actions">
    <a href="/Contact/contact.php" class="eligibilite-button">Contactez-nous </a>
  </div>

  <button class="hamburger" id="hamburger" aria-label="Ouvrir le menu">
    <span></span>
    <span></span>
    <span></span>
  </button>

</nav>

<script>
  const navbar    = document.getElementById('navbar');
  const hamburger = document.getElementById('hamburger');

  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 50);
  });

  hamburger.addEventListener('click', () => {
    navbar.classList.toggle('open');
  });
</script>