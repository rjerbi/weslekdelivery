<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Altaglio - Restaurant italien authentique à Tunis. Découvrez nos spécialités: pizzas, pâtes, risotto et desserts italiens.">
    <title>Altaglio</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logologo.png') }}">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" as="style">
    <link rel="preload" href="https://images.unsplash.com/photo-1516100882582-96c3a05fe590?auto=format&fit=crop&w=1600&q=80" as="image">
    
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    
    <style>
    :root {
      --primary: #ff8000;
      --light: #ffe5b4;
      --dark: #333;
      --gray: #777;
      --radius: 8px;
      
      --background: #f8f8f8;
      --text-color: #000;
      --header-bg: #ffe5b4;
      --card-bg: #fff;
      --footer-bg: #333;
      --tunisian-red: #fb6a09;
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
                  url('https://images.unsplash.com/photo-1516100882582-96c3a05fe590?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
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
        box-shadow: 0 4px 15px rgba(255, 179, 71, 0.3);
        border: none;
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    .cta-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(255, 149, 0, 0.4);
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

    .section-description {
        margin: 20px auto 50px;
        max-width: 700px;
        font-size: clamp(1rem, 1.5vw, 1.2rem);
        color: var(--gray);
        line-height: 1.8;
    }

    .menu-items,
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

    .gallery-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 12px rgba(0,0,0,0.15);
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

    .item-description {
      font-size: 0.95rem;
      color: var(--gray);
      margin-bottom: 15px;
      line-height: 1.6;
    }

    .dish-footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-top: 1px dashed var(--gray);
      padding-top: 15px;
      margin-top: 15px;
    }

    .dish-price {
      font-weight: bold;
      color: var(--primary);
      font-size: 1.2rem;
    }

    .add-to-cart {
      background: var(--primary);
      color: white;
      border: none;
      padding: 8px 20px;
      border-radius: 20px;
      cursor: pointer;
      transition: all 0.3s ease;
      font-size: 0.9rem;
      font-weight: 500;
    }

    .add-to-cart:hover {
      background: var(--button-hover);
      transform: scale(1.05);
    }

    .menu-item-entering {
      opacity: 0;
      transform: translateY(30px);
      animation: fadeInUp 0.5s forwards;
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
      background: var(--tunisian-blue);
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
      background: var(--tunisian-blue);
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
            <li><a href="/" target="_blank"><i class="fas fa-home"></i> Accueil</a></li>
            <li><a href="#antipasti"><i class="fas fa-cheese"></i> Antipasti</a></li>
            <li><a href="#pizzas"><i class="fas fa-pizza-slice"></i> Pizzas</a></li>
           <li><a href="#pates"><i class="fas fa-pasta"></i> Pâtes</a></li> 
           <li><a href="#risotto"><i class="fas fa-bowl-rice"></i> Risotto</a></li>
           <li><a href="#desserts"><i class="fas fa-ice-cream"></i> Desserts</a></li>
            <li><a href="#contact"><i class="fas fa-phone"></i>Contact</a></li>
        </ul>
    </nav>

    <header id="accueil">
        <div class="logo">
            <img src="{{ asset('images/alt.png') }}" alt="Logo Altaglio" loading="lazy">
        </div>
        <h1>Altaglio - Spécialité Italienne</h1>
        <p>Découvrez l'authenticité de la cuisine italienne, un voyage culinaire aux saveurs méditerranéennes.</p>
        <a href="#contact" class="cta-button">Réserver votre plat</a>
    </header>

    <main>
        <section id="antipasti">
            <h2>Antipasti - Entrées Italiennes</h2>
            <p class="section-description">Commencez votre expérience culinaire avec nos délicieuses entrées traditionnelles italiennes, préparées avec des ingrédients frais et de saison.</p>

            <div class="gallery-content">
                <div class="gallery-item menu-item-entering">
                    <img src="{{ asset('images/a.jpeg') }}" alt="Bruschetta Classica" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Bruschetta Classica</h3>
                        <p class="item-description">Pain grillé à l'ail, tomates fraîches du marché, basilic frais et huile d'olive extra vierge de Toscane.</p>
                        <div class="dish-footer">
                            <span class="dish-price">12.000 DT</span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>

                <div class="gallery-item menu-item-entering">
                    <img src="{{ asset('images/b.jpeg') }}" alt="Carpaccio di Manzo" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Carpaccio di Manzo</h3>
                        <p class="item-description">Tranches fines de bœuf cru de première qualité, parmesan Reggiano vieilli 24 mois, roquette fraîche et huile truffée.</p>
                        <div class="dish-footer">
                            <span class="dish-price">25.000 DT</span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>

                <div class="gallery-item menu-item-entering">
                    <img src="{{ asset('images/c2.jpeg') }}" alt="Mozzarella di Bufala" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Mozzarella di Bufala</h3>
                        <p class="item-description">Véritable mozzarella de bufflonne Campana DOP, accompagnée de tomates San Marzano et de basilic frais.</p>
                        <div class="dish-footer">
                            <span class="dish-price">18.000 DT</span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>

                <div class="gallery-item menu-item-entering">
                    <img src="{{ asset('images/d.jpeg') }}" alt="Fritto Misto" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Fritto Misto</h3>
                        <p class="item-description">Beignets légers de calamars frais, crevettes sauvages et légumes de saison, servis avec notre sauce aïoli maison.</p>
                        <div class="dish-footer">
                            <span class="dish-price">22.000 DT</span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="pizzas">
            <h2>Pizzas Artisanales</h2>
            <p class="section-description">Nos pizzas cuites au feu de bois dans un four traditionnel napolitain, avec une pâte fermentée 48 heures et des ingrédients d'exception.</p>

            <div class="gallery-content">
                <div class="gallery-item menu-item-entering">
                    <img src="{{ asset('images/e.jpeg') }}"  alt="Pizza Margherita" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Margherita</h3>
                        <p class="item-description">Sauce tomate San Marzano, mozzarella di bufala fraîche, basilic frais et huile d'olive extra vierge.</p>
                        <div class="dish-footer">
                            <span class="dish-price">18.000 DT</span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>

                <div class="gallery-item menu-item-entering">
                    <img src="{{ asset('images/f2.jpeg') }}" alt="Pizza Prosciutto" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Prosciutto e Funghi</h3>
                        <p class="item-description">Mozzarella fior di latte, jambon de Parme DOP 24 mois, champignons de Paris et roquette fraîche.</p>
                        <div class="dish-footer">
                            <span class="dish-price">22.000 DT</span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>

                <div class="gallery-item menu-item-entering">
                    <img src="{{ asset('images/g.jpeg') }}" alt="Pizza Quattro Formaggi" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Quattro Formaggi</h3>
                        <p class="item-description">Harmonie de mozzarella, gorgonzola dolce, parmesan Reggiano et pecorino Romano.</p>
                        <div class="dish-footer">
                            <span class="dish-price">24.000 DT</span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>

                <div class="gallery-item menu-item-entering">
                    <img src="{{ asset('images/h.jpeg') }}" alt="Pizza Diavola" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Diavola</h3>
                        <p class="item-description">Sauce tomate piquante, mozzarella, salami napoli fumé et piments calabrais.</p>
                        <div class="dish-footer">
                            <span class="dish-price">22.000 DT</span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>

                <div class="gallery-item menu-item-entering">
                    <img src="{{ asset('images/j.jpeg') }}" alt="Pizza Vegetariana" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Vegetariana</h3>
                        <p class="item-description">Aubergines grillées, courgettes, poivrons marinés, mozzarella et pesto de basilic.</p>
                        <div class="dish-footer">
                            <span class="dish-price">20.000 DT</span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>

                <div class="gallery-item menu-item-entering">
                    <img src="{{ asset('images/k.jpeg') }}" alt="Pizza Calzone" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Calzone</h3>
                        <p class="item-description">Pizza repliée avec jambom de Parme, champignons, ricotta fraîche et sauce tomate.</p>
                        <div class="dish-footer">
                            <span class="dish-price">23.000 DT</span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="pates">
            <h2>Pâtes Fraîches</h2>
            <p class="section-description">Nos pâtes fraîches préparées quotidiennement selon les méthodes traditionnelles, accompagnées de sauces faites maison.</p>

            <div class="gallery-content">
                <div class="gallery-item menu-item-entering">
                    <img src="{{ asset('images/l.jpeg') }}" alt="Spaghetti Carbonara" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Spaghetti Carbonara</h3>
                        <p class="item-description">Œufs bio, guanciale (joues de porc), pecorino romano vieilli et poivre noir de Kampot.</p>
                        <div class="dish-footer">
                            <span class="dish-price">20.000 DT</span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>

                <div class="gallery-item menu-item-entering">
                    <img src="{{ asset('images/m.jpeg') }}" alt="Penne Arrabiata" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Penne Arrabiata</h3>
                        <p class="item-description">Sauce tomate pimentée à l'ail confit, persil plat frais et piments calabrais.</p>
                        <div class="dish-footer">
                            <span class="dish-price">18.000 DT</span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>

                <div class="gallery-item menu-item-entering">
                    <img src="{{ asset('images/w.jpeg') }}" alt="Lasagnes Bolognaise" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Lasagne alla Bolognese</h3>
                        <p class="item-description">Couches de pâtes fraîches, sauce bolognaise maison et béchamel crémeuse.</p>
                        <div class="dish-footer">
                            <span class="dish-price">25.000 DT</span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>

                <div class="gallery-item menu-item-entering">
                    <img src="{{ asset('images/x.jpeg') }}" alt="Fettuccine Alfredo" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Fettuccine Alfredo</h3>
                        <p class="item-description">Pâtes fraîches aux œufs, crème fraîche de Normandie, beurre demi-sel et parmesan Reggiano.</p>
                        <div class="dish-footer">
                            <span class="dish-price">22.000 DT</span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>

                <div class="gallery-item menu-item-entering">
                    <img src="{{ asset('images/v.jpeg') }}" alt="Gnocchi à la Romaine" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Gnocchi alla Romana</h3>
                        <p class="item-description">Gnocchi maison à la semoule de blé dur, sauce tomate fraîche et mozzarella di bufala.</p>
                        <div class="dish-footer">
                            <span class="dish-price">23.000 DT</span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>

                <div class="gallery-item menu-item-entering">
                    <img src="{{ asset('images/n.jpeg') }}" alt="Ravioli aux Truffes" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Ravioli al Tartufo</h3>
                        <p class="item-description">Ravioli farcis aux champignons sauvages et ricotta, nappés de sauce à la truffe noire du Piémont.</p>
                        <div class="dish-footer">
                            <span class="dish-price">28.000 DT</span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="risotto">
            <h2>Risotto Crémeux</h2>
            <p class="section-description">Nos risottos préparés avec du riz Arborio premium, cuisinés lentement au bouillon maison pour une texture onctueuse.</p>

            <div class="gallery-content">
                <div class="gallery-item menu-item-entering">
                    <img src="{{ asset('images/q.jpeg') }}" alt="Risotto aux Champignons" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Risotto ai Funghi</h3>
                        <p class="item-description">Riz Arborio, mélange de champignons sauvages (cèpes, girolles), parmesan et vin blanc Chardonnay.</p>
                        <div class="dish-footer">
                            <span class="dish-price">24.000 DT</span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>

                <div class="gallery-item menu-item-entering">
                    <img src="{{ asset('images/s.jpeg') }}" alt="Risotto aux Fruits de Mer" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Risotto ai Frutti di Mare</h3>
                        <p class="item-description">Riz Arborio, fruits de mer frais (moules, palourdes, calamars) et sauce tomate légère au safran.</p>
                        <div class="dish-footer">
                            <span class="dish-price">28.000 DT</span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>

                <div class="gallery-item menu-item-entering">
                    <img src="{{ asset('images/u.jpeg') }}" alt="Risotto au Safran" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Risotto alla Milanese</h3>
                        <p class="item-description">Riz Arborio, safran de l'Aquila, moelle de bœuf et parmesan Reggiano, selon la recette traditionnelle milanaise.</p>
                        <div class="dish-footer">
                            <span class="dish-price">26.000 DT</span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="desserts">
            <h2>Dolci - Desserts Italiens</h2>
            <p class="section-description">Terminez votre repas en douceur avec nos desserts traditionnels italiens, préparés quotidiennement par notre pâtissier.</p>

            <div class="gallery-content">
                <div class="gallery-item menu-item-entering">
                    <img src="{{ asset('images/ti.jpeg') }}" alt="Tiramisu" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Tiramisu Classico</h3>
                        <p class="item-description">Biscuits Savoiardi imbibés de café Arabica, crème mascarpone maison et cacao pur Van Houten.</p>
                        <div class="dish-footer">
                            <span class="dish-price">15.000 DT</span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>

                <div class="gallery-item menu-item-entering">
                    <img src="{{ asset('images/pa.jpeg') }}" alt="Panna Cotta" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Panna Cotta</h3>
                        <p class="item-description">Crème dessert vanillée à la gousse de Madagascar, coulis de fruits rouges maison et amandes effilées.</p>
                        <div class="dish-footer">
                            <span class="dish-price">14.000 DT</span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>

                <div class="gallery-item menu-item-entering">
                    <img src="{{ asset('images/ca.jpeg') }}" alt="Cannoli Siciliani" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Cannoli Siciliani</h3>
                        <p class="item-description">Tubes croustillants fourrés à la ricotta sucrée parfumée à l'eau de fleur d'oranger et pépites de chocolat.</p>
                        <div class="dish-footer">
                            <span class="dish-price">16.000 DT</span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>

                <div class="gallery-item menu-item-entering">
                    <img src="{{ asset('images/gel.jpeg') }}" alt="Gelato Artigianale" loading="lazy">
                    <div class="gallery-item-content">
                        <h3>Gelato Artigianale</h3>
                        <p class="item-description">Glace artisanale aux saveurs du jour : pistache de Bronte, vanille Bourbon, chocolat Guanaja ou fruits de saison.</p>
                        <div class="dish-footer">
                            <span class="dish-price">10.000 DT</span>
                            <button class="add-to-cart">Ajouter</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <h2>Contact & Réservations</h2>
            <p class="section-description">Pour réserver une table ou pour toute question, n'hésitez pas à nous contacter.</p>
            
            <div class="gallery-content">
                <div class="gallery-item menu-item-entering">
                    <div class="gallery-item-content">
                        <h3>Horaires d'ouverture</h3>
                        <p class="item-description">
                            Lundi - Vendredi: 11h30 - 14h30 / 18h30 - 23h<br>
                            Samedi - Dimanche: 12h - 23h
                        </p>
                    </div>
                </div>
                
                <div class="gallery-item menu-item-entering">
                    <div class="gallery-item-content">
                        <h3>Nous trouver</h3>
                        <p class="item-description">
                            Rue d'Italie, 1002 Tunis<br>
                            En face du Théâtre Municipal
                        </p>
                    </div>
                </div>
                
                <div class="gallery-item menu-item-entering">
                    <div class="gallery-item-content">
                        <h3>Contact</h3>
                        <p class="item-description">
                            Téléphone: +216 12 345 678<br>
                            Email: contact@altaglio.tn
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3>Altaglio</h3>
                <p>Depuis 2010, Altaglio vous propose une expérience culinaire authentique à travers les saveurs de l'Italie.</p>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="TripAdvisor"><i class="fab fa-tripadvisor"></i></a>
                </div>
            </div>
            
            <div class="footer-column">
                <h3>Navigation</h3>
                <a href="#accueil">Accueil</a>
                <a href="#antipasti">Antipasti</a>
                <a href="#pizzas">Pizzas</a>
                <a href="#pates">Pâtes</a>
                <a href="#risotto">Risotto</a>
                <a href="#desserts">Desserts</a>
            </div>
            
            <div class="footer-column">
                <h3>Contact</h3>
                <p><i class="fas fa-map-marker-alt"></i> Rue d'Italie, 1002 Tunis</p>
                <p><i class="fas fa-phone"></i> +216 12 345 678</p>
                <p><i class="fas fa-envelope"></i> contact@altaglio.tn</p>
                <p><i class="fas fa-clock"></i> Ouvert tous les jours</p>
            </div>
        </div>
        
        <div class="copyright">
            <p>&copy; 2025 Altaglio - Spécialité Italienne | Tous droits réservés</p>
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

            const menuItems = document.querySelectorAll('.menu-item-entering');
            menuItems.forEach((item, index) => {
                item.style.animationDelay = `${index * 0.1}s`;
            });

            const addToCartButtons = document.querySelectorAll('.add-to-cart');
            addToCartButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const dishCard = this.closest('.gallery-item');
                    const dishName = dishCard.querySelector('h3').textContent;
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