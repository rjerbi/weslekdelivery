<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pâtisserie Sellem - Pâtisseries artisanales tunisiennes. Découvrez nos délicieuses créations sucrées faites maison avec des ingrédients de qualité.">
    <title>Pâtisserie</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logologo.png') }}">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" as="style">
    <link rel="preload" href="https://images.unsplash.com/photo-1551024506-0bccd828d307?auto=format&fit=crop&w=1600&q=80" as="image">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    
    <style>
    :root {
      --primary: #e67300;
      --light: #ffe5b4;
      --dark: #333;
      --gray: #777;
      --radius: 8px;
      
      --background: #f8f8f8;
      --text-color: #000;
      --header-bg: #ffe5b4;
      --card-bg: #fff;
      --footer-bg: #333;
      --tunisian-red: #e67e22;
      --tunisian-blue: #0a75ad;
      --nav-bg: rgba(55, 55, 55, 0.85);
      --nav-text: #ffffff;
      --button-bg: #e67e22;
      --button-hover: #d35400;
    }

    body.dark-mode {
      --background: #121212;
      --text-color: #ffffff;
      --header-bg: #333;
      --card-bg: #2a2a2a;
      --footer-bg: #111;
      --tunisian-red: #d35400;
      --tunisian-blue: #085d8a;
      --nav-bg: #222;
      --nav-text: #f0f0f0;
      --button-bg: #d35400;
      --button-hover: #b34700;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      transition: background-color 0.3s, color 0.3s;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--background);
      color: var(--text-color);
      line-height: 1.6;
    }

    nav {
      background-color: var(--nav-bg);
      padding: 12px 0;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    body.dark-mode nav {
      background-color: var(--tunisian-red-dark);
    }

    nav ul {
      list-style: none;
      display: flex;
      justify-content: center;
      margin: 0;
      padding: 0;
      gap: 30px;
    }

    nav ul li {
      display: inline;
    }

    nav ul li a {
      color: var(--nav-text);
      text-decoration: none;
      font-weight: bold;
      font-size: 16px;
      transition: color 0.3s, text-shadow 0.3s;
    }

    nav ul li a:hover {
      color: var(--primary);
      text-shadow: 0 0 5px var(--primary);
    }

    header {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 50px 30px;
      background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                  url('https://images.unsplash.com/photo-1551024506-0bccd828d307?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
      min-height: 80vh;
      text-align: center;
      color: white;
    }

    header .logo img {
      height: 120px;
      margin-bottom: 20px;
      filter: drop-shadow(0 2px 4px rgb(255, 252, 252));
    }

    header h1 {
      font-size: clamp(2.5rem, 5vw, 3.5rem);
      margin-bottom: 15px;
      text-shadow: 0 2px 4px rgba(0,0,0,0.5);
    }

    header p {
      font-size: clamp(1.1rem, 2vw, 1.3rem);
      max-width: 700px;
      margin: 0 auto 30px;
      text-shadow: 0 1px 3px rgba(0,0,0,0.5);
    }

    .cta-button {
        display: inline-block;
        background: linear-gradient(135deg, var(--button-bg), var(--button-hover));
        color: white;
        padding: 14px 32px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 500;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(230, 126, 34, 0.3);
        border: none;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    .cta-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(211, 84, 0, 0.4);
    }

    section {
      padding: 50px 20px;
      text-align: center;
      background-color: var(--background);
    }

    section h2 {
      font-size: clamp(2rem, 4vw, 2.8rem);
      color: var(--primary);
      margin-bottom: 25px;
      position: relative;
      display: inline-block;
    }

    section h2::after {
        content: "";
        position: absolute;
        width: 50%;
        height: 3px;
        background: var(--tunisian-blue);
        bottom: -12px;
        left: 25%;
        transform: skewX(-15deg);
    }

    body.dark-mode section h2::after {
        background: var(--tunisian-blue-dark);
    }

    .section-description {
        margin: 20px auto 50px;
        max-width: 700px;
        font-size: clamp(1rem, 1.5vw, 1.2rem);
        color: var(--gray);
        line-height: 1.8;
    }

    .menu-categories {
        margin-bottom: 30px;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
    }

    .menu-category {
        padding: 10px 20px;
        cursor: pointer;
        background-color: var(--button-bg);
        color: white;
        border: none;
        border-radius: 20px;
        transition: all 0.3s ease;
        font-weight: 500;
    }

    .menu-category.active,
    .menu-category:hover {
        background-color: var(--button-hover);
        transform: translateY(-2px);
    }

    .gallery-content {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .gallery-item {
      background: var(--card-bg);
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      overflow: hidden;
      width: 250px;
      transition: transform 0.3s, box-shadow 0.3s;
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 1s forwards;
    }

    body.dark-mode .gallery-item {
      box-shadow: 0 4px 8px rgba(0,0,0,0.3);
    }

    .gallery-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 12px rgba(0,0,0,0.15);
    }

    body.dark-mode .gallery-item:hover {
      box-shadow: 0 6px 12px rgba(0,0,0,0.3);
    }

    .gallery-item img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .gallery-item:hover img {
      transform: scale(1.05);
    }

    .gallery-item-content {
      padding: 20px;
      text-align: left;
    }

    .gallery-item h3 {
      font-size: 1.4rem;
      margin-bottom: 12px;
      color: var(--primary);
    }

    body.dark-mode .gallery-item h3 {
      color: var(--tunisian-red-dark);
    }

    .item-description {
      font-size: 0.95rem;
      color: var(--gray);
      margin-bottom: 15px;
      line-height: 1.6;
    }

    .price {
      font-weight: bold;
      color: var(--primary);
      font-size: 1.2rem;
      display: inline-block;
      padding: 6px 16px;
      background: rgba(230, 126, 34, 0.1);
      border-radius: 20px;
      transition: all 0.3s ease;
    }

    body.dark-mode .price {
      background: rgba(211, 84, 0, 0.2);
    }

    .gallery-item:hover .price {
      transform: scale(1.05);
    }

   .add-to-cart {
      background: var(--primary);
      color: white;
      border: none;
      padding: 5px 15px;
      border-radius: 20px;
      cursor: pointer;
      transition: all 0.3s ease;
      font-size: 0.9rem;
    }

    .add-to-cart:hover {
      background: var(--primary-light);
      transform: scale(1.05);
    }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    footer {
      background-color: var(--footer-bg);
      color: white;
      text-align: center;
      padding: 20px 0;
      margin-top: 50px;
    }

    body.dark-mode footer {
      background-color: var(--tunisian-red-dark);
    }

    .footer-container {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 40px;
      text-align: left;
      padding: 0 20px 30px;
    }

    .footer-column h3 {
      font-size: 1.4rem;
      margin-bottom: 20px;
      position: relative;
      display: inline-block;
      color: white;
    }

    .footer-column h3::after {
      content: "";
      position: absolute;
      width: 40%;
      height: 2px;
      background: white;
      bottom: -8px;
      left: 0;
    }

    .footer-column p, .footer-column a {
      margin-bottom: 12px;
      display: block;
      color: #ccc;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .footer-column a:hover {
      color: white;
      text-decoration: underline;
    }

    .social-icons {
      margin: 25px 0;
      display: flex;
      gap: 15px;
    }

    .social-icons a {
      color: white;
      font-size: 1.4rem;
      transition: all 0.3s ease;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.1);
    }

    .social-icons a:hover {
      color: var(--light);
      background: rgba(255, 255, 255, 0.2);
      transform: translateY(-3px);
    }

    .copyright {
      margin-top: 20px;
      padding-top: 20px;
      border-top: 1px solid rgba(255,255,255,0.2);
      font-size: 0.9rem;
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
      background: var(--tunisian-blue-dark);
    }

    .back-to-top {
      position: fixed;
      bottom: 100px;
      right: 30px;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: var(--tunisian-blue);
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      z-index: 999;
      font-size: 1.5rem;
      opacity: 0;
      visibility: hidden;
      transition: all 0.3s ease;
      border: none;
    }

    .back-to-top.visible {
      opacity: 1;
      visibility: visible;
    }

    .back-to-top:hover {
      background: var(--tunisian-blue-dark);
      transform: translateY(-5px);
    }

    @media (max-width: 768px) {
      nav ul {
        flex-direction: column;
        align-items: center;
        gap: 15px;
      }
      
      .theme-toggle {
        width: 50px;
        height: 50px;
        font-size: 1.2rem;
        bottom: 20px;
        right: 20px;
      }

      .back-to-top {
        width: 50px;
        height: 50px;
        font-size: 1.2rem;
        bottom: 80px;
        right: 20px;
      }

      .footer-container {
        grid-template-columns: 1fr;
        text-align: center;
      }

      .footer-column h3::after {
        left: 30%;
        width: 40%;
      }

      .social-icons {
        justify-content: center;
      }
    }

    @media (max-width: 480px) {
      header h1 {
        font-size: 2.2rem;
      }
      
      .gallery-item {
        width: 100%;
        max-width: 300px;
      }
    }
    </style>
</head>

<body>
    <nav>
        <ul id="navMenu">
            <li><a href="/" target="_blank"><i class="fas fa-home"></i>Accueil</a></li>
            <li><a href="#patisseries"><i class="fas fa-birthday-cake"></i> Nos Pâtisseries</a></li>
            <li><a href="#contact"><i class="fas fa-phone"></i>Contact</a></li>
        </ul>
    </nav>

    <header id="accueil">
        <div class="logo">
            <img src="{{ asset('images/sallemi.png') }}" alt="Logo Pâtisserie Sellem" loading="lazy">
        </div>
        <h1>Pâtisserie Sellem</h1>
        <p>Découvrez nos délicieuses pâtisseries artisanales préparées avec passion et savoir-faire</p>
        <a href="#patisseries" class="cta-button">Découvrir nos créations</a>
    </header>

    <main>
        <section id="patisseries">
            <h2>Nos Délices Sucrés</h2>
            <p class="section-description">Chaque pâtisserie est une œuvre d'art culinaire, préparée avec des ingrédients de première qualité et beaucoup d'amour.</p>

            <div class="menu-categories">
                <button class="menu-category active" onclick="showMenu('all')">Toutes</button>
                <button class="menu-category" onclick="showMenu('classiques')">Classiques</button>
                <button class="menu-category" onclick="showMenu('gourmandises')">Gourmandises</button>
                <button class="menu-category" onclick="showMenu('viennoiseries')">Viennoiseries</button>
            </div>

            <div class="gallery-content">
                <div class="gallery-item classiques">
                    <img src="{{ asset('images/eclair.jpeg') }}" alt="Éclair au chocolat" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Éclair au chocolat</h3>
                        <p class="item-description">Un grand classique français revisité avec un glaçage chocolaté brillant</p>
                        <p class="price">7.500 TND</p>
                        <button class="add-to-cart">Ajouter</button>
                    </div>
                </div>

                <div class="gallery-item classiques">
                    <img src="{{ asset('images/Tarte.jpg') }}" alt="Tarte aux fraises" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Tarte aux fraises</h3>
                        <p class="item-description">Pâte sablée maison garnie de crème pâtissière vanille et fraises fraîches</p>
                        <p class="price">9.000 TND</p>
                        <button class="add-to-cart">Ajouter</button>
                    </div>
                </div>

                <div class="gallery-item classiques">
                    <img src="{{ asset('images/oh ya 3.jpeg') }}" alt="Mille-feuille" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Mille-feuille</h3>
                        <p class="item-description">Feuilletage croustillant à la française alterné avec une crème vanille</p>
                        <p class="price">8.500 TND</p>
                        <button class="add-to-cart">Ajouter</button>
                    </div>
                </div>

                <div class="gallery-item gourmandises">
                    <img src="{{ asset('images/ooh ya.jpeg') }}" alt="Macarons assortis" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Macarons assortis</h3>
                        <p class="item-description">Assortiment de 6 macarons aux saveurs variées</p>
                        <p class="price">12.000 TND</p>
                        <button class="add-to-cart">Ajouter</button>
                    </div>
                </div>

                <div class="gallery-item gourmandises">
                    <img src="{{ asset('images/p.jpeg') }}" alt="Paris-Brest" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Paris-Brest</h3>
                        <p class="item-description">Couronne de pâte à choux garnie d'une crème mousseline pralinée</p>
                        <p class="price">10.000 TND</p>
                        <button class="add-to-cart">Ajouter</button>
                    </div>
                </div>

                <div class="gallery-item gourmandises">
                    <img src="{{ asset('images/op.jpeg') }}" alt="Opéra" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Opéra</h3>
                        <p class="item-description">Gâteau sophistiqué composé de couches de biscuit Joconde</p>
                        <p class="price">13.500 TND</p>
                        <button class="add-to-cart">Ajouter</button>
                    </div>
                </div>

                <div class="gallery-item classiques">
                    <img src="{{ asset('images/citon.jpeg') }}" alt="Tarte au citron meringuée" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Tarte citron meringuée</h3>
                        <p class="item-description">Pâte sablée croustillante, crème au citron jaune intense</p>
                        <p class="price">8.000 TND</p>
                        <button class="add-to-cart">Ajouter</button>
                    </div>
                </div>

                <div class="gallery-item gourmandises">
                    <img src="{{ asset('images/ch.jpeg') }}" alt="Moelleux au chocolat" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Moelleux au chocolat</h3>
                        <p class="item-description">Gâteau fondant au chocolat noir 70% avec cœur coulant</p>
                        <p class="price">11.000 TND</p>
                        <button class="add-to-cart">Ajouter</button>
                    </div>
                </div>

                <div class="gallery-item classiques">
                    <img src="{{ asset('images/c.jpeg') }}" alt="Religieuse" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Religieuse</h3>
                        <p class="item-description">Deux choux superposés garnis de crème pâtissière</p>
                        <p class="price">7.000 TND</p>
                        <button class="add-to-cart">Ajouter</button>
                    </div>
                </div>

                <div class="gallery-item gourmandises">
                    <img src="{{ asset('images/ouou.jpeg') }}" alt="Tiramisu" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Tiramisu</h3>
                        <p class="item-description">Dessert italien onctueux à base de mascarpone et café</p>
                        <p class="price">14.000 TND</p>
                        <button class="add-to-cart">Ajouter</button>
                    </div>
                </div>

                <div class="gallery-item gourmandises">
                    <img src="{{ asset('images/f.jpeg') }}" alt="Forêt noire" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Forêt noire</h3>
                        <p class="item-description">Gâteau au chocolat avec cerises griottes et crème chantilly</p>
                        <p class="price">18.000 TND</p>
                        <button class="add-to-cart">Ajouter</button>
                    </div>
                </div>

                <div class="gallery-item gourmandises">
                    <img src="{{ asset('images/r.jpeg') }}" alt="Cheesecake fruits rouges" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Cheesecake fruits rouges</h3>
                        <p class="item-description">Base biscuitée au spéculoos, garniture crémeuse</p>
                        <p class="price">16.500 TND</p>
                        <button class="add-to-cart">Ajouter</button>
                    </div>
                </div>

                <div class="gallery-item viennoiseries">
                    <img src="{{ asset('images/cr.jpeg') }}" alt="Croissant frais" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Croissant au beurre</h3>
                        <p class="item-description">Croissant pur beurre AOP, feuilleté à la main</p>
                        <p class="price">3.000 TND</p>
                        <button class="add-to-cart">Ajouter</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <h2>Contact & Horaires</h2>
            <p class="section-description">Venez découvrir nos pâtisseries dans notre boutique ou contactez-nous pour vos commandes spéciales.</p>
            
            <div class="gallery-content">
                <div class="gallery-item">
                    <div class="gallery-item-content">
                        <h3>Horaires d'ouverture</h3>
                        <p class="item-description">
                            Lundi - Vendredi: 7h30 - 19h<br>
                            Samedi: 8h - 20h<br>
                            Dimanche: 9h - 18h
                        </p>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <div class="gallery-item-content">
                        <h3>Notre adresse</h3>
                        <p class="item-description">
                            123 Avenue Habib Bourguiba<br>
                            1002 Tunis, Tunisie
                        </p>
                    </div>
                </div>
                
                <div class="gallery-item">
                    <div class="gallery-item-content">
                        <h3>Nous contacter</h3>
                        <p class="item-description">
                            Téléphone: +216 70 123 456<br>
                            Email: contact@patisseriesellami.tn
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3>Pâtisserie Sellami</h3>
                <p>Depuis 2010, Pâtisserie Sellami vous propose des créations sucrées artisanales préparées avec passion et savoir-faire.</p>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="TripAdvisor"><i class="fab fa-tripadvisor"></i></a>
                </div>
            </div>
            
            <div class="footer-column">
                <h3>Navigation</h3>
                <a href="#accueil">Accueil</a>
                <a href="#patisseries">Nos Pâtisseries</a>
                <a href="#contact">Contact</a>
            </div>
            
            <div class="footer-column">
                <h3>Contact</h3>
                <p><i class="fas fa-map-marker-alt"></i> 123 Avenue Habib Bourguiba, Tunis</p>
                <p><i class="fas fa-phone"></i> +216 70 123 456</p>
                <p><i class="fas fa-envelope"></i> contact@patisseriesellami.tn</p>
                <p><i class="fas fa-clock"></i> Ouvert 7j/7</p>
            </div>
        </div>
        
        <div class="copyright">
            <p>&copy; 2025 Pâtisserie Sellem | Tous droits réservés</p>
            <p>Artisan pâtissier depuis 2010</p>
        </div>
    </footer>

    <button class="theme-toggle" id="themeToggle" aria-label="Toggle dark mode">
        <i class="fas fa-moon"></i>
    </button>
    
    <a href="#" class="back-to-top" id="backToTop" aria-label="Back to top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
            
            const backToTop = document.getElementById('backToTop');
            
            window.addEventListener('scroll', () => {
                if (window.pageYOffset > 300) {
                    backToTop.classList.add('visible');
                } else {
                    backToTop.classList.remove('visible');
                }
            });
            
            backToTop.addEventListener('click', (e) => {
                e.preventDefault();
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
            
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        const offset = document.querySelector('nav').offsetHeight;
                        const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - offset;
                        
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            const items = document.querySelectorAll('.gallery-item');
            items.forEach((item, index) => {
                item.style.animationDelay = `${index * 0.1}s`;
            });

            const addToCartButtons = document.querySelectorAll('.add-to-cart');
            addToCartButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const item = this.closest('.gallery-item');
                    const itemName = item.querySelector('h3').textContent;
                    const itemPrice = item.querySelector('.price').textContent;
                    
                    this.textContent = 'Ajouté !';
                    this.style.backgroundColor = '#4CAF50';
                    
                    setTimeout(() => {
                        this.textContent = 'Ajouter';
                        this.style.backgroundColor = '';
                    }, 2000);
                    
                    console.log(`Ajouté: ${itemName} - ${itemPrice}`);
                });
            });
        });

        function showMenu(category) {
            const allItems = document.querySelectorAll('.gallery-item');
            const categoryButtons = document.querySelectorAll('.menu-category');

            allItems.forEach(item => {
                if (category === 'all' || item.classList.contains(category)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });

            categoryButtons.forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
        }
    </script>
</body>
</html>