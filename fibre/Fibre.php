<!DOCTYPE html>
<html lang="fr">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test d'Éligibilité Fibre - Nemoxia</title>

  <link rel="stylesheet" href="Fibre.css">

</head>
<body>

  <?php include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; ?>


  <!-- Section principale -->
  <main class="main-content">
    <div class="container">

      <header class="page-header">
        <h1 class="title">Testez votre Éligibilité à la Fibre</h1>
        <p class="subtitle">Découvrez en quelques clics si vous pouvez bénéficier de la connexion ultra-rapide par fibre optique</p>
      </header>

      <div class="eligibility-card">
        <div class="card-header">
          <h2>Vérifiez votre éligibilité !</h2>
          <p>Entrez votre adresse ou votre numéro de téléphone pour connaître les offres disponibles</p>
        </div>
        <div class="card-body">
          <iframe
            id="test-eligibilite"
            src="https://iframe.api-eligibility.fr/?i=2201"
            width="992"
            height="308"
            title="Test d'éligibilité fibre"
            loading="lazy">
          </iframe>
        </div>
        <div class="card-footer">
          <div class="info-badge">
            <span class="badge-icon">✓</span>
            <span>Résultat instantané</span>
          </div>
          <div class="info-badge">
            <span class="badge-icon">✓</span>
            <span>100% gratuit</span>
          </div>
          <div class="info-badge">
            <span class="badge-icon">✓</span>
            <span>Sans engagement</span>
          </div>
        </div>
      </div>

    </div>
  </main>


  <!-- Scripts -->
  <script>
    (function() {
      const eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
      const eventer = window[eventMethod];
      const messageEvent = eventMethod === "attachEvent" ? "onmessage" : "message";
      const iframe = document.getElementById("test-eligibilite");
      eventer(messageEvent, function(e) {
        if (e.data && e.data.h) {
          iframe.height = e.data.h;
          iframe.style.height = e.data.h + 'px';
        }
      }, false);
    })();

    window.addEventListener('load', function() {
      document.querySelector('.page-header').classList.add('fade-in');
      document.querySelector('.eligibility-card').classList.add('slide-up');
    });
  </script>

</body>
</html>