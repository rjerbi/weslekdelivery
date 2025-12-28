<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sushi House - Restaurant japonais authentique proposant des sushis frais, des makis et des spécialités japonaises">
    <title>Sushi House</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logologo.png') }}">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" as="style">
    <link rel="preload" href="https://images.unsplash.com/photo-1579871494447-9811cf80d66c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" as="image" media="(min-width: 768px)">
    
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
      --nav-bg: rgba(55, 55, 55, 0.95);
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
    }

    html {
      scroll-behavior: smooth;
      font-size: 16px;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: var(--background);
      color: var(--text-color);
      line-height: 1.6;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    img {
      max-width: 100%;
      height: auto;
      display: block;
    } 
    

    h1, h2, h3, h4 {
      font-weight: 700;
      line-height: 1.2;
      margin-bottom: 0.75em;
    }

    h1 { font-size: 2.5rem; }
    h2 { font-size: 2rem; }
    h3 { font-size: 1.5rem; }
    h4 { font-size: 1.25rem; }

    p {
      margin-bottom: 1em;
    }

    a {
      color: inherit;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1.5rem;
    }

    .section {
      padding: 5rem 0;
    }

    .section-title {
      text-align: center;
      margin-bottom: 3rem;
    }

    .section-title h2 {
      color: var(--primary);
      position: relative;
      display: inline-block;
    }

    .section-title h2::after {
      content: '';
      position: absolute;
      width: 50%;
      height: 4px;
      background-color: var(--secondary);
      bottom: -12px;
      left: 25%;
    }

    .section-title p {
      color: var(--gray);
      max-width: 700px;
      margin: 0 auto;
    }

    .btn {
      display: inline-block;
      background: linear-gradient(135deg, var(--button-bg), var(--button-hover));
      color: white;
      padding: 0.75rem 1.75rem;
      border-radius: 2rem;
      font-weight: 600;
      text-align: center;
      cursor: pointer;
      border: none;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(230, 126, 34, 0.3);
    }

    .btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 20px rgba(211, 84, 0, 0.4);
    }

    .btn-outline {
      background: transparent;
      border: 2px solid white;
      color: white;
      box-shadow: none;
    }

    .btn-outline:hover {
      background: white;
      color: var(--primary);
    }

    .btn-group {
      display: flex;
      gap: 1rem;
      justify-content: center;
      flex-wrap: wrap;
    }

    nav {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background-color: var(--nav-bg);
      padding: 0.75rem 0;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      transition: background-color 0.3s ease;
    }

    .nav-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo {
      height: 30px;
      display: flex;
      align-items: center;
    }

    .logo img {
      height: 100%;
      transition: all 0.3s ease;
    }
    

    .nav-links {
      display: flex;
      list-style: none;
      gap: 2rem;
    }

    .nav-links a {
      color: var(--nav-text);
      font-weight: 500;
      position: relative;
      padding: 0.5rem 0;
    }

    .nav-links a::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: var(--primary);
      transition: width 0.3s ease;
    }

    .nav-links a:hover::after {
      width: 100%;
    }

    .nav-links a:hover {
      color: var(--primary);
    }

    .mobile-menu-btn {
      display: none;
      background: none;
      border: none;
      color: var(--light);
      font-size: 1.5rem;
      cursor: pointer;
    }

    .hero {
      height: 100vh;
      min-height: 600px;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                  url('https://images.unsplash.com/photo-1579871494447-9811cf80d66c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
      padding: 0 1.5rem;
      margin-top: -4.5rem;
      padding-top: 4.5rem;
    }

    .hero-content {
      max-width: 800px;
    }

    .hero h1 {
      font-size: clamp(2rem, 5vw, 3.5rem);
      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    }

    .hero p {
      font-size: clamp(1rem, 2vw, 1.2rem);
      margin-bottom: 2rem;
      text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
    }

    .quick-access {
      background-color: var(--primary);
      padding: 1rem 0;
      margin: 1.5rem auto;
      border-radius: var(--radius);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .quick-access ul {
      display: flex;
      justify-content: center;
      list-style: none;
      gap: 1.5rem;
      flex-wrap: wrap;
      margin: 0;
      padding: 0;
    }

    .quick-access ul li a {
      color: white;
      font-weight: 500;
      padding: 0.5rem 1rem;
      border-radius: 2rem;
      transition: all 0.3s ease;
    }

    .quick-access ul li a:hover {
      background-color: rgba(255, 255, 255, 0.2);
      transform: translateY(-2px);
    }

    .menu-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 2rem;
    }

    .menu-item {
      background-color: var(--card-bg);
      border-radius: var(--radius);
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    body.dark-mode .menu-item {
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    .menu-item:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .menu-item-img {
      height: 200px;
      width: 100%;
      object-fit: cover;
      border-bottom: 3px solid var(--primary);
    }

    .menu-item-content {
      padding: 1.5rem;
    }

    .menu-item-title {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 0.75rem;
    }

    .menu-item h3 {
      color: var(--primary);
      font-weight: 600;
    }

    .menu-item-price {
      color: var(--primary);
      font-weight: 700;
      font-size: 1.2rem;
    }

    .menu-item p {
      color: var(--gray);
      margin-bottom: 1rem;
    }

    .menu-item-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-top: 1px dashed var(--gray);
      padding-top: 1rem;
    }

    .menu-item-rating {
      color: var(--secondary);
    }

    .add-to-cart {
      background: var(--primary);
      color: white;
      border: none;
      padding: 0.5rem 1.25rem;
      border-radius: 2rem;
      cursor: pointer;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .add-to-cart:hover {
      background: var(--primary-light);
      transform: scale(1.05);
    }

    .special-offers {
      background-color: var(--light-gray);
    }

    .offer-card {
      background-color: var(--primary);
      color: white;
      border-radius: var(--radius);
      padding: 3rem;
      text-align: center;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
      position: relative;
      overflow: hidden;
    }

    .offer-card::before {
      content: '';
      position: absolute;
      top: -50px;
      right: -50px;
      width: 200px;
      height: 200px;
      background-color: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
    }

    .offer-card h3 {
      position: relative;
      z-index: 1;
    }

    .offer-card p {
      margin-bottom: 2rem;
      position: relative;
      z-index: 1;
    }

    .about {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 3rem;
      align-items: center;
    }

    .about-img {
      border-radius: var(--radius);
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .about-content h2 {
      color: var(--primary);
    }

    .about-content p {
      color: var(--gray);
    }

    /* Section Contact & Livraison comme dans El Behi */
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

    .gallery-item-content {
      padding: 20px;
      text-align: left;
    }

    .gallery-item h3 {
      font-size: 1.4rem;
      margin-bottom: 12px;
      color: var(--primary);
    }

    .item-description {
      font-size: 0.95rem;
      color: var(--gray);
      margin-bottom: 15px;
      line-height: 1.6;
    }

    .section-description {
      margin: 20px auto 50px;
      max-width: 700px;
      font-size: clamp(1rem, 1.5vw, 1.2rem);
      color: var(--gray);
      line-height: 1.8;
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

      .gallery-item {
        width: 100%;
        max-width: 300px;
      }
    }

    @media (max-width: 480px) {
      header h1 {
        font-size: 2.2rem;
      }
    }
    </style>
</head>

<body>
   <nav>
    <div class="container nav-container">
        <a href="#" class="logo">
            <img src="c:\Users\ranas\Downloads\logologo.png" alt="sushihouse" style="height: 100px;">
        </a>
        
        <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Toggle menu">
            <i class="fas fa-bars"></i>
        </button>
        
        <ul class="nav-links" id="navLinks">
            <li><a href="/"><i class="fas fa-home"></i> Accueil</a></li>
            <li><a href="#menu"><i class="fas fa-utensils"></i> Menu</a></li>
            <li><a href="#special"><i class="fas fa-star"></i> Spécialités</a></li>
            <li><a href="#about"><i class="fas fa-info-circle"></i> À propos</a></li>
            <li><a href="#contact"><i class="fas fa-phone"></i> Contact</a></li>
        </ul>
    </div>
    </nav>
    
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Découvrez l'art du sushi authentique</h1>
            <p>Des produits frais, une préparation traditionnelle et un service exceptionnel à Tunis</p>
            <div class="btn-group">
                <a href="#menu" class="btn">Voir le menu</a>
                <a href="#contact" class="btn btn-outline">Réserver un plat</a>
            </div>
        </div>
    </section>

    <div class="container quick-access">
        <ul>
            <li><a href="#menu"><i class="fas fa-book-open"></i> Je découvre le menu</a></li>
            <li><a href="#special"><i class="fas fa-crown"></i> Je choisis une spécialité</a></li>
            <li><a href="#contact"><i class="fas fa-mobile-alt"></i> Je commande en ligne</a></li>
        </ul>
    </div>

    <section class="section" id="menu">
        <div class="container">
            <div class="section-title">
                <h2>Notre Menu</h2>
                <p>Découvrez notre sélection de sushis, makis et spécialités japonaises préparés avec des ingrédients frais et de qualité</p>
            </div>
            
            <div class="menu-grid">
                <div class="menu-item">
                    <img src="https://images.unsplash.com/photo-1579584425555-c3ce17fd4351?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Assortiment Sushi" class="menu-item-img" loading="lazy">
                    <div class="menu-item-content">
                        <div class="menu-item-title">
                            <h3>Assortiment Sushi</h3>
                            <span class="menu-item-price">28.000 DT</span>
                        </div>
                        <p>10 pièces de sushi variés (saumon, thon, crevette, poulpe) avec wasabi et gingembre</p>
                        <div class="menu-item-footer">
                            <span class="menu-item-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>
                
                <div class="menu-item">
                    <img src="https://images.unsplash.com/photo-1553621042-f6e147245754?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Makis Saumon" class="menu-item-img" loading="lazy">
                    <div class="menu-item-content">
                        <div class="menu-item-title">
                            <h3>Makis Saumon</h3>
                            <span class="menu-item-price">22.000 DT</span>
                        </div>
                        <p>8 pièces de makis au saumon frais avec riz vinaigré et algue nori</p>
                        <div class="menu-item-footer">
                            <span class="menu-item-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>
                
                <div class="menu-item">
                    <img src="https://images.unsplash.com/photo-1563612116625-3012372fccce?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Sashimi Mix" class="menu-item-img" loading="lazy">
                    <div class="menu-item-content">
                        <div class="menu-item-title">
                            <h3>Sashimi Mix</h3>
                            <span class="menu-item-price">32.000 DT</span>
                        </div>
                        <p>12 tranches de poisson cru frais (saumon, thon, dorade) avec wasabi et sauce soja</p>
                        <div class="menu-item-footer">
                            <span class="menu-item-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>
                
                <div class="menu-item">
                    <img src="{{ asset('images/cl.jpeg') }}" alt="California Roll" class="menu-item-img" loading="lazy">
                    <div class="menu-item-content">
                        <div class="menu-item-title">
                            <h3>California Roll</h3>
                            <span class="menu-item-price">24.000 DT</span>
                        </div>
                        <p>8 pièces de makis inversés avec surimi, avocat, concombre et graines de sésame</p>
                        <div class="menu-item-footer">
                            <span class="menu-item-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>
                
                <div class="menu-item">
                    <img src="https://images.unsplash.com/photo-1563245372-f21724e3856d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Tempura Crevettes" class="menu-item-img" loading="lazy">
                    <div class="menu-item-content">
                        <div class="menu-item-title">
                            <h3>Tempura Crevettes</h3>
                            <span class="menu-item-price">26.000 DT</span>
                        </div>
                        <p>6 crevettes panées à la japonaise avec sauce tentsuyu et légumes tempura</p>
                        <div class="menu-item-footer">
                            <span class="menu-item-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>
                
                <div class="menu-item">
                    <img src="https://images.unsplash.com/photo-1551504734-5ee1c4a1479b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Bento Box" class="menu-item-img" loading="lazy">
                    <div class="menu-item-content">
                        <div class="menu-item-title">
                            <h3>Bento Box</h3>
                            <span class="menu-item-price">30.000 DT</span>
                        </div>
                        <p>Assortiment de sushis, tempura, salade et riz dans une boîte traditionnelle japonaise</p>
                        <div class="menu-item-footer">
                            <span class="menu-item-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section special-offers" id="special">
        <div class="container">
            <div class="offer-card">
                <h3>Offre Spéciale du Jour</h3>
                <p>Profitez de notre menu découverte à 45.000 DT au lieu de 60.000 DT (sushi, maki, sashimi et dessert)</p>
                <a href="/reservez" class="btn">Réserver maintenant</a>
            </div>
        </div>
    </section>

    <section class="section" id="about">
        <div class="container">
            <div class="about">
                <div class="about-content">
                    <h2>Notre Histoire</h2>
                    <p>Fondé en 2010 par le chef japonais Takashi Yamamoto, Sushi House apporte à Tunis l'authenticité de la cuisine japonaise avec une touche créative moderne.</p>
                    <p>Notre philosophie repose sur trois principes fondamentaux : fraîcheur des ingrédients, respect des techniques traditionnelles et innovation culinaire.</p>
                    <p>Tous nos poissons sont livrés quotidiennement et sélectionnés avec soin pour garantir une qualité optimale. Notre riz est importé directement du Japon et préparé selon la méthode traditionnelle.</p>
                    <a href="#contact" class="btn">En savoir plus</a>
                </div>
                
                <div class="about-img">
                    <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Chef préparant des sushis" loading="lazy">
                </div>
            </div>
        </div>
    </section>


    <section class="section" id="contact">
        <div class="container">
        <div class="section-title">
            <h2>Contact & Livraison</h2>
            <p class="section-description">Pour commander ou pour toute question, n'hésitez pas à nous contacter.</p>
        </div>
        
        <div class="gallery-content">
            <div class="gallery-item">
                <div class="gallery-item-content">
                    <h3>Horaires d'ouverture</h3>
                    <p class="item-description">
                        Lundi - Dimanche: 11h00 - 23h00<br>
                        Service continu
                    </p>
                </div>
            </div>
            
            <div class="gallery-item">
                <div class="gallery-item-content">
                    <h3>Nous trouver</h3>
                    <p class="item-description">
                        Avenue Habib Bourguiba, Tunis<br>
                        En face du Théâtre Municipal
                    </p>
                </div>
            </div>
            
            <div class="gallery-item">
                <div class="gallery-item-content">
                    <h3>Contact</h3>
                    <p class="item-description">
                        Téléphone: +216 70 123 456<br>
                        Email: contact@sushihouse.tn
                    </p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3>Sushi House</h3>
                <p>Depuis 2010, Sushi House vous propose une expérience culinaire authentique à travers les saveurs du Japon.</p>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            
            <div class="footer-column">
                <h3>Navigation</h3>
                <a href="#home">Accueil</a>
                <a href="#menu">Menu</a>
                <a href="#special">Spécialités</a>
                <a href="#about">À propos</a>
                <a href="#contact">Contact</a>
            </div>
            
            <div class="footer-column">
                <h3>Contact</h3>
                <p><i class="fas fa-map-marker-alt"></i> Avenue Habib Bourguiba, Tunis</p>
                <p><i class="fas fa-phone"></i> +216 70 123 456</p>
                <p><i class="fas fa-envelope"></i> contact@sushihouse.tn</p>
                <p><i class="fas fa-clock"></i> Ouvert tous les jours</p>
            </div>
        </div>
        
        <div class="copyright">
            <p>&copy; 2023 Sushi House | Tous droits réservés</p>
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
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const navLinks = document.getElementById('navLinks');
            
            mobileMenuBtn.addEventListener('click', () => {
                navLinks.classList.toggle('active');
                mobileMenuBtn.setAttribute('aria-expanded', navLinks.classList.contains('active'));
                mobileMenuBtn.innerHTML = navLinks.classList.contains('active') 
                    ? '<i class="fas fa-times"></i>' 
                    : '<i class="fas fa-bars"></i>';
            });
            
            document.querySelectorAll('.nav-links a').forEach(link => {
                link.addEventListener('click', () => {
                    navLinks.classList.remove('active');
                    mobileMenuBtn.setAttribute('aria-expanded', 'false');
                    mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
                });
            });
            
            const themeToggle = document.getElementById('themeToggle');
            const body = document.body;
            
            const currentTheme = localStorage.getItem('theme') || 
                                (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
            
            if (currentTheme === 'dark') {
                body.classList.add('dark-mode');
                themeToggle.innerHTML = '<i class="fas fa-sun"></i>';
                themeToggle.setAttribute('aria-label', 'Toggle light mode');
            }
            
            themeToggle.addEventListener('click', () => {
                body.classList.toggle('dark-mode');
                
                const theme = body.classList.contains('dark-mode') ? 'dark' : 'light';
                localStorage.setItem('theme', theme);
                
                if (body.classList.contains('dark-mode')) {
                    themeToggle.innerHTML = '<i class="fas fa-sun"></i>';
                    themeToggle.setAttribute('aria-label', 'Toggle light mode');
                } else {
                    themeToggle.innerHTML = '<i class="fas fa-moon"></i>';
                    themeToggle.setAttribute('aria-label', 'Toggle dark mode');
                }
            });
            
            const backToTopBtn = document.getElementById('backToTop');
            
            window.addEventListener('scroll', () => {
                if (window.pageYOffset > 300) {
                    backToTopBtn.classList.add('visible');
                } else {
                    backToTopBtn.classList.remove('visible');
                }
            });
            
            backToTopBtn.addEventListener('click', (e) => {
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
            
            document.querySelectorAll('.add-to-cart').forEach(button => {
                button.addEventListener('click', function() {
                    const menuItem = this.closest('.menu-item');
                    const itemName = menuItem.querySelector('h3').textContent;
                    const itemPrice = menuItem.querySelector('.menu-item-price').textContent;
                    
                    this.textContent = 'Ajouté !';
                    this.style.backgroundColor = '#27ae60';
                    
                    setTimeout(() => {
                        this.textContent = 'Ajouter';
                        this.style.backgroundColor = '';
                    }, 2000);
                    
                    console.log(`Added to cart: ${itemName} - ${itemPrice}`);
                });
            });
            
            if ('loading' in HTMLImageElement.prototype) {
                const lazyImages = document.querySelectorAll('img[loading="lazy"]');
                lazyImages.forEach(img => {
                    img.src = img.dataset.src || img.src;
                });
            } else {
                const lazyLoad = function() {
                    const lazyImages = document.querySelectorAll('img[loading="lazy"]');
                    
                    lazyImages.forEach(img => {
                        if (img.getBoundingClientRect().top < window.innerHeight + 100 && 
                            img.getBoundingClientRect().bottom > -100) {
                            img.src = img.dataset.src || img.src;
                            img.removeAttribute('loading');
                        }
                    });
                };
                
                document.addEventListener('scroll', lazyLoad);
                window.addEventListener('resize', lazyLoad);
                window.addEventListener('orientationchange', lazyLoad);
                lazyLoad(); 
            }
        });
    </script>
</body>
</html>