<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Réservation</title>
  <link rel="icon" type="image/png" href="{{ asset('images/logologo.png') }}">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    :root {
      --primary: #ff8000;
      --light: #ffe5b4;
      --dark: #333;
      --gray: #777;
      --radius: 8px;
      --background: #f9f9f9;
      --text-color: #333;
      --header-bg: #ffe5b4;
      --card-bg: #fff;
      --card-text: #333;
      --footer-bg: #333;
      --tunisian-red: #fb6a09;
      --tunisian-blue: #0a75ad;
    }

    body.dark-mode {
      --background: #1e1e1e;
      --text-color: #f0f0f0;
      --header-bg: #333;
      --card-bg: #2a2a2a;
      --card-text: #f0f0f0;
      --footer-bg: #111;
      --tunisian-red: #d35400;
      --tunisian-blue: #085d8a;
      --light: #2a2a2a;
      --dark: #f0f0f0;
      --gray: #aaa;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      transition: background-color 0.3s, color 0.3s;
    }

    body {
      font-family: 'Poppins', sans-serif;
      color: var(--text-color);
      background: var(--background);
      line-height: 1.6;
    }

    h2 {
      margin-bottom: 1rem;
      color: var(--primary);
      text-align: center;
      font-size: 2.5rem;
    }

    section {
      padding: 4rem 1rem;
      max-width: 1200px;
      margin: auto;
      background-color: var(--background);
    }

    form div {
      margin-bottom: 1.5rem;
    }

    label {
      display: block;
      margin-bottom: .5rem;
      font-weight: 500;
      font-size: 1rem;
      color: var(--text-color);
    }

    input, select, textarea, button {
      width: 100%;
      padding: .75rem 1rem;
      border: 1px solid #ccc;
      border-radius: var(--radius);
      font-size: 1rem;
      background-color: var(--card-bg);
      color: var(--card-text);
    }

    textarea {
      resize: vertical;
      min-height: 120px;
    }

    button {
      background: var(--primary);
      border: none;
      color: #fff;
      font-weight: 700;
      cursor: pointer;
      transition: background .3s, transform .3s;
      padding: 1rem;
      font-size: 1.2rem;
    }

    button:hover {
      background: var(--tunisian-red);
      transform: scale(1.05);
    }

    .full-width {
      grid-column: 1 / -1;
    }

    .reservation form {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 1.5rem;
    }

    #reserve-message {
      grid-column: 1 / -1;
      text-align: center;
      font-weight: 500;
      margin-top: .5rem;
      font-size: 1.1rem;
    }

    .contact-content {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 2rem;
      align-items: start;
    }

    .contact-info p {
      margin-bottom: .75rem;
      color: var(--text-color);
    }

    .map {
      height: 300px;
      border-radius: var(--radius);
      overflow: hidden;
    }

    .map iframe {
      width: 100%;
      height: 100%;
      border: none;
    }

    footer {
      background-color: var(--footer-bg);
      color: white;
      text-align: center;
      padding: 20px 0;
      margin-top: 50px;
    }

    .copyright {
      margin-top: 20px;
      padding-top: 20px;
      border-top: 1px solid rgba(255,255,255,0.2);
      font-size: 0.9rem;
    }

    .social-links a {
      display: inline-block;
      margin-right: .5rem;
      background: #444;
      padding: .75rem;
      border-radius: var(--radius);
      text-decoration: none;
      color: #fff;
      font-weight: 700;
      transition: background .3s;
    }

    .social-links a:hover {
      background: var(--primary);
    }

    @media(max-width: 600px) {
      .contact-content, .footer-content {
        grid-template-columns: 1fr;
      }
    }

    .theme-toggle {
      position: fixed;
      bottom: 30px;
      right: 30px;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: var(--tunisian-red);
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      z-index: 1000;
      font-size: 1.5rem;
      border: none;
    }

    body.dark-mode .theme-toggle {
      background: var(--tunisian-blue);
    }

    @media (max-width: 768px) {
      .theme-toggle {
        width: 50px;
        height: 50px;
        font-size: 1.2rem;
        bottom: 20px;
        right: 20px;
      }
    }
    .logo img {
        width: 200px; 
        }
  </style>
</head>

<body>
  <header style="background-color: var(--header-bg);">
    <div class="logo" style="text-align: center; padding: 20px;">
      <img src="{{ asset('images/logologo.png') }}" alt="Logo" style="max-width: 300px;">
    </div>
  </header>

  <section class="reservation" id="reservation">
    <h2>Recevez Votre Repas chez Vous</h2>

    <form action="{{ route('reservations.store') }}" method="POST">
      @csrf

      <div>
        <label for="name">Nom</label>
        <input type="text" id="name" name="name" required>
      </div>

      <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div>
        <label for="phone">Téléphone</label>
        <input type="tel" id="phone" name="phone" required>
      </div>

      <div>
        <label for="date">Date</label>
        <input type="date" id="date" name="date" required>
      </div>

      <div>
        <label for="time">Heure</label>
        <input type="time" id="time" name="time" required>
      </div>

      <div>
        <label for="guests">Nombre de commandes</label>
        <select id="guests" name="guests" required>
          <option value="1">1 commande</option>
          <option value="2">2 commandes</option>
          <option value="3">3 commandes</option>
          <option value="4">4 commandes</option>
          <option value="5">5 commandes</option>
          <option value="6">6 commandes</option>
          <option value="7">Plus de 6 commandes</option>
        </select>
      </div>

      <div class="full-width">
        <label for="message">Message spécial</label>
        <textarea id="message" name="message"></textarea>
      </div>

      <div class="full-width">
        <button type="submit" id="reserve-btn">Réserver maintenant</button>
      </div>

      @if (session('success'))
        <p id="reserve-message" style="color: green;">{{ session('success') }}</p>
      @endif

      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
              <li style="color: red;">{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
    </form>
  </section>

  <section class="contact" id="contact">
    <h2>Contactez-nous</h2>
    <div class="contact-content">
      <div class="contact-info">
        <h3>Informations</h3>
        <p>🏠 123 Avenue de la Cité, Nabeul</p>
        <p>📞 +216 23 180 090</p>
        <p>✉️ rana@gmail.com</p>
        <h3>Horaires d'ouverture</h3>
        <p>Lun–Ven : 08h, 00h</p>
        <p>Sam–Dim : 08h, 01h</p>
      </div>
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18..." allowfullscreen></iframe>
      </div>
    </div>
  </section>

  <footer>
    <div class="copyright">
      <p>&copy; 2025 Delicious Food | Tous droits réservés</p>
      <p>Restaurant gastronomique depuis 2015</p>
    </div>
  </footer>

  <button class="theme-toggle" id="themeToggle">
    <i class="fas fa-moon"></i>
  </button>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const toggleBtn = document.getElementById('themeToggle');
      const body = document.body;

      if (localStorage.getItem('mode') === 'dark') {
        body.classList.add('dark-mode');
        toggleBtn.innerHTML = '<i class="fas fa-sun"></i>';
      }

      toggleBtn.addEventListener('click', () => {
        body.classList.toggle('dark-mode');
        const isDark = body.classList.contains('dark-mode');
        toggleBtn.innerHTML = isDark ? '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';
        localStorage.setItem('mode', isDark ? 'dark' : 'light');
      });
    });
  </script>
</body>
</html>
