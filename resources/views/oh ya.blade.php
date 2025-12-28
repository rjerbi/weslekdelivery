<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Delicious Food - Restaurant gastronomique proposant une cuisine raffinée et des desserts artisanaux. Découvrez nos plats signature et notre carte des desserts.">
    <title>oh ya</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logologo.png') }}">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" as="style">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" as="style">
    
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    
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
                  url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
      min-height: 60vh;
      text-align: center;
      color: white;
    }

    header .logo img {
      height: 150px;
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
    }

    .section-description {
        margin: 20px auto 50px;
        max-width: 700px;
        font-size: clamp(1rem, 1.5vw, 1.2rem);
        color: var(--gray);
        line-height: 1.8;
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
      padding: 10px;
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

    .gallery-item img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 10px 10px 0 0;
      transition: transform 0.5s ease;
    }

    .gallery-item:hover img {
      transform: scale(1.05);
    }

    .gallery-item-content {
      padding: 15px;
      text-align: left;
    }

    .gallery-item h3 {
      font-size: 1.2rem;
      margin-bottom: 10px;
      color: var(--primary);
    }

    .item-description {
      font-size: 0.9rem;
      color: var(--gray);
      margin-bottom: 15px;
      line-height: 1.6;
    }

    .price {
      font-weight: bold;
      color: var(--primary);
      font-size: 1.1rem;
      text-align: center;
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
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: var(--tunisian-blue);
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
      z-index: 999;
      font-size: 1.2rem;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s, visibility 0.3s, transform 0.3s;
      text-decoration: none;
    }

    body.dark-mode .back-to-top {
      background: var(--tunisian-blue-dark);
    }

    .back-to-top.visible {
      opacity: 1;
      visibility: visible;
    }

    .back-to-top:hover {
      transform: translateY(-5px);
      background: var(--tunisian-blue-dark);
      box-shadow: 0 6px 12px rgba(0,0,0,0.3);
    }

    @media (max-width: 768px) {
      nav ul {
        flex-direction: column;
        align-items: center;
        gap: 15px;
      }
      
      header {
        padding: 30px 20px;
      }
      
      .theme-toggle, .back-to-top {
        width: 50px;
        height: 50px;
        font-size: 1.2rem;
      }
      
      .back-to-top {
        bottom: 90px;
      }
    }

    @media (max-width: 576px) {
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
            <li><a href="/"><i class="fas fa-home"></i>Accueil</a></li>
            <li><a href="/nos-livreurs" target="_blank"><i class="fas fa-user"></i>Livreurs</a></li>
            <li><a href="/el-chikh" target="_blank"><i class="fas fa-star"></i>Combos</a></li>
            <li><a href="/el-behi" target="_blank"><i class="fas fa-utensils"></i>Menu</a></li>
            <li><a href="/sellem" target="_blank"><i class="fas fa-birthday-cake"></i>Pâtisseries</a></li>
            <li><a href="/oma" target="_blank"><i class="fas fa-mug-hot"></i>Boissons</a></li>
            <li><a href="/resto" target="_blank"><i class="fas fa-store"></i>Nos Restos</a></li>
            <li><a href="/reservez" target="_blank"><i class="fas fa-ice-cream"></i>Commandes</a></li>
            <li><a href="/roue-de-chance" target="_blank"><i class="fas fa-circle"></i>Roue</a></li>
            <li><a href="#contact"><i class="fas fa-phone"></i>Contact</a></li>
        </ul>
    </nav>

    <header id="accueil">
        <div class="logo">
            <img src="{{ asset('images/ohya.png') }}" alt="Logo Delicious Food">
        </div>
        <h1>Delicious Food</h1>
        <p>Une expérience gastronomique exceptionnelle dans un cadre raffiné</p>
        <a href="#galerie-salee" class="cta-button">Découvrir notre carte</a>
    </header>

    <section class="gallery" id="galerie-salee">
        <h2>Notre Carte Salée</h2>
        <p class="section-description">Découvrez nos plats signature préparés avec des produits frais et de saison par notre chef étoilé.</p>

        <div class="gallery-content">
            <div class="gallery-item">
                <img src="{{ asset('images/sald.jpg') }}" alt="Plat gastronomique" loading="lazy">
                <div class="gallery-item-content">
                    <h3>Plat Signature du Chef</h3>
                    <p class="item-description">Une composition harmonieuse de produits frais du marché, sauce réduite au vin rouge et garniture de légumes de saison.</p>
                    <p class="price">60.000 TND</p>
                    <button class="add-to-cart">Ajouter</button>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/olm.jpeg') }}" alt="Sushi" loading="lazy">
                <div class="gallery-item-content">
                    <h3>Assortiment de Sushi Premium</h3>
                    <p class="item-description">Sélection de poissons frais du jour (saumon, thon, daurade), accompagnés de wasabi fraîchement râpé et gingembre mariné.</p>
                    <p class="price">70.000 TND</p>
                    <button class="add-to-cart">Ajouter</button>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/sdc.jpeg') }}" alt="Pâtes sauce pesto" loading="lazy">
                <div class="gallery-item-content">
                    <h3>Pâtes Sauce Pesto</h3>
                    <p class="item-description">Pâtes artisanales al dente, pesto maison au basilic frais, pignons de pin torréfiés et parmesan Reggiano vieilli 24 mois.</p>
                    <p class="price">45.000 TND</p>
                    <button class="add-to-cart">Ajouter</button>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/dfghj.jpeg') }}" alt="Viande à point" loading="lazy">
                <div class="gallery-item-content">
                    <h3>Filet de Bœuf Charolais</h3>
                    <p class="item-description">Viande maturée 28 jours, cuite à la perfection selon votre préférence, servie avec sa sauce au poivre et gratin dauphinois.</p>
                    <p class="price">85.000 TND</p>
                    <button class="add-to-cart">Ajouter</button>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/rolls.jpeg') }}" alt="Gratin" loading="lazy">
                <div class="gallery-item-content">
                    <h3>Gratin Dauphinois Traditionnel</h3>
                    <p class="item-description">Pommes de terre émincées finement, crème fraîche de Normandie et noix de muscade, lentement gratinées au four.</p>
                    <p class="price">40.000 TND</p>
                    <button class="add-to-cart">Ajouter</button>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/salade oh ya.jpeg') }}" alt="Pasta" loading="lazy">
                <div class="gallery-item-content">
                    <h3>Pasta alla Carbonara</h3>
                    <p class="item-description">Spaghetti cuits al dente, pancetta croustillante, jaune d'œuf bio et pecorino romano pour une authenticité italienne.</p>
                    <p class="price">48.000 TND</p>
                    <button class="add-to-cart">Ajouter</button>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/burger2.jpeg') }}" alt="Burger" loading="lazy">
                <div class="gallery-item-content">
                    <h3>Burger Gourmet "Delicious"</h3>
                    <p class="item-description">Pain brioché maison, steak de bœuf Black Angus, cheddar affiné, oignons caramélisés et sauce secrète du chef.</p>
                    <p class="price">42.000 TND</p>
                    <button class="add-to-cart">Ajouter</button>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/pl.jpeg') }}" alt="Salade fraîche" loading="lazy">
                <div class="gallery-item-content">
                    <h3>Salade Méditerranéenne</h3>
                    <p class="item-description">Mélange de pâtes fraîches, thon de ligne, olives Kalamata, tomates cerises et vinaigrette citron-huile d'olive.</p>
                    <p class="price">28.000 TND</p>
                    <button class="add-to-cart">Ajouter</button>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/yhy.jpeg') }}" alt="Bœuf" loading="lazy">
                <div class="gallery-item-content">
                    <h3>Filet de Bœuf Wellington</h3>
                    <p class="item-description">Filet de bœuf en croûte feuilletée, duxelles de champignons sauvages et foie gras, sauce madère.</p>
                    <p class="price">90.000 TND</p>
                    <button class="add-to-cart">Ajouter</button>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/yh.jpeg') }}" alt="Risotto" loading="lazy">
                <div class="gallery-item-content">
                    <h3>Risotto aux Fruits de Mer</h3>
                    <p class="item-description">Riz Arborio crémeux, assortiment de fruits de mer frais (crevettes, moules, calamars) et safran d'Iran.</p>
                    <p class="price">65.000 TND</p>
                    <button class="add-to-cart">Ajouter</button>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/an.jpeg') }}" alt="Agneau" loading="lazy">
                <div class="gallery-item-content">
                    <h3>Côtelettes d'Agneau de Lait</h3>
                    <p class="item-description">Agneau allaité élevé en plein air, mariné aux herbes de Provence, servi avec sa sauce à la menthe fraîche.</p>
                    <p class="price">62.000 TND</p>
                    <button class="add-to-cart">Ajouter</button>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/sale.jpeg') }}" alt="Plat bourgogne" loading="lazy">
                <div class="gallery-item-content">
                    <h3>Bœuf Bourguignon Traditionnel</h3>
                    <p class="item-description">Bœuf mijoté lentement dans un vin rouge de Bourgogne, champignons de Paris et petits oignons grelots.</p>
                    <p class="price">48.000 TND</p>
                    <button class="add-to-cart">Ajouter</button>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery" id="galerie-sucree">
        <h2>Notre Carte Sucrée</h2>
        <p class="section-description">Découvrez nos desserts artisanaux préparés quotidiennement par notre pâtissier avec des ingrédients d'exception.</p>

        <div class="gallery-content">
            <div class="gallery-item">
                <img src="{{ asset('images/ouou.jpeg') }}" alt="Tiramisu" loading="lazy">
                <div class="gallery-item-content">
                    <h3>Tiramisu Classico</h3>
                    <p class="item-description">Biscuits cuillère imbibés d'espresso, crème mascarpone vanille de Madagascar et cacao pur Van Houten.</p>
                    <p class="price">35.000 TND</p>
                    <button class="add-to-cart">Ajouter</button>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/yuyuy.jpeg') }}" alt="Crème Brûlée" loading="lazy">
                <div class="gallery-item-content">
                    <h3>Crème Brûlée à la Vanille</h3>
                    <p class="item-description">Crème onctueuse infusée à la gousse de vanille Bourbon et sa fine couche de caramel croustillant.</p>
                    <p class="price">32.000 TND</p>
                    <button class="add-to-cart">Ajouter</button>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/yyyy.jpeg') }}" alt="Fondant au Chocolat" loading="lazy">
                <div class="gallery-item-content">
                    <h3>Fondant au Chocolat Guanaja</h3>
                    <p class="item-description">Cœur coulant de chocolat noir 70%, servi avec sa glace vanille maison et tuile aux amandes.</p>
                    <p class="price">38.000 TND</p>
                    <button class="add-to-cart">Ajouter</button>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/oh ya 6.jpeg') }}" alt="Tarte aux Fruits" loading="lazy">
                <div class="gallery-item-content">
                    <h3>Tarte aux Fruits de Saison</h3>
                    <p class="item-description">Pâte sablée maison garnie de crème pâtissière vanille et assortiment de fruits frais selon le marché.</p>
                    <p class="price">30.000 TND</p>
                    <button class="add-to-cart">Ajouter</button>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/oh yaaaaa.jpeg') }}" alt="Mousse au Chocolat" loading="lazy">
                <div class="gallery-item-content">
                    <h3>Mousse au Chocolat Grand Cru</h3>
                    <p class="item-description">Mousse aérienne au chocolat Valrhona, accompagnée de crème anglaise à la vanille.</p>
                    <p class="price">28.000 TND</p>
                    <button class="add-to-cart">Ajouter</button>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/ooh ya.jpeg') }}" alt="Macaron" loading="lazy">
                <div class="gallery-item-content">
                    <h3>Assortiment de Macarons</h3>
                    <p class="item-description">Sélection de 6 macarons aux saveurs variées : pistache de Bronte, framboise, caramel beurre salé, vanille, chocolat et café.</p>
                    <p class="price">42.000 TND</p>
                    <button class="add-to-cart">Ajouter</button>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/oh yaah.jpeg') }}" alt="Cheesecake" loading="lazy">
                <div class="gallery-item-content">
                    <h3>Cheesecake New-Yorkais</h3>
                    <p class="item-description">Base de biscuits spéculoos, garniture crémeuse au fromage frais et coulis de fruits rouges maison.</p>
                    <p class="price">36.000 TND</p>
                    <button class="add-to-cart">Ajouter</button>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/oh ya 3.jpeg') }}" alt="Mille-feuille" loading="lazy">
                <div class="gallery-item-content">
                    <h3>Mille-feuille à la Vanille</h3>
                    <p class="item-description">Feuilletage croustillant, crème pâtissière vanille de Madagascar et glaçage royal.</p>
                    <p class="price">34.000 TND</p>
                    <button class="add-to-cart">Ajouter</button>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/oh ya 2.jpeg') }}" alt="Profiteroles" loading="lazy">
                <div class="gallery-item-content">
                    <h3>Profiteroles au Chocolat</h3>
                    <p class="item-description">Choux craquelins garnis de glace vanille maison et nappés de sauce chocolat chaud.</p>
                    <p class="price">40.000 TND</p>
                    <button class="add-to-cart">Ajouter</button>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/oh ya1.jpeg') }}" alt="Crêpes" loading="lazy">
                <div class="gallery-item-content">
                    <h3>Crêpes Suzette</h3>
                    <p class="item-description">Crêpes légères flambées au Grand Marnier, sauce caramel à l'orange sanguine.</p>
                    <p class="price">45.000 TND</p>
                    <button class="add-to-cart">Ajouter</button>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/buble.jpeg') }}" alt="Soufflé" loading="lazy">
                <div class="gallery-item-content">
                    <h3>Soufflé au Grand Marnier</h3>
                    <p class="item-description">Soufflé aérien parfumé à l'orange et Grand Marnier, servi avec sa crème anglaise.</p>
                    <p class="price">48.000 TND</p>
                    <button class="add-to-cart">Ajouter</button>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('images/oh yaaa.jpeg') }}" alt="Panna Cotta" loading="lazy">
                <div class="gallery-item-content">
                    <h3>Panna Cotta aux Fruits Rouges</h3>
                    <p class="item-description">Crème italienne onctueuse à la vanille, coulis de fruits rouges maison et tuile aux amandes.</p>
                    <p class="price">32.000 TND</p>
                    <button class="add-to-cart">Ajouter</button>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2>Réservations & Contact</h2>
        <p class="section-description">Pour réserver une table ou pour toute demande particulière, n'hésitez pas à nous contacter.</p>
        
        <div class="gallery-content">
            <div class="gallery-item">
                <div class="gallery-item-content">
                    <h3>Horaires d'ouverture</h3>
                    <p class="item-description">
                        Lundi - Vendredi: 12h - 14h30 / 19h - 22h30<br>
                        Samedi - Dimanche: 12h - 23h
                    </p>
                </div>
            </div>
            
            <div class="gallery-item">
                <div class="gallery-item-content">
                    <h3>Notre adresse</h3>
                    <p class="item-description">
                        15 Avenue Habib Bourguiba<br>
                        1002 Tunis, Tunisie
                    </p>
                </div>
            </div>
            
            <div class="gallery-item">
                <div class="gallery-item-content">
                    <h3>Contact</h3>
                    <p class="item-description">
                        Téléphone: +216 70 123 456<br>
                        Email: contact@deliciousfood.tn
                    </p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="copyright">
            <p>&copy; 2025 Delicious Food | Tous droits réservés</p>
            <p>Restaurant gastronomique depuis 2015</p>
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

    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function() {
            const item = this.closest('.gallery-item');
            const itemName = item.querySelector('h3').textContent;
            const itemPrice = item.querySelector('.price').textContent;
            
            const originalText = this.textContent;
            const originalColor = this.style.backgroundColor;
            
            this.textContent = 'Ajouté !';
            this.style.backgroundColor = '#4CAF50';
            this.disabled = true;
            
            setTimeout(() => {
                this.textContent = originalText;
                this.style.backgroundColor = originalColor;
                this.disabled = false;
            }, 2000);
            
            console.log(`Added: ${itemName} - ${itemPrice}`);
            
          
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
});

    </script>
</body>
</html>