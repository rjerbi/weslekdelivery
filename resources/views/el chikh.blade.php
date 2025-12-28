<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="El Chikh - Découvrez les saveurs authentiques de la Tunisie avec nos plats traditionnels et fast-foods tunisiens">
    <title>El Chikh</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logologo.png') }}">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" as="style">
    <link rel="preload" href="https://images.unsplash.com/photo-1601050690597-df0568f70950?auto=format&fit=crop&w=1600&q=80" as="image">
    
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    
        <style>
    :root {
      --primary: #e67300;
      --primary-light: #ff8c1a;
      --secondary: #0a75ad;
      --light: #ffe5b4;
      --dark: #333;
      --gray: #777;
      --light-gray: #f0f0f0;
      --radius: 8px;
      
      --background: #f8f8f8;
      --text-color: #000;
      --header-bg: #040404;
      --card-bg: #fff;
      --footer-bg: #333;
      --nav-bg: rgba(55, 55, 55, 0.85);
      --nav-text: #ffffff;
      --button-bg: #ff8c00;
      --button-hover: #e67300;
    }

    body.dark-mode {
      --background: #121212;
      --text-color: #ffffff;
      --header-bg: #333;
      --card-bg: #2a2a2a;
      --footer-bg: #111;
      --nav-bg: #222;
      --nav-text: #f0f0f0;
      --button-bg: #ff8c00;
      --button-hover: #e67300;
      --light-gray: #333;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      transition: background-color 0.3s, color 0.3s;
    }

    html {
        scroll-behavior: smooth;
        height: 100%;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--background);
      color: var(--text-color);
      line-height: 1.6;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    main {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
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
      background-color: var(--nav-bg);
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
      position: relative;
      padding: 5px 0;
      display: flex;
      align-items: center;
      gap: 5px;
    }

    nav ul li a::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: var(--primary);
      transition: width 0.3s;
    }

    nav ul li a:hover::after {
      width: 100%;
    }

    nav ul li a:hover {
      color: var(--primary);
    }

    header {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 50px 30px;
      background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                  url('https://images.unsplash.com/photo-1601050690597-df0568f70950?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
      min-height: 80vh;
      text-align: center;
      color: white;
      width: 100%;
    }

    header .logo img {
      height: 120px;
      margin-bottom: 20px;
      filter: drop-shadow(0 2px 4px rgb(255, 255, 255));
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

    .quick-access {
      background-color: var(--primary);
      padding: 15px 0;
      margin: 20px auto;
      border-radius: var(--radius);
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      max-width: 1200px;
      width: 90%;
    }

    .quick-access ul {
      display: flex;
      justify-content: center;
      list-style: none;
      gap: 30px;
      flex-wrap: wrap;
      margin: 0;
      padding: 0;
    }

    .quick-access ul li a {
      color: white;
      text-decoration: none;
      font-weight: 500;
      padding: 8px 15px;
      border-radius: 20px;
      transition: all 0.3s ease;
      display: inline-block;
    }

    .quick-access ul li a:hover {
      background-color: rgba(255,255,255,0.2);
      transform: translateY(-2px);
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

    .secondary-button {
        background: linear-gradient(135deg, var(--secondary), #085d8a);
        box-shadow: 0 4px 15px rgba(10, 117, 173, 0.3);
    }

    .secondary-button:hover {
        box-shadow: 0 6px 20px rgba(8, 93, 138, 0.4);
    }

    section {
      padding: 50px 20px;
      text-align: center;
      background-color: var(--background);
      width: 100%;
      max-width: 1200px;
    }

    .section-header {
      max-width: 800px;
      margin: 0 auto 40px;
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
        background: var(--secondary);
        bottom: -12px;
        left: 25%;
    }

    .section-description {
        margin: 20px auto;
        font-size: clamp(1rem, 1.5vw, 1.2rem);
        color: var(--gray);
        line-height: 1.8;
    }

    .menu-tabs {
      display: flex;
      justify-content: center;
      margin-bottom: 30px;
      background: var(--light-gray);
      padding: 10px;
      border-radius: 50px;
      max-width: 500px;
      margin-left: auto;
      margin-right: auto;
    }

    .menu-tab {
      padding: 10px 25px;
      cursor: pointer;
      font-weight: 500;
      border-radius: 30px;
      transition: all 0.3s ease;
    }

    .menu-tab.active {
      background: var(--primary);
      color: white;
    }

    .menu-content {
      display: none;
    }

    .menu-content.active {
      display: block;
      animation: fadeIn 0.5s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    .menu-category {
      margin-bottom: 50px;
    }

    .menu-category h3 {
      font-size: 1.8rem;
      color: var(--secondary);
      margin-bottom: 20px;
      padding-bottom: 10px;
      border-bottom: 2px dashed var(--primary);
      display: inline-block;
    }

    .dishes-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 25px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .dish-card {
      background: var(--card-bg);
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
      text-align: left;
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 0.5s forwards;
    }

    body.dark-mode .dish-card {
      box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }

    .dish-card:hover {
      transform: translateY(-10px);
    }

    .dish-image {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-bottom: 3px solid var(--primary);
    }

    .dish-info {
      padding: 20px;
    }

    .dish-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 10px;
    }

    .dish-title {
      font-size: 1.3rem;
      color: var(--primary);
      font-weight: 600;
    }

    .dish-tag {
      font-size: 0.7rem;
      background: var(--secondary);
      color: white;
      padding: 3px 8px;
      border-radius: 20px;
      text-transform: uppercase;
    }

    .dish-description {
      color: var(--gray);
      margin-bottom: 15px;
      line-height: 1.6;
      font-size: 0.95rem;
    }

    .dish-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-top: 1px dashed var(--gray);
      padding-top: 15px;
    }

    .dish-price {
      font-weight: bold;
      color: var(--primary);
      font-size: 1.2rem;
    }

    .add-to-cart {
      background: #ff8c00; /* Orange vif */
      color: white;
      border: none;
      padding: 8px 20px;
      border-radius: 20px;
      cursor: pointer;
      transition: all 0.3s ease;
      font-size: 0.9rem;
      font-weight: 500;
      box-shadow: 0 2px 5px rgba(255, 140, 0, 0.3);
    }

    .add-to-cart:hover {
      background: #e67300; /* Orange plus foncé au survol */
      transform: scale(1.05);
      box-shadow: 0 4px 8px rgba(230, 115, 0, 0.4);
    }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }

    .add-to-cart:active {
        animation: pulse 0.3s ease;
    }

    .combo-section {
      background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                  url('https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
      color: white;
      padding: 80px 20px;
      margin: 50px 0;
      border-radius: 10px;
      max-width: 1400px; 
      width: 100%; 
    }

    .combo-container {
      max-width: 1000px; 
      margin: 0 auto;
      text-align: center;
    }

    .combo-title {
      font-size: clamp(2rem, 4vw, 2.5rem);
      margin-bottom: 20px;
      color: white;
    }

    .combo-description {
      font-size: 1.1rem;
      margin-bottom: 30px;
    }

    .combo-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Cartes légèrement plus larges */
      gap: 30px; /* Espacement augmenté */
      margin-top: 40px;
    }

    .combo-card {
      background: rgba(255,255,255,0.1);
      backdrop-filter: blur(10px);
      border-radius: 10px;
      padding: 30px; /* Padding augmenté */
      transition: transform 0.3s ease;
    }

    .combo-card:hover {
      transform: translateY(-10px);
    }

    .combo-card h4 {
      font-size: 1.5rem;
      margin-bottom: 15px;
      color: var(--light);
    }

    .combo-card p {
      margin-bottom: 20px;
    }

    .combo-price {
      font-size: 1.8rem;
      font-weight: bold;
      color: var(--primary);
      margin-bottom: 15px;
    }

    footer {
      background-color: var(--footer-bg);
      color: white;
      text-align: center;
      padding: 20px 0;
      margin-top: 50px;
      width: 100%;
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
      background: var(--primary);
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

    .back-to-top {
      position: fixed;
      bottom: 100px;
      right: 30px;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: var(--secondary);
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
      background: #085d8a;
      transform: translateY(-5px);
    }

    @media (max-width: 768px) {
      nav ul {
        flex-direction: column;
        align-items: center;
        gap: 15px;
      }
      
      .quick-access ul {
        flex-direction: column;
        gap: 10px;
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


      .combo-section {
        max-width: 95%;
        padding: 60px 15px;
      }

      .combo-grid {
        grid-template-columns: 1fr;
        gap: 20px;
      }
    }

    @media (max-width: 480px) {
      header h1 {
        font-size: 2.2rem;
      }
      
      .menu-tabs {
        flex-direction: column;
        border-radius: 10px;
      }
      
      .menu-tab {
        border-radius: 5px;
        margin: 5px 0;
      }

      .combo-section {
        padding: 50px 10px;
      }

      .combo-card {
        padding: 20px;
      }
    }
    </style>
</head>

<body>
    <nav>
        <ul id="navMenu">
          <li><a href="#menu"><i class="fas fa-utensils"></i>Notre Menu</a></li>
            <li><a href="#combos"><i class="fas fa-star"></i>Nos Combos</a></li>
            <li><a href="#contact"><i class="fas fa-phone"></i>Contact</a></li>
        </ul>
    </nav>

    <header id="accueil">
        <div class="logo">
            <img src="{{ asset('images/el chi5.png') }}" alt="Logo El Chikh" loading="lazy">
        </div>
        <h1>"Épices & Saveurs de Tunisie"</h1>
        <p>Découvrez l'authenticité de la cuisine tunisienne et nos délicieux fast-foods locaux. Une fusion parfaite entre tradition et modernité.</p>
        <a href="#menu" class="cta-button">Voir le Menu</a>
    </header>

   <div class="container quick-access">
        <ul>
            <li><a href="#menu"><i class="fas fa-book-open"></i> Je découvre le menu</a></li>
            <li><a href="#special"><i class="fas fa-crown"></i> Je choisis une spécialité</a></li>
            <li><a href="#contact"><i class="fas fa-mobile-alt"></i> Je commande en ligne</a></li>
        </ul>
    </div>

    <main>
        <section id="menu">
            <div class="section-header">
                <h2>Notre Menu</h2>
                <p class="section-description">Découvrez notre sélection de plats traditionnels tunisiens et de fast-foods locaux</p>
            </div>

            <div class="menu-tabs">
                <div class="menu-tab active" data-tab="traditionnel">Traditionnel</div>
                <div class="menu-tab" data-tab="fastfood">Fast-Food</div>
            </div>

            <div class="menu-content active" id="traditionnel-content">
                <div class="menu-category">
                    <h3>Plats Principaux</h3>
                    <div class="dishes-grid">
                        <div class="dish-card" style="animation-delay: 0.1s;">
                            <img src="{{ asset('images/Couscous au Poisson.jpeg') }}" alt="Couscous au Poisson" class="dish-image" loading="lazy">
                            <div class="dish-info">
                                <div class="dish-header">
                                    <h3 class="dish-title">Couscous au Poisson</h3>
                                    <span class="dish-tag">Spécialité</span>
                                </div>
                                <p class="dish-description">Semoule fine accompagnée de poissons frais, légumes et sauce tomate épicée.</p>
                                <div class="dish-footer">
                                    <span class="dish-price">18.500 DT</span>
                                    <button class="add-to-cart">Ajouter</button>
                                </div>
                            </div>
                        </div>

                        <div class="dish-card" style="animation-delay: 0.2s;">
                            <img src="{{ asset('images/mloukhia.jpeg') }}"  alt="Mloukhia" class="dish-image" loading="lazy">
                            <div class="dish-info">
                                <div class="dish-header">
                                    <h3 class="dish-title">Mloukhia</h3>
                                    <span class="dish-tag">Populaire</span>
                                </div>
                                <p class="dish-description">Plat à base de corète, viande de bœuf et ail, servi avec du pain.</p>
                                <div class="dish-footer">
                                    <span class="dish-price">16.000 DT</span>
                                    <button class="add-to-cart">Ajouter</button>
                                </div>
                            </div>
                        </div>

                        <div class="dish-card" style="animation-delay: 0.3s;">
                            <img src="{{ asset('images/Ojja Merguez.jpeg') }}" alt="Ojja Merguez" class="dish-image" loading="lazy">
                            <div class="dish-info">
                                <div class="dish-header">
                                    <h3 class="dish-title">Ojja Merguez</h3>
                                    <span class="dish-tag">Épicé</span>
                                </div>
                                <p class="dish-description">Œufs pochés dans une sauce tomate pimentée avec merguez maison.</p>
                                <div class="dish-footer">
                                    <span class="dish-price">15.000 DT</span>
                                    <button class="add-to-cart">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menu-category">
                    <h3>Entrées & Salades</h3>
                    <div class="dishes-grid">
                        <div class="dish-card" style="animation-delay: 0.1s;">
                            <img src="{{ asset('images/Brik.jpeg') }}" alt="Brik à l'Œuf" class="dish-image" loading="lazy">
                            <div class="dish-info">
                                <div class="dish-header">
                                    <h3 class="dish-title">Brik à l'Œuf</h3>
                                    <span class="dish-tag">Classique</span>
                                </div>
                                <p class="dish-description">Feuille de brick croustillante garnie d'œuf, thon, persil et fromage.</p>
                                <div class="dish-footer">
                                    <span class="dish-price">8.500 DT</span>
                                    <button class="add-to-cart">Ajouter</button>
                                </div>
                            </div>
                        </div>

                        <div class="dish-card" style="animation-delay: 0.2s;">
                            <img src="{{ asset('images/Salade Mechwiya.jpeg') }}" alt="Salade Mechwiya" class="dish-image" loading="lazy">
                            <div class="dish-info">
                                <div class="dish-header">
                                    <h3 class="dish-title">Salade Mechwiya</h3>
                                    <span class="dish-tag">Végétarien</span>
                                </div>
                                <p class="dish-description">Légumes grillés (poivrons, tomates, ail) à l'huile d'olive et citron.</p>
                                <div class="dish-footer">
                                    <span class="dish-price">7.000 DT</span>
                                    <button class="add-to-cart">Ajouter</button>
                                </div>
                            </div>
                        </div>

                        <div class="dish-card" style="animation-delay: 0.3s;">
                            <img src="{{ asset('images/Chorba.jpeg') }}" alt="Chorba" class="dish-image" loading="lazy">
                            <div class="dish-info">
                                <div class="dish-header">
                                    <h3 class="dish-title">Chorba</h3>
                                    <span class="dish-tag">Traditionnel</span>
                                </div>
                                <p class="dish-description">Soupe traditionnelle à base de viande, légumes et épices tunisiennes.</p>
                                <div class="dish-footer">
                                    <span class="dish-price">6.500 DT</span>
                                    <button class="add-to-cart">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu-content" id="fastfood-content">
                <div class="menu-category">
                    <h3>Sandwichs Tunisiens</h3>
                    <div class="dishes-grid">
                        <div class="dish-card" style="animation-delay: 0.1s;">
                            <img src="{{ asset('images/Fricassé.jpeg') }}" alt="Fricassé" class="dish-image" loading="lazy">
                            <div class="dish-info">
                                <div class="dish-header">
                                    <h3 class="dish-title">Fricassé</h3>
                                    <span class="dish-tag">Best-seller</span>
                                </div>
                                <p class="dish-description">Petit pain farci de thon, pommes de terre, olives et harissa.</p>
                                <div class="dish-footer">
                                    <span class="dish-price">3.500 DT</span>
                                    <button class="add-to-cart">Ajouter</button>
                                </div>
                            </div>
                        </div>

                        <div class="dish-card" style="animation-delay: 0.2s;">
                            <img src="{{ asset('images/Cassecroûte.jpeg') }}" alt="Cassecroûte" class="dish-image" loading="lazy">
                            <div class="dish-info">
                                <div class="dish-header">
                                    <h3 class="dish-title">Cassecroûte</h3>
                                    <span class="dish-tag">Classique</span>
                                </div>
                                <p class="dish-description">Baguette garnie de viande hachée, œuf, fromage et légumes.</p>
                                <div class="dish-footer">
                                    <span class="dish-price">5.000 DT</span>
                                    <button class="add-to-cart">Ajouter</button>
                                </div>
                            </div>
                        </div>

                        <div class="dish-card" style="animation-delay: 0.3s;">
                            <img src="{{ asset('images/Libanais.jpeg') }}" alt="Libanais" class="dish-image" loading="lazy">
                            <div class="dish-info">
                                <div class="dish-header">
                                    <h3 class="dish-title">Libanais</h3>
                                    <span class="dish-tag">Végétarien</span>
                                </div>
                                <p class="dish-description">Pain pita garni de falafel, salade, tomate et sauce tahini.</p>
                                <div class="dish-footer">
                                    <span class="dish-price">4.500 DT</span>
                                    <button class="add-to-cart">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menu-category">
                    <h3>Fast-Food Local</h3>
                    <div class="dishes-grid">
                        <div class="dish-card" style="animation-delay: 0.1s;">
                            <img src="{{ asset('images/Kafteji.jpeg') }}" alt="Kafteji" class="dish-image" loading="lazy">
                            <div class="dish-info">
                                <div class="dish-header">
                                    <h3 class="dish-title">Kafteji</h3>
                                    <span class="dish-tag">Spécialité</span>
                                </div>
                                <p class="dish-description">Mélange de légumes frits (poivrons, courgettes, pommes de terre) avec merguez.</p>
                                <div class="dish-footer">
                                    <span class="dish-price">7.500 DT</span>
                                    <button class="add-to-cart">Ajouter</button>
                                </div>
                            </div>
                        </div>

                        <div class="dish-card" style="animation-delay: 0.2s;">
                            <img src="{{ asset('images/ciabata.jpeg') }}" alt="Keftaji" class="dish-image" loading="lazy">
                            <div class="dish-info">
                                <div class="dish-header">
                                    <h3 class="dish-title">Shabbata</h3>
                                    <span class="dish-tag">Épicé</span>
                                </div>
                                <p class="dish-description">Viande hachée épicée avec légumes frits, servie dans du pain.</p>
                                <div class="dish-footer">
                                    <span class="dish-price">8.000 DT</span>
                                    <button class="add-to-cart">Ajouter</button>
                                </div>
                            </div>
                        </div>

                        <div class="dish-card" style="animation-delay: 0.3s;">
                            <img src="{{ asset('images/burger.jpeg') }}" alt="burger" class="dish-image" loading="lazy">
                            <div class="dish-info">
                                <div class="dish-header">
                                    <h3 class="dish-title"> Burger</h3>
                                    <span class="dish-tag">Nouveau</span>
                                </div>
                                <p class="dish-description">Burger revisité, viande et fromage fondu.</p>
                                <div class="dish-footer">
                                    <span class="dish-price">9.500 DT</span>
                                    <button class="add-to-cart">Ajouter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="combos">
            <div class="section-header">
                <h2>Nos Combos</h2>
                <p class="section-description">Profitez de nos offres spéciales combinant plats traditionnels et fast-foods</p>
            </div>

            <div class="combo-section">
                <div class="combo-container">
                    <h3 class="combo-title">Combos Saveurs de Tunisie</h3>
                    <p class="combo-description">Découvrez nos menus complets à prix avantageux</p>
                    <a href="#contact" class="cta-button secondary-button">Commander un Combo</a>
                </div>

                <div class="combo-grid">
                    <div class="combo-card">
                        <h4>Combo Tradition</h4>
                        <p>1 Couscous + 1 Brik + 1 Boisson + 1 Dessert</p>
                        <div class="combo-price">25.000 DT</div>
                        <button class="cta-button">Choisir</button>
                    </div>

                    <div class="combo-card">
                        <h4>Combo Fast-Food</h4>
                        <p>2 Fricassés + 1 Cassecroûte + 2 Boissons</p>
                        <div class="combo-price">15.000 DT</div>
                        <button class="cta-button">Choisir</button>
                    </div>

                    <div class="combo-card">
                        <h4>Combo Mixte</h4>
                        <p>1 Ojja Merguez + 1 Kafteji + 2 Boissons</p>
                        <div class="combo-price">22.000 DT</div>
                        <button class="cta-button">Choisir</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="section-header">
                <h2>Contact & Livraison</h2>
                <p class="section-description">Commandez en ligne ou venez nous voir</p>
            </div>

            <div class="dishes-grid">
                <div class="dish-card">
                    <div class="dish-info">
                        <h3 class="dish-title">Horaires d'ouverture</h3>
                        <p class="dish-description">
                            Lundi - Dimanche: 10h00 - 23h00<br>
                            Service de livraison: 11h00 - 22h30
                        </p>
                    </div>
                </div>
                
                <div class="dish-card">
                    <div class="dish-info">
                        <h3 class="dish-title">Nous trouver</h3>
                        <p class="dish-description">
                            Rue Habib Bourguiba, Tunis<br>
                            À côté du Théâtre Municipal<br>
                            Parking disponible
                        </p>
                    </div>
                </div>
                
                <div class="dish-card">
                    <div class="dish-info">
                        <h3 class="dish-title">Commander</h3>
                        <p class="dish-description">
                            Téléphone: +216 70 123 456<br>
                            WhatsApp: +216 50 123 456<br>
                            Livraison en 30-45 min
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3>Saveurs Tunisiennes</h3>
                <p>Depuis 2015, nous proposons une fusion unique entre cuisine traditionnelle tunisienne et fast-food local.</p>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="Glovo"><i class="fas fa-motorcycle"></i></a>
                </div>
            </div>
            
            <div class="footer-column">
                <h3>Menu Rapide</h3>
                <a href="#menu">Plats Traditionnels</a>
                <a href="#menu">Fast-Food Tunisien</a>
                <a href="#combos">Nos Combos</a>
                <a href="#contact">Livraison</a>
            </div>
            
            <div class="footer-column">
                <h3>Zone de Livraison</h3>
                <p>Nous livrons dans tout Tunis centre et les zones suivantes :</p>
                <ul style="columns: 2; list-style-type: none;">
                    <li>• nabeul</li>
                    <li>• mrezga</li>
                    <li>• AFH2</li>
                    <li>• hammamet</li>
                </ul>
            </div>
        </div>
        
        <div class="copyright">
            <p>&copy; 2025 Saveurs Tunisiennes | Tous droits réservés</p>
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

            const items = document.querySelectorAll('.dish-card');
            items.forEach((item, index) => {
                item.style.animationDelay = `${index * 0.1}s`;
            });

            const menuTabs = document.querySelectorAll('.menu-tab');
            const menuContents = document.querySelectorAll('.menu-content');

            menuTabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    menuTabs.forEach(t => t.classList.remove('active'));
                    menuContents.forEach(c => c.classList.remove('active'));
                    
                    tab.classList.add('active');
                    
                    const tabName = tab.getAttribute('data-tab');
                    document.getElementById(`${tabName}-content`).classList.add('active');
                    
                    const cards = document.querySelectorAll(`#${tabName}-content .dish-card`);
                    cards.forEach((card, i) => {
                        card.style.animation = 'none';
                        card.offsetHeight;
                        card.style.animation = '';
                        card.style.animationDelay = `${i * 0.1}s`;
                    });
                });
            });

            const addToCartButtons = document.querySelectorAll('.add-to-cart');
            addToCartButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const dishCard = this.closest('.dish-card');
                    const dishName = dishCard.querySelector('.dish-title').textContent;
                    const dishPrice = dishCard.querySelector('.dish-price').textContent;
                    
                    this.textContent = 'Ajouté !';
                    this.style.backgroundColor = '#4CAF50';
                    
                    setTimeout(() => {
                        this.textContent = 'Ajouter';
                        this.style.backgroundColor = '';
                    }, 2000);
                    
                    console.log(`Ajouté: ${dishName} - ${dishPrice}`);
                });
            });
        });
    </script>
</body>
</html>