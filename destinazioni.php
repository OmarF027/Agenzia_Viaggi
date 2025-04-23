<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Destinazioni - Uncharted Paths</title>

  <!-- Stili -->
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .card-img-top {
      height: 250px;
      object-fit: cover;
    }
    .card {
      height: 100%;
      display: flex;
      flex-direction: column;
    }
  </style>
</head>
<body>

  <section class="showcase">
    <!-- Header -->
    <header>
      <h2 class="logo">Uncharted Paths</h2>
      <div class="toggle"></div>
    </header>

    <!-- Video Background -->
    <video src="video/explore.mp4" muted loop autoplay></video>
    <div class="overlay"></div>

    <!-- Testo Intro -->
    <div class="text">
      <h2>Scopri le nostre destinazioni</h2>
      <h3>Il mondo ti aspetta!</h3>
      <p>Prenota oggi stesso la tua prossima avventura!</p>
    </div>

    <!-- Menu Laterale -->
    <div class="menu">
      <ul>
        <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="destinazioni.php"><i class="fas fa-map-marked-alt"></i> Destinazioni</a></li>
        <li><a href="contatti.php"><i class="fas fa-envelope"></i> Contatti</a></li>
      </ul>
    </div>
  </section>

  <!-- Sezione Destinazioni -->
  <section class="destinazioni py-5" style="background-color: #f8f9fa;">
    <div class="container">
      <h2 class="text-center mb-5">Le nostre destinazioni</h2>
      <div class="row">
        <!-- Card 1 -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1431274172761-fca41d930114?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Parigi">
            <div class="card-body">
              <h5 class="card-title">Parigi</h5>
              <p class="card-text">La città dell'amore, famosa per la Torre Eiffel, i musei e la sua cultura unica.</p>
              <a href="#" class="btn btn-primary">Scopri di più</a>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1542051841857-5f90071e7989?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Tokyo">
            <div class="card-body">
              <h5 class="card-title">Tokyo</h5>
              <p class="card-text">Un viaggio tra tradizione e modernità. Esplora la capitale pulsante del Giappone.</p>
              <a href="#" class="btn btn-primary">Scopri di più</a>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1503177119275-0aa32b3a9368?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Il Cairo">
            <div class="card-body">
              <h5 class="card-title">Il Cairo</h5>
              <p class="card-text">Esplora la magia dell'antico Egitto, visitando le imponenti piramidi e la Sfinge.</p>
              <a href="#" class="btn btn-primary">Scopri di più</a>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1499092346589-b9b6be3e94b2?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="New York">
            <div class="card-body">
              <h5 class="card-title">New York</h5>
              <p class="card-text">La città che non dorme mai! Scopri l'energia unica di Manhattan e oltre.</p>
              <a href="#" class="btn btn-primary">Scopri di più</a>
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1552832230-c0197dd311b5?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Roma">
            <div class="card-body">
              <h5 class="card-title">Roma</h5>
              <p class="card-text">L'antica capitale del mondo, con la sua storia millenaria e le meraviglie architettoniche.</p>
              <a href="#" class="btn btn-primary">Scopri di più</a>
            </div>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1528072164453-f4e8ef0d475a?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Sydney">
            <div class="card-body">
              <h5 class="card-title">Sydney</h5>
              <p class="card-text">Vivi l'emozione di una città vibrante, famosa per la sua opera iconica e le spiagge dorate.</p>
              <a href="#" class="btn btn-primary">Scopri di più</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white py-4 text-center">
    <div class="footer-content">
      <p>© 2025 Uncharted Paths – Tutti i diritti riservati</p>
      <div class="footer-links">
        <span>Firenze</span> | 
        <a href="tel:+393471234567">+39 347 123 4567</a> | 
        <a href="https://facebook.com" target="_blank">Facebook</a> | 
        <a href="https://instagram.com" target="_blank">Instagram</a>
      </div>
    </div>
  </footer>

  <!-- Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>

</body>
</html>
