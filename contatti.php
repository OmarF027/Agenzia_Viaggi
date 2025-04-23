<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contattaci - Uncharted Paths</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    .btn-hover-grow {
      transition: all 0.3s ease;
    }
    .btn-hover-grow:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
  </style>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>

  <section class="showcase">
    <header>
      <h2 class="logo">Uncharted Paths</h2>
      <div class="toggle"></div>
    </header>
    <video src="video/explore.mp4" muted loop autoplay></video>
    <div class="overlay"></div>
    <div class="text">
      <h2>Contattaci</h2>
      <h3>Siamo a tua disposizione</h3>
      <p>Compila il modulo qui sotto per qualsiasi richiesta o informazione.</p>
    </div>
  </section>

  <div class="menu">
    <ul>
      <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
      <li><a href="destinazioni.php"><i class="fas fa-map-marked-alt"></i> Destinazioni</a></li>
      <li><a href="contatti.php"><i class="fas fa-envelope"></i> Contatti</a></li>
    </ul>
  </div>

  <section class="py-5" style="background-color: #f8f9fa;">
    <div class="container" style="max-width: 600px;">
      <h2 class="text-center mb-4">Scrivici un messaggio</h2>
      <form action="scrivi_file.php" method="post">
        <div class="mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" name="nome" id="nome" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-Mail</label>
          <input type="email" class="form-control" name="mail" id="email" required>
        </div>
        <div class="mb-4">
          <label for="messaggio" class="form-label">Messaggio</label>
          <textarea class="form-control" name="messaggio" id="messaggio" rows="5" required></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-dark px-4 btn-hover-grow">Invia</button>
          <button type="reset" class="btn btn-outline-secondary px-4 btn-hover-grow">Cancella</button>
        </div>
      </form>
    </div>
  </section>

  <footer>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>