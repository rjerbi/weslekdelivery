<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="OMA - Découvrez nos délicieuses boissons artisanales : jus frais, cafés spéciaux et cocktails rafraîchissants. Une expérience gustative unique.">
  <title>OMA</title>
  <link rel="icon" type="image/png" href="{{ asset('images/logologo.png') }}">
  <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style">
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" as="style">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  
  <style>
    :root {
      --primary: #ff8000;
      --primary-light: #ff9933;
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
      --button-bg: #e67e22;
      --button-hover: #d35400;
    }

    body.dark-mode {
      --background: #121212;
      --text-color: #ffffff;
      --header-bg: #333;
      --card-bg: #2a2a2a;
      --footer-bg: #111;
      --nav-bg: #222;
      --nav-text: #f0f0f0;
      --button-bg: #d35400;
      --button-hover: #b34700;
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
      position: relative;
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
                  url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
      min-height: 80vh;
      text-align: center;
      color: white;
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

    .boissons-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 25px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .boisson-card {
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

    body.dark-mode .boisson-card {
      box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }

    .boisson-card:hover {
      transform: translateY(-10px);
    }

    .boisson-image {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-bottom: 3px solid var(--primary);
    }

    .boisson-info {
      padding: 20px;
    }

    .boisson-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 10px;
    }

    .boisson-title {
      font-size: 1.3rem;
      color: var(--primary);
      font-weight: 600;
    }

    .boisson-tag {
      font-size: 0.7rem;
      background: var(--secondary);
      color: white;
      padding: 3px 8px;
      border-radius: 20px;
      text-transform: uppercase;
    }

    .boisson-description {
      color: var(--gray);
      margin-bottom: 15px;
      line-height: 1.6;
      font-size: 0.95rem;
    }

    .boisson-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-top: 1px dashed var(--gray);
      padding-top: 15px;
    }

    .boisson-price {
      font-weight: bold;
      color: var(--primary);
      font-size: 1.2rem;
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

    .combo-section {
      background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                  url('https://images.unsplash.com/photo-1555396273-367ea4eb4db5?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
      color: white;
      padding: 80px 20px;
      margin: 50px 0;
      border-radius: 10px;
      max-width: 1200px;
      margin-left: auto;
      margin-right: auto;
    }

    .combo-container {
      max-width: 800px;
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
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      margin-top: 40px;
    }

    .combo-card {
      background: rgba(255,255,255,0.1);
      backdrop-filter: blur(10px);
      border-radius: 10px;
      padding: 20px;
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
    }
  </style>
</head>

<body>
  <nav>
    <ul id="navMenu">
            <li><a href="/" target="_blank"><i class="fas fa-home"></i>Accueil</a></li>
      <li><a href="#menu"><i class="fas fa-mug-hot"></i>Nos Boissons</a></li>
            <li><a href="#contact"><i class="fas fa-phone"></i>Contact</a></li>
    </ul>
  </nav>

  <header id="accueil">
    <div class="logo">
      <img src="{{ asset('images/omaaa.png') }}" alt="Logo OMA" loading="lazy">
    </div>
    <h1>OMA Boissons Artisanales</h1>
    <p>Découvrez nos créations uniques de jus frais, cafés spéciaux et cocktails rafraîchissants</p>
    <a href="#menu" class="cta-button">Découvrir nos boissons</a>
  </header>

  <div class="quick-access">
    <ul>
      <li><a href="#menu">Nos Boissons Signature</a></li>
      <li><a href="#combos">Nos Offres Spéciales</a></li>
      <li><a href="#contact">Nous Trouver</a></li>
    </ul>
  </div>

  <main>
    <section id="menu">
      <div class="section-header">
        <h2>Notre Sélection de Boissons</h2>
        <p class="section-description">Chaque boisson est préparée avec des ingrédients frais et de qualité pour une expérience gustative exceptionnelle.</p>
      </div>

      <div class="menu-tabs">
        <div class="menu-tab active" data-tab="toutes">Toutes</div>
        <div class="menu-tab" data-tab="jus">Jus Frais</div>
        <div class="menu-tab" data-tab="cafe">Cafés</div>
        <div class="menu-tab" data-tab="cocktails">Cocktails</div>
      </div>

      <div class="menu-content active" id="toutes-content">
        <div class="menu-category">
          <h3>Nos Créations</h3>
          <div class="boissons-grid">
            <div class="boisson-card jus">
              <img src="{{ asset('images/oma1.jpg') }}" alt="Jus Frais de Fruits" class="boisson-image" loading="lazy">
              <div class="boisson-info">
                <div class="boisson-header">
                  <h3 class="boisson-title">Jus Frais de Fruits</h3>
                  <span class="boisson-tag">Fraîcheur</span>
                </div>
                <p class="boisson-description">Mélange vitaminé de fruits de saison pressés à froid, sans ajout de sucre.</p>
                <div class="boisson-footer">
                  <span class="boisson-price">12.000 DT</span>
                  <button class="add-to-cart">Ajouter</button>
                </div>
              </div>
            </div>

            <div class="boisson-card cafe">
              <img src="{{ asset('images/oma2.jpg') }}" alt="Café Glacé Signature" class="boisson-image" loading="lazy">
              <div class="boisson-info">
                <div class="boisson-header">
                  <h3 class="boisson-title">Café Glacé Signature</h3>
                  <span class="boisson-tag">Spécialité</span>
                </div>
                <p class="boisson-description">Notre café arabica du Brésil infusé à froid pendant 12 heures.</p>
                <div class="boisson-footer">
                  <span class="boisson-price">15.000 DT</span>
                  <button class="add-to-cart">Ajouter</button>
                </div>
              </div>
            </div>

            <div class="boisson-card cafe">
              <img src="{{ asset('images/oma3.jpg') }}" alt="Café Gourmand Nutella" class="boisson-image" loading="lazy">
              <div class="boisson-info">
                <div class="boisson-header">
                  <h3 class="boisson-title">Café Gourmand Nutella</h3>
                  <span class="boisson-tag">Gourmand</span>
                </div>
                <p class="boisson-description">Expresso intense mélangé à du Nutella authentique et du lait crémeux.</p>
                <div class="boisson-footer">
                  <span class="boisson-price">10.000 DT</span>
                  <button class="add-to-cart">Ajouter</button>
                </div>
              </div>
            </div>

            <div class="boisson-card cocktails">
              <img src="{{ asset('images/th.jpeg') }}" alt="Mojito Fraise-Basilic" class="boisson-image" loading="lazy">
              <div class="boisson-info">
                <div class="boisson-header">
                  <h3 class="boisson-title">Mojito Fraise-Basilic</h3>
                  <span class="boisson-tag">Rafraîchissant</span>
                </div>
                <p class="boisson-description">Variation rafraîchissante avec des fraises fraîches et du basilic.</p>
                <div class="boisson-footer">
                  <span class="boisson-price">13.000 DT</span>
                  <button class="add-to-cart">Ajouter</button>
                </div>
              </div>
            </div>

            <div class="boisson-card jus">
              <img src="{{ asset('images/oma6.jpg') }}" alt="Yaourt Glacé aux Fruits Rouges" class="boisson-image" loading="lazy">
              <div class="boisson-info">
                <div class="boisson-header">
                  <h3 class="boisson-title">Yaourt Glacé aux Fruits Rouges</h3>
                  <span class="boisson-tag">Onctueux</span>
                </div>
                <p class="boisson-description">Yaourt grec onctueux avec un coulis de fruits rouges maison.</p>
                <div class="boisson-footer">
                  <span class="boisson-price">8.000 DT</span>
                  <button class="add-to-cart">Ajouter</button>
                </div>
              </div>
            </div>

            <div class="boisson-card cocktails">
              <img src="{{ asset('images/oma7.jpg') }}" alt="Lait de Poule Épicé" class="boisson-image" loading="lazy">
              <div class="boisson-info">
                <div class="boisson-header">
                  <h3 class="boisson-title">Lait de Poule Épicé</h3>
                  <span class="boisson-tag">Réconfortant</span>
                </div>
                <p class="boisson-description">Boisson réconfortante à base de lait bio, jaunes d'œufs et miel.</p>
                <div class="boisson-footer">
                  <span class="boisson-price">14.000 DT</span>
                  <button class="add-to-cart">Ajouter</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="menu-content" id="jus-content">
        <div class="menu-category">
          <h3>Jus Frais & Smoothies</h3>
          <div class="boissons-grid">
            <div class="boisson-card jus">
              <img src="{{ asset('images/oma1.jpg') }}" alt="Jus Frais de Fruits" class="boisson-image" loading="lazy">
              <div class="boisson-info">
                <div class="boisson-header">
                  <h3 class="boisson-title">Jus Frais de Fruits</h3>
                  <span class="boisson-tag">Fraîcheur</span>
                </div>
                <p class="boisson-description">Mélange vitaminé de fruits de saison pressés à froid, sans ajout de sucre.</p>
                <div class="boisson-footer">
                  <span class="boisson-price">12.000 DT</span>
                  <button class="add-to-cart">Ajouter</button>
                </div>
              </div>
            </div>

            <div class="boisson-card jus">
              <img src="{{ asset('images/oma6.jpg') }}" alt="Yaourt Glacé aux Fruits Rouges" class="boisson-image" loading="lazy">
              <div class="boisson-info">
                <div class="boisson-header">
                  <h3 class="boisson-title">Yaourt Glacé aux Fruits Rouges</h3>
                  <span class="boisson-tag">Onctueux</span>
                </div>
                <p class="boisson-description">Yaourt grec onctueux avec un coulis de fruits rouges maison.</p>
                <div class="boisson-footer">
                  <span class="boisson-price">8.000 DT</span>
                  <button class="add-to-cart">Ajouter</button>
                </div>
              </div>
            </div>

            <div class="boisson-card jus">
              <img src="{{ asset('images/oma10.jpg') }}" alt="Jus Frais Pêche-Fraise" class="boisson-image" loading="lazy">
              <div class="boisson-info">
                <div class="boisson-header">
                  <h3 class="boisson-title">Jus Frais Pêche-Fraise</h3>
                  <span class="boisson-tag">Fruité</span>
                </div>
                <p class="boisson-description">Mélange équilibré de pêches mûres et de fraises juteuses.</p>
                <div class="boisson-footer">
                  <span class="boisson-price">12.000 DT</span>
                  <button class="add-to-cart">Ajouter</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

     <div class="menu-content" id="cafe-content">
  <div class="menu-category">
    <h3>Cafés Spéciaux</h3>
    <div class="boissons-grid">

      <div class="boisson-card cafe">
        <img src="{{ asset('images/oma2.jpg') }}" alt="Café Glacé Signature" class="boisson-image" loading="lazy">
        <div class="boisson-info">
          <div class="boisson-header">
            <h3 class="boisson-title">Café Glacé Signature</h3>
            <span class="boisson-tag">Spécialité</span>
          </div>
          <p class="boisson-description">Notre café arabica du Brésil infusé à froid pendant 12 heures.</p>
          <div class="boisson-footer">
            <span class="boisson-price">15.000 DT</span>
            <button class="add-to-cart">Ajouter</button>
          </div>
        </div>
      </div>

      <div class="boisson-card cafe">
        <img src="{{ asset('images/oma3.jpg') }}" alt="Café Gourmand Nutella" class="boisson-image" loading="lazy">
        <div class="boisson-info">
          <div class="boisson-header">
            <h3 class="boisson-title">Café Gourmand Nutella</h3>
            <span class="boisson-tag">Gourmand</span>
          </div>
          <p class="boisson-description">Expresso intense mélangé à du Nutella authentique et du lait crémeux.</p>
          <div class="boisson-footer">
            <span class="boisson-price">10.000 DT</span>
            <button class="add-to-cart">Ajouter</button>
          </div>
        </div>
      </div>

      <div class="boisson-card cafe">
        <img src="{{ asset('images/oma4.jpg') }}" alt="Café Noisette Caramélisé" class="boisson-image" loading="lazy">
        <div class="boisson-info">
          <div class="boisson-header">
            <h3 class="boisson-title">Café Noisette Caramélisé</h3>
            <span class="boisson-tag">Délicat</span>
          </div>
          <p class="boisson-description">Double expresso avec sirop de noisette torréfiée et une pointe de caramel.</p>
          <div class="boisson-footer">
            <span class="boisson-price">9.000 DT</span>
            <button class="add-to-cart">Ajouter</button>
          </div>
        </div>
      </div>

      <div class="boisson-card cafe">
        <img src="{{ asset('images/oma8.jpg') }}" alt="Mocha Grand Cru" class="boisson-image" loading="lazy">
        <div class="boisson-info">
          <div class="boisson-header">
            <h3 class="boisson-title">Mocha Grand Cru</h3>
            <span class="boisson-tag">Raffiné</span>
          </div>
          <p class="boisson-description">Harmonie parfaite entre espresso et chocolat noir Valrhona.</p>
          <div class="boisson-footer">
            <span class="boisson-price">11.000 DT</span>
            <button class="add-to-cart">Ajouter</button>
          </div>
        </div>
      </div>

      <div class="boisson-card cafe">
        <img src="{{ asset('images/oma9.jpg') }}" alt="Café Crémeux Lotus" class="boisson-image" loading="lazy">
        <div class="boisson-info">
          <div class="boisson-header">
            <h3 class="boisson-title">Café Crémeux Lotus</h3>
            <span class="boisson-tag">Gourmand</span>
          </div>
          <p class="boisson-description">Expresso onctueux mélangé à la pâte à tartiner Lotus.</p>
          <div class="boisson-footer">
            <span class="boisson-price">10.000 DT</span>
            <button class="add-to-cart">Ajouter</button>
          </div>
        </div>
      </div>

      <div class="boisson-card cafe">
        <img src="{{ asset('images/oma11.jpg') }}" alt="Café Pistache Torréfiée" class="boisson-image" loading="lazy">
        <div class="boisson-info">
          <div class="boisson-header">
            <h3 class="boisson-title">Café Pistache Torréfiée</h3>
            <span class="boisson-tag">Original</span>
          </div>
          <p class="boisson-description">Expresso avec sirop de pistache torréfiée et crème fouettée.</p>
          <div class="boisson-footer">
            <span class="boisson-price">12.000 DT</span>
            <button class="add-to-cart">Ajouter</button>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

      <div class="menu-content" id="cocktails-content">
        <div class="menu-category">
          <h3>Cocktails Rafraîchissants</h3>
          <div class="boissons-grid">
            <div class="boisson-card cocktails">
              <img src="{{ asset('images/th.jpeg') }}" alt="Mojito Fraise-Basilic" class="boisson-image" loading="lazy">
              <div class="boisson-info">
                <div class="boisson-header">
                  <h3 class="boisson-title">Mojito Fraise-Basilic</h3>
                  <span class="boisson-tag">Rafraîchissant</span>
                </div>
                <p class="boisson-description">Variation rafraîchissante avec des fraises fraîches et du basilic.</p>
                <div class="boisson-footer">
                  <span class="boisson-price">13.000 DT</span>
                  <button class="add-to-cart">Ajouter</button>
                </div>
              </div>
            </div>

            <div class="boisson-card cocktails">
              <img src="{{ asset('images/oma7.jpg') }}" alt="Lait de Poule Épicé" class="boisson-image" loading="lazy">
              <div class="boisson-info">
                <div class="boisson-header">
                  <h3 class="boisson-title">Lait de Poule Épicé</h3>
                  <span class="boisson-tag">Réconfortant</span>
                </div>
                <p class="boisson-description">Boisson réconfortante à base de lait bio, jaunes d'œufs et miel.</p>
                <div class="boisson-footer">
                  <span class="boisson-price">14.000 DT</span>
                  <button class="add-to-cart">Ajouter</button>
                </div>
              </div>
            </div>

            <div class="boisson-card cocktails">
              <img src="{{ asset('images/oma12.jpg') }}" alt="Spritz Tropical" class="boisson-image" loading="lazy">
              <div class="boisson-info">
                <div class="boisson-header">
                  <h3 class="boisson-title">Spritz Tropical</h3>
                  <span class="boisson-tag">Fruité</span>
                </div>
                <p class="boisson-description">Mélange exotique de jus de fruits tropicaux et d'eau pétillante.</p>
                <div class="boisson-footer">
                  <span class="boisson-price">11.000 DT</span>
                  <button class="add-to-cart">Ajouter</button>
                </div>
              </div>
            </div>

            <div class="boisson-card cocktails">
              <img src="{{ asset('images/virgin-mojito.jpeg') }}" alt="Virgin Mojito" class="boisson-image" loading="lazy">
              <div class="boisson-info">
                <div class="boisson-header">
                  <h3 class="boisson-title">Virgin Mojito</h3>
                  <span class="boisson-tag">Classique</span>
                </div>
                <p class="boisson-description">Version sans alcool du classique mojito à la menthe fraîche.</p>
                <div class="boisson-footer">
                  <span class="boisson-price">10.000 DT</span>
                  <button class="add-to-cart">Ajouter</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="combos" class="combo-section">
      <div class="combo-container">
        <h2 class="combo-title">Nos Offres Spéciales</h2>
        <p class="combo-description">Profitez de nos combos exclusifs pour une expérience gustative complète à prix avantageux.</p>
        <a href="#contact" class="cta-button secondary-button">Réserver maintenant</a>
        
        <div class="combo-grid">
          <div class="combo-card">
            <h4>Combo Petit-Déjeuner</h4>
            <p>Café + Jus frais + Viennoiserie</p>
            <div class="combo-price">25.000 DT</div>
            <button class="add-to-cart">Choisir</button>
          </div>
          
          <div class="combo-card">
            <h4>Combo Détente</h4>
            <p>2 Boissons au choix + 1 Pâtisserie</p>
            <div class="combo-price">30.000 DT</div>
            <button class="add-to-cart">Choisir</button>
          </div>
          
          <div class="combo-card">
            <h4>Combo Découverte</h4>
            <p>3 Mini-boissons de notre sélection</p>
            <div class="combo-price">22.000 DT</div>
            <button class="add-to-cart">Choisir</button>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="section-header">
        <h2>Contactez-nous</h2>
        <p class="section-description">Nous sommes à votre disposition pour toute question ou réservation.</p>
      </div>
      
      <div class="contact-container" style="max-width: 800px; margin: 0 auto;">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
          <div>
            <h3 style="margin-bottom: 20px; color: var(--primary);">Nos Coordonnées</h3>
            <p style="margin-bottom: 15px;"><i class="fas fa-map-marker-alt" style="margin-right: 10px; color: var(--secondary);"></i> 123 Avenue Habib Bourguiba, Tunis</p>
            <p style="margin-bottom: 15px;"><i class="fas fa-phone" style="margin-right: 10px; color: var(--secondary);"></i> +216 12 345 678</p>
            <p style="margin-bottom: 15px;"><i class="fas fa-envelope" style="margin-right: 10px; color: var(--secondary);"></i> contact@omaboissons.com</p>
            
            <div class="social-icons" style="justify-content: flex-start; margin-top: 30px;">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-tiktok"></i></a>
            </div>
          </div>
          
          <div>
            <h3 style="margin-bottom: 20px; color: var(--primary);">Horaires d'Ouverture</h3>
            <p style="margin-bottom: 10px;"><strong>Lundi - Vendredi:</strong> 8h - 20h</p>
            <p style="margin-bottom: 10px;"><strong>Samedi:</strong> 9h - 22h</p>
            <p style="margin-bottom: 10px;"><strong>Dimanche:</strong> 10h - 18h</p>
            
            <div style="margin-top: 30px;">
              <a href="/reservez" class="cta-button" style="display: inline-block; width: 100%; text-align: center;">Réserver une table</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <div class="footer-container">
      <div class="footer-column">
        <h3>OMA Boissons</h3>
        <p>Artisans des saveurs depuis 2015, nous créons des boissons uniques avec des ingrédients frais et locaux.</p>
      </div>
      
      <div class="footer-column">
        <h3>Liens Utiles</h3>
        <a href="#accueil">Accueil</a>
        <a href="#menu">Notre Carte</a>
        <a href="#combos">Offres Spéciales</a>
        <a href="#contact">Contact</a>
      </div>
      
      <div class="footer-column">
                <h3>Contact</h3>
                <p><i class="fas fa-map-marker-alt"></i> 123 Avenue Habib Bourguiba, Tunis</p>
                <p><i class="fas fa-phone"></i> +216 70 123 456</p>
                <p><i class="fas fa-envelope"></i> contact@OMA.tn</p>
                <p><i class="fas fa-clock"></i> Ouvert 7j/7</p>
      </div>
    </div>
    
    <div class="copyright">
      <p>&copy; 2023 OMA Boissons Artisanales. Tous droits réservés.</p>
    </div>
  </footer>

  <button class="theme-toggle" id="themeToggle">
    <i class="fas fa-moon"></i>
  </button>
  
  <button class="back-to-top" id="backToTop">
    <i class="fas fa-arrow-up"></i>
  </button>

  <script>
    const menuTabs = document.querySelectorAll('.menu-tab');
    const menuContents = document.querySelectorAll('.menu-content');
    
    menuTabs.forEach(tab => {
      tab.addEventListener('click', () => {
        menuTabs.forEach(t => t.classList.remove('active'));
        menuContents.forEach(c => c.classList.remove('active'));
        
        tab.classList.add('active');
        
        const tabId = tab.getAttribute('data-tab');
        document.getElementById(`${tabId}-content`).classList.add('active');
      });
    });
    
    const themeToggle = document.getElementById('themeToggle');
    const body = document.body;
    const icon = themeToggle.querySelector('i');
    
    themeToggle.addEventListener('click', () => {
      body.classList.toggle('dark-mode');
      
      if (body.classList.contains('dark-mode')) {
        icon.classList.replace('fa-moon', 'fa-sun');
      } else {
        icon.classList.replace('fa-sun', 'fa-moon');
      }
    });
    
    const backToTop = document.getElementById('backToTop');
    
    window.addEventListener('scroll', () => {
      if (window.pageYOffset > 300) {
        backToTop.classList.add('visible');
      } else {
        backToTop.classList.remove('visible');
      }
    });
    
    backToTop.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
    
    const boissonCards = document.querySelectorAll('.boisson-card');
    
    const animateOnScroll = () => {
      boissonCards.forEach((card, index) => {
        const cardPosition = card.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.3;
        
        if (cardPosition < screenPosition) {
          card.style.animationDelay = `${index * 0.1}s`;
          card.style.animation = 'fadeInUp 0.5s forwards';
        }
      });
    };
    
    window.addEventListener('scroll', animateOnScroll);
    window.addEventListener('load', animateOnScroll);
  </script>
</body>
</html>